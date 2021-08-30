<?php

namespace App\Repositories;

use App\Models\RecoverPassword;
use App\Repositories\Interfaces\RecoverPasswordReporsitoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecoverPasswordRepository extends BaseRepository implements RecoverPasswordReporsitoryInterface
{
    private $with = [
        'createdUser:id,fullname', 'updatedUser:id,fullname', 'deletedUser:id,fullname'
    ];

    public function __construct(RecoverPassword $model)
    {
        parent::__construct($model);
    }

    public function generateUniqueToken() {
        $token = null;

        while(is_null($token)) {
            $token = (string) Str::uuid();
            $token = $this->model->where(['token' => $token])->count() > 0 ? null : $token;
        }

        return $token;
    }

    public function create(array $data) {
        $userRepositoy = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $data['token'] = $this->generateUniqueToken();
        $data['created_by'] = $userRepositoy->findByEmail($data['email'])->id;
        return parent::create($data);
    }

    public function makeTokenUsed($request) {
        $userRepositoy = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        return DB::transaction(function() use ($userRepositoy, $request) {
            $isRecoverPasswordUpdated = $this->model->where([
                'email' => $request['email'],
                'token' => $request['token']
            ])->update([
                'is_used' => true,
                'used_at' => now()
            ]);

            $user = $userRepositoy->findByEmail($request['email']);

            $isUserUpdated = $userRepositoy->update([
                'password' => $request['password']
            ], $user->id);

            return $isRecoverPasswordUpdated && $isUserUpdated;
        });
    }

    public function isValidToken($email, $token) {
        try {
            $recoverPassword = $this->model->where([
                'email' => $email,
                'token' => $token,
                'is_used' => false,
                ['token_last_validity', '>=', Carbon::now()]
            ])->firstOrFail();
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $recoverPassword;
    }

    public function getDetails($id, $with = false) {
        try {
            $recoverPassword = $with ? $this->model->with($this->with)->findOrFail($id)
            : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $recoverPassword;
    }
}
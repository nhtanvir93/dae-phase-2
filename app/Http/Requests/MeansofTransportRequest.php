<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class MeansofTransportRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $meansofTransportRepository = resolve('App\Repositories\Interfaces\MeansofTransportRepositoryInterface');
        $meansofTransport = $meansofTransportRepository->getDetails($this->route('means_of_transport'));

        $meansofTransportId = $meansofTransport ? $meansofTransport->id : 0;

        return [
            'name' => ['required', "unique:config_means_of_transports,name,$meansofTransportId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'description' => 'nullable|max:150'
        ];
    }
}

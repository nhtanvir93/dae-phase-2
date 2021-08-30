<?php

namespace App\Http\Controllers;

use App\Test;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Application;
use App\Models\ProductType;
use App\Http\Resources\ProductTypeResource;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetRequest;
use App\Services\ControllerandMethodService;
use Illuminate\Support\Facades\File as FileSystem;
use App\Jobs\SendSms;

class TestController extends Controller
{
    private $controllerandMethodService;

    public function __construct(ControllerandMethodService $controllerandMethodService)
    {
        $this->controllerandMethodService = $controllerandMethodService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserData()
    {
        $users = User::all();

        /*return response()->json([
            'data' => $users,
            'success' => true
        ], 200);*/
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getApplicationData() {
        $applications = Application::with(['applicationable'])->get();
        return response()->json($applications);
    }

    public function home() {
        return view('welcome');
    }

    public function getUnitData() {
//        $data = UnitResource::collection(Unit::with('parentUnit')->paginate(3));
        $data = ProductTypeResource::collection(ProductType::orderBy('name', 'ASC')
            ->paginate(
                config('app_constants.pagination.per_page_visible')
            ));

        return $data;
    }

    public function sendMail() {
        $status = Mail::to('nazmul.tanvir@synesisit.com')->send(new PasswordResetRequest());
        dd($status);
    }

    public function getControllers() {
        return $this->controllerandMethodService->getControllers();
    }

    public function getMethods($controller) {
        return $this->controllerandMethodService->getMethods($controller);
    }

    public function getAllMethods() {
        return $this->controllerandMethodService->getAllMethods();
    }

    public function getMissingMethods() {
        return $this->controllerandMethodService->getMissingMethods();
    }

    public function getRouteDetails() {
        $uri = request()->query('uri');
        $method = request()->query('method','GET');

        $uri = "api/$uri";
        $matchFound = false;

        echo '<b style="font-family: Consolas;">Given Uri ("api/" will be prefixed) : </b><small style="font-family: Consolas;">' . $uri . '</small><br/>';
        echo '<b style="font-family: Consolas;">Generated Url : </b><small style="font-family: Consolas;">' . url($uri) . '</small><br/><br/>';

        $routes = \Route::getRoutes()->getRoutes();

        foreach($routes as $route){
            $matchableUri = substr($route->uri, 0, strlen($uri));

            if($matchableUri == $uri && in_array($method, $route->methods)) {
                if(!$matchFound) {
                    echo '<b style="font-family: Consolas;color: forestgreen;">Following match\es found</b><br/><br/>';
                }

                $matchFound = true;

                $actionString = $route->getActionName();
                $tempArray = explode('@', $actionString);

                $action = isset($tempArray[1]) ? $tempArray[1] : 'N/A';
                $controller = explode('\\', $tempArray[0]);
                $controller = $controller[count($controller) - 1];

                echo '<b style="font-family: Consolas;">Allowed Method\s : </b><small style="font-family: Consolas;">' . implode(', ', $route->methods) . '</small><br/>';
                echo '<b style="font-family: Consolas;">Matchable Uri : </b><small style="font-family: Consolas;">' . $route->uri . '</small><br/>';
                //echo '<b style="font-family: Consolas;">Matchable Partial Uri : </b><small style="font-family: Consolas;">' . $matchableUri . '</small><br/>';
                echo '<b style="font-family: Consolas;">Controller : </b><small style="font-family: Consolas;">' . $controller . '</small><br/>';
                echo '<b style="font-family: Consolas;">Action : </b><small style="font-family: Consolas;">' . $action . '</small><br/><br/>';
            }
        }

        if(!$matchFound) {
            echo '<b style="font-family: Consolas;color: red;">No match found</b><br/>';
        }
    }

    public function sendIPN(Request $request) {
        $ipnDirectory = public_path() . '/payment/ekpay' ;
        $file = $ipnDirectory . '/ipn.txt';

        //FileSystem::isDirectory($ipnDirectory) or FileSystem::makeDirectory($ipnDirectory,0777, true, true);

        $fileHandler = fopen($file, 'a+');
        fwrite($fileHandler, "\n\nIPN Response Received (" . now() . ")\n\n");
        fwrite($fileHandler, json_encode($request->all(), JSON_PRETTY_PRINT));
        fclose($fileHandler);
    }

    public function viewIPNLog() {
        $file = public_path() . '/payment/ekpay/ipn.txt';

        if(!file_exists($file)) {
            dd("$file does not exist");
        }

        $fileHandler = fopen($file, 'r');

        $log = "";

        while(! feof($fileHandler)) {
            $log .= fgets($fileHandler);
        }
        fclose($fileHandler);

        dd($log);
    }

    public function clearIPNLog() {
        $ipnDirectory = public_path() . '/payment/ekpay' ;
        $file = $ipnDirectory . '/ipn.txt';

        FileSystem::isDirectory($ipnDirectory) or FileSystem::makeDirectory($ipnDirectory,0777, true, true);

        $fileHandler = fopen($file, 'w');
        fclose($fileHandler);

        dd("IPN log cleared successfully!!!");
    }

    public function testSendingSms($userId, $queue = null) {
        try {
            $queue ? SendSms::dispatch(
                $userId,
                'Testing Queue Jobs',
                "Sending testing sms : {queue -> $queue}",
                'APPROVED'
            )->onQueue($queue) : SendSms::dispatch(
                $userId,
                'Testing Queue Jobs',
                "Sending testing sms",
                'APPROVED'
            );

            return response()->json([
                'success' => true
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ]);
        }
    }

    public function queryExtraction(Request $request) {
        $queries = [];

        $duration = 0;
        $responseTime = 0;
        $bootingTime = 0;
        $applicationTime = 0;

        if($request->isMethod('post')) {
            $commonService = resolve('App\Services\CommonService');

            $badges = [
                'badge-primary',
                'badge-secondary',
                'badge-success',
                'badge-danger',
                'badge-warning',
                'badge-info',
                'badge-light',
                'badge-dark',
            ];

            $replaces = [
                'select', 'from', 'where', 'order by', 'desc', 'asc', 'group by', 'having', 'inner join', 'left join', 'left outer join',
                'right join', 'right outer join', 'join', 'limit', 'offset', 'and', 'or', 'insert into', 'update',  'sum', 'count',
                'max', 'min', 'avg', 'values', 'set'
            ];

            $json = json_decode($request->debugbar_json);

            if(isset($json)) {
                $responseTime = isset($json->_debugbar->time->duration) ?
                    $commonService->getElapsedTimeInDetails(round($json->_debugbar->time->duration,5)) : 0;
                $bootingTime = isset($json->_debugbar->time->measures[0]->duration) ?
                    $commonService->getElapsedTimeInDetails(round($json->_debugbar->time->measures[0]->duration,5)) : 0;
                $applicationTime = isset($json->_debugbar->time->measures[1]->duration) ?
                    $json->_debugbar->time->measures[1]->duration : 0;

                $statements = isset($json->_debugbar->queries->statements) ? $json->_debugbar->queries->statements : [];

                $badgeTemplate = '<span class="badge #CLASS#">#NAME#</span>';

                if(count($statements) > 0) {
                    foreach($statements as $statement) {
                        $query = $statement->sql;
                        $duration += $statement->duration;

                        foreach($replaces as $value) {
                            if(strpos($query, $value) !== false) {
                                $randomId = rand(0,7);

                                $badge = str_replace('#CLASS#', $badges[$randomId], $badgeTemplate);
                                $badge = str_replace('#NAME#', $value, $badge);

                                $query = preg_replace("#(?<![\w\d])$value(?![\w\d])#i", $badge, $query);
                            }
                        }

                        $queries[] = [
                            'sql' => $query,
                            'duration' => $statement->duration_str
                        ];
                    }

                    $applicationTime = $applicationTime > $duration ?
                        $commonService->getElapsedTimeInDetails(round($applicationTime - $duration,5)) : 'N/A';
                    $duration = $commonService->getElapsedTimeInDetails(round($duration,5));
                }
            }
        }

        return view('extract-query', compact('queries', 'duration', 'bootingTime', 'applicationTime', 'responseTime'));
    }
}

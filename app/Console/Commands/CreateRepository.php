<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File as FileSystem;

class CreateRepository extends Command
{
    private $interface;
    private $class;
    private $model;

    private $interfaceDirectory;
    private $repositoryDirectory;
    private $interfaceTemplatePath;
    private $repositoryTemplatePath;

    private $methods = [
        'lists',
        'paginatedLists',
        'getDetails'
    ];

    private $params = [
        'lists' => null,
        'paginatedLists' => null,
        'getDetails' => [
            'id' => [
                'type' => null,
                'default' => null
            ],
            'with' => [
                'type' => null,
                'default' => 'false'
            ],
        ]
    ];

    protected $signature = 'make:repository {repository : Name of the repository class} 
    {--model=ExampleModel : Name of the model in the repository} {--custom : Whether you need to define custom methods} 
    {--noMethod : Whether the repository interface has no method}';

    protected $description = 'Create repository related interface and class';

    public function __construct()
    {
        parent::__construct();
        $this->interfaceDirectory = app_path() . '\repositories\interfaces';
        $this->repositoryDirectory = app_path() . '\repositories';
        $this->interfaceTemplatePath = app_path() . '\Console\Templates\interface.txt';
        $this->repositoryTemplatePath = app_path() . '\Console\Templates\class.txt';
    }

    public function handle()
    {
        $this->class = $this->argument('repository');
        $this->interface = $this->class . 'Interface';
        $custom = $this->option('custom');

        $this->model = $this->option('model');

        if($this->option('noMethod')) {
            $this->methods = [];
        } elseif($custom) {
            $this->methods = $this->getCustomMethods();
        }

        $this->comment($this->getDetails());

        if($this->confirm('Do you want to continue ?')) {
            $interfaceCode = $this->getInterfaceCode();
            $repositoryCode = $this->getClassCode();

            FileSystem::isDirectory($this->interfaceDirectory) or FileSystem::makeDirectory($this->interfaceDirectory, 0777, true, true);
            FileSystem::isDirectory($this->repositoryDirectory) or FileSystem::makeDirectory($this->repositoryDirectory, 0777, true, true);

            $repositoryInterfaceFile = $this->interfaceDirectory . '\\' .  $this->interface . '.php';
            $repositoryClassFile = $this->repositoryDirectory . '\\' .  $this->class . '.php';

            $this->createFile($repositoryInterfaceFile, $interfaceCode);
            $this->createFile($repositoryClassFile, $repositoryCode);

            $this->info("$this->interface and $this->class file are created successfully");
        } else {
            $this->error('The details is incorrect and so you do not want to continue');
        }
    }

    private function createFile($file, $code) {
        $fileHandler = fopen($file, 'w');
        fwrite($fileHandler, $code);
        fclose($fileHandler);
    }

    private function nullMethodFilter($methods) {
        return array_filter($methods, function($method) {
            return !is_null($method);
        });
    }

    private function getCustomMethods() {
        $totalCustomMethods = $this->ask("How many new methods will be in $this->interface ?",0);
        $totalCustomMethods = $totalCustomMethods > 0 ? $totalCustomMethods : 0;

        $customMethods = [];
        $params = [];

        for($i = 1; $i <= $totalCustomMethods;  $i++) {
            $customMethods[] = $tempMethod = $this->ask("Name of the Method $i");

            if($this->confirm('Do have "' . $tempMethod . '" any parameter ?')) {

                $totalParams = $this->ask('How many parameters ?',0);

                if($totalParams > 0) {
                    for($j = 1; $j <= $totalParams;  $j++) {
                        $tempParam = $this->ask("Name of the Param $j");
                        $params[$tempMethod][$tempParam]['type'] = $this->ask("Param type (if you do not want to use type, skip)",null);
                        $params[$tempMethod][$tempParam]['default'] = $this->ask("Param default value (if you do not want to use type, skip)",null);
                    }
                } else {
                    $params[$tempMethod] = null;
                }

            } else {
                $params[$tempMethod] = null;
            }
        }

        $this->params = $params;

        return $this->nullMethodFilter($customMethods);
    }

    private function getDetails() {
        $details  = " RepositoryInterface : $this->interface\n" ;
        $details .= " Repository : $this->class\n" ;
        $details .= " Model : $this->model\n" ;

        if(count($this->methods) == 0) {
            $details .= " Method : No method is selected\n" ;
        } else {
            $details .= " Methods : \n" ;
            for($i = 1; $i <= count($this->methods); $i++) {
                $details .= "\t$i. " . $this->methods[$i-1] ."\n" ;
            }
        }

        return $details;
    }

    private function getInterfaceCode() {
        $code = $this->readFile($this->interfaceTemplatePath);

        $methodCode = $this->getMethodCode();

        $code = str_replace('#METHOD#', $methodCode, $code);
        $code = str_replace('#INTERFACE#', $this->interface, $code);

        return $code;
    }

    private function getMethodCode($isClassMethod = false) {
        $code = '';

        foreach($this->methods as $key => $method) {
            $tab = "    ";

            $classMethod =
"{$tab}public function #NAME#(#PARAMS#)
{$tab}{
    
{$tab}}";
            $interfaceMethod =
"{$tab}function #NAME#(#PARAMS#);";

            $paramCode = '';

            if(is_array($this->params[$method])) {
                foreach($this->params[$method] as $key => $param) {
                    $paramCode .= $param['type'] ? $param['type'] .  " $$key" : "$$key";

                    if($param['default']) {
                        $paramCode .= " = " . $param['default'];
                    }

                    if($key != array_key_last($this->params[$method])) {
                        $paramCode .= ", ";
                    }
                }
            }

            if($isClassMethod) {
                $tempClassMethod = str_replace('#PARAMS#', $paramCode, $classMethod);
                $tempClassMethod = str_replace('#NAME#', $method, $tempClassMethod);

                $code .= $tempClassMethod . "\n\n";
            } else{
                $tempInterfaceMethod = str_replace('#PARAMS#', $paramCode, $interfaceMethod);
                $tempInterfaceMethod = str_replace('#NAME#', $method, $tempInterfaceMethod);

                $code .= $tempInterfaceMethod . "\n\n";
            }

        }

        return $code;
    }

    private function getClassCode() {
        $code = $this->readFile($this->repositoryTemplatePath);

        $methodCode = $this->getMethodCode(true);

        $code = str_replace('#METHOD#', $methodCode, $code);
        $code = preg_replace('/#INTERFACE#/', $this->interface, $code);
        $code = preg_replace('/#MODEL#/', $this->model, $code);
        $code = preg_replace('/#REPOSITORY#/', $this->class, $code);

        return $code;
    }

    private function readFile($filepath) {
        $fileHandler = fopen($filepath, 'r');
        $code = '';
        while(!feof($fileHandler)) {
            $code .= fgets($fileHandler);
        }

        return $code;
    }
}

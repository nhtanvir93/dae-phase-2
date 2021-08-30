<?php

namespace App\Services;

use Illuminate\Support\Facades\Route;

class ControllerandMethodService extends LabelService
{
    private $namespace = 'App\Http\Controllers\API\V1';

    private $excludeMethods = [
        '__construct',
        'isEditable'
    ];

    private $excludeControllers = [
        'AuthController',
        'ProfileController',
        'ResetPasswordController',
        'ControllerList',
        'MethodList'
    ];

    public function getControllers() {
        $controllers = [];

        foreach(Route::getRoutes()->getRoutes() as $route) {
            $routeAction = $route->getAction();

            if(isset($routeAction['namespace'])
                && $routeAction['namespace'] == $this->namespace) {
                $controller = explode('@',$routeAction['controller'])[0];
                $controllerChunks = explode('\\',$controller);
                $controller = end($controllerChunks);

                if(array_search($controller, $controllers) === false
                    && array_search($controller, $this->excludeControllers) === false) {
                    $controllers[] = $controller;
                }
            }
        }

        sort($controllers);

        return $controllers;
    }

    public function getMethods($controller) {
        $labelService = resolve('App\Services\LabelService');

        if($this->isControllerValid($controller) === false) {
            return false;
        }

        $controllerwithNamespace = '\\' . $this->namespace.'\\'.$controller;
        $controllerClass = new \ReflectionClass($controllerwithNamespace);
        $controllerMethods = $controllerClass->getMethods(\ReflectionMethod::IS_PUBLIC);

        $entity = $this->getNameFromEntity(str_replace('Controller','', $controller));

        $methods = [];
        foreach($controllerMethods as $controllerMethod) {
            if('\\' . $controllerMethod->class === $controllerwithNamespace
               && array_search($controllerMethod->name, $this->excludeMethods) === false) {
                $label = isset($labelService->labels[$controllerMethod->name]) ?
                    $labelService->labels[$controllerMethod->name] : 'N/A';
                $methods[] = [
                    'method' => $controllerMethod->name,
                    'label' => str_replace('#ENTITY#', $entity, $label)
                ];
            }
        }

        usort($methods, function ($a, $b) { return strnatcmp($a['label'], $b['label']); });

        return $methods;
    }

    public function getAllMethods() {
        $allMethods = [];
        $controllers = $this->getControllers();

        foreach($controllers as $controller) {
            $methods = $this->getMethods($controller);
            foreach($methods as $method) {
                if(array_search($method, $allMethods) === false) {
                    $allMethods[] = $method;
                }
            }
        }

        return $allMethods;
    }

    public function getNameFromEntity($entity) {
        $entityChunks = preg_split('/(?=[A-Z])/',$entity);
        return trim(ucwords(implode(' ', $entityChunks)));
    }

    public function isControllerValid($controller) {
        $controllers = $this->getControllers();
        return array_search($controller, $controllers);
    }

    public function isMethodValid($controller, $method) {
        if($this->isControllerValid($controller) === false) {
            return false;
        }

        $methods = $this->getMethods($controller);
        $methods = array_column($methods, 'method');

        return array_search($method, $methods);
    }

    public function getMissingMethods() {
        $labelService = resolve('App\Services\LabelService');

        $allMethods = $this->getAllMethods();
        $missingMethods = [];

        foreach($allMethods as $method) {
            if(!array_key_exists($method['method'], $labelService->labels)) {
                $missingMethods[] = $method;
            }
        }

        return $missingMethods;
    }
}
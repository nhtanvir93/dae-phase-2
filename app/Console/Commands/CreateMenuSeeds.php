<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FileSystem;

class CreateMenuSeeds extends Command
{
    protected $signature = 'make:menu-seeds';

    protected $description = 'Create seeds for menus table';

    private $menuSeedFile;
    private $seedDirectory;

    private $queryTemplate =
"DB::table('menus')->insert([
    'id' => #ID#,
    'name' => '#NAME#',
    'short_name' => '#SHORT_NAME#',
    'uri' => '#URI#',
    'position' => #POSITION#,
    'parent_id' => #PARENT_ID#,
    'controller' => '#CONTROLLER#',
    'method' => '#METHOD#',
    'is_visible' => #IS_VISIBLE#,
    'description' => '#DESCRIPTION#',
    'created_by' => 1,
    'created_at' => '#CREATED_AT#',
    'updated_by' => #UPDATED_BY#,
    'updated_at' => '#UPDATED_AT#',
    'deleted_by' => #DELETED_BY#,
    'deleted_at' => '#DELETED_AT#'
]);";

    public function __construct()
    {
        parent::__construct();

        $this->seedDirectory = public_path() . '\\seeds' ;
        $this->menuSeedFile = public_path() . '\\seeds\\menus.txt' ;
    }

    public function handle()
    {
        $menus = DB::table('menus')->get();

        if($menus->count() == 0) {
            $this->error('No menus found for seeding');
            return;
        }

        $text = '';

        foreach($menus as $menu) {
            $query = str_replace('#ID#', $menu->id, $this->queryTemplate);
            $query = str_replace('#NAME#', $menu->name, $query);
            if($menu->short_name) {
                $query = str_replace('#SHORT_NAME#', $menu->short_name, $query);
            } else {
                $query = str_replace('\'#SHORT_NAME#\'', 'NULL', $query);
            }

            if($menu->uri) {
                $query = str_replace('#URI#', $menu->uri, $query);
            } else {
                $query = str_replace('\'#URI#\'', 'NULL', $query);
            }

            $query = str_replace('#POSITION#', $menu->position ? $menu->position : 'NULL', $query);
            $query = str_replace('#PARENT_ID#', $menu->parent_id ? $menu->parent_id : 'NULL', $query);

            if($menu->controller) {
                $query = str_replace('#CONTROLLER#', $menu->controller, $query);
            } else {
                $query = str_replace('\'#CONTROLLER#\'', 'NULL', $query);
            }

            if($menu->method) {
                $query = str_replace('#METHOD#', $menu->method, $query);
            } else {
                $query = str_replace('\'#METHOD#\'', 'NULL', $query);
            }

            $query = str_replace('#IS_VISIBLE#', $menu->is_visible, $query);

            if($menu->description) {
                $query = str_replace('#DESCRIPTION#', $menu->description, $query);
            } else {
                $query = str_replace('\'#DESCRIPTION#\'', 'NULL', $query);
            }

            $query = str_replace('#CREATED_AT#', $menu->created_at, $query);

            $query = str_replace('#UPDATED_BY#', $menu->updated_by ? $menu->updated_by : 'NULL', $query);
            if($menu->updated_at) {
                $query = str_replace('#UPDATED_AT#', $menu->updated_at, $query);
            } else {
                $query = str_replace('\'#UPDATED_AT#\'', 'NULL', $query);
            }

            $query = str_replace('#DELETED_BY#', $menu->deleted_by ? $menu->deleted_by : 'NULL', $query);
            if($menu->deleted_at) {
                $query = str_replace('#DELETED_AT#', $menu->deleted_at, $query);
            } else {
                $query = str_replace('\'#DELETED_AT#\'', 'NULL', $query);
            }

            $text .= $query . "\n\n";
        }

        $this->createFile($text);

        $this->info('Total Menus : ' . $menus->count() . ', Total Deleted Menus : ' . $menus->whereNotNull('deleted_at')->count());
    }

    private function createFile($text) {
        FileSystem::isDirectory($this->seedDirectory) or FileSystem::makeDirectory($this->seedDirectory,
            0777, true, true);

        $fileHandler = fopen($this->menuSeedFile, 'w');
        fwrite($fileHandler, $text);
        fclose($fileHandler);
    }
}

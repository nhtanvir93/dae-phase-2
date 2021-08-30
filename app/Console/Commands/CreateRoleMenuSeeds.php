<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FileSystem;

class CreateRoleMenuSeeds extends Command
{
    protected $signature = 'make:role_menu-seeds';

    protected $description = 'Create seeds for role_menu table';

    private $menuSeedFile;
    private $seedDirectory;

    private $queryTemplate =
"DB::table('role_menu')->insert([
    'id' => #ID#,
    'role_id' => #ROLE_ID#,
    'menu_id' => #MENU_ID#,
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
        $this->menuSeedFile = public_path() . '\\seeds\\role_menu.txt' ;
    }

    public function handle()
    {
        $roleMenus = DB::table('role_menu')->get();

        if($roleMenus->count() == 0) {
            $this->error('No role_menu found for seeding');
            return;
        }

        $text = '';

        foreach($roleMenus as $roleMenu) {
            $query = str_replace('#ID#', $roleMenu->id, $this->queryTemplate);
            $query = str_replace('#ROLE_ID#', $roleMenu->role_id, $query);
            $query = str_replace('#MENU_ID#', $roleMenu->menu_id, $query);
            $query = str_replace('#CREATED_AT#', $roleMenu->created_at, $query);

            $query = str_replace('#UPDATED_BY#', $roleMenu->updated_by ? $roleMenu->updated_by : 'NULL', $query);
            if($roleMenu->updated_at) {
                $query = str_replace('#UPDATED_AT#', $roleMenu->updated_at, $query);
            } else {
                $query = str_replace('\'#UPDATED_AT#\'', 'NULL', $query);
            }

            $query = str_replace('#DELETED_BY#', $roleMenu->deleted_by ? $roleMenu->deleted_by : 'NULL', $query);
            if($roleMenu->deleted_at) {
                $query = str_replace('#DELETED_AT#', $roleMenu->deleted_at, $query);
            } else {
                $query = str_replace('\'#DELETED_AT#\'', 'NULL', $query);
            }

            $text .= $query . "\n\n";
        }

        $this->createFile($text);

        $this->info('Total RoleMenus : ' . $roleMenus->count() . ', Total Deleted RoleMenus : ' . $roleMenus->whereNotNull('deleted_at')->count());
    }

    private function createFile($text) {
        FileSystem::isDirectory($this->seedDirectory) or FileSystem::makeDirectory($this->seedDirectory,
            0777, true, true);

        $fileHandler = fopen($this->menuSeedFile, 'w');
        fwrite($fileHandler, $text);
        fclose($fileHandler);
    }
}

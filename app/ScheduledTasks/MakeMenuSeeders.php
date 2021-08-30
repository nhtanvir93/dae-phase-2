<?php

namespace App\ScheduledTasks;

use Illuminate\Support\Facades\File as FileSystem;

class MakeMenuSeeders
{
    private $directory;
    private $file;

    public function __construct()
    {
        $this->setDirectory();
        $this->setFile();
    }

    private function setDirectory() {
        $this->directory = public_path() . '/' . 'seeders';
    }

    private function setFile() {
        $this->file = $this->directory . '/menus.txt';
    }

    private function makeDirectory() {
        return FileSystem::isDirectory($this->directory) or FileSystem::makeDirectory($this->directory, 0777, true, true);
    }

    private function writeSeeders($seederData) {
        $fileHandler = fopen($this->file, 'w');
        fwrite($fileHandler, $seederData);
        fclose($fileHandler);
    }

    public function __invoke()
    {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');
        $menus = $menuRepository->lists();

        if($this->makeDirectory() && $menus->isNotEmpty()) {
            $seederTemplate = $this->getSeederTemplate();
            $seederData = '';

            foreach($menus as $menu) {
                $seeder = str_replace('#ID#', $menu->id, $seederTemplate);
                $seeder = str_replace('#NAME#', $menu->name, $seeder);
                $seeder = str_replace('#SHORT_NAME#',
                    isset($menu->short_name) ? $menu->short_name : 'null', $seeder);
                $seeder = str_replace('#URI#',
                    isset($menu->uri) ? $menu->uri : 'null', $seeder);
                $seeder = str_replace('#POSITION#',
                    $menu->position > 0 ? $menu->position : 'null', $seeder);
                $seeder = str_replace('#DESCRIPTION#',
                    isset($menu->description) ? $menu->description : 'null', $seeder);
                $seeder = str_replace('#PARENT_ID#',
                    $menu->parent_id > 0 ? $menu->parent_id : 'null', $seeder);
                $seeder = str_replace('#CONTROLLER#',
                    isset($menu->controller) ? $menu->controller : 'null', $seeder);
                $seeder = str_replace('#METHOD#',
                    isset($menu->method) ? $menu->method : 'null', $seeder);
                $seeder = str_replace('#IS_VISIBLE#', $menu->is_visible, $seeder);

                $seeder = preg_replace("#'null'#", 'null', $seeder);

                $seederData .= $seeder;
            }

            $this->writeSeeders($seederData);
            return "MakeMenuSeeder\nTotal $menus->count() menu seeder/s created\n\n\n";
        } else {
            return "MakeMenuSeeder\nEither `seeders` directory missing or no menu found in the db\n\n\n";
        }
    }

    private function getSeederTemplate() {
        return
"DB::table('menus')->insert([
        'id' => #ID#,
        'name' => '#NAME#',
        'short_name' => '#SHORT_NAME#',
        'uri' => '#URI#',
        'position' => #POSITION#,
        'description' => '#DESCRIPTION#',
        'parent_id' => #PARENT_ID#,
        'controller' => '#CONTROLLER#',
        'method' => '#METHOD#',
        'is_visible' => #IS_VISIBLE#,
        'created_at' => now(),
        'created_by' => 1
]);\n\n\n";
    }
}
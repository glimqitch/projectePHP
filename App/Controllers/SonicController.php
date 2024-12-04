<?php
namespace App\Controllers;

use App\Models\Sonic;

class SonicController {

    public function index() {
        $sonics = Sonic::all();
        require '../resources/views/sonic/index.blade.php';
    }

    public function create() {
        require '../resources/views/sonic/create.blade.php';
    }

    public function store() {
        $name = $_POST['name'];
        $releaseYear = $_POST['releaseYear'];
        $platform = $_POST['platform'];
        $genre = $_POST['genre'];
        $developer = $_POST['developer'];

        $newSonic = new Sonic([
            'name' => $name,
            'releaseYear' => $releaseYear,
            'platform' => $platform,
            'genre' => $genre,
            'developer' => $developer
        ]);
        $newSonic->save();
        header('Location: /sonic');
    }

    public function edit($id) {
        $sonic = (new \App\Models\Sonic)->find($id);
        if (!$sonic) {
            header('Location: /sonic');
            exit();
        }
        require '../resources/views/sonic/edit.blade.php';
    }

    public function update($id) {
        $sonic = (new \App\Models\Sonic)->find($id);
        if (!$sonic) {
            header('Location: /sonic');
            exit();
        }
        $sonic->name = $_POST['name'];
        $sonic->releaseYear = $_POST['releaseYear'];
        $sonic->platform = $_POST['platform'];
        $sonic->genre = $_POST['genre'];
        $sonic->developer = $_POST['developer'];
        $sonic->save();
        header('Location: /sonic');
    }

    public function delete($id) {
        if ($id === null) {
            header('Location: /sonic');
            exit();
        }
        $sonic = (new \App\Models\Sonic)->find($id);
        return require '../resources/views/sonic/delete.blade.php';
    }

    public function destroy($id) {
        (new \App\Models\Sonic)->delete($id);
        header('Location: /sonic');
    }

    public function confirmDelete($id) {
        $sonic = (new \App\Models\Sonic)->find($id);
        return require '../resources/views/sonic/delete.blade.php';
    }
}

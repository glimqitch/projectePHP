<?php
namespace App\Models;

use Core\App;
use PDO;

class Sonic {
    protected static $table = "sonic";  // Nom de la taula a la base de dades

    public $id;
    public $name;
    public $platform;
    public $genre;
    public $developer;
    public $releaseYear;

    public function __construct($data = []) {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->name = $data['name'] ?? null;
        $this->platform = $data['platform'] ?? null;
        $this->genre = $data['genre'] ?? null;
        $this->developer = $data['developer'] ?? null;
        $this->releaseYear = $data['releaseYear'] ?? null;
    }

    public function save() {
        $db = App::get('database')->getConnection();

        if ($this->id) {
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET name = :name, platform = :platform, genre = :genre, developer = :developer, releaseYear = :releaseYear WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':platform', $this->platform);
            $statement->bindValue(':genre', $this->genre);
            $statement->bindValue(':developer', $this->developer);
            $statement->bindValue(':releaseYear', $this->releaseYear);
            $statement->execute();
        } else {
            // Creació de registre nou
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (name, platform, genre, developer, releaseYear) VALUES (:name, :platform, :genre, :developer, :releaseYear)');
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':platform', $this->platform);
            $statement->bindValue(':genre', $this->genre);
            $statement->bindValue(':developer', $this->developer);
            $statement->bindValue(':releaseYear', $this->releaseYear);
            $statement->execute();

            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $sonicGames = [];
        $results = $statement->fetchAll();
        foreach ($results as $result) {
            $sonicGames[] = new self($result);
        }
        return $sonicGames;
    }

    public function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $data = $statement->fetch();
        return $data ? new self($data) : null;
    }

    public function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}

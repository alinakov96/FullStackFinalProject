<?php

require_once __DIR__  . "/../../core/Connections.php";
require_once __DIR__  . "/../../core/UploadFiles.php";

class Music extends Connections
{

    public $table = 'music';

    public function getAll(): array
    {
        return $this->connection->query("SELECT * FROM {$this->table}")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($id): array|bool
    {
        $sqlMusic = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->connection->prepare($sqlMusic);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function create(array $data): int
    {
        $sqlMusic = "INSERT INTO {$this->table} (
            name,
            artist,
            album,
            image,
            genre,
            track
            ) 
        VALUES (
            :name,
            :artist,
            :album,
            :image,
            :genre,
            :track
            )";
        $stmt = $this->connection->prepare($sqlMusic);
        $stmt->execute($data);
        $id = $this->connection->lastInsertId();

        return $id;
    }

    public function update(array $data)
    {
        $sqlMusic = "UPDATE 
                    {$this->table}
                SET 
                    name = :name,
                    artist = :artist,
                    album = :album,
                    image = :image,
                    genre = :genre
                    track = :track
                WHERE id = :id";

        $stmt = $this->connection->prepare($sqlMusic);
        $stmt->execute($data);
    }

    public function delete(int $id)
    {
        $sqlMusic = "DELETE FROM 
                    {$this->table}
                WHERE id = ?";
        $stmt = $this->connection->prepare($sqlMusic);
        $stmt->execute([$id]);
    }

    public function uploadImage(array $data)
    {
        $data['image'] = '';
        $uploadDir = __DIR__ . "/../../storage/images";

        if (($data['files']['image'] ?? '')) {
            $data['image'] = (new UploadFiles($data['files']['image'], $uploadDir))->uploadImage();
        }

        return $data;

    }

    public function uploadTrack(array $data)
    {
        $data['track'] = '';
        $uploadDir = __DIR__ . "/../../storage/tracks";

        if (($data['files']['track'] ?? '')) {
            $data['track'] = (new UploadFiles($data['files']['track'], $uploadDir))->uploadTrack();
        }

        return $data;
        
    }
}


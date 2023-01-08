<?php

class UploadFiles
{
    public function __construct(
        public array $files,
        public string $uploadDir
    ) {
    }

    public function uploadImage(): string
    {
      
        if ($this->files['name']) {
            move_uploaded_file($this->files['tmp_name'], "$this->uploadDir/{$this->files['name']}");
        }
        return $this->files['name'];

    }

    public function uploadTrack(): string
    {
      
        if ($this->files['name']) {
            move_uploaded_file($this->files['tmp_name'], "$this->uploadDir/{$this->files['name']}");
        }
        return $this->files['name'];
    }
    
}
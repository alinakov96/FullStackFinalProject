<?php

require_once  __DIR__  . "/../Models/Music.php";

class MusicController
{

    public function index()
    {
        $track = new Music();
        $tracks = $track->getAll();
        view(__DIR__ . '/../../Views/tracks/index.php', compact('tracks'));
    }

    public function show(int $id)
    {
        $track = (new Music())->get($id);
        view(__DIR__ . '/../../Views/tracks/show.php', compact('track'));
    }

    public function create()
    {
        view(__DIR__ . '/../../Views/tracks/create.php');
    }

    public function edit($id)
    {
        $track = new Music();
        $track = $track->get($id);

        view(__DIR__ . '/../../Views/tracks/edit.php', compact('track'));
    }

    public function update(array $data)
    {
        $track = (new Music())->update($data);
    }

    public function delete($id)
    {
        $track = (new Music())->delete($id);
    }

    public function store(array $request)
    {
        $data = $request;
        $track = (new Music());
        $data['image'] = $track->uploadImage($data);
        $data['track'] = $track->uploadTrack($data);
        unset($data['files']);    
        $track->create($data);

    }

}
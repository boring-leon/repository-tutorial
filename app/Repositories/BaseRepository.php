<?php

namespace App\Repositories;

class BaseRepository
{
    protected $model;

    public function find($id){
        return $this->model->find($id);
    }

    public function get($columns = []){
        return $this->model->get($columns);
    }

    public function create($data){
        return $this->model->create($data);
    }

    public function update($id, $data){
        return $this->find($id)->update($data);
    }

    public function delete($id){
        $this->find($id)->delete();
    }

    public function latest(){
        return $this->model->orderBy('created_at', 'desc');
    }

    public function oldest(){
        return $this->model->orderBy('created_at', 'desc');
    }
}
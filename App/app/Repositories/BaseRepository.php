<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll($pagiantion)
    {
        return $this->model->paginate();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store($data){
        $this->model->create($data);
    }

}

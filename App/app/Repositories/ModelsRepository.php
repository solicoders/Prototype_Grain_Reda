<?php

namespace App\Repositories;

use App\Models\Models;
use App\Repositories\BaseRepository;


class ModelsRepository extends BaseRepository
{
    public function __construct(Models $models)
    {
        parent::__construct($models);
    }

    public function store($data)
    {
        $data += [
            "Reference" => $data["Model_Name"]. '_'.$data["Model_Year"]
        ];
        parent::store($data);
    }

    public function edit($id)
    {
        parent::find($id);
    }
}

<?php

namespace App\Repositories;

use App\Models\Cars;
use App\Repositories\BaseRepository;


class CarsRepository extends BaseRepository{
    public function __construct(Cars $Cars){
        parent::__construct($Cars); 
    }

    
    

}
<?php

namespace App\Http\Controllers;

use App\Models\Models;
use App\Models\Cars;
use Illuminate\Http\Request;
use App\Repositories\ModelsRepository;
use App\Repositories\CarsRepository;
use League\CommonMark\Reference\Reference;

class ModelsController extends Controller
{
    protected $ModelRepository;
    protected $CarsRepository;

    public function __construct(ModelsRepository $ModelRepository, CarsRepository $carsRepository)
    {
        $this->ModelRepository = $ModelRepository;
        $this->CarsRepository = $carsRepository;
    }
    public function index()
    {
        $models = $this->ModelRepository->getAll(2);
        return view('index', compact('models'));
    }

    public function create()
    {
        $cars = $this->CarsRepository->getAll(0);
        return view('create', compact('cars'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->ModelRepository->store($data);
        $models = $this->ModelRepository->getAll(2);
        return view("index", compact('models'))->with('success', 'Vous avez ajoute un Neavau Model');
    }

    public function edit($id)
    {
        $models = $this->ModelRepository->edit($id);
        return view("create", compact('models'));
    }
}

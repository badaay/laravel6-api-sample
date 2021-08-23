<?php

namespace App\Http\Controllers;

use App\Repository\Permits\PermitsRepository;

class PermitsController extends Controller
{

    protected $model;

    public function __construct(PermitsRepository $permitsRepository) {
        $this->model = $permitsRepository;
    }

    public function index(){
        $permits = $this->model->getPermits();
        if (!$permits->isEmpty()){
            return $this->response()->json($permits);
        }
        return $this->response()->json(['message' => 'Data yang diminta tidak tersedia']);
    }

    public function show($id){
        $permit = $this->model->getPermitById($id);
        if (!empty($permit)){
            return  $this->response()->json($permit);
        }
        return  $this->response()->json(['message' => 'Data yang diminta tidak tersedia']);
    }

    public function store(\App\Http\Requests\PermitsRequest $request){
        $validated = $request->validated();

        $permit = $this->model->createPermit($validated);
        if (!empty($permit)){
            return  $this->response()->json($permit);
        }
        return  $this->response()->json(['message' => 'Data yang diminta tidak tersedia']);
    }
}

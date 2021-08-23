<?php

namespace App\Repository\Permits;
use App\Repository\Permits\PermitsInterfaces;

use Illuminate\Support\Facades\Storage;
use App\Permits;

class PermitsRepository implements PermitsInterfaces
{

    public function createPermit($request)
    {
        dd($request);
        return Permits::create($request);
    }

    public function getPermits()
    {
        return Permits::all();
    }

    public function getPermitById($id)
    {
        return Permits::find($id);
    }

}

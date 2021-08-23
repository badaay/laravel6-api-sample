<?php

namespace App\Repository\Permits;

interface PermitsInterfaces
{
    public function createPermit($request);
    public function getPermits();
    public function getPermitById($id);
}

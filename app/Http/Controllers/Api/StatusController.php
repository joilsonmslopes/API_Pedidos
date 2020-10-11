<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Status;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::all();

        return $status;
    }
}

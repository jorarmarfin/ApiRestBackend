<?php

namespace App\Http\Controllers;

use App\Models\Integrante;
use Illuminate\Http\Request;

class IntegrantesController extends Controller
{
    public function index()
    {
        return Integrante::all();
    }
}

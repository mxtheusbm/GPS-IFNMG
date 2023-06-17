<?php

namespace App\Http\Controllers;

use App\Models\Servidor;
use Illuminate\Http\Request;

class ServidorController extends Controller
{
    public function index(Servidor $servidor)
    {
        $servidores = $servidor->all();
        dd($servidores);
    }
}

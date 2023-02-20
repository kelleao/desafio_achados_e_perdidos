<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastraLocalRequest;
use App\Http\Requests\UsuarioResquest;
use App\Models\CadastraLocal;
use App\Models\User;
use Illuminate\Http\Request;

class CadastrarLocalController extends Controller
{
    public function index()
    {
        # code...
    }

    public function store(UsuarioResquest $request)
    {
        dd($request->validate());


    }

    public function update()
    {
        # code...
    }

    public function delete()
    {
        # code...
    }
}

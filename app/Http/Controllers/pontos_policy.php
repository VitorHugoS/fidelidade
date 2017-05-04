<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pontos_policy;
use App\Http\Requests;

class Politica extends Controller
{
    protected function create(array $data)
    {
        return Politica::create([
            'real' => $data['real'],
            'pontos' => $data['pontos']
        ]);
    }

    public function index()
    {
        return view('pontos');
    }
}

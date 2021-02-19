<?php

namespace App\Http\Controllers\agendamento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    
    public function index()
    {
        return "lista de horarios";
    }

    
    public function create()
    {
        return 'crieiii';
    }

    
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {
        
    }
    public function secsu()
    {
        return 'ai que coisa boa';
    }
}

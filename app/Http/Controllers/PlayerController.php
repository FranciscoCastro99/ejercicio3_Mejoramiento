<?php

namespace App\Http\Controllers;

use App\Models\player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //
    public function index(){
        $players = player::orderby('id','asc')->get();
        return view('player.listar', compact('players'));
    }

    public function create(){
        return view('player.create');
    }

    public function store(Request $request){
        $players = new player();
        $players->nombre = $request->nombre;
        $players->posicion = $request->posicion;
        $players->fechaDeNacimiento = $request->fechaDeNacimiento;
        $players->save();
        return redirect()->route('player.index');
    }

    public function show(player $players){
        return view('player.show',compact('players'));
    }

    public function destroy (player $players){
        $players->delete();
        return redirect()->route('player.index');
    }

      //Edit
    public function edit(player $players){
        return view('player.editar', compact('players'));
    }

      //Update
    public function update(Request $request, player $players){
        $players->nombre = $request->nombre;
        $players->posicion = $request->posicion;
        $players->fechaDeNacimiento = $request->fechaDeNacimiento;
        $players->save();
        return redirect()->route('player.index');
    }

}

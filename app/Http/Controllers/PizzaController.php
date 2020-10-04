<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    function index() {
        $pizzas = Pizza::all();
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    function show($id) {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    function create() {
        return view('pizzas.create');
    }

    function store() {
       return $this->index();
    }

    function edit($id) {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.update', ['pizza' => $pizza]);
    }

    function update($id) {
        
    }
}

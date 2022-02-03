<?php

namespace App\Http\Controllers;

use App\Models\CartaMagic;
use Illuminate\Http\Request;
use App\Models\User;

class CartaMagicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartaMagics = auth()->user()->cartaMagics;
        return view('carta_magics.index', //compact('cartaMagics')
                                          ['cartaMagics' => $cartaMagics] 
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = 'valor pepe 123';
        return view('carta_magics.create', ['paco' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $cartaMagic = $user->cartaMagics()->create([
            'titulo' => $request['titulo'],
            'tipo' => 'tierra',
        ]);

        return response("Creada la carta con id ".$cartaMagic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartaMagic  $cartaMagic
     * @return \Illuminate\Http\Response
     */
    public function show(CartaMagic $cartaMagic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartaMagic  $cartaMagic
     * @return \Illuminate\Http\Response
     */
    public function edit(CartaMagic $cartaMagic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartaMagic  $cartaMagic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartaMagic $cartaMagic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartaMagic  $cartaMagic
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartaMagic $cartaMagic)
    {
        //
    }
}

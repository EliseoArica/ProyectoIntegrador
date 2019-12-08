<?php

namespace App\Http\Controllers\Offer;

use App\User;
use Auth;
use App\Offer;
use App\Company;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Offer::paginate(8);
        
        //$empresas = Offer::all()->company;
        //$datos2['empresas'] = Offer::all()->company;
        /*foreach ($ofertas as $oferta) {
            return $oferta->company->logo;
        }
        */
        return view('usuarios.alumno.visualizar', compact('ofertas'));//->with('ofertas', $ofertas);

        //return response()->json(['data' => $ofertas], 200);
        /*

        }
        */

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $reglas = [
            'title' => 'required',
            'description' => 'required',
            'functions' => 'required',
            'requirements' => 'required',
            'salary' => 'required',
            'address' => 'required',
        ];

        $this->validate($request, $reglas); 

        $offer = Offer::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'functions' => $request->get('functions'),
            'requirements' => $request->get('requirements'),
            'salary' => $request->get('salary'),
            'address' => $request->get('address')
        ]);
        
        $offer->save();
        */

        return view('usuarios.empresa.crear');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('usuarios.alumno.detalle');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }
}

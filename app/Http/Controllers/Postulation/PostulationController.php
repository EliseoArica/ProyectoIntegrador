<?php

namespace App\Http\Controllers\Postulation;

use Auth;
use App\User;
use App\Offer;
use App\Postulation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Offer $offer, User $user, $id)
    {

        $ofertas = Offer::find($id);

        $reglas = [
            'your_experience' => 'required',
            'why_interested' => 'required',
            'why_you' => 'required',
            'curriculum' => 'required',
        ];

        $this->validate($request, $reglas);

        if ($request->hasFile('curriculum')) {
            
            $file = $request->file('curriculum');
            $filename = time().$file->getClientOriginalName();
            $file->move(\public_path().'/curriculos/',$filename);

            $postulation = Postulation::create([
                'your_experience' => $request->get('your_experience'),
                'why_interested' => $request->get('why_interested'),
                'why_you' => $request->get('why_you'),
                'curriculum' => $request->file('curriculum'),
                'student_id' => Auth::user()->student->id,
                'offer_id' => $ofertas->id
            ]);

            $postulation->save();

            return redirect('postulaciones');
     
        }

        return redirect()->back();


    }

    /*
        $reglas = [
            'your_experience' => 'required',
            'why_interested' => 'required',
            'why_you' => 'required',
            'curriculum' => 'required',
        ];

        $this->validate($request, $reglas);


        if ($request->hasFile('curriculum')) {
            
            $file = $request->file('curriculum');
            $filename = time().$file->getClientOriginalName();
            $file->move(\public_path().'/curriculos/',$filename);

            $postulation = Postulation::create([
                'your_experience' => $request->get('your_experience'),
                'why_interested' => $request->get('why_interested'),
                'why_you' => $request->get('why_you'),
                'curriculum' => $filename
            ]);

            $postulation->save();

            return view('usuarios.alumno.postular');
        }
        
        return redirect('visualizar');*/

    /**
     * Display the specified resource.
     *
     * @param  \App\Postulation  $postulation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('usuarios.alumno.postular', [
            'ofertas' =>  Offer::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postulation  $postulation
     * @return \Illuminate\Http\Response
     */
    public function edit(Postulation $postulation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postulation  $postulation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postulation $postulation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postulation  $postulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postulation $postulation)
    {
        //
    }
}

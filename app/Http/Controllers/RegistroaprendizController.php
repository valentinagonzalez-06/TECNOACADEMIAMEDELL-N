<?php

namespace App\Http\Controllers;

use App\Models\Registroaprendiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RegistroaprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['aprendizregistro'] = Registroaprendiz::paginate(5);

        return view('aprendizregistro.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('aprendizregistro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosaprendizregistro=request()->all();

        $datosaprendizregistro = request()->except('_token');

        if ($request->hasFile('foto')){

         $aprendizregistro['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        Registroaprendiz::insert($datosaprendizregistro);
        // return response()->json($datosaprendizregistro);
        return redirect('aprendizregistro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registroaprendiz  $registroaprendiz
     * @return \Illuminate\Http\Response
     */
    public function show(Registroaprendiz $registroaprendiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registroaprendizs  $registroaprendiz
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $aprendizregistro = Registroaprendiz::findOrfail($id);

        return view('aprendizregistro.edit', compact('aprendizregistro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registroaprendiz  $registroaprendiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosaprendizregistro = request()->except(['_token', '_method']);

        if ($request->hasFile('foto')) {

            $aprendizregistro = Registroaprendiz::findOrfail($id);

            Storage::delete('public/' . $aprendizregistro);

            $datosaprendizregistro['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        Registroaprendiz::where('id', '=', $id)->update($datosaprendizregistro);

        $aprendizregistro = Registroaprendiz::findOrfail($id);
        return view('aprendizregistro.edit', compact('aprendizregistro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registroaprendizs $registroaprendiz
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $aprendizregistro = Registroaprendiz::findOrfail($id);

        Storage::delete('public/' . $aprendizregistro);
        Registroaprendiz::destroy($id);

        return redirect('aprendizregistro');
    }
    
}

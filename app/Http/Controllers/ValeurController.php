<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valeur;
use App\Models\Parametre;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ValeurController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valeurs = DB::table('valeurs')
                                ->join('parametres', 'parametres.id', 'valeurs.id_parametre')
                                ->select('valeurs.*', 'parametres.libelle as libelle_parametre')
                                ->where('valeurs.is_delete', false)
                                ->get();
            return view('valeurs.index', compact('valeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parametres = Parametre::where('is_delete', false)->get();
        return view('valeurs.create', compact('parametres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'parametre_id'=>'required',
            'nom_valeur'=>'required',
        ]);

        valeur::create([
            'id_parametre'=>$request->parametre_id,
            'libelle'=>$request->nom_valeur,
        ]);

        return redirect()->route('valeurs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()->can('valeurs.view')) {
            $valeur = Valeur::where('id', $id)->first();
            return view('valeurs.show', compact('valeur'));
        }else{
            return redirect()->route('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->can('valeurs.view')) {
            $valeur = Valeur::where('id', $id)->first();
            $parametres = Parametre::where('is_delete', false)->get();
            return view('valeurs.edit', compact('valeur', 'parametres'));
        }else{
            return redirect()->route('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->can('valeurs.view')) {
            $this->validate($request, [
                'id_param'=>'required',
                'nom_valeur'=>'required',
            ]);

            $valeur = Valeur::where('id', $id)->first();
            $valeur->update([
                'id_param'=>$request->id_param,
                'libelle'=>$request->nom_valeur,
            ]);

            return redirect()->route('valeurs.index');
        }else{
            return redirect()->route('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete(Request $request)
    {
        if (Auth::user()->can('valeurs.delete')) {

            $id = $request->id;
            $valeur = valeur::findOrFail($id);
            $valeur->update([
                'is_delete' => 1,
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;
use App\Models\Valeur;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**************** SELECT CHARGEMENT DES SOUS TABLES *************************/
    public function selection(Request $request)
    {
        $idparent_val = $request->idparent_val;
        $table = $request->table;

        $array[] = array("id" => '', "name" => '');

        switch ($table) {
            case 'structure':
            $structurees = Structure::where(['is_delete'=>FALSE, 'id_typestructure'=>$idparent_val])->get();
                foreach ($structurees as $structuree)
                {
                    $array[] = array("id" => $structuree->id, "name" => $structuree->nom_structure);
                }
            break;

            case 'valeur':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parent'=>$idparent_val])->get();
                foreach ($valeurs as $valeur)
                {
                    $array[] = array("id" => $valeur->id, "name" => $valeur->libelle);
                }
                break;

            case 'arrondissement':
                $arrondissements = Arrondissement::where(['is_delete'=>FALSE, 'id_commune'=>$idparent_val])->get();
                foreach ($arrondissements as $arrondissement)
                {
                    $array[] = array("id" => $arrondissement->id, "name" => $arrondissement->libelle);
                }
                break;
        }

        $response['data'] = $array;
        return response()->json($response);
    }

    /**************** SELECT CHARGEMENT DES SOUS TABLES *************************/
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Valeur;
use \stdClass;

class eFluxController extends Controller
{
    // TYPE STRUCTURE
    public function dataSelect(String $parametre)
    {
        $valeurs = new StdClass();
        switch ($parametre) {
            // TYPE STRUCTURE
            case 'type-structure':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('TYPESTRUCTURE_CSPS')])->get();
                break;
            // TYPE STRUCTUE CSPS
            case 'type-structure-csps':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('TYPESTRUCTURE')])->get();
                break;
            // TYPE STRUCTURE CMA
            case 'type-structure-cma':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('TYPESTRUCTURE_CSPS')])->get();
                break;
            // TYPE OPERATION
            case 'type-operation':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('TYPEOPERATION')])->get();
                break;
            // LIBELLE OPERATION
            case 'libelle-operation':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('LIBELLEOPERATION')])->get();
                break;
            // CATEGORIE OPERATION
            case 'categorie-operation':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('CATEGORIE')])->get();
                break;
            // ACTION OPERATION
            case 'action-operation':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('ACTIONOPERATION')])->get();
                break;
            // DE VERS
            case 'devers':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('DEVERS')])->get();
                break;
            // TYPE OPERATION CREANCE OU DETTE
            case 'type-operation-creandette':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('TYPEOPCREADETTE')])->get();
                break;
            // TYPE CREANCE
            case 'type-creance':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('TYPECREANCE')])->get();
                break;
            // TYPE DETTE
            case 'type-dette':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('TYPEDETTE')])->get();
                break;
            // LIVRE
            case 'livre':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('LIVRE')])->get();
                break;
            // TYPE EVACUATION
            case 'type-evacuation':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('TYPEEVACUATION')])->get();
                break;
            // SORTIE CAISSE
            case 'sortie-caisse':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('SORTIECAISSE')])->get();
                break;
            // SORTIE BANQUE
            case 'sortie-banque':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('SORTIEBANQUE')])->get();
                break;
            // ENTREE CAISSE
            case 'entree-caisse':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('ENTREECAISSE')])->get();
                break;
            // ENTREE BANQUE
            case 'entree-banque':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('ENTREEBANQUE')])->get();
                break;
            // CAISSE VERS BANQUE
            case 'caisse-banque':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('CAISSEBANQUE')])->get();
                break;
            // BANQUE VERS CAISSE
            case 'banque-caisse':
                $valeurs = Valeur::where(['is_delete'=>FALSE, 'id_parametre'=>env('BANQUECAISSE')])->get();
                break;

            default:
                # code...
                break;
        }
        return response()->json($valeurs);
    }

    W18de6d3t&DR
}

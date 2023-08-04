<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GestionFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations=Film::all();
        return view('gestion_film',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->isAdmin==1) {
            return view('ajout_film');
        }else{
           return back()->with('notification','Vous n\'êtes pas administration' );
        }
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $model= new Film();
            $model->title = $request->title ;
            $model->description = $request->description;
            $model->heur_projection = $request->heur_projection;
            $model->montant = $request->montant;
            $model->place_reserver = $request->place_reserver;
            $model->place_libre = $request->place_libre;
            $model->save();
            if ( $model->save()) {
                return redirect()->route('gestion.index')->with('success','Film enregistré avec succès');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (Auth::user()->isAdmin) {
            $film=Film::findOrfail($id);
            return view('editer_film',compact('film'));
        }else {
            return redirect()->route('gestion.index')->with('notification','Vous n\'êtes pas administration' );

        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->isAdmin) {
            $film=Film::findOrfail($id);
            $film->title = $request->title;
            $film->description = $request->description;
            $film->heur_projection = $request->heur_projection;
            $film->montant = $request->montant;
            $film->place_reserver = $request->place_reserver;
            $film->place_libre = $request->place_libre;
            $film->update();
            return redirect()->route('gestion.index')->with('modification','Modification reussite');
        }else {
            return redirect()->route('gestion.index')->with('notification','Vous n\'êtes pas administration' );
        }
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Auth::user()->isAdmin) {
            $film=Film::findOrfail($id);
            $film->delete();
           return redirect()->route('gestion.index')->with('suppression','Film supprimé avec success');
        }else {
            return redirect()->route('gestion.index')->with('notification','Vous n\'êtes pas administration' );
        }
        
    }
}

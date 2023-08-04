<?php

namespace App\Http\Controllers;

use App\Models\Projection;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectionController extends Controller
{
    public function ListeProjection(){

        $projections= Projection::all();
        return view('liste_projection',compact('projections'));
    }
    public function logout(Request $request)
    {
       //methode qui gere la deconnexion 
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function reserve($id){
        $projections= Projection::all();
        $identifiant=$id;
        return view('formulaire',compact('projections','identifiant'));
    }
    public function EnregistrerReservation(Request $request,$id){
            $projection=Projection::findOrfail($id);
            if ($projection->place_libre== 0) {
                return back()->with('echec','Il n\'y plus de place pour ce film. C\'est Déjà saturé, veuillez faire une reservation sur un autre film');
            }
            $projection->update(['place_libre'=>$projection->place_libre-1,'place_reserver'=>$projection->place_reserver+1]);
            $model= new Reservation();
            $model->nom = $request->nom ;
            $model->prenom = $request->prenom;
            $model->film = $request->title;
            $model->montant = $request->montant;
            $model->numero_place = $request->num;
            $model->save();
            if ( $model->save()) {
                return redirect()->route('liste_reservation')->with('success','Reservation faite avec succès');

            }
       
    }
    public function ListeReservation(){
        $reservations= Reservation::all();
        return view('liste_reservation',compact('reservations'));
    }
    public function ListeCreneau(){
        $projections= Projection::all();
        return view('liste_creneau',compact('projections'));
    }
   
}

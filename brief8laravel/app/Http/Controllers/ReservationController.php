<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('reservations.ajouterreservation');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('reservations.ajouterreservation');
    }
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

        {
            
            
             $request->validate([
                    'nombre_place' => 'required',
                  
                
                
                
                 ]);
                
                
                
                $reservation = new Reservation();
                
                // $this->authorize('create', $reservation);
                $ref= uniqid();
                $reservation->reference=$ref;
            
                $reservation->nombre_place = $request->nombre_place;
                $reservation->user_id=Auth::guard('web')->user()->id;
                $reservation->evenement_id=$request->evenement_id;
                
            $reservation->save();
            return redirect('/newreservation')->with('status', "reservation bien enregistré");
        
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reservation= Reservation::find($id);
        return view('reservations.voirplus', ['reservation' => $reservation]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation,$id)
    {
        $reservation = Reservation::findOrfail($id);
        $reservation->statut=false;
        $reservation->update();
        return back();
    }
}

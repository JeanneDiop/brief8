<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\DeclinerReservation;
use App\Notifications\EnvoyerMailNouveauReserve;
use App\Models\Reservation; // Assurez-vous que cette ligne est ajoutée
use Illuminate\Notifications\Notification; // Assurez-vous que cette ligne est ajoutée


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
    public function create()
    {
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
        $ref = uniqid();
        $reservation->reference = $ref;
        $reservation->nombre_place = $request->nombre_place;
        $reservation->user_id = Auth::guard('web')->user()->id;
        $reservation->evenement_id = $request->evenement_id;
        $reservation->save();

        // Envoie de mail aux réservants d'un événement
        
         
           $reservation->user->notify(new EnvoyerMailNouveauReserve());
           
            
        

        return redirect('/newreservation')->with('status', "Réservation bien enregistrée");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.voirplus', ['reservation' => $reservation]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->statut = false;
        $reservation->update();

        $reservation->user->notify(new DeclinerReservation());

        return back();

       
    }
}

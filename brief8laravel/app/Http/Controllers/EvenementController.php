<?php

namespace App\Http\Controllers;


use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('evenements.listeevenements');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        {
            // $this->authorize('View', $evenement);
            return view('evenements.ajouterevenement');
        }
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
    
            $request->validate([
                'libelle' => 'required',
                'date_limite' => 'required',
                'description' => 'required',
                'image' => 'required',
                'statut' => 'required',
                'date_evenement' => 'required',
              
                
            ]);
            $evenement = new Evenement();
            // $this->authorize('create', $evenement);
            $evenement->libelle = $request->libelle;
            $evenement->date_limite = $request->date_limite;
            $evenement->description = $request->description;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $evenement['image'] = $filename;
            }
            $evenement->statut = $request->statut;
            $evenement->date_evenement = $request->date_evenement;
              $evenement->assocation_id = 1;
            //  $evenement->assocation_id=$request->assocation_id;
            $evenement->save();
            return redirect('/newevenement')->with('status', "evenement bien enregistré");
        
    }
    
        /**
         * Display the specified resource.
         */
     

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        $evenement= Evenement::find();
        return view('evenements.voirplus', ['evenements' => $evenement]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        //
    }
}

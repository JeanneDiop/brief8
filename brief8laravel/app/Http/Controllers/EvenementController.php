<?php

namespace App\Http\Controllers;


use App\Models\Evenement;
use App\Models\Assocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evenements=Evenement::all();
        return view('evenements.listeevenements',['evenements'=>$evenements]);
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
             $evenement->assocation_id=Auth::guard('assocation')->user()->id;
            $evenement->save();
            return redirect('/newevenement')->with('status', "evenement bien enregistré");
        
    }
    
        /**
         * Display the specified resource.
         */
     

    /**
     * Display the specified resource.
     */
    public function shows($id )
    {
        $evenement= Evenement::find($id);
        return view('evenements.voirplus', ['evenement' => $evenement]);
    }

   
    public function show(Request $request )
    
    {
       
        $evenement= Evenement::find($request->id);
        return view('reservations.ajouterreservation', ['evenement' => $evenement]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement ,$id)
    {
            // $this->authorize('Viewany', $evenement);
            $evenement = Evenement::find($id);
            $assocations = Assocation::all();
            return view('evenements.modifierevenement', compact('assocations', 'evenement'));
        }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
            $request->validate([
                'libelle' => 'required',
                'date_limite' => 'required',
                'description' => 'required',
                'image' => 'sometimes',
                'statut' => 'required',
                'date_evenement' => 'required',
            ]);
            $evenement = Evenement::find($request->id);
            // $this->authorize('update', $evenement);
            $evenement->libelle= $request->libelle;
            $evenement->date_limite= $request->date_limite;
            $evenement->description = $request->description;
            if ($request->file('image')) {
        
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $evenement['image'] = $filename;
            } 
            $evenement->statut = $request->statut;
            $evenement->date_evenement = $request->date_evenement;
            $evenement->assocation_id=Auth::guard('assocation')->user()->id;
            $evenement->update();
            return redirect('/evenements/'.$request->id)->with('statut', "evenement modifier avec succès");
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement,$id)
    {
        
            // $this->authorize('delete', $evenement);
            $evenement = Evenement::findOrfail($id);
            $evenement->delete();
            return redirect('/evenements/listeevenements')->with('statut', 'evenement supprimé avec succès');
        
    }
    }


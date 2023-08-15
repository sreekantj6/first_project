<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Http\Requests\GuitarFormRequest;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsSuccessful;

class GuitarsController extends Controller
{
  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //GET
        return view('guitars.index',[
            'guitars'=>Guitar::all(),
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //GET
        return view('guitars.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuitarFormRequest $request)
    {
       $data =$request->validated();
        //POST
        Guitar::create($data);
        return redirect()->route('guitars.index');
       
    }

    /**
     * Display the specified resource.
     */ 
    
    
    public function show(Guitar $guitar)
    {
        //GET
        return view('guitars.show',[
            'guitar'=>$guitar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Guitar $guitar)
    {
        //GET
        return view('guitars.edit',[
            'guitar'=>$guitar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuitarFormRequest $request,  Guitar $guitar)
    {
        //POST,PUT,PATCH
        
            $data =$request->validated();
    
        $guitar->update($data);
        return redirect()->route('guitars.show', $guitar->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Guitar $guitar)
    {
        //DELETING
       $guitar->delete();
        return redirect()->route('guitars.show', $guitar->id);
        
    }
}

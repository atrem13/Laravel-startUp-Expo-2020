<?php

namespace App\Http\Controllers;

use App\Http\Requests\galeryRequest;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerys = Galery::all();
        return view('panelAdmin.galery.index', compact('galerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panelAdmin.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(galeryRequest $request)
    {
        $validated = $request->validated();
        $image = $request->file('foto');
        $newImageName = time().'.'.$image->getClientOriginalExtension();
        $validated['foto'] = $newImageName;
        if(Galery::create($validated)){
            $image->move(public_path('/myAssets/galery/'), $newImageName);
            return redirect()->route('galery.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        return view('panelAdmin.galery.edit', compact('galery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        return view('panelAdmin.galery.edit', compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(galeryRequest $request, Galery $galery)
    {
        $validated = $request->validated();
        $updateImage = false;
        $oldImageName = $galery->foto;
        if($request->hasFile('foto')){
            $updateImage = true;
            $image = $request->file('foto');
            $newImageName = time().'.'.$image->getClientOriginalExtension();
            $validated['foto'] = $newImageName;
        }
        if($galery->update($validated)){
            if($updateImage){
                $image->move(public_path('/myAssets/galery'), $newImageName);
            }
            if($oldImageName){
                unlink(public_path().'/myAssets/galery/'.$oldImageName);
            }
            return redirect()->route('galery.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        $oldImageName = $galery->foto;
        if($galery->delete()){
            if($oldImageName){
                unlink(public_path().'/myAssets/galery/'.$oldImageName);
            }
            return redirect()->route('galery.index');
        }
    }
}

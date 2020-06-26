<?php

namespace App\Http\Controllers;

use App\Http\Requests\streamingRequest;
use App\Models\Streaming;
use Illuminate\Http\Request;

class StreamingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $streamings = Streaming::all();
        return view('panelAdmin.streaming.index', compact('streamings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panelAdmin.streaming.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(streamingRequest $request)
    {
        $validated = $request->validated();
        if($request->hasFile('foto')){
            $image = $request->file('foto');
            $newImageName = time().'.'.$image->getClientOriginalExtension();
            $validated['foto'] = $newImageName;
        }
        if(Streaming::create($validated)){
            if($request->hasFile('foto')){
                $image->move(public_path('/myAssets/event'), $newImageName);
            }
            return redirect()->route('streaming.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Streaming  $streaming
     * @return \Illuminate\Http\Response
     */
    public function show(Streaming $streaming)
    {
        return view('panelAdmin.streaming.edit', compact('streaming'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Streaming  $streaming
     * @return \Illuminate\Http\Response
     */
    public function edit(Streaming $streaming)
    {
        return view('panelAdmin.streaming.edit', compact('streaming'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Streaming  $streaming
     * @return \Illuminate\Http\Response
     */
    public function update(streamingRequest $request, Streaming $streaming)
    {
        $updateImage = false;
        $validated = $request->validated();
        if($request->hasFile('foto')){
            $updateImage = true;
            $oldImageName = $streaming->foto;
            $image = $request->file('foto');
            $newImageName = time().'.'.$image->getClientOriginalExtension();
            $validated['foto'] = $newImageName;
        }
        if($streaming->update($validated)){
            if($updateImage){
                $image->move(public_path('/myAssets/event/'), $newImageName);
                if($oldImageName){
                    unlink(public_path().'/myAssets/event/'.$oldImageName);
                }
            }
            return redirect()->route('streaming.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Streaming  $streaming
     * @return \Illuminate\Http\Response
     */
    public function destroy(Streaming $streaming)
    {
        $imageName = $streaming->foto;
        if($streaming->delete()){
            if($imageName){
                unlink(public_path().'/myAssets/event/'.$imageName);
            }
            return redirect()->route('streaming.index');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Http\Requests\tenantRequest;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'test';
        $tenants = Tenant::all();
        // return $tenants;
        return view('panelAdmin.tenant.index', compact('tenants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panelAdmin.tenant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tenantRequest $request)
    {
        // dd($request->video);
        $validated = $request->validated();
        $image = $request->file('foto');
        $newImageName = time().'.'.$image->getClientOriginalExtension();
        $validated['foto'] = $newImageName;
        if($tenant = Tenant::create($validated)){
            $image->move(public_path('/myAssets/tenant/'), $newImageName);
            return redirect()->route('tenant.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(Tenant $tenant)
    {
        // return view('panelAdmin\tenant\detail', compact('tenant'));
        return $tenant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenant $tenant)
    {
        return view('panelAdmin\tenant\edit', compact('tenant'));
        // return $tenant;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(tenantRequest $request, Tenant $tenant)
    {
        // dd($request->video);
        $updateImage = false;
        $validated = $request->validated();
        if($request->hasFile('foto')){
            $updateImage = true;
            $oldImageName = $tenant->foto;
            $image = $request->file('foto');
            $newImageName = time().'.'.$image->getClientOriginalExtension();
            $validated['foto'] = $newImageName;
        }
        if($tenant->update($validated)){
            if($updateImage){
                $image->move(public_path('/myAssets/tenant/'), $newImageName);
                unlink(public_path().'/myAssets/tenant/'.$tenant->foto);
            }
        }
        return redirect()->route('tenant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenant $tenant)
    {
        $path = public_path().'/myAssets/tenant/'.$tenant->foto;
        if($result = $tenant->delete()){
            unlink($path);
            return redirect ()->route('tenant.index');
        }
    }
}

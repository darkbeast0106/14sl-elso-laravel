<?php

namespace App\Http\Controllers;

use App\Models\Kutya;
use App\Http\Requests\StoreKutyaRequest;
use App\Http\Requests\UpdateKutyaRequest;

class KutyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kutyak = Kutya::all();
        return view('kutya.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKutyaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKutyaRequest $request)
    {
        $kutya = new Kutya();
        $kutya->fill($request->all());
        $kutya->save();
        return redirect()->route('kutya.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kutya  $kutya
     * @return \Illuminate\Http\Response
     */
    public function show(Kutya $kutya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kutya  $kutya
     * @return \Illuminate\Http\Response
     */
    public function edit(Kutya $kutya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKutyaRequest  $request
     * @param  \App\Models\Kutya  $kutya
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKutyaRequest $request, Kutya $kutya)
    {
        $kutya->fill($request->all());
        $kutya->save();
        return redirect()->route('kutya.show', $kutya->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kutya  $kutya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kutya $kutya)
    {
        $kutya->delete();
        return redirect()->route('kutya.index');
    }
}

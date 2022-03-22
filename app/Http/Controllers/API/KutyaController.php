<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKutyaRequest;
use App\Http\Requests\UpdateKutyaRequest;
use App\Models\Kutya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return response()->json($kutyak);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new StoreKutyaRequest())->rules());
        if ($validator->fails()) {
            $hiba_uzenet = "";
            foreach ($validator->errors()->all() as $hiba) {
                $hiba_uzenet .= $hiba . " ";
            }
            $hiba_uzenet = trim($hiba_uzenet);
            return response()->json(["message" => $hiba_uzenet], 400);
        }
        $kutya = new Kutya();
        $kutya->fill($request->all());
        $kutya->save();
        return response()->json($kutya, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kutya = Kutya::find($id);
        if (is_null($kutya)) {
            $hiba_uzenet = "A megadott azonosítóval nem található kutya.";
            return response()->json(["message" => $hiba_uzenet], 404);
        }
        return response()->json($kutya);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKutyaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKutyaRequest $request, $id)
    {
        $kutya = Kutya::find($id);
        if (is_null($kutya)) {
            $hiba_uzenet = "A megadott azonosítóval nem található kutya.";
            return response()->json(["message" => $hiba_uzenet], 404);
        }
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new StoreKutyaRequest())->rules());
            if ($validator->fails()) {
                $hiba_uzenet = "";
                foreach ($validator->errors()->all() as $hiba) {
                    $hiba_uzenet .= $hiba . " ";
                }
                $hiba_uzenet = trim($hiba_uzenet);
                return response()->json(["message" => $hiba_uzenet], 400);
            }
        }
        $kutya->fill($request->all());
        $kutya->save();
        return response()->json($kutya);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kutya = Kutya::find($id);
        if (is_null($kutya)) {
            $hiba_uzenet = "A megadott azonosítóval nem található kutya.";
            return response()->json(["message" => $hiba_uzenet], 404);
        }
        Kutya::destroy($id);
        return response()->noContent();
    }
}

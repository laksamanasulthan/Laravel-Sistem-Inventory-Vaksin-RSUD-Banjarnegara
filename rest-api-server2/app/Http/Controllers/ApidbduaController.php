<?php

namespace App\Http\Controllers;

use App\Models\Apidbdua;
use Illuminate\Http\Request;

class ApidbduaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Apidbdua::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $apidbdua = new Apidbdua();
		$apidbdua->namavaksin = $request->namavaksin;
		$apidbdua->distributor = $request->distributor;
        $apidbdua->targetpasien = $request->targetpasien;
        $apidbdua->stokpembelian = $request->stokpembelian;
        $apidbdua->petunjuk = $request->petunjuk;
        $apidbdua->biayapengadaan = $request->biayapengadaan;
		$apidbdua->save();
		return "Data berhasil ditambah";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apidbdua  $apidbdua
     * @return \Illuminate\Http\Response
     */
    public function show(Apidbdua $apidbdua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apidbdua  $apidbdua
     * @return \Illuminate\Http\Response
     */
    public function edit(Apidbdua $apidbdua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apidbdua  $apidbdua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $apidbdua = Apidbdua::find($id);
		$apidbdua->namavaksin = $request->namavaksin;
		$apidbdua->distributor = $request->distributor;
        $apidbdua->targetpasien = $request->targetpasien;
        $apidbdua->stokpembelian = $request->stokpembelian;
        $apidbdua->petunjuk = $request->petunjuk;
        $apidbdua->biayapengadaan = $request->biayapengadaan;
		$apidbdua->save();
		return "Data berhasil diupdate";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apidbdua  $apidbdua
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apidbdua = Apidbdua::find($id);
		$apidbdua->delete();
		return "Data berhasil dihapus";
    }
}

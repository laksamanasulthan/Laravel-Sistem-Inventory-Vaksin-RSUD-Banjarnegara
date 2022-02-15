<?php

namespace App\Http\Controllers;

use App\Models\Apidbsatu;
use Illuminate\Http\Request;

class ApidbsatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Apidbsatu::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $apidbsatu = new Apidbsatu();
		$apidbsatu->pengembangvaksin = $request->pengembangvaksin;
		$apidbsatu->approval = $request->approval;
        $apidbsatu->clinicalprtg = $request->clinicalprtg;
        $apidbsatu->dosis = $request->dosis;
        $apidbsatu->rekomendasi = $request->rekomendasi;
        $apidbsatu->efeksamping = $request->efeksamping;
        $apidbsatu->peringatan = $request->peringatan;
		$apidbsatu->save();
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
     * @param  \App\Models\Apidbsatu  $apidbsatu
     * @return \Illuminate\Http\Response
     */
    public function show(Apidbsatu $apidbsatu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apidbsatu  $apidbsatu
     * @return \Illuminate\Http\Response
     */
    public function edit(Apidbsatu $apidbsatu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apidbsatu  $apidbsatu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $apidbsatu = Apidbsatu::find($id);
		$apidbsatu->pengembangvaksin = $request->pengembangvaksin;
		$apidbsatu->approval = $request->approval;
        $apidbsatu->clinicalprtg = $request->clinicalprtg;
        $apidbsatu->dosis = $request->dosis;
        $apidbsatu->rekomendasi = $request->rekomendasi;
        $apidbsatu->efeksamping = $request->efeksamping;
        $apidbsatu->peringatan = $request->peringatan;
		$apidbsatu->save();
		return "Data berhasil diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apidbsatu  $apidbsatu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apidbsatu = Apidbsatu::find($id);
		$apidbsatu->delete();
		return "Data berhasil dihapus";
    }
}

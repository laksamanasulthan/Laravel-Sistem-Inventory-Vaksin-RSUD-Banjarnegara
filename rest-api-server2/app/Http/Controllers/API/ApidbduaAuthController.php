<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Apidbdua;
use App\Http\Resources\Apidbdua as ApidbduaResource;
use Illuminate\Support\Facades\Validator;

class ApidbduaAuthController extends BaseController
{

	public function index()
	{
		$apidbdua = Apidbdua::all();
		return $this->sendResponse(ApidbduaResource::collection($apidbdua), 'Data vaksin ditampilkan.');
	}


	public function create(Request $request)
	{
		$input = $request->all();
		$validator = Validator::make($input, [
			// 'nama' => 'required',
			// 'alamat' => 'required',
            'namavaksin' => 'required',
            'distributor' => 'required',
            'targetpasien' =>'required',
            'stokpembelian' => 'required',
            'petunjuk' => 'required',
            'biayapengadaan' => 'required'
		]);
		if ($validator->fails()) {
			return $this->sendError($validator->errors());
		}
		$apidbdua = Apidbdua::create($input);
		return $this->sendResponse(new ApidbduaResource($apidbdua), 'Data vaksin ditambahkan.');
	}


	public function show($id)
	{
		$apidbdua = Apidbdua::find($id);
		if (is_null($apidbdua)) {
			return $this->sendError('Data does not exist.');
		}
		return $this->sendResponse(new ApidbduaResource($apidbdua), 'Data ditampilkan.');
	}


	public function update(Request $request, Apidbdua $apidbdua)
	{
		$input = $request->all();

		$validator = Validator::make($input, [
            'namavaksin' => 'required',
            'distributor' => 'required',
            'targetpasien' =>'required',
            'stokpembelian' => 'required',
            'petunjuk' => 'required',
            'biayapengadaan' => 'required'
		]);

		if ($validator->fails()) {
			return $this->sendError($validator->errors());
		}

        $apidbdua->namavaksin = $input['namavaksin'];
		$apidbdua->distributor = $input['distributor'];
        $apidbdua->targetpasien = $input['targetpasien'];
        $apidbdua->stokpembelian = $input['stokpembelian'];
        $apidbdua->petunjuk = $input['petunjuk'];
        $apidbdua->biayapengadaan = $input['biayapengadaan'];
		// $apidbdua->nama = $input['nama'];
		// $apidbdua->alamat = $input['alamat'];
		$apidbdua->save();

		return $this->sendResponse(new ApidbduaResource($apidbdua), 'Data telah diupdate.');
	}

	public function destroy(Apidbdua $apidbdua)
	{
		$apidbdua->delete();
		return $this->sendResponse([], 'Data telah di hapus.');
	}
}

<?php

namespace App\Http\Controllers;

use App\Models\PembelianBarang;
use App\Http\Requests\StorePembelianBarangRequest;
use App\Http\Requests\UpdatePembelianBarangRequest;

class PembelianBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePembelianBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePembelianBarangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PembelianBarang  $pembelianBarang
     * @return \Illuminate\Http\Response
     */
    public function show(PembelianBarang $pembelianBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PembelianBarang  $pembelianBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(PembelianBarang $pembelianBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePembelianBarangRequest  $request
     * @param  \App\Models\PembelianBarang  $pembelianBarang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePembelianBarangRequest $request, PembelianBarang $pembelianBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PembelianBarang  $pembelianBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembelianBarang $pembelianBarang)
    {
        //
    }
}

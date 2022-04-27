<?php

namespace App\Http\Controllers;

use App\Models\Pembukuan;
use App\Http\Requests\StorePembukuanRequest;
use App\Http\Requests\UpdatePembukuanRequest;

class PembukuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembukuan.index');
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
     * @param  \App\Http\Requests\StorePembukuanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePembukuanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembukuan  $pembukuan
     * @return \Illuminate\Http\Response
     */
    public function show(Pembukuan $pembukuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembukuan  $pembukuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembukuan $pembukuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePembukuanRequest  $request
     * @param  \App\Models\Pembukuan  $pembukuan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePembukuanRequest $request, Pembukuan $pembukuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembukuan  $pembukuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembukuan $pembukuan)
    {
        //
    }
}

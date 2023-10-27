<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfile extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $nama = 'Shadam Alfareza';
        $kelas = '5E';
        $jurusan = 'Informatika';
        $motor = ['R6','CBR600RR','GSX600R','ZX6R'];
        return view('data',['nama'=>$nama,'kelas'=>$kelas,'jurusan'=>$jurusan,'motor'=>$motor]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

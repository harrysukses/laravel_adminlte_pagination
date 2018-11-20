<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input,View;
use App\karyawan;

class KaryawanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Input::has('search')) {
            if(strlen(Input::has('search')) > 0){
                $karyawans = karyawan::
                    orWhere('nama', 'LIKE', '%'.Input::get('search').'%')
                    ->orWhere('umur', 'LIKE', '%'.Input::get('search').'%')
                    ->paginate(5);
            }else{
                $karyawans = karyawan::paginate(5);
            }
        }else{
            $karyawans = karyawan::paginate(5);
        }
        if(\Request::ajax()){
            return View::make('karyawan.tabel', compact('karyawans'));
        }

        return View::make('karyawan.index', compact('karyawans'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

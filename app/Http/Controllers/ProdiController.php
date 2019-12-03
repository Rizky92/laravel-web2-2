<?php

namespace App\Http\Controllers;

use App\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = Prodi::all();

        return view('prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Prodi::create($input);

        return redirect(route('prodi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prodi $prodi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prodi = Prodi::find($id);

        return view('prodi.show', compact($prodi));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prodi $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodi = Prodi::find($id);

        return view('prodi.edit', compact($prodi));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prodi $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = $request->all();
        Prodi::find($id)->update($edit);

        return redirect(route('prodi.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prodi $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prodis::destroy($id);

        return redirect(route('prodi.index'));
    }
}

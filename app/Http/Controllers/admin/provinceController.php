<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Province;
use Illuminate\Http\Request;

class provinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Province $province)
    {
        $title = "Province page";
        $province = Province::all();
        return view('admin.province.index', compact('title', 'province'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Province::create(['province' => $request->province]);
        return redirect('/admin/province');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Province $province)
    {
        $data = ['province' => $request->province];
        $province->update($data);
        return redirect('/admin/province');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $province)
    {
        //
    }
}

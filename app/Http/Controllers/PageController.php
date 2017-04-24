<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use View;
use DB;

class PageController extends Controller

{
    /* All Apps */
    public function data()      {return view('pages.data');}

    /* Pages */
    public function profil () {return view('pages.profil');}
    public function kontak () {return view('pages.kontak');}
    public function disclaimer () {return view('pages.disclaimer');}
    public function faq () {return view('pages.faq');}
    public function sdank () {return view('pages.sdank');}

    /* Kabupaten*/
    public function mamuju() {return view('kab.mamuju');}

    public function spipmamuju()
    {

    }

    /* Data */
    public function dataspip () {return view('data.spip');}

    /* Bidang */
    public function tu()  {return view('bid.tu');}
    public function ipp() {return view('bid.ipp');}
    public function apd() {return view('bid.apd');}
    public function an()  {return view('bid.an');}
    public function inv() {return view('bid.inv');}
    public function p3a() {return view('bid.p3a');}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // List of All Pages

        $pages = Page::orderBy('id', 'Asc')->paginate(10);;

        return view ('pages.index')->with('pages', $pages);
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

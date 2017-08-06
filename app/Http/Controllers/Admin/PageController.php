<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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
    public function rkt () {return view('pages.rkt');}
    public function kontak () {return view('pages.kontak');}

    public function getKontak (Request $request)
    {
        $data = [
          'nama'    => $request->nama,
          'email'   => $request->email,
          'tentang' => $request->tentang,
          'pesan'   => $request->pesan
        ];

        Mail::send('post.kontak', $data, function($message) use ($data) {
          $message->nama($data['nama']);
          $message->from($data['email']);
          $message->to('bpkp@mydata.id');
          $tentang->tentang($data['tentang']);
          $tentang->subject($data['pesan']);
        });

        // Alert Success Message
        Alert::success('Pesan Terkirim !')->persistent("Tutup");

        return redirect()->route('kontak');
    }

    public function disclaimer () {return view('pages.disclaimer');}
    public function faq () {return view('pages.faq');}
    public function sdank () {return view('pages.sdank');}



    /* Data */
    public function dataspip () {return view('data.spip');}

    /* Bidang */
    public function bid()  {return view('bid.index');}
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

}

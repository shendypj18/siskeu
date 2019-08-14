<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seksi;

class SeksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth'); //melakukan auth untuk login
    }
 

    public function index()
    {
        $seksi = Seksi::all();
        return view('admin.dataseksi',compact('seksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexx()
    {
        return view ('admin.tambahseksi');
    }

    public function create()
    {
        return view ('admin.tambahseksi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = new Seksi();
        $input->nama_seksi = $request->nama_seksi;
        $input->nama_kepala = $request->nama_kepala;
        $input->save();

        return redirect()->route('seksi');
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
        $seksi = Seksi::where('id_seksi',$id)->get();
        #dd($seksi);
        return view('admin.editseksi',['seksi' => $seksi]);
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
        $input =$request->all();
        $seksi = Seksi::where('id_seksi',$id)->first();
        #dd($seksi);
        $seksi->nama_seksi = $input['nama_seksi'];
        $seksi->nama_kepala = $input['nama_kepala'];
        #dd($seksi);
        $seksi->save();
        #dd($seksi);
        return redirect()->route('seksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seksi = Seksi::where('id_seksi',$id)->delete();
        #dd($seksi);
        return redirect('dataseksi')->with('success','Data seksi telah di hapus');
    }
}

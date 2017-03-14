<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Surat;
use App\Pegawai;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = Surat::all();
        return view('input_surat.index')->with('surat', $surat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Pegawai::all();
        $list_pegawai  = Pegawai::pluck('nama', 'id');        
        return view('input_surat.create')   ->with('list_pegawai', $list_pegawai)
                                            ->with('pegawai', $pegawai);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $surat = new Surat();
        $tanggal = Carbon::createFromFormat('j/m/Y', $request->get('tanggal'));
        $surat->tanggal = $tanggal;
        $surat->nomor = $request->input('nomor');
        $surat['foto1'] = $this->foto1($request);
        $surat['foto2'] = $this->foto2($request);
        $surat->save();

        $surat->pegawai()->attach($request->input('surat_pegawai'));
        return redirect('surat');
    }

    private function foto1(Request $request){
        $foto = $request->file('foto1');
        $ext = $foto->getClientOriginalExtension();

        $foto_name  = date('YmdHis'). ".$ext";
        $request->file('foto1')->move(public_path() . '/public/fotoupload/', $foto_name);
        return $foto_name;
    }

    private function foto2(Request $request){
        $foto = $request->file('foto2');
        $ext = $foto->getClientOriginalExtension();

        $foto_name  = date('YmdHis'). ".$ext";
        $request->file('foto2')->move(public_path() . '/public/fotoupload/', $foto_name);
        return $foto_name;
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
        $surat = Surat::findOrFail($id);   
        return view('input_surat.edit')->with('surat', $surat);
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
        $surat = Surat::findOrFail($id);
        $tanggal = Carbon::createFromFormat('j/m/Y', $request->get('tanggal'));
        $surat->tanggal = $tanggal;
        $surat->nomor = $request->get('nomor');        
        $surat->save();
        return redirect('surat');
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

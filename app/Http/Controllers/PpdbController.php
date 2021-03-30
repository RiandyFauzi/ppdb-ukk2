<?php

namespace App\Http\Controllers;

use App\Http\Requests\PpdbRequest;
use App\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home', [
            'ppdb' => Ppdb::all()
          ]);
    }
    public function index()
    {
        return view('ppdb.index', [
            'ppdb' => Ppdb::all()
          ]);
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
    public function store(PpdbRequest $request)
    {
        $attr = $request->all();

        Ppdb::create([
          'nis' => $request->nis,
          'nama' => $request->nama,
          'jenis_kelamin' => $request->jenis_kelamin,
          'tempat_lahir' => $request->tempat_lahir,
          'tgl_lahir' => $request->tgl_lahir,
          'alamat' => $request->alamat,
          'asal_sekolah' => $request->asal_sekolah,
          'kelas' => $request->kelas,
          'jurusan' => $request->jurusan,    
      ]);
      
        session()->flash('success', 'Post was created');
        return redirect('/index');
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
        $ppdb = Ppdb::find($id);
        return view('ppdb.edit',compact('ppdb'));
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
       
        $data = Ppdb::find($id);
        $data->update([
           
            'nis' => $request->get('nis'),
            'nama' => $request->get('nama'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tgl_lahir' => $request->get('tgl_lahir'),
            'alamat' => $request->get('alamat'),
            'asal_sekolah' => $request->get('asal_sekolah'),
            'kelas' => $request->get('kelas'),
            'jurusan' => $request->get('jurusan'),
        ]);

        return redirect('/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          
        $ppdb = Ppdb::find($id);
        $ppdb->delete();
        return redirect('index');
    }
}

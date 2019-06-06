<?php

namespace App\Http\Controllers;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Compilers\Concerns\CompilesJson;
use SebastianBergmann\CodeCoverage\Report\Xml\File;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();
        return view('pertemuan1.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertemuan1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            "nama" => $request->nama,
            "npm" => $request->npm,
            "email" => $request->email,
            "fakultas" => $request->fakultas,
            "jurusan" => $request->jurusan,
        );
        Mahasiswa::create($data);
        // return response()->json(['success' => 'data tertambah']);
        return redirect('mahasiswa');
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
        $data = Mahasiswa::findOrFail($id);
        return view('pertemuan1.edit', compact('data'));
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
        $data = array(
            "nama" => $request->nama,
            "npm" => $request->npm,
            "email" => $request->email,
            "fakultas" => $request->fakultas,
            "jurusan" => $request->jurusan,
        );
        Mahasiswa::whereId($id)->update($data);
        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mahasiswa::findOrFail($id);
        $data->delete();
        return redirect('mahasiswa');
    }

    public function showlogin(){
        return view('pertemuan1.login');
    }

}

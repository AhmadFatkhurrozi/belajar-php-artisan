<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class CrudController extends Controller
{
    public function index ()
    {
    	$pegawai = DB::table('pegawai')->paginate(5);
 
    	return view('index',['pegawai' => $pegawai]);
    }

    public function tambah()
    {
    	return view('tambah');
    }

    // method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('pegawai')->insert([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');

	}

	public function edit($id)
	{
		$pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

		return view('edit', ['pegawai' => $pegawai]);
	}

	public function update(Request $request)
	{
		// insert data ke table pegawai
		DB::table('pegawai')->where('pegawai_id', $request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');

	}

	public function hapus($id)
	{
		DB::table('pegawai')->where('pegawai_id', $id)->delete();

		return redirect ('/pegawai');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;

		$pegawai = DB::table('pegawai')
		->where('pegawai_nama', 'like', "%".$cari."%")
		->paginate();

		return view('index',['pegawai' => $pegawai]);
	}
}

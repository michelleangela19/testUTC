<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //

    public function index(){
        $mahasiswa = new Mahasiswa;

        dump($mahasiswa);
    }

    public function insert(){
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '12345678';
        $mahasiswa->nama = 'Michelle';
        $mahasiswa->tanggal_lahir = '2003-19-11';
        $mahasiswa->ipk = 3.5;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function update(){
        $mahasiswa = Mahasiswa::find(1); //find mahasiswa dengan id "1" (primary key)
        $mahasiswa->tanggal_lahir = '2003-12-30';
        $mahasiswa->ipk = 3.0;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function delete(){
        $mahasiswa = Mahasiswa::find(2);
        $mahasiswa->delete();

        dump($mahasiswa);
    }

    public function allView(){
        $mahasiswas = Mahasiswa::all();
        return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswas]);
    }

    public function filter(){
        $mahasiswa = Mahasiswa::where('ipk', '<', '3')->orderby('nama', 'desc')->get();

        return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswa]);
    }
}

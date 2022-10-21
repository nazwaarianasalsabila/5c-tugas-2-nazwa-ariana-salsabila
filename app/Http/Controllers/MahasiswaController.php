<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa/index', [
        'mahasiswa1' => 'Gilang',
        'mahasiswa2' => 'Mark',
        'mahasiswa3' => 'Sule',
        'mahasiswa4' => 'Putri',
        'mahasiswa5' => 'Sity',
        'mahasiswa6' => 'Foden',
        'mahasiswa7' => 'Hanna',
        'mahasiswa8' => 'Mahrez',
        'mahasiswa9' => 'Guardiola',
        'mahasiswa10' => 'Hilda',
    ]);
    }

    // RAW
    public function selectRaw(){
        $data = DB::select('select * from mahasiswa');
        dump($data);
    }

    public function insertRaw(){
        $data = DB::insert("insert into mahasiswa (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photos) values('2022101819', 'Galih', 'laki-laki', 'cikampek', 'jakarta', '2022-10-14', '' )");
        dump($data);
    }

    public function updateRaw(){
        $data = DB::update("update mahasiswa set nama='Tommy', jenis_kelamin='laki-laki' where id=2");
        dump($data);
    }

    public function deleteRaw(){
        $data = DB::delete("delete from mahasiswa where id=10");
        dump($data);
    }

    // QUERY BUILDER
    public function selectQueryBuilder(){
        $data = DB::table('mahasiswa')->get();
        dump($data);
    }

    public function insertQueryBuilder(){
        $data = DB::table('mahasiswa')->insert([
            'npm' => '2022101817',
            'nama' => 'Silfa',
            'jenis_kelamin' => 'perempuan',
            'alamat' => 'purwakarta',
            'tempat_lahir' => 'cianjur',
            'tanggal_lahir' => '2022-09-14',
            'photos' => '',
        ]);

        dump($data);
    }

    public function updateQueryBuilder()
    {
        $data = DB::table('mahasiswa')->where('nama', 'Silfa')->update([
            'nama' => 'Sofiana Lestari',
            'jenis_kelamin' => 'perempuan'
        ]);
        dump($data);
    }

    public function deleteQueryBuilder(){
        $data = DB::table('mahasiswa')->where('id', 3)->delete();
        dump($data);
    }

    // ELOQUENT
    public function selectEloquent()
    {
        $data = Mahasiswa::all();
        dump($data);
    }

    public function insertEloquent(){
        $data = Mahasiswa::create(
            [
            'npm' => '2022101816',
            'nama' => 'Nicolas',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'jakarta',
            'tempat_lahir' => 'garut',
            'tanggal_lahir' => '2021-11-14',
            'photos' => '',
            ]
            );

            return 'Data berhasil ditambahkan!';
    }

    public function updateEloquent(){
        Mahasiswa::where('id', 6)->first()->update([
            'alamat' => 'padang'
        ]);

        return 'Data berhasil diubah!';
    }

    public function deleteEloquent(){
        Mahasiswa::where('id', 8)->delete();
        return 'Data berhasil dihapus!';
    }

}

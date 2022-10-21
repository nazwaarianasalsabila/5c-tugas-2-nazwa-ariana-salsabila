<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatkulController extends Controller
{
    public function index()
    {
        $dataMK = [
        'mkBlockchain' => 'Blockchain',
        'mkDatmin' => 'Data Mining',
        'mkTechnopreneur' => 'Technopreneur',
        'mkCloudcomputing' => 'Cloud Computing',
        'mkMatematikadiskrit' => 'Matematika Diskrit',
        'mkJaringan' => 'Jaringan',
        'mkBahasainggris' => 'Bahasa Inggris',
        'mkPemrogramandasar' => 'Pemrograman Dasar',
        'mkPemrogramanmobile' => 'Pemrograman Mobile',
        'mkFrameworkweb' => 'Framework Web',
    ];
    return view('matkul/index');
    }

    // RAW
    public function selectRaw()
    {
        $data = DB::select('select * from matkul');
        dump($data);
    }

    public function insertRaw(){
        $data = DB::insert("insert into matkul (kode_mk, nama_mk) values('abc011','Kalkulus')");
        dump($data);
    }

    public function updateRaw(){
        $data = DB::update("update matkul set nama_mk='Bahasa Jepang' where id=7");
        dump($data);
    }

    public function deleteRaw(){
        $data = DB::delete("delete from matkul where id=11");
        dump($data);
    }

    // QUERY BUILDER
    public function selectQueryBuilder(){
        $data = DB::table('matkul')->get();
        dump($data);
    }

    public function insertQueryBuilder(){
        $data = DB::table('matkul')->insert([
            'kode_mk' => 'abc012',
            'nama_mk' => 'Machine Learning',
        ]);

        dump($data);
    }

    public function updateQueryBuilder()
    {
        $data = DB::table('matkul')->where('nama_mk', 'Data Mining')->update([
            'nama_mk' => 'Data Science'
        ]);
        dump($data);
    }

    public function deleteQueryBuilder(){
        $data = DB::table('matkul')->where('id', 3)->delete();
        dump($data);
    }

    // ELOQUENT
    public function selectEloquent(){
        $data = Matkul::all();
        dump($data);
    }

    public function insertEloquent(){
        $data = Matkul::create(
            [
            'kode_mk' => 'abc013',
            'nama_mk' => 'Basis Data',
            ]
            );

            return 'Data berhasil ditambahkan!';
    }

    public function updateEloquent(){
        Matkul::where('id', 6)->first()->update([
            'nama_mk' => 'Sistem Operasi'
        ]);

        return 'Data berhasil diubah!';
    }

    public function deleteEloquent(){
        Matkul::where('id', 4)->delete();
        return 'Data berhasil dihapus!';
    }
}

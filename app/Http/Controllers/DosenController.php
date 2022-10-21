<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index()
    {
        $data = [
        'dosenBlockchain' => 'Adhi Rizal',
        'dosenDatmin' => 'Betha Nurina Sari',
        'dosenTechnopreneur' => 'Hannie',
        'dosenCloudcomputing' => 'Arip Solehudin',
        'dosenMatematikadiskrit' => 'Carudin',
        'dosenJaringan' => 'Chaerudin',
        'dosenBahasainggris' => 'Totoh',
        'dosenPemrogramandasar' => 'Asep',
        'dosenPemrogramanmobile' => 'Purwantoro',
        'dosenFrameworkweb' => 'Aji Primajaya ',

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

    // return view('dosen/index', [
    //     'dosens' => Dosen::all()
    // ]);
    return view('dosen/index', $data);

    }

    // RAW SQl
    public function selectRaw(){
        $sql = DB::select("select * from dosen");
        dump($sql);
    }

    public function insertRaw(){
        $data = DB::insert("insert into dosen (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photos) values('1810202211', 'Ratna', 'perempuan', 'bandung', 'jakarta', '2022-10-18', '' )");
        dump($data);
    }

    public function updateRaw(){
        $data = DB::update("update dosen set nama='Alfatih', jenis_kelamin='laki-laki' where id=11");
        dump($data);
    }

    public function deleteRaw(){
        $data = DB::delete("delete from dosen where id=12");
        dump($data);
    }

    // QUERY BUILDER
    public function selectQueryBuilder(){
        $data = DB::table('dosen')->get();
        dump($data);
    }

    public function insertQueryBuilder(){
        $data = DB::table('dosen')->insert([
            'nidn' => '1810202212',
            'nama' => 'saepudin',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'purwakarta',
            'tempat_lahir' => 'batam',
            'tanggal_lahir' => '2022-10-14',
            'photos' => '',
        ]);

        dump($data);
    }

    public function updateQueryBuilder()
    {
        $data = DB::table('dosen')->where('nama', 'Saepudin')->update([
            'nama' => 'Tiara Ayu',
            'jenis_kelamin' => 'perempuan'
        ]);
        dump($data);
    }

    public function deleteQueryBuilder(){
        $data = DB::table('dosen')->where('id', 4)->delete();
        dump($data);
    }

    // ELOQUENT
    public function selectEloquent(){
        $data = Dosen::all();
        dump($data);
    }

    public function insertEloquent(){
        $data = Dosen::create(
            [
            'nidn' => '1810202213',
            'nama' => 'Arifin',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'karawang',
            'tempat_lahir' => 'garut',
            'tanggal_lahir' => '2022-10-14',
            'photos' => '',
            ]
            );

            return 'Data berhasil ditambahkan!';
    }

    public function updateEloquent(){
        Dosen::where('id', 6)->first()->update([
            'alamat' => 'jakarta'
        ]);

        return 'Data berhasil diubah!';
    }

    public function deleteEloquent(){
        Dosen::where('id', 6)->delete();
        return 'Data berhasil dihapus!';
    }
}

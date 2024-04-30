<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

// Model
use App\Models\HasilResponse;
use App\Models\JenisKelamin;
use App\Models\Profesi;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.s
     */
    public function RandomUser()
    {
        // Data
        for ($i=1 ; $i <= 25  ; $i++ ) { 
            // get Endpoint API
            $response = Http::get('https://randomuser.me/api');

            // check
            if ($response->successful()) {
                // data response
                $data = $response->json();
                
                // data results
                $results = $data['results'];
            
                // get total angka < 7
                $md5AngkaKurang = $results[0]['login']['md5'];
                preg_match_all('/[0-6]/', $md5AngkaKurang, $matcheOne);
                $angkaKurang = $matcheOne[0];

                // get total angka > 7
                $md5AngkaLebih = $results[0]['login']['md5'];
                preg_match_all('/[89]/', $md5AngkaLebih, $matchesTwo);
                $angkaLebih = $matchesTwo[0];

                // String Random  (A,B,C,D) -> Profesi
                $charRand = 'ABCDE';
                $profesi = substr(str_shuffle($charRand),0,1);


                // create to table hasil response
                $hasilResponse = HasilResponse::create([
                    'nama' => $results[0]['name']['first'] . " " . $results[0]['name']['last'],
                    'jenis_kelamin' => $results[0]['gender'] == "male" ? 1 : 2,
                    'email' => $results[0]['email'],
                    'nama_jalan' => $results[0]['location']['street']['number'] . " " . $results[0]['location']['street']['name'],
                    'angka_kurang' => count($angkaKurang),
                    'angka_lebih' => count($angkaLebih),
                    'profesi' => $profesi,
                    'plain_json' => json_encode($results[0]),
                ]);
            } 
        }
    }

    public function index(){
        // get data user
        $data = HasilResponse::with('jenisKelamin','namaProfesi')->paginate(10);

        // data profesi
        $profesi = Profesi::withCount('profesi')->get();

        // count profesi
        return view('home', compact('data','profesi'));
    }


}

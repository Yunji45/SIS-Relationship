<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Perdagangan1;
use App\Models\Province;
use App\Models\District;
use App\Models\Regency;
use App\Models\Village;

class PerdaController extends Controller
{
    public function GetAlamat ()
    {
        $provincies = Province::all();
        $districts = District::all();
        $regencies = Regency::all();
        $villages = Village ::all();

        //kecamatan
        $dis = $provinces->districts;
        //kabupaten
        $reg = $provincies -> regencies;
    }

    public function StorePerdagangan1(Request $req)
    {
        // $user = Auth::user();
        // $test = Perdagangan1::where('user_id', $user->id)->first();

        $validated = $req->validate([
            'jam' => 'required',
            'ket' => 'required',
            'jml_Rp' => 'required',
        ]);

        $post = Perdagangan1::create([
            'user_id' =>Auth::user()->id,
            'jam' => $req->jam,
            'ket' => $req->ket,
            'jml_Rp' => $req->jml_Rp,
        ]);

        return redirect()->route('dashboard')->with('berhasil', 'Successfully insert data');
    }
}

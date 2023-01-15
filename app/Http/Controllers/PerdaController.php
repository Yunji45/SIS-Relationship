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

        return redirect()->route('perda1.province')->with('berhasil', 'Successfully insert data');
    }

    public function StoreDistric()
    {

    }

    public function StoreProvince ( Request $request)
    {

        $per = Perdagangan1::all();

        $validated= $request->validate([
            'kode' => 'required',
            'name' => 'required',
            'ibukota' => 'required',
        ]);

        $ihi = Province::create([
            'user_id' =>$per->id,
            'kode' => $request->kode,
            'name' => $request->name,
            'ibukota' => $request->ibukota,
        ]);
        return redirect()->route('perda1.province')->with('berhasil', 'Successfully insert data');

    }

    public function StoreRegency()
    {

    }

    public function StoreVillage()
    {

    }

    public function CreateVillage()
    {
        return view ('Backend/perda1/village');
    }

    public function CreateRegency()
    {
        return view('Backend/perda1/regenci');
    }

    public function CreateProvince()
    {
        return view ('Backend/perda1/province');
    }

    public function CreateDistric()
    {
        return view ('Backend/perda1/distric');
    }
}

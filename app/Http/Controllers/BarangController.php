<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Contracts\View\View;

class BarangController extends Controller
{
    public function index(){
        
        $barang = Barang::all();
        

      

    
        return view('index')->with('barang', $barang);
    }

    public function tambah_barang(Request $request){

        $this->validate($request,[
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'jumlah_barang' => 'required',
        'harga_barang' => 'required',
    ]);

    $barang = Barang::create([
        'kode_barang' => $request->kode_barang,
        'nama_barang' => $request->nama_barang,
        'jumlah_barang' => $request->jumlah_barang,
        'harga_barang' => $request->harga_barang,

    ]);

    if ($barang) {
              return redirect()->route('Barang');
        } else {
            return redirect()->route('Barang');
        }

}


}

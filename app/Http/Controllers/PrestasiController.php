<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Lomba;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;

class PrestasiController extends Controller
{
// Route Admin
    public function index()
    {  
        $kejuaraan = Prestasi::sortable()->get();
        return view('admin.prestasi', compact(['kejuaraan']) , [
            "title" => 'Manajemen Prestasi'
        ]);
    }

    public function admin_add_prestasi()
    {
        return view('admin.add_prestasi' , [
            "title" => 'Manajemen Prestasi'
        ]);
    }

    public function admin_create_prestasi(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'npm' => 'required',
            'jurusan' => 'required',
            'lomba' => 'required',
            'juara' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
        ]);
        
        Prestasi::create([
            'name' => $request->name,
            'npm' => $request->npm,
            'jurusan' => $request->jurusan,
            'juara' => $request->juara,
            'lomba' => $request->lomba,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tanggal' => $request->date,
        ]);
        return redirect()->route('prestasi')->with('sukses','Data Berhasil Ditambahkan');;
    }

    public function admin_edit_prestasi($id)
    {
        $kejuaraan = Prestasi::find($id);
        return view('admin.edit_prestasi', compact(['kejuaraan']) , [
            "title" => 'Manajemen Prestasi'
        ]);
    }

    public function admin_update_prestasi(Request $request, $id)
    {
        $kejuaraan = Prestasi::find($id);

        $validasi = $request->validate([
            'name' => 'required',
            'npm' => 'required',
            'jurusan' => 'required',
            'lomba' => 'required',
            'juara' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
        ]);

        $cek = [
                'name' => $request->name,
                'npm' => $request->npm,
                'jurusan' => $request->jurusan,
                'juara' => $request['juara'],
                'lomba' => $request['lomba'],
                'penyelenggara' => $request['penyelenggara'],
                'tingkat' => $request['tingkat'],
                'tanggal' => $request['date'],
            ];


        if($kejuaraan->update($cek)){
            $kejuaraan->save();
        }

        return redirect()->route('prestasi')->with('sukses','Data Berhasil Diedit');
    }

    public function admin_delete_prestasi($id){
        $data = Prestasi::find($id);
        $data->delete();
        return redirect()->route('prestasi')->with('sukses','Data Berhasil Dihapus');
    }

    public function perolehan_prestasi($id)
    {
        $lomba = Lomba::find($id);
        return view('admin.perolehan_prestasi',compact(['lomba']) , [
            "title" => 'Manajemen Lomba'
        ]);
    }

    public function konfirmasi_lomba(Request $request, $id){
        $lomba = Lomba::find($id);        
        Prestasi::create(
             [
                'name' => $lomba->name,
                'npm' => $lomba->npm,
                'jurusan' => $lomba->jurusan,
                'juara' => $request->juara,
                'lomba' => $lomba->lomba,
                'penyelenggara' => $lomba->penyelenggara,
                'tingkat' => $lomba->tingkat,
                'tanggal' => $lomba->tanggal,
             ]
        );
            return redirect()->route('lomba')->with('sukses','Prestasi Dikonfirmasi');
    }
    
    public function download(){
        $kejuaraan = Prestasi::all();
        return view('data_prestasi_pdf', compact(['kejuaraan']));
        // $pdf = PDF::loadview('data_prestasi_pdf' , compact(['kejuaraan']));
        // $pdf->setPaper('landscape');
        // return $pdf->stream('Data-Prestasi.pdf');
    }
 // End Route Admin

 public function user_download(){
    $kejuaraan = Prestasi::where("name", Auth::user()->name)->get();
    $pdf = PDF::loadview('data_prestasi_pdf' , compact(['kejuaraan']));
    $pdf->setPaper('A4', 'potrait');
    return $pdf->download('Data-Prestasi.pdf');
}
 
         
}



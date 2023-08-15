<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Helpdesks;
use App\Models\Rfcs;

class HelpdeskController extends Controller
{
    public function index(){
        $dataHelpdesk = Helpdesks::all();
        $dataLaporan = Helpdesks::all();
    
        return view('admin.helpdesk', compact('dataHelpdesk','dataLaporan'));
       }
    
    public function create(){
        return view('admin.create');
        }
    
    public function store(Request $request){
            $dataHelpdesk = $request->validate([
             'nama' => 'required',
             'email'=> 'required',
             'kategori' => 'required',
             'telepon' => 'required',
             'judul' => 'required',
             'laporan' => 'required',
             'file_pendukung' => 'required',
    
            ]);
        
        $file_pendukung= $request->file('file_pendukung');
        $nama_file_pendukung = 'FileAduan'.date('Ymdhis').'.'.$request->file('file_pendukung')->extension();
        $file_pendukung->move(public_path('dokumen'),$nama_file_pendukung);

        $newDataHelpdesk = Helpdesks::create(
         [
            'nama' => $request->nama,
            'email' => $request->email,
            'kategori' => $request->kategori,
            'telepon' => $request->telepon,
            'judul' => $request->judul,
            'laporan' => $request->laporan,
            'file_pendukung' => $nama_file_pendukung
         ]
        );

             return redirect(route('csirt.helpdesk'));
            }

            public function csirt_helpdesk(){
                $dataHelpdesk = Helpdesks::all();
                $dataRfc = Rfcs::all();
                return view('csirt.csirthelpdesk', compact('dataHelpdesk','dataRfc'));
            }

            public function file_laporan($id){
                $dataLaporan = Helpdesks::find([$id]);
                return view ('admin.file_laporan', compact('dataLaporan'));

            }
}

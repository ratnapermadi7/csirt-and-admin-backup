<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visis;
use App\Models\Rfcs;

class VisiController extends Controller
{
    public function index(){
        $dataVisi = Visis::all();
    
        return view('admin.visi', compact('dataVisi'));
       }
    
    // public function create(){
    //     return view('admin.create');
    //     }
    
    public function store(Request $request){
            $dataVisi = $request->validate([
             'header' => 'required',
             'judul_visi'=> 'required',
             'isi_visi'=> 'required',
             'judul_misi'=> 'required',
             'misi1'=> 'required',
             'misi2'=> 'required',
             'misi3'=> 'required',
             'misi4'=> 'required',
             'misi5'=> 'required',

            ]);
        
            $newDataVisi = Visis::create($dataVisi);
            return redirect(route('visi.index'));
            }
    
    // public function show($id){
    //             $data = Visis::find($id);
    //             return view('admin.show', compact('data'));
    //          }
    
    public function update(Request $request, $id){
        $dataVisi = Visis::find($id);
        $dataVisi->update($request->all());
    
        return redirect(route('visi.index', compact('dataVisi')));
        }

        public function csirt_visi(){
            $dataVisi = Visis::all();
            $dataRfc = Rfcs::all();
            return view('csirt.csirt_visi', compact('dataVisi','dataRfc'));
        }
}

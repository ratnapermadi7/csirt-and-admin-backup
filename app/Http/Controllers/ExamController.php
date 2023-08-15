<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exams;

class ExamController extends Controller
{
    public function index(){
        $data = Exams::all();
        return view('exam.index', compact('data'));
    }

    public function create(){
        return view('exam.create');
    }

    public function store(Request $request){
        $data = $request->validate([
         'title' => 'required',
         'content'=> 'required',
         'dokumen'=> 'required'
         // 'image'=>'required'
        ]);

        $dokumen = $request->file('dokumen');
        $nama_dokumen = 'FT'.date('Ymdhis').'.'.$request->file('dokumen')->extension();
        $dokumen->move(public_path('dokumen'),$nama_dokumen);

        $newData = Exams::create(
         [
            'title' => $request->title,
            'content' => $request->content,
            'dokumen' => $nama_dokumen
         ]
        );
        
        return redirect(route('exam.index'));

     }

     public function show($id){
        $data = Exams::find($id);
        return view('exam.show', compact('data'));
     }

     public function updatedata(Request $request, $id){
   
            $nama_dokumen = null;

            $data = $request->validate([
               'title' => 'required',
               'content'=> 'required',
               'dokumen'=> 'required'
               // 'image'=>'required'
              ]);

              if ($request->dokumen){
               $nama_dokumen = 'FT'.date('Ymdhis').'.'.$request->file('dokumen')->extension();
               $request->dokumen->move(public_path('dokumen'),$nama_dokumen);
              }

            Exams::find($id)->update([
               'title' => $request->title,
            'content' => $request->content,
            'dokumen' => $nama_dokumen
            ]);
        
      
        return redirect(route('exam.index'));
     }

     public function delete($id){
        $data = Exams::find($id);
        $data->delete();
        return redirect(route('exam.index'));
     }

     public function webuser(){
        $data = Exams::all();
        return view('customer.webuser', compact('data'));
     }

     public function store_user(){
        $data = $request->validate([
            'aduan' => 'required'
           ]);
    
           $newData = Exams::create($data);
           return redirect(route('exam.webuser'));
     }
}

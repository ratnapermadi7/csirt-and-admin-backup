<?php

namespace App\Http\Controllers;
use App\Models\Rfcs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RfcController extends Controller
{
    public function index(){
        $dataRfc = Rfcs::all();
        return view('admin.rfc', compact('dataRfc'));
    }

    public function create(){
        return view('rfc.create');
    }

    public function store(Request $request){
        $dataRfc = $request->validate([
        'rfc_indo'=>'required',
         'rfc_english'=> 'required'
         // 'image'=>'required'
        ]);

        $rfc_indo = $request->file('rfc_indo');
        $nama_rfc_indo = 'rfc_1_'.date('Ymdhis').'.'.$request->file('rfc_indo')->extension();
        $rfc_indo->move('dokumen/',$nama_rfc_indo);


        $rfc_english = $request->file('rfc_english');
        $nama_rfc_english = 'rfc_2_'.date('Ymdhis').'.'.$request->file('rfc_english')->extension();
        $rfc_english->move('dokumen/',$nama_rfc_english);

        $newDataRfc = Rfcs::create(
         [
            'rfc_indo' => $nama_rfc_indo,
            'rfc_english' => $nama_rfc_english
         ]
        );
        
      return view('admin.rfc',compact('dataRfc'));
    }

     public function update(Request $request, $id){

      $nama_rfc_indo = null;
      $nama_rfc_english = null;

      $dataRfc = $request->validate([
         'rfc_indo' => 'required',
         'rfc_english'=> 'required',
        ]);

        if ($request->rfc_indo){
         $nama_rfc_indo = 'rfc1'.date('Ymdhis').'.'.$request->file('rfc_indo')->extension();
         $request->rfc_indo->move(public_path('dokumen'),$nama_rfc_indo);
        }

        if ($request->rfc_english){
         $nama_rfc_english = 'rfc2'.date('Ymdhis').'.'.$request->file('rfc_english')->extension();
         $request->rfc_english->move(public_path('dokumen'),$nama_rfc_english);
        }

     

      Rfcs::find($id)->update([
      'rfc_indo' => $nama_rfc_indo,
      'rfc_english' => $nama_rfc_english,
      ]);

      return redirect(route('rfc.index', compact('dataRfc')));
      //   $dataRfc = Rfcs::find($id);
      // //   $dataRfc->update($request->all());

      // //   $dataRfc = $request->validate([
      // //    'rfc_indo'=>'required',
      // //     'rfc_english'=> 'required'
      // //     // 'image'=>'required'
      // //    ]);

      //    if($request->hasfile('rfc_indo')){

      //       $destination = 'dokumen/'.$dataRfc->rfc_indo;
      //       // $path = Storage::putFile('dokumen/', $request->file('rfc_indo'));
      //       if(File::exist($destination)){
      //          File::delete($destination);
      //       }
      //       $rfc_indo = $request->file('rfc_indo');
      //       $nama_rfc_indo = 'rfc_1_'.date('Ymdhis').'.'.$request->file('rfc_indo')->extension();
      //       $rfc_indo->move('dokumen/',$nama_rfc_indo);
      //       $dataRfc->rfc_indo = $nama_rfc_indo;
    
      //    }

      //    dataRfc->update();

       
     }
}

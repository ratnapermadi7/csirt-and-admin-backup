<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Rfcs;

class NewController extends Controller
{
    public function index_news(){
        $dataNews = News::find([3]);
        return view('admin.highlight-news', compact('dataNews'));
       }

       public function index_subnews(){
        $dataSubNews1 = News::find([8]);
        $dataSubNews2 = News::find([9]);
        $dataSubNews3 = News::find([10]);
    
        return view('admin.sub-news', compact('dataSubNews1','dataSubNews2','dataSubNews3'));
       }
    
    // public function create(){
    //     return view('admin.create');
    //     }
    
    public function store(Request $request){
            $dataNew = $request->validate([
             'date' => 'required',
             'judul_berita'=> 'required',
             'link_berita'=> 'required',
             'gambar_berita'=> 'required',
             'teks_berita'=>'required'
            ]);
            $gambar_berita = $request->file('gambar_berita');
            $nama_gambar_berita= 'News_'.date('Ymdhis').'.'.$request->file('gambar_berita')->extension();
            $gambar_berita->move('dokumen/',$nama_gambar_berita);

            $newDataNews = News::create(
                [
                    'date' => $request->date,
                    'judul_berita' => $request->judul_berita,
                    'link_berita' => $request->link_berita,
                    'gambar_berita' => $nama_gambar_berita,
                    'teks_berita'=>$request->teks_berita
                ]
               );
               
            return redirect(route('news.index'));
            }

    public function update(Request $request, $id){

        $nama_gambar_berita = null;

        // $dataNews = $request->validate([
        //     'date' => 'required',
        //     'judul_berita'=> 'required',
        //     'link_berita'=> 'required',
        //     'gambar_berita'=> 'required',
        //     'teks_berita'=>'required'
        //    ]);

           if($request->gambar_berita){
                $nama_gambar_berita = 'News1'.date('Ymdhis').'.'.$request->file('gambar_berita')->extension();
                $request->gambar_berita->move(public_path('dokumen'),$nama_gambar_berita);
           }

                $dataNews = News::find($id)->update([
                'date' => $request->date,
                'judul_berita' => $request->judul_berita,
                'link_berita' => $request->link_berita,
                'gambar_berita' => $nama_gambar_berita,
                'teks_berita'=>$request->teks_berita
           ]);
                
                return redirect(route('news.index', compact('dataNews')));
                }
                public function updateSubNews(Request $request, $id){

                    $nama_gambar_berita = null;
            
                    // $dataNews = $request->validate([
                    //     'date' => 'required',
                    //     'judul_berita'=> 'required',
                    //     'link_berita'=> 'required',
                    //     'gambar_berita'=> 'required',
                    //     'teks_berita'=>'required'
                    //    ]);
            
                       if($request->gambar_berita){
                            $nama_gambar_berita = 'SubNews'.date('Ymdhis').'.'.$request->file('gambar_berita')->extension();
                            $request->gambar_berita->move(public_path('dokumen'),$nama_gambar_berita);
                       }
            
                            $dataSubNews = News::find($id)->update([
                            'date' => $request->date,
                            'judul_berita' => $request->judul_berita,
                            'link_berita' => $request->link_berita,
                            'gambar_berita' => $nama_gambar_berita,
                            'teks_berita' => $request->teks_berita
                       ]);

                    
                            
                            return redirect(route('subNews.index'));
                            }

                public function csirt_news(){
                    $dataNews = News::find([3]);
                    $dataSubNews1= News::find([8]);
                    $dataSubNews2= News::find([9]);
                    $dataSubNews3= News::find([10]);
                    
                    $dataRfc = Rfcs::all();

                    return view('csirt.csirt_home', compact('dataNews','dataSubNews1','dataRfc','dataSubNews2','dataSubNews3'));
                }
}

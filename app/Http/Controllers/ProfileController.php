<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profiles;
use App\Models\Rfcs;

class ProfileController extends Controller
{

public function index(){
    $dataProfile = Profiles::all();

    return view('admin.profile', compact('dataProfile'));
   }

public function create(){
    return view('admin.create');
    }

public function store(Request $request){
        $dataProfile = $request->validate([
         'title' => 'required',
         'content'=> 'required',
         // 'image'=>'required'
        ]);
    
        $newDataProfile = Profiles::create($dataProfile);
        return redirect(route('admin.profile'));
        }

public function show($id){
            $data = Profiles::find($id);
            return view('admin.show', compact('data'));
         }

public function update(Request $request, $id){
    $dataProfile = Profiles::find($id);
    $dataProfile->update($request->all());

    return redirect(route('admin.index', compact('dataProfile')));
    }

    public function csirt_profile(){
        $dataProfile = Profiles::all();
        $dataRfc = Rfcs::all();
        return view('csirt.csirtprofile', compact('dataProfile', 'dataRfc'));
    }

}



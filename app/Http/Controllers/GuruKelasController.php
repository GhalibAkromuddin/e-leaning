<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kelas as Model;

class GuruKelasController extends Controller
{
   public function index()
   {
        $data['model'] = Model::latest()->get();
        return view('guru.kelas_index',$data);
   }
   public function create();
   {
       $data ['model']= new Model();
       $data['method']='POST';
       $data['url'] = url('guru/kelas/store');
       $data['namaTombol']="Simpan";
return view('guru.kelas_form',$data);
   }
}

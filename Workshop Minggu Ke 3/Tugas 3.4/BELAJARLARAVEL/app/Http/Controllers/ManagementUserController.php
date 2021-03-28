<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
   public function index (){
       $nama="Nidha Kusumaningrum";

       $pelajaran =["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        //return "Hallo ini adalah method index, Dalam controller ManagementUser." ;
       return view('home',compact('nama','pelajaran'));
   }
           
    //public function create (){
    //return "Method ini nantinya akan digunakan untuk menampilkan form menambah user." ;
    //}
    //public function store (request $request){
    //   return "Method ini nantinya akan digunakan untuk menciptakan data baru." ;
    //}
    //pub//lic function show ($id){
    //    return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id." ;
    //    }
    //public function edit ($id){
    //    return "Method ini nantinya akan digunakan untuk mengubah data edit dengan id." ;
    //}
    //public function update (request $request, $id){
    //    return "Method ini nantinya akan digunakan untuk mengubah data user dengan id." ;
    //}
    //public function destroy ($id){
    //    return "Method ini nantinya akan digunakan untuk menghapus edit dengan id." ;
    //}
}
?>
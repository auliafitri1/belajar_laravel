<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Http\Response;

// class ItemController extends Controller
// {
//     /**
//      * Handle the incoming request.
//      */
//     public function __invoke(Request $request): string
//     {
//         return "Method __invoke() milik ItemController dijalankan y";
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Http\Response;

 class ItemController extends Controller
 {
 public function __invoke(): Response
 {
 $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
 "Lisa Permata"];

 return response()->view('mahasiswa',['mahasiswa' => $arrMahasiswa]);
}
 }

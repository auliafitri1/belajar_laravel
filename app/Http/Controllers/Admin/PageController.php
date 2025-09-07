<?php

//  namespace App\Http\Controllers\Admin;

//  use App\Http\Controllers\Controller;

//  class PageController extends Controller
//  {
//  public function index()
//  {
//  return "Halaman Home Admin";
//  }

//  public function tampil()
//  {
//  return "Data Mahasiswa Admin";
//  }
//  }

// namespace App\Http\Controllers\Admin;

//  use App\Http\Controllers\Controller;

//  class PageController extends Controller
//  {
//  public function index()
//  {
//  return "Halaman Home Admin";
//  }

//  public function tampil()
//  {
//  return "Data Mahasiswa Admin";
//  }

//  public function cobaFacade()
//  {
//  // kode akan kita tulis disini....
//  }

//  }

// namespace App\Http\Controllers\Admin;

//  use App\Http\Controllers\Controller;
//  class PageController extends Controller
//  {
//  //...
//  public function cobaFacade()
//  {
//  echo \Illuminate\Support\Str::snake('SedangBelajarLaravelUncover');
//  echo "<br>";
//  echo \Illuminate\Support\Str::kebab('SedangBelajarLaravelUncover');
//  }

//  }

// namespace App\Http\Controllers\Admin;

//  use App\Http\Controllers\Controller;
//  use Illuminate\Support\Str;

//  class PageController extends Controller
//  {
//  //...
//  public function cobaFacade()
// {
//  echo Str::snake('SedangBelajarLaravelUncover');
//  echo "<br>";
//  echo Str::kebab('SedangBelajarLaravelUncover');
// }

//  }

// namespace App\Http\Controllers\Admin;
//  use App\Http\Controllers\Controller;

//  class PageController extends Controller
//  {
//  //...
//  public function cobaClass()
// {
//  // kode akan kita tulis disini....
//  }
//  }


// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use App\Http\Controllers\Coba\Foo; // <-- pakai use biar lebih bersih

// class PageController extends Controller
// {
//     public function cobaClass()
//     {
//         $foo = new Foo();   // langsung pakai Foo, tidak perlu namespace panjang
//         return $foo->bar(); // return string, jangan echo
//     }
// }

// namespace App\Http\Controllers\Admin;
//  use App\Http\Controllers\Controller;
//  use App\Http\Controllers\Coba\Foo;

//  class PageController extends Controller
//  {
//  //...
//  public function cobaClass()
//  {
//  echo Foo::bar();
//  }
//  }

namespace App\Http\Controllers\Admin;

 use App\Http\Controllers\Controller;
 use App\Http\Controllers\Coba\Foo;

 class PageController extends Controller
 {
 use Foo;

 //...
 public function cobaClass()
 {
 echo $this->bar();
 }
 }

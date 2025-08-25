<?php
use Illuminate\Support\Facades\Route;

 /*
 |--------------------------------------------------------------------------
 | Web Routes
 |--------------------------------------------------------------------------
 |
 | Here is where you can register web routes for your application. These
 | routes are loaded by the RouteServiceProvider within a group which
 | contains the "web" middleware group. Now create something great!
 |
 */
Route::get('/helo', function () {
    return "hello word";
});

Route::get('/belajar', function () {
    echo '<h1>haii</h1>';
    echo '<p>aku aul</p>';
});
Route::get('/wel', function () {
    echo '<h2 style="text-align: center"><u>Welcome Anto</u></h2>';
});

Route::get('/mahasiswa/{aul}' , function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/stok_barang/{kulkas}/{polektron}', function ($jenis, $merek){
    return "cek sisa stok untuk $jenis $merek" ;
});

Route::get('/stok_barang/{kulkas}/{polektron}', function ($a, $b){
    return "cek sisa stok untuk $a $b" ;
});

Route::get('/stok_barang/{jenis?}/{merek?}',
 function ($a = 'ip',$b = 'samsung') {
 return "Cek sisa stok untuk $a dan $b";
 });

Route::get('/user/{id}', function ($id) {
 return "Tampilkan user dengan id = $id";
 })->where('id', '[0-9]+');

Route::get('/user/{id}' ,function ($id) {
    return "tampilam user dengan id = $id" ;
}) ->where('id', '[A-Z]{2}[0-9]+');

Route::get('/hubungi-kami', function () {
 return '<h1>Hubungi Kami</h1>';
 });

 Route::redirect('/contact-us', '/hubungi-kami');

Route::prefix('/admin')->group (function () {
    
    Route::get('/mahasiswa', function (){
      echo "<h1>Daftar mahasiswa</h1>";
    });

    Route::get('/dosen', function (){
       echo "<h1>Daftar dosen</h1>";
    });

    Route::get('/karyawan', function (){
        echo "<h1>Daftar karyawan</h1>";
    });
});

Route::fallback(function () {
 return "Maaf, alamat tidak ditemukan";
 });

Route::get('/buku/1', function () {
 return "Buku ke-1";
 });

 Route::get('/buku/1', function () {
 return "Buku saya ke-1";
 });

 Route::get('/buku/1', function () {
 return "Buku kita ke-1";
 });

Route::get('/buku/{a}', function ($a) {
 return "Buku ke-$a";
 });

 Route::get('/buku/{b}', function ($b) {
 return "Buku saya ke-$b";
 });

 Route::get('/buku/{c}', function ($c) {
 return "Buku kita ke-$c";
 });

Route::get('/hello', function () {
 $hello = 'Hello World';
 dd($hello);
 return $hello;
 });

route::get('/hello', function (){
    $hello = ['hello world' , 2 => ['helo jakarta', 'helo medan']];
    dd($hello);

    return $hello;
});

Route::get('/hello', function () {
    $hello = ['helo world', 2 => ['helo jakarta', 'hela medan']];

    echo '<pre>';
    print_r($hello);
    echo '</pre>';
    die();

    return $hello;
});

Route::get('/mahasiswa',  function (){
    return view('mahasiswa'  );
});

Route::get('/mahasiswas', function () {
 return view('mahasiswa',["mahasiswa1" => "Risa Lestari"]);
 });

Route::get('/mahasiswas', function () {
 return view('mahasiswa',
 [
 "mahasiswa1" => "Risa Lestari",
 "mahasiswa2" => "Rudi Hermawan",
 "mahasiswa3" => "Bambang Kusumo",
 "mahasiswa4" => "Lisa Permata"
 ]);
 });

Route::get('/mahasiswas', function () {
 return view('universitas.mahasiswa')->with('mahasiswa01', 'Risa Lestari');
 });

Route::get('/mahasiswa', function () {

 $arrMahasiswa = [
 "mahasiswa01" => "Ris Lestari",
 "mahasiswa02" => "Rudi Hermawan",
 "mahasiswa03" => "Bambang Kusumo",
 "mahasiswa04" => "Lisa Permata"
 ];

 return view('mahasiswa', $arrMahasiswa);
 });

Route::get('/mahasiswa', function () {
 return view('mahasiswa')->with('mahasiswa01', 'Risa Lestari');
 });

Route::get('/mahasiswa', function () {
 $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
 "Lisa Permata"];

 return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
 });

Route::get('/mahasiswass', function () {
 return view('mahasiswa')
 ->with('mahasiswa01', 'Risa Lestari')
 ->with('mahasiswa02', 'Rudi Hermawan')
 ->with('mahasiswa03', 'Bambang Kusumo');
 });

Route::get('/mahasiswa', function () {
 return view('mahasiswa')->withmahasiswa01('Risa Lestari');
 }); //with<nama_variabel>(nilai_variabel)//

Route::get('/mahasiswa', function () {

 $mahasiswa01 = "Risa Lestari";
 $mahasiswa02 = "Rudi Hermawan";
 $mahasiswa03 = "Bambang Kusumo";
 $mahasiswa04 = "Lisa Permata";

 return view('mahasiswa', compact("mahasiswa01", "mahasiswa02",
 "mahasiswa03", "mahasiswa04"));
 });

Route::get('/mahasiswa', function () {

 $mahasiswa01 = "Risa Lestari";
 $mahasiswa02 = "Rudi Hermawan";
 $mahasiswa03 = "Bambang Kusumo";
 $mahasiswa04 = "Lisa Permata";
 return view('mahasiswa')->with(compact("mahasiswa01",
 "mahasiswa02", "mahasiswa03", "mahasiswa04"));
 });

Route::get('/mahasiswa', function () {
 $arrMahasiswa = ["aul Lestari","Rudi Hermawan","Bambang Kusumo",
 "Lisa Permata"];

 return view('mahasiswa',['mahasiswa' => $arrMahasiswa]);
 });
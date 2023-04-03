<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Controllers\Coba\Foo;

class PageController extends Controller
{
    public function cobaClass()
    {
        $foo = new Foo();
        echo $foo->bar();
    }

    public function index()
    {
        return "Halaman Home Admin";
    }

    public function tampil()
    {
        return "Data Mahasiswa Admin";
    }

    public function cobaFacade()
    {
        echo Str::snake('SedangBelajarLaravelUncover');
        echo "<br>";
        echo Str::kebab('SedangBelajarLaravelUncover');
    }
}

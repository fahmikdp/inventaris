<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tabung extends Controller
{
    //atribut
    protected $r;
    protected $tp;
    protected $hasil;

    public function index()
    {
        //
        echo 'test banh';
    }

    public function form()
    {
        // namafolder/file.blade.php
        return view('VolumeTabung/tabung');
        
    }

    public function process(Request $request) 
    {
        // $request->name="" pada file.blade
        $this->r = $request->jarijari;
        $this->tp = $request->tinggipermukaan;
        // pow untuk bilangan pangkat
        $this->hasil = ((22/7)*pow($this->r, 2)*$this->tp);
        
        return view('VolumeTabung/hasil', [
            "hasil" => round($this->hasil)
        ]);
    }
}

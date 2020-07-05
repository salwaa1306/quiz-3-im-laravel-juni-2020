<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
    public static function get_all() {
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function simpan($dataartikel) {
        // data token dihilangkan 
        unset($dataartikel["_token"]);
        $new_dataartikel = DB::table('artikel')->insert($dataartikel);
        return $new_dataartikel;
    }
};
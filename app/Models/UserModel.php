<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserModel {
    public static function find_all() {
        $user = DB::table('user')->get();
        return $item;
    }

    public static function simpan($datauser) {
        $new_datauser = DB::table('user')->save();
        return $new_datauser;
    }
};
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {

    public function me() {
        return [
            "nis" => 3103118141,
            "name" => "Wildan Ikhsya Hidayat",
            "gender" => "Laki-laki",
            "phone" => 6285955551141,
            "class" => "XII RPL 4"
        ];
    }
}
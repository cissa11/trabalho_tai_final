<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller {

    public function listar() {
        return view('emails');
    }
}

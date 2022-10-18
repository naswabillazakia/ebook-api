<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120158,
            'Nama' => 'Naswa',
            'Phone' => '0812567890',
            'kelas' => 'XII RPL 5'
        ];
    }
         
}

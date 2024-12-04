<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return response()->json([
            'message' => 'Data berhasil diambil !',
            'data' => $data,
        ], 200);
    }
}

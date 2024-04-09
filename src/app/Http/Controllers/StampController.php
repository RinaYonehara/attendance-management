<?php

namespace App\Http\Controllers;
use App\Models\Date;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class StampController extends Controller
{
    public function index()
    {
        return view('stamp');
    }

    public function store()
    {
        // $userId = auth()->user()->id;
        // $stamp = new Stamp();
        // $stamp->user_id = $userId;
        // $stamp->timestamp = now();
        // $stamp->save();
        // $startTime = date('Y-m-d H:i:s');
        
        return view('attendance');
    }
}

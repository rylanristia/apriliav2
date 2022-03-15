<?php

namespace App\Http\Controllers;

use App\Models\TweetsenderModel;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        $sender = TweetsenderModel::where('highlighted', '0')->count();
        $highlighted = TweetsenderModel::where('highlighted', '1')->count();
        $senderdata = TweetsenderModel::orderBy('id', 'desc')->where('highlighted', '0')->get();
        $highlighteddata = TweetsenderModel::orderby('id', 'desc')->where('highlighted', '1')->get();
        $total = TweetsenderModel::count();

        // dd($sender, $highlighted, $senderdata, $highlighteddata);

        return view('pages.statistik')->with([
            'highlighted' => $highlighted,
            'sender' => $sender,
            'senderdata' => $senderdata,
            'highlighteddata' => $highlighteddata,
            'total' => $total
        ]);
    }
}
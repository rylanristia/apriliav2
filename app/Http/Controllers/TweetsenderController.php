<?php

namespace App\Http\Controllers;

use App\Models\TweetsenderModel;
use App\Models\TxtsenderModel;
use Illuminate\Http\Request;

class TweetsenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $twitter = TweetsenderModel::orderBy('id', 'desc')->where('highlighted', '0')->get();
        $highlighted = TweetsenderModel::orderby('id', 'desc')->where('highlighted', '1')->get();
        $txtsender = TxtsenderModel::orderby('id', 'desc')->get();

        return view('pages.tweet-sender')->with([
            'twitter' => $twitter,
            'highlighted' => $highlighted,
            'txtsender' => $txtsender
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tweets = TweetsenderModel::findOrFail($id);

        return view('pages.tweet-detail')->with([
            'tweets' => $tweets
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
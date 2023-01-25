<?php

namespace App\Http\Controllers;

use App\Models\ItemDetail;
use App\Http\Requests\StoreItemDetailRequest;
use App\Http\Requests\UpdateItemDetailRequest;

class ItemDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemDetail = ItemDetail::all();
        return view('shop', ['items' => $itemDetail,
        'title'=>'shop'
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $file = $req ->file('post-images');
        Storage::putFileAs('public/post-images', $file, $imageName);
        $imageName = 'post-images/'.$imageName;

        $itemdetail = new ItemDetail();
        $itemDetail->description = $req->description;
        $itemDetail->price = $req->price;
        $itemDetail->name = $req->name;
        $itemDetail->name = $req->name;

        $itemDetail->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemDetail  $itemDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ItemDetail $itemDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemDetail  $itemDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemDetail $itemDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemDetailRequest  $request
     * @param  \App\Models\ItemDetail  $itemDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemDetailRequest $request, ItemDetail $itemDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemDetail  $itemDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemDetail $itemDetail)
    {
        //
    }
}

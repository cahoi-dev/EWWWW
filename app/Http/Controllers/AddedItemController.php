<?php

namespace App\Http\Controllers;

use App\Models\AddedItem;
use App\Models\User;
use Illuminate\Http\Request;

class AddedItemController extends Controller
{

    public function test(Request $request)
    {
        return AddedItem::where('user_id', '=', $request->user_id)->get();
    }


    public function add(Request $request)
    {
        $token = $request->token;

        $user = User::where('token', '=', $token)->first();

        $addedItem = new AddedItem();

        $addedItem->user_id = $user->id;
        $addedItem->product_id = $request->product_id;
        $addedItem->total = 1;


        return $addedItem->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddedItem  $addedItem
     * @return \Illuminate\Http\Response
     */
    public function show(AddedItem $addedItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddedItem  $addedItem
     * @return \Illuminate\Http\Response
     */
    public function edit(AddedItem $addedItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddedItem  $addedItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddedItem $addedItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddedItem  $addedItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddedItem $addedItem)
    {
        //
    }
}

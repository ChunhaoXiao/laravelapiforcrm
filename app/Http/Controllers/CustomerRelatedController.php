<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Product;
use App\Http\Resources\Business;
use App\Http\Resources\Payment;

class CustomerRelatedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($customer_id)
    {
        $user = Auth::user();
        $product = $user->businesses()->where('customer_id', $customer_id)->latest()->first()->products[0]??'';
        return [
            'products' => $product? new Product($product):[], //相关产品
            'business' => new Business($user->businesses()->with('customer')->latest()->first()), //相关商机
           // 'thread' => $user->threads()->latest()->first(),
            'payment' => new Payment($user->payments()->latest()->first()), //相关回款
            'contract' => $user->contracts()->where('customer_id', $customer_id)->latest()->first(),
        ];
        
        //$user = Auth::user();
        
        // $user->with([
        //     'threads' => function($query) {
        //         $query->where();
        //     },
        //     'contracts' => function(){

        //     },
        //     'business' => function() {

        //     }
        // ])->get();
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

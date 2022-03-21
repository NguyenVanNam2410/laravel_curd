<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class contactController extends Controller
{
    public function index($id)
    {
        $post = product::find($id);
        if($post['status'] ==  0){
            $post = product::find($id)->update(['status' => 1]);
        }
        if($post['status'] == 1){
            $post = product::find($id)->update(['status' => 0]);
        }
    
        return response()->json([
            'code' => 200,
            'message' => 'thành công'
        ]);
    }
    public function order(Request $request)
    {
        $orders = $request->orders;
        dd($orders);
        foreach($orders as $order){
            $index = $order[0];
            $newOrder = $order[1];

            $post = product::where('id' , $index)->update(['order' => $newOrder]);
        }

        return response('thành công', 200);
    }
}

<?php

namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\Log;


Trait deleteAlert
{
    public function deleteAlert($id, $model)
    {
        try{
            $model->where('id' , $id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'xóa thành công',
            ],200);
        }catch(\Exception $exception){
            Log::error('message'.$exception->getMessage().'line : '.$exception->getLine());
            return response()->json([
                'code' =>500,
                'message' =>'fail',
            ],500);
        }
        
    }
}
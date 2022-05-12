<?php

namespace Icatala\Logger;
use Icatala\Logger\Models\Log;

class Logger
{
    // Build your next great package.
    public function create($model,$msg){
        try {
            //code...
            $log = new Log;
            $log->model = $model;
            $log->message = $msg;
            $log->save();
            return $data = array('status' => 'ok','log'=>$log );
        } catch (\Exception $th) {
            //throw $th;
            return $data = array('status' => 'ko','error'=>$th );


        }

    }
}

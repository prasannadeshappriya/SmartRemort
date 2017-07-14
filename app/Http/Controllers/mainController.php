<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function getIndexPage(){
        return view('welcome');
    }

    public function getSampleRequest(Request $request){
        $response = new JsonResponse();
        if(!isset($request['token'])){
            $response->setData(['error'=>'Token Required']);
            return $response;
        }
        if($request['token']==null){
            $response->setData(['error'=>'Token Required [Empty Token is not allowed']);
            return $response;
        }
        return $response->setData(['received_data'=>$request['token']]);
    }

    public function postSampleRequest(Request $request){
        $response = new JsonResponse();
        if(!isset($request['token'])){
            $response->setData(['error'=>'Token Required']);
            return $response;
        }
        if($request['token']==null){
            $response->setData(['error'=>'Token Required [Empty Token is not allowed']);
            return $response;
        }
        return $response->setData(['received_data'=>$request['token']]);
    }
}

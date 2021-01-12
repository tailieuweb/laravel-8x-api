<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    public function curlProduct($params) {    
        $data = [
          'name'  => @$params['name'],
          'detail'  => @$params['detail']
        ];
        $url = rtrim($params['url'],"?") . "?" . http_build_query($data);

        $crl = curl_init($url);
        $header = array();
        $header[] = 'Content-length: 0';
        $header[] = 'Content-type: application/json';
        $header[] = 'Authorization: Bearer '.$params['token'];
        
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($crl, CURLOPT_HTTPHEADER,$header);
        curl_setopt($crl, CURLOPT_POST,true);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $data);

        $rest = curl_exec($crl);
        curl_close($crl);
        return $rest;
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class CompController extends AbstractController
{
    public function binarytodecimal(){
        $request = Request::createFromGlobals();
        $payloads = json_decode($request->getContent(), true);
        $num=$payloads['input'];
        
    $dec_value = 0;
    $base = 1;
     
    $temp = $num;
    while ($temp)
    {
        $last_digit = $temp % 10;
        $temp = $temp / 10;
         
        $dec_value += $last_digit
                        * $base;
        $base = $base*2;
    }
    //return $dec_value;
    $res = ["status"=>true,"results"=>$dec_value];
    return $this->json($res);
    }
    public function decimaltobinary()
    {
        $request = Request::createFromGlobals();
        $payloads = json_decode($request->getContent(), true);
        $dec=$payloads['input'];
        $binStr = '';
        while ($dec>=1){
        $bin = $dec % 2;
        $dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
        $binStr .= $bin;
    }
        $binStr = strrev($binStr);
        //echo $binStr;
        $res = ["status"=>true,"results"=>$binStr];
        return $this->json($res);
    }
}
<?php

namespace App\Http\Controllers;
use Openpay\Data\Openpay as Openpay;
use Illuminate\Http\Request;

require_once '../vendor/autoload.php';

class RechargeController extends Controller
{
    //
    public function reference(Request $request){

        $amount = $request('amount');
        $description = $requets('description');
        // return $request;
        $openpay = Openpay::getInstance('mvtmnoafnxul8oizkhju', 'sk_e69bbf5dle30448688b24670bcef1743');

        Openpay::setProductionMode(false);

        $chergeData = array(
            'method' => 'store',
            'amount' => 100,
            'description' => $description
        );

        $charge = $openpay->charges->create($chergeData);
        return $charge;
    }
}

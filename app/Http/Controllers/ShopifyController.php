<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OhMyBrew\ShopifyApp\Facades\ShopifyApp;
use Log;
class ShopifyController extends Controller
{
    public function __construct() {
        $this->middleware(['auth.shop']);
    }
    public function products() {
    $shop = ShopifyApp::shop();
    $requests = $shop->api()->rest('GET', '/admin/api/2019-07/products.json');
    $script_tag = array(
    "script_tag" => array(
        "event" => "onload",
        "src" => "https://c8a32519.ngrok.io/js/custom.js"
    )
    );
    $shop->api()->rest('POST', '/admin/api/2020-04/script_tags.json',$script_tag);
    return view("welcome", ["products"=>$requests]);
    }
}

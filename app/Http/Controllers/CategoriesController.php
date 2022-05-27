<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator;

class CategoriesController extends Controller
{
    //Function to add categories
    public function addCategory(Request $request){
        $input =$request->all();
        $validator = Validator::make($input, [
            'name' => 'required|string',
            'status' => 'required|boolean',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $response = Http::withHeaders([
            'authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZTQ2ODAzMTQyOTE2ZWMzYzBkZGFiNDI4ZGU1MDQ2ZTFlYjY0NjhkNWJjY2NkOTg4MmZjYzViMTA1ZmVhNDI3ZmNlNjE5NDcxYjFmMmU2OWIiLCJpYXQiOjE2NTM2NDg2NjMuNzA5OTk2LCJuYmYiOjE2NTM2NDg2NjMuNzEsImV4cCI6MTY4NTE4NDY2My43MDcxMDYsInN1YiI6IjQiLCJzY29wZXMiOltdfQ.Q7ZfH86b-j9sNS8YtUkVX2QJXzTot9VnoByITkmcnL2hv8O2atm6-y0ilB2DsWO1OSfTN_FAXhWC-5sKGl8-xAe6A7PjDEJkUnmsfoD8RMo0HtF1eVs5KROXBAS-bawbcUx6r276FWZrxzRIfKMgZibNKd3x35cNkRLbWfNnoO-3EN3-K2uFGWjjJZeBCqu9fpxTnsLDFlnml7TKxIVHbyzuVHn6N93RZxj8cZYuH0_XVK7wxNVIDzHTQONHw3iaMPbwXVhWamONqofHMtZGtrFTMfiH4zgdhdeMry6n7v7nZuRf8S1Fs2PqSmkopL_mB4a5AWM2xWWGbbHAAx1l6wTlBb9OkB14_X1Ho-vpNw_IAIu0SFjGOld98XZo3jTMzDvr2O66bQWud_dmBrtyiOBVsiidaF5YqNyOcTFCcwkYsoiOxJ-BdeDaXJvlqxxypNaJaWHPa7o8r5RMR32GDciKD9-KN8OPuiM_eyo2onjA30YqJ67iA-wvbjsH_Xo-J8uyeJ21EJ-hOtK0L4vmyM4sqeMAFiGedz56S-QnjynFTeR2WeWrdrnU19OutOIvaTPSfS-Y0wux22QRVdIqIKu_d3HiJ7id3vZ8zLWHwznuA1pcqj2M5eabOhXMrsnhPuhwrtVlO8rw9VU261Ty168z70Jmbft6g501ARS-o8w',
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/ikonmarketplaceweb/api/post/add-category', $input);

      $responseStatuss = $response->body();if($responseStatuss->status==true){
          return route('active_category');
}

    }

    // Function to Show category Lists
    public function activeCategory(){
        $category = Http::get('http://kodextech.net/ikonmarketplaceweb/api/categories');
        $convertor = $category->body();
        $test = json_decode($convertor, true);
        $activeCat = $test['data']['categories'];
        return view('categories-list',compact('activeCat'));
    }
}

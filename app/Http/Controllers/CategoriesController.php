<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoriesController extends Controller
{
    //\
    public function addCategory(Request $request){
        dd($request->all());
        $response = Http::withHeaders([
            // 'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDlhZjljZDgxNGUwNzJlNGQ0MmE2NDEzNjYyY2Q4MGVmY2NmYWE3OTc5OTMxN2Y2M2IxMWYzNDY0NjNmNTY1YjgzMDNjNTkwZWMzMTVjZGQiLCJpYXQiOjE2NTM1NDI5NjMuNzg5NDA1LCJuYmYiOjE2NTM1NDI5NjMuNzg5NDA5LCJleHAiOjE2ODUwNzg5NjMuNzg1NTQ5LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.MkNmCIVkbG2P9qbwKk6Y-_ZdOrGz2XiYYGdjrTft5QM9V7laX3_CWRLitpcEOfXqqtqrZ_DxS1ZnApQzwBLnrg8302jNvfJtTIdYUep5Hx-T6KZUwDlBr5Ax-82NrLYEW-OuqiIsAtc_qXjodhRCWDf6aSDSX-OXKyUGz2oviy-NUQnhQPH3SgdVPqo8WK28eXgo5dgkplPIfmmPvhO96qbixnQ5B3zGisp0Y-LzOkJMRN7zSq3VBjbBR7d6OU2bZw-5q_Y-EYDE0paewtPZetnAoYNxwcRXz9QfsLY_ogLGOoTMwZKU-M0JzgONIiHgB7ECzcf6pQFWb7YlRtbMZUtSvyZwv86K4wxZVYzM5euhxMuvplSBmBerqOBwDAydA5ZnDQYw74TOwYkpb4duMmmzlmgbrLlPDOQTJkAkQ_5kfcwePWveHDO_trjp9fO2JrCT3NFZ1_a3rYvmiJuIDXCTz69klg1E4-YMC2vT3kzYXfvCCn6fop9G1v7Sg-mYbDe2WN4Wy1-vhw-xAcDsdYW1NCj_E_ajM_PyJyXYoHwx3Vkpy15EAPvz9a_NEFKfEZX1PURdSJOF6zOmFdrzFM04R-UPNV7JZsUfT-WOPhxL8HsQ-jfO1IM5WB8dkTbmfrU7EkaPbr7bbN_E9M_I0uusJWvEQequp0515tD7-w0',
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/ikonmarketplaceweb/api/post/add-category', [
            'name' => 'Sara',
            'status' => '0',
        ]);

        // $response = Http::post('http://kodextech.net/ikonmarketplaceweb/api/post/add-category', [
        //     'name' => 'Sara',
        //     'status' => '0',
        // ]);

        return view('add-category');
    }

    public function activeCategory(){
        $category = Http::get('http://kodextech.net/ikonmarketplaceweb/api/categories');
        $convertor = $category->body();
        $test = json_decode($convertor, true);
        $activeCat = $test['data']['categories'];
        return view('categories-list',compact('activeCat'));
    }
}

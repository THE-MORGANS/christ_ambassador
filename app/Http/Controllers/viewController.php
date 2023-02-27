<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;


class viewController extends Controller
{

    public  function blogs(SearchRequest $request){
       $blog = $this->blog->all()->toArray();
        $page = 1;
        $pagdata =  $this->paginate($blog, 6, $page);
        $result = $this->blog->search($request->get('search'))->take(5)->get();
        // return view('');
    }

        // public function search(SearchRequest $request){
        //     $result = $this->blog->search($request->search)->take(5)->get();
        //     return response()->json($result);
        //    // return view() in the same view
        // }


        public function paystack_verify($ref){
            $sercrtKey = "sk_test_e459fbb80fa274bd0af7a6ff4266bdbc2265a933";
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$ref",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $sercrtKey",
                "Cache-Control: no-cache",
            ),
            ));

            $response = curl_exec($curl);
            return $response;

            $err = curl_error($curl);
            curl_close($curl);
                }
}

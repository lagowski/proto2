<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Proto2Controller extends Controller
{
    //
    public function index()
    {
//        $client = $this->setclient();
//        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
//        $headers = ['auth' => [env('API_USER'), env('API_PASS'),]];
//        $myurl = $actual_link;
//        if (env('APP_ENV') === 'local') {
//            $myurl = 'http://dieeten24.eu/mojadieta';
//        }
//
//
//        $response = $client->request('GET', 'moneysite/'.$myurl, [
//            'auth' => [
//                'lagowski@pro4.es',
//                'Pozuelo.1'
//            ]
//        ]);
//
//        $res = json_decode($response->getBody()->getContents());
//        print_r($res);
//        return view('pages.contact', compact('header', 'date','visited', 'actual_link', 'res'));
        $res="";
        return view('pages.home')->with('res', $res);
    }

    public function aboutus()
    {
        $res = "About Us";
        return view('pages.about_us')->with('res', $res);
    }
    public function profile()
    {
        $res = "profile";
        return view('pages.profile')->with('res', $res);
    }
    public function formpanel()
    {
        $res = "profile";
        return view('pages.formpanel')->with('res', $res);
    }

    public function finance_accounts()
    {
        $res = "Finance Accounts";
        return view('pages.finance.accounts')->with('res', $res);
    }

    public function search_accounts()
    {
        $res = "Search Accounts";
        return view('pages.search.accounts')->with('res', $res);
    }

    public function social_accounts()
    {
        $res = "Social Accounts";
        return view('pages.social.accounts')->with('res', $res);
    }

    public function health_accounts()
    {
        $res = "Health Accounts";
        return view('pages.health.accounts')->with('res', $res);
    }

    public function finance_surveys()
    {
        $res = "Surveys";
        return view('pages.finance.surveys')->with('res', $res);
    }
    public function finance_debit()
    {
        $res = "profile";
        return view('pages.finance.debit')->with('res', $res);
    }
    public function earnings()
    {
        $res = "profile";
        return view('pages.earnings')->with('res', $res);
    }
}


<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request as BaseController;

use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function get_detail($id)
    {
        $url="https://jobs.github.com/positions.json?full_time=true&page=0";
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output=curl_exec($ch);
        $result = json_decode(($output),true);
        curl_close($ch);

        return view('jobview',compact('result','id'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        /**
        $client = new Client();
        $api_response = $client->get('https://jobs.github.com/positions.json?full_time=true');
        $response = json_decode(json_encode($api_response),true);
        return view('home', compact('response'));
        */
        $url="https://jobs.github.com/positions.json?full_time=true&page=0";
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output=curl_exec($ch);
        $result = json_decode(($output),true);
        curl_close($ch);
        return view('home',compact('result'));
    }
}

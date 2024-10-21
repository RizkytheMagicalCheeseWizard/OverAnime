<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function getAnime($id){
        $response = Http::get("https://api.jikan.moe/v4/anime/{$id}/full");
        if($response->successful()){
            $anime = $response->json()['data'];
        }
        else {
            dd($response->json());
        }
        
        return view('components.search-anime',['anime'=> $anime]);
    }
    public function topAnime(){
        $client = new Client();
        $url = "https://api.jikan.moe/v4/top/anime";
        $response = $client->get($url);
        $data = json_decode($response->getBody()->getContents(),true);
        return view('components.top-anime',['anime' => $data['data']]);
    }
}

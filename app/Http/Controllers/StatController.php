<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrawlerMap;
use App\Models\Brawler;
use App\Models\BrawlerMode;
use App\Models\Mode;
use App\Models\Map;
class StatController extends Controller
{

    public function getStats () { 

        if (request()->has('brawler')){

            if (request()->has('map')){
            
                $mapName = request()->input('map');
                $brawlerName = request()->input('brawler');

                if($mapName ==='all'){
                   $brawlers = Brawler::filter($brawlerName)->get();
                   return view('brawler',['brawlers' => $brawlers]);
                }

                else {
                   $brawlers = BrawlerMap::filter($mapName, $brawlerName)->get();   
                   return view('brawler_map',['brawlers' => $brawlers]);
                }
            }

            else if (request()->has('mode')){

                $modeName = request()->input('mode');
                $brawlerName = request()->input('brawler');

                if($modeName ==='all') {
                   $brawlers = Brawler::filter($brawlerName)->get();
                   return view('brawler',['brawlers' => $brawlers]);
                }

                else {
                   $brawlers = BrawlerMode::filter($modeName, $brawlerName)->get();
                   return view('brawler_mode',['brawlers' => $brawlers]);
                }

            }

            else {
                $brawlerName = request()->input('brawler');
                $brawlers = Brawler::filter($brawlerName)->get();
                return view('brawler',['brawlers' => $brawlers]);

            }
        }

        else if (request()->has('map')) {
           
                $mapName = request()->input('map');
                $maps = Map::filter($mapName)->get();
                return view('map',[
                    'maps' => $maps]);
      
            }

        else {
                $modeName = request()->input('mode');
                $modes = Mode::filter($modeName)->get();
                return view('mode',['modes' => $modes]);
    
            }    


        }




}

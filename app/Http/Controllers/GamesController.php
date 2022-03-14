<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        /*
        $before = Carbon::now()->subMonths(6)->timestamp;
        $oneYear = Carbon::now()->subMonths(12)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;
        $aftermonths = Carbon::now()->addMonths(4)->timestamp;
        $now = Carbon::now()->timestamp;


        //////////// POPULAR GAMES REQUEST //////////////////////
        
        $popularGames = Http::withHeaders( //(config('services.igdb'))
        [
            'Client-ID' => env('CLIENT_ID'),
            'Authorization' => env('AUTHOR_IGBD')
        ]
        )
        
        ->withBody(

            // "fields name,rating;
            // where rating > 75;
            "fields name,cover.url,rating, first_release_date, websites, platforms.abbreviation,rating_count;
            where platforms = (48,49,130,6) & (rating_count > 5 & first_release_date >= {$before} & first_release_date < {$after} );

           
            limit 12;", 
            
            'txt'
        )
        
        ->post('https://api.igdb.com/v4/games/')->json();

        // dd(get_defined_vars());
        // dump($popularGames);

      
        //////////// RECENTLY REVIEWED GAMES REQUEST //////////////////////
        
        $recentlyReview = Http::withHeaders( 
        [
            'Client-ID' => env('CLIENT_ID'),
            'Authorization' => env('AUTHOR_IGBD')
        ]
        )
        
        ->withBody(

            "fields name,rating, rating_count,platforms.abbreviation, summary,cover.url;
            where platforms = (48,49,130,6)  & (rating_count > 5  & (first_release_date >= {$oneYear}  & first_release_date < {$now} ));
   
            limit 12;", 
            
            'txt'
        )
        
        ->post('https://api.igdb.com/v4/games/')->json();  

            // dump($recentlyReview);

        //////////// RECENTLY ANTECIPATED GAMES REQUEST //////////////////////
        
        $antecipated = Http::withHeaders( 
        [
            'Client-ID' => env('CLIENT_ID'),
            'Authorization' => env('AUTHOR_IGBD')
        ]
        )
        
        ->withBody(

            "fields name,rating, rating_count,platforms.abbreviation, summary,cover.url,first_release_date;
            where platforms = (48,49,130,6)  &  (first_release_date >= {$now}  & first_release_date < {$aftermonths} );
   
            limit 6;", 
            
            'txt'
        )
        
        ->post('https://api.igdb.com/v4/games/')->json();  

            // dump($antecipated);

        //////////// COMMING SOON  GAMES REQUEST //////////////////////
        
        $comming = Http::withHeaders( 
        [
            'Client-ID' => env('CLIENT_ID'),
            'Authorization' => env('AUTHOR_IGBD')
        ]
        )
        
        ->withBody(

            "fields name,rating, rating_count,platforms.abbreviation, summary,cover.url,first_release_date;
            where platforms = (48,49,130,6)  &  (first_release_date >= {$now}   );
   
            limit 6;", 
            
            'txt'
        )
        
        ->post('https://api.igdb.com/v4/games/')->json();  

            // dump($comming);

        */

        /*
        $client = new \GuzzleHttp\Client ( ['base_uri' => 'https://api.igdb.com/v4/']);
        $response = $client->request('POST', 'multiquery', [
            'headers'=> [
                'Client-ID' => env('CLIENT_ID'),
                'Authorization' => env('AUTHOR_IGBD')
            ],
            'body' => 
                        'query games "Playstation Games" {
                                                            fields name,platforms.name;
                                                            where platforms !=n & platforms = {48};
                                                            limit 1;
                                                        };

                        query games "Switch" {
                                                            fields name,platforms.name;
                                                            where platforms !=n & platforms = {48};
                                                            limit 1;
                                                        };'
                    ]);

        $body = $response->getBody();
        dd(\json_decode($body));
        */
        return view ('index', compact('popularGames', 'recentlyReview','antecipated','comming'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

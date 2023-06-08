<?php

namespace App\Http\Controllers;

use GoogleMaps\GoogleMaps;
use Illuminate\Http\Request;

class MapController extends Controller
{
     /**
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
{
    
    $markers = [
        [
            'id' => 1,
            'name' => 'Marker 1',
            'description' => 'This is Marker 1',
            'latitude' => 37.7749, 
            'longitude' => -122.4194, 
            'added' => '2023-06-08',
            'edited' => '2023-06-08',
        ],
        [
            'id' => 2,
            'name' => 'Marker 2',
            'description' => 'This is Marker 2',
            'latitude' => 34.0522, 
            'longitude' => -118.2437, 
            'added' => '2023-06-08',
            'edited' => '2023-06-08',
        ],
        
    ];

    
    return view('welcome', compact('markers'));
}

}


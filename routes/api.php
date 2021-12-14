<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//API FOR ALL SATELITE LIST 
Route::get('satelites', function() {
    $url = new \GuzzleHttp\Client();
    $response = $url->get('https://api.wheretheiss.at/v1/satellites');
    $data = json_decode($response->getBody(), true);
    return $data;
});

//API FOR ISS INFO BY TIMESTAMP 
Route::get('satelite/{id}/timestamp/{timestamp}', function($id, $timestamp) {
    $url = new \GuzzleHttp\Client();
    $response = $url->get('https://api.wheretheiss.at/v1/satellites/'. $id .'/positions?timestamps='. $timestamp);
    $location = json_decode($response->getBody(), true);
    return $location;
});

//API FOR ISS INFO BY GEOLOCATION 
Route::get('satelite/{id}/latitude/{latitude}/longitude/{longitude}', function($id, $latitude, $longitude) {
    $url = new \GuzzleHttp\Client();
    $response = $url->get('https://api.wheretheiss.at/v1/coordinates/'. $latitude .','. $longitude);
    $info = json_decode($response->getBody(), true);
    return $info;
});

//API FOR LOCATIONS AFTER 10 MINUTES
Route::get('/after/satelite/{id}/timestamp/{timestamp}', function($id, $timestamp) {
    $locations_before = collect();
    $locations_after = collect();
    $times_before = collect();
    $times_after = collect();
    $date = new \DateTime(strtotime($timestamp));
    $round= 10;
    for($count = 0; $count < $round ; $count++){
        $date->modify("+10 minutes");
        $times_after->push([
            'masa' => $date->format('H:i A, j F Y'),
            'timestamp' => strtotime($date->format('H:i:s')),
        ]);
    }
    foreach($times_after as $after){
        $url = new \GuzzleHttp\Client();
        $response = $url->get('https://api.wheretheiss.at/v1/satellites/25544/positions?timestamps='. $after['timestamp']);
        $location = json_decode($response->getBody(), true);
        $locations_after->push([
            'masa' => $after['masa'],
            'timestamp' => $after['timestamp'],
            'longitude' => $location[0]['longitude'],
            'latitude' => $location[0]['latitude'],
        ]);
    }
    return $locations_after;
});

//API FOR LOCATIONS BEFORE 10 MINUTES
Route::get('/before/satelite/{id}/timestamp/{timestamp}', function($id, $timestamp) {
    $locations_before = collect();
    $locations_after = collect();
    $times_before = collect();
    $times_after = collect();
    $date = new \DateTime(strtotime($timestamp));
    $round= 10;
    for($count = 0; $count < $round ; $count++){
        $date->modify("-10 minutes");
        $times_before->push([
            'masa' => $date->format('H:i A, j F Y'),
            'timestamp' => strtotime($date->format('H:i:s')),
        ]);
    }
    foreach($times_before as $before){
        $url = new \GuzzleHttp\Client();
        $response = $url->get('https://api.wheretheiss.at/v1/satellites/25544/positions?timestamps='. $before['timestamp']);
        $location = json_decode($response->getBody(), true);
        $longitude = $location[0]['longitude'];
        $latitude = $location[0]['latitude'];
        $locations_before->push([
            'masa' => $before['masa'],
            'timestamp' => $before['timestamp'],
            'longitude' => $longitude,
            'latitude' => $latitude,
        ]);
    }
    return $locations_before;
});




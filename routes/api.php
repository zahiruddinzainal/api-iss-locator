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
    $response = $url->get('https://api.wheretheiss.at/v1/satellites/'. $id .'/positions?timestamps='. strtotime($timestamp));
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
    $locations_after = collect();
    $times_after = collect();
    $round= 10;
    $round_count = 0;
    $date = date('H:i m/d/Y', $timestamp);
    for($count = 0; $count < $round ; $count++)
    {
        $round_count = $round_count + 10;
        $repeat = strtotime("+10 minutes",strtotime($date));
        $date = date('H:i m/d/Y ', $repeat);
        $timestamp = strtotime($date);
        $times_after->push([
            'masa' => $date,
            'round' => $round_count,
            'timestamp' => $timestamp,
        ]);
    }
    foreach($times_after as $after){
        $url = new \GuzzleHttp\Client();
        $response = $url->get('https://api.wheretheiss.at/v1/satellites/25544/positions?timestamps='. $after['timestamp']);
        $location = json_decode($response->getBody(), true);
        $longitude = $location[0]['longitude'];
        $latitude = $location[0]['latitude'];
        $locations_after->push([
            'masa' => $after['masa'],
            'round' => $after['round'],
            'timestamp' => $after['timestamp'],
            'longitude' => $longitude,
            'latitude' => $latitude,
        ]);
    }
    return $locations_after;
});

//API FOR LOCATIONS BEFORE 10 MINUTES
Route::get('/before/satelite/{id}/timestamp/{timestamp}', function($id, $timestamp) {
    $locations_before = collect();
    $times_before = collect();
    $round= 10;
    $round_count = 0;
    $date = date('H:i m/d/Y', $timestamp);
    for($count = 0; $count < $round ; $count++)
    {
        $round_count = $round_count - 10;
        $repeat = strtotime("-10 minutes",strtotime($date));
        $date = date('H:i m/d/Y ', $repeat);
        $timestamp = strtotime($date);
        $times_before->push([
            'masa' => $date,
            'round' => $round_count,
            'timestamp' => $timestamp,
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
            'round' => $before['round'],
            'timestamp' => $before['timestamp'],
            'longitude' => $longitude,
            'latitude' => $latitude,
        ]);
    }
    return $locations_before;
});




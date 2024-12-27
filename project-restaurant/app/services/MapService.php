<?php

namespace App\services;
use Illuminate\Support\Facades\Http;
use function Laravel\Prompts\search;


//class MapService
//{
//
//    private $baseUrl;
//    private $apiKey;
//
//    public function __construct()
//    {
//        $this->baseUrl= 'https://maps.googleapis.com/maps/api';
//
//        $this->apiKey = env('API_KEY');
//    }
//
//
//    public function searchAddress($address)
//    {
////        $response = Http::withHeaders([
////            'x-api-key' => $this->apiKey,
////        ])->get("{$this->baseUrl}/search/v2", [
////            'text' => $address,
////        ]);
//        $response = Http::withHeaders([
//            'x-api-key' => $this->apiKey,
//        ])->get($this->baseUrl , [
//            'text' => $address,
//        ]);
//
//        return $response->json();
//    }
//
//    public function reverseGeocode($latitude, $longitude)
//    {
//        $url = $this->baseUrl . 'reverse';
//        $response = Http::withHeaders([
//            'x-api-key' => $this->apiKey,
//        ])->post($url, [
//            'lat' => $latitude,
//            'lon' => $longitude,
//        ]);
//
//        return $response->json();
//    }
//    public function getCoordinatesFromAddress($address)
//    {
//        $response = $this->searchAddress($address);
//        if (!empty($response['results'])) {
//            return $response['results'][0]['geom']['coordinates'] ?? null;
//        }
//        return null;
//    }
//
//
//}



class MapService
{
    private $baseUrl;
    private $apiKey;

    public function __construct()
    {
        $this->baseUrl = 'https://api.map.ir/v1';
        $this->apiKey = env('API_KEY');
    }

    // جستجوی آدرس
    public function searchAddress($address)
    {
        $response = Http::withHeaders([
            'x-api-key' => $this->apiKey,
        ])->get("{$this->baseUrl}/search", [
            'text' => $address,
        ]);

        if ($response->failed()) {
            return [
                'error' => 'Request failed',
                'details' => $response->json(),
                'status' => $response->status(),
            ];
        }

        return $response->json();
    }
    // معکوس‌سازی جی‌پی‌اس
    public function reverseGeocode($latitude, $longitude)
    {
        $response = Http::withHeaders([
            'x-api-key' => $this->apiKey,
        ])->get("{$this->baseUrl}/reverse", [
            'lat' => $latitude,
            'lon' => $longitude,
        ]);

        if ($response->failed()) {
            return [
                'error' => 'Request failed',
                'details' => $response->json(),
                'status' => $response->status(),
            ];
        }

        return $response->json();
    }

    // دریافت مختصات از آدرس
    public function getCoordinatesFromAddress($address)
    {
        $response = $this->searchAddress($address);
        if (!empty($response['items'])) {
            return $response['items'][0]['geometry']['coordinates'] ?? null;
        }
        return null;
    }
}


<?php

//namespace App\Http\Controllers;
//
//use App\services\MapService;
//use Illuminate\Http\Request;
//use App\Models\Restaurant;


namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\services\MapService;

// فرض کنید سرویس GoogleMapService را ساخته‌اید.
use Illuminate\Http\Request;

class MapController extends Controller
{
    private $mapService;

    public function __construct(MapService $mapService)
    {
        $this->mapService = $mapService;
    }

    // جستجوی آدرس
    public function searchAddress(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'name' => 'nullable|string|max:255',
        ]);

        $address = $request->input('address');
        $result = $this->mapService->searchAddress($address);

        if (isset($result['error'])) {
            return response()->json([
                'message' => 'Error fetching address data.',
                'details' => $result['details'],
            ], 500);
        }

        if (empty($result['items'])) {
            return response()->json([
                'message' => 'No geographic data found for this address.',
            ], 404);
        }

        $location = $result['items'][0]['geometry']['coordinates'];

        // ذخیره آدرس و موقعیت در مدل Restaurant
        $restaurant = new Restaurant();
        $restaurant->name = $request->input('name', 'Default Name');
        $restaurant->address = $address;
        $restaurant->latitude = $location[1]; // عرض جغرافیایی
        $restaurant->longitude = $location[0]; // طول جغرافیایی
        $restaurant->save();

        return response()->json([
            'message' => 'Address saved and processed successfully.',
            'data' => [
                'address' => $address,
                'latitude' => $restaurant->latitude,
                'longitude' => $restaurant->longitude,
            ],
        ], 200);
    }

    // معکوس‌سازی جی‌پی‌اس
    public function reverseGeocode(Request $request)
    {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        $result = $this->mapService->reverseGeocode($latitude, $longitude);

        if (isset($result['error'])) {
            return response()->json(['message' => 'Error fetching address data.', 'details' => $result['details']], 500);
        }

        if (empty($result['items'])) {
            return response()->json(['message' => 'No address found for this location.'], 404);
        }

        return response()->json($result['items'][0]);
    }

    // دریافت مختصات از آدرس
    public function getCoordinates(Request $request)
    {
        $request->validate(['address' => 'required|string|max:255']);

        $address = $request->input('address');
        $coordinates = $this->mapService->getCoordinatesFromAddress($address);

        if ($coordinates === null) {
            return response()->json(['message' => 'No coordinates found for this address.'], 404);
        }

        return response()->json($coordinates);
    }
}
//class MapController extends Controller
//{
    /**
     * Display a listing of the resource.
     */
//    private  $mapService;
//    public function __construct(MapService $mapService)
//    {
//        $this->mapService = $mapService;
//    }
//    public function SearchAddress(Request $request){
//        $address=$request->input('address');
//        if(!$address)
//        {
//            return response()->json(['error'=>'Address in not Valid',400]);
//        }
//        $result=$this->mapService->SearchAddress($address);
//        return response()->json($result);
//    }
//    private $mapService;
//
//    public function __construct(MapService $mapService)
//    {
//        $this->mapService = $mapService;
//    }
//
//    public function searchAddress(Request $request)
//    {
//        // دریافت آدرس از کاربر
//        $address = $request->input('address');
//
//        if (!$address) {
//            return response()->json([
//                'message' => 'Address is required.',
//            ], 400);
//        }
//
//        // ارسال آدرس به سرویس Map.ir
//        $result = $this->mapService->searchAddress($address);
////        dd($result);
//
//        if (isset($result['error']) && $result['error']) {
//            return response()->json([
//                'message' => 'Error fetching address data.',
//                'details' => $result['message'],
//            ], 500);
//        }
//
//        // بررسی وجود مختصات در پاسخ
//        if (!isset($result['items'][0]['geom'])) {
//            return response()->json([
//                'message' => 'No geographic data found for this address.',
//            ], 404);
//        }
//
//        $location = $result['items'][0]['geom'];
//
//        // ذخیره آدرس و موقعیت در مدل Restaurant
//        $restaurant = new Restaurant();
//        $restaurant->name = $request->input('name', 'Default Name');
//        $restaurant->address = $address;
//        $restaurant->latitude = $location['coordinates'][1]; // عرض جغرافیایی
//        $restaurant->longitude = $location['coordinates'][0]; // طول جغرافیایی
//        $restaurant->save();
//
//        return response()->json([
//            'message' => 'Address saved and processed successfully.',
//            'data' => [
//                'address' => $address,
//                'latitude' => $restaurant->latitude,
//                'longitude' => $restaurant->longitude,
//            ],
//        ], 200);
//    }
//
//    public function reverceGeocode(Request $request){
//        $latitude=$request->input('latitude');
//        $longitude=$request->input('longitude');
//        if (!$latitude||!$longitude)
//        {
//            return response()->json(['error'=>'Latitude & Longitude not Valid',400]);
//        }
//        $result=$this->mapService->reverseGeocode($latitude,$longitude);
//        return response()->json($result);
//    }
//   public function getCoordinates(Request $request){
//    $address=$request->input('address');
//    if (!$address){
//        return response()->json(['error'=>'Address not Valid',400]);
//    }
//    $coordinates=$this->mapService->getCoordinatesFromAddress($address);
//    return response()->json($coordinates);
//   }
//}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\InternationalOpportunity;
use App\ScientificEvent;
use App\YouthSportEvent;
use App\FacultyEvent;

class PublicDataController extends Controller
{
    /**
     * Get all Youth Sport records.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getYouthSport()
    {
        $data = YouthSportEvent::all()->map(function ($item) {
            if ($item->image) {
                $item->image = asset($item->image);
            }
            return $item;
        });

        return response()->json($data);
    }

    /**
     * Get all Scientific records.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getScientific()
    {
        $data = ScientificEvent::all()->map(function ($item) {
            if ($item->image) {
                $item->image = asset($item->image);
            }
            return $item;
        });

        return response()->json($data);
    }

    /**
     * Get all International records.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getInternational()
    {
        $data = InternationalOpportunity::all()->map(function ($item) {
            if ($item->image) {
                $item->image = asset($item->image);
            }
            return $item;
        });

        return response()->json($data);
    }

    /**
     * Get all Faculty Event records.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getFacultyEvent()
    {
        $data = FacultyEvent::all()->map(function ($item) {
            if ($item->image) {
                $item->image = asset($item->image);
            }
            return $item;
        });

        return response()->json($data);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Motorcycle;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $motorcycles = Motorcycle::with([
                'serviceComponents' => function ($query) {
                    $query->orderBy('sort_order');
                }
            ])
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('brand', 'like', "%{$search}%")
                    ->orWhere('cc', 'like', "%{$search}%")
                    ->orWhere('category', 'like', "%{$search}%");
            })
            ->orderBy('brand')
            ->orderBy('name')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Data motor berhasil diambil',
            'data' => $motorcycles,
        ]);
    }

    public function show($slug)
    {
        $motorcycle = Motorcycle::with([
                'serviceComponents' => function ($query) {
                    $query->orderBy('sort_order');
                }
            ])
            ->where('slug', $slug)
            ->first();

        if (!$motorcycle) {
            return response()->json([
                'success' => false,
                'message' => 'Motor tidak ditemukan',
                'data' => null,
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail motor berhasil diambil',
            'data' => $motorcycle,
        ]);
    }
}
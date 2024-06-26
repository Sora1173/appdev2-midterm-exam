<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        [
            "id" => 1,
            "name" => "Product 1",
            "price" => 100,
            "description" => "This is product 1"
        ],
        [
            "id" => 2,
            "name" => "Product 2",
            "price" => 100,
            "description" => "This is product 2"
        ],
        [
            "id" => 3,
            "name" => "Product 3",
            "price" => 100,
            "description" => "This is product 3"
        ],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display product with ID: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Update product with ID: " . $id . " updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " deleted successfully"
        ]);
    }

    public function uploadImageLocal(Request $request)
    {
        return response()->json([
            "message" => "Image successfully stored in local disk
            driver"
        ]);
    }

    public function uploadImagePublic(Request $request)
    {
        return response()->json([
            "message" => "Image successfully stored in public disk
            driver"
        ]);
    }
}
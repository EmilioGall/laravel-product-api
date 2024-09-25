<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     *
     *  @OA\Get(
     *      path="/api/products",
     *      tags={"Product"},
     *      summary="Get all Products",
     *      @OA\Response(
     *          response=200,
     *          description="Success"
     *      )
     *  )
     *
     */
    public function index()
    {

        //eager loading
        $products = Product::with(['categories'])->get();

        dd($products);

        $data = [

            'result' => $products,
            'success' => true
        ];

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     *
     *  @OA\Post(
     *      path="/api/product",
     *      tags= {"Product"},
     *      summary="Insert new product",
     *      @OA\Response(
     *          response=200,
     *          description="Success"
     *      ),
     *      @OA\RequestBody(
     *          @OA\MediaType(
     *              mediaType="application/x-www-form-urlencoded",
     *              @OA\Schema(
     *                  @OA\Property(property="name", type="string"),
     *                  @OA\Property(property="price", type="decimal"),
     *                  @OA\Property(property="image", type="string"),
     *                  @OA\Property(property="description", type="text"),
     *                  @OA\Property(property="highlighted", type="boolean")
     *              )
     *          )
     *      )
     *  )
     *
     **/
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $productId)
    {
        //eager loading
        $products = Product::with(['categories'])->get()->where('id', $productId)->first();

        $data = [
            'result' => $products,
            'success' => true
        ];

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

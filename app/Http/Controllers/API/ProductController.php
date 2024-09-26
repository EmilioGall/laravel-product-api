<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
     *          success="true"
     *      )
     *  )
     *
     */
    public function index()
    {

        //eager loading
        $products = Product::with(['categories'])->get();

        // dd($products);

        $data = [

            'result' => $products,
            'response' => 200,
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
     *          success="true"
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

        $data = $request->all();

        // dd($data);

        if ($request->hasFile('image')) {

            // Save file in storage and create a new folder [products_images]
            $image_path = Storage::put('products_images', $request->image);

            // salvo il path del file nei dati da inserire nel daabase
            $data['image'] = $image_path;
        }

        $newProduct = new Product();

        $newProduct->fill($data);

        $newProduct->save();

        return response()->json([
            'response' => 200,
            'success' => true
        ]);

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

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 *
 *  @OA\Info(
 *      version="1.0.0",
 *      title="Laravel Products API",
 *      description="A simple CRUD for manage products",
 *      @OA\Contact(email="admin@admin.com")
 *  )
 *
 *  @OA\Server(url=L5_SWAGGER_CONST_HOST)
 *
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

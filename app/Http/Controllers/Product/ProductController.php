<?php

namespace App\Http\Controllers\Product;

use App\Builder\ReturnApi;
use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Services\Product\ProductService;
use Illuminate\Http\Request;
use Throwable;

class ProductController extends Controller
{

    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            $data = $this->productService->store($request->validated(), $request->file('media'));
            return ReturnApi::success(
                $data,
                'Produto criado com sucesso!'
            );
        } catch (Throwable $e) {
            info($e);
            throw new ApiException(
                $e->getMessage() ?? "Erro ao criar produto",
                $e->getCode() ?? 400
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

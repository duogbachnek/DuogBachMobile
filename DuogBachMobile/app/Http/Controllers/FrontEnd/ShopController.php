<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Service\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function show($id)
    {
        $product = $this->productService->find($id);
        return view('frontend.shop.show', compact('product'));
        // return view('frontend.shop.show');
    }

    public function postComment(Request $request)
    {
        $this->productService->create($request->all());

        return redirect()->back();
    }
}

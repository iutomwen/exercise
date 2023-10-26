<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Mail\ProductInquiry;
use Illuminate\Support\Facades\Mail;
class ProductInquiryController extends Controller
{
     public function inquiryForm(Product $product)
    {
        return view('product.inquiry', compact('product'));
    }

    public function sendInquiry(Request $request, Product $product)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send an email with the form data
        // Mail::to('recipient@example.com')->send(new ProductInquiry($request->all(), $product));

        //preview email in browser
        return new ProductInquiry($request->all(), $product);

        // Redirect back with a success message
        // return redirect()->back()->with('success', 'Your inquiry has been sent.');
    }
}

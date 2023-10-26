<x-layout>
    <h1>{{ $product->name }}</h1>

    <div class="product-page">
        <div>
            <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}">
        </div>

        <div>
            {!! $product->description !!}

            <p>&pound;{{ $product->price }}</p>

            <div class="mt-5">
                <a href="{{ route('product.inquiry', $product) }}" class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Make an Inquiry</a>
            </div>
        </div>
    </div>
</x-layout>

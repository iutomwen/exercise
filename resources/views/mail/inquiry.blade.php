<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Inquiry</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex-col items-center justify-center p-6 bg-gray-200">
    <header class="flex items-center justify-center">
        <div class=" inner">
            <a href="{{ route('homepage') }}" class="flex items-center justify-center">
                <img src="{{ asset('images/lsi-logo.svg') }}" alt="LSi">
            </a>
        </div>
    </header>
    <div class="p-6 bg-white rounded-lg shadow ">
        <h1 class="mb-4 text-2xl font-semibold text-gray-700">Product Inquiry</h1>

        <p><strong>Name:</strong> {{ $formData['name'] }}</p>
        <p><strong>Email:</strong> {{ $formData['email'] }}</p>
        <p><strong>Message:</strong></p>
        <p class="whitespace-pre-wrap">{{ $formData['message'] }}</p>

        <p class="mt-4"><strong>Inquiry for product:</strong> {{ $product->name }}</p>
    </div>
</body>
</html>

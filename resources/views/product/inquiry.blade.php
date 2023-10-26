<x-layout>
    <h1>{{ $product->name }}</h1>
    <div class="p-6 bg-white rounded-lg shadow">
        @if (session('success'))
            <div class="w-1/2 p-4 mb-4 text-black bg-green-200 rounded-lg shadow">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('product.inquiry.send', $product) }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block mb-1 font-semibold text-gray-600">Your Name</label>
                <input type="text"  name="name" id="name" class="w-1/2 p-2 border border-gray-300 rounded" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block mb-1 font-semibold text-gray-600">Your Email</label>
                <input type="email" name="email" id="email" class="w-1/2 p-2 border border-gray-300 rounded" required>
            </div>

            <div class="mb-4">
                <label for="message" class="block mb-1 font-semibold text-gray-600">Message</label>
                <textarea name="message" id="message" rows="5" class="w-1/2 p-2 border border-gray-300 rounded" required></textarea>
            </div>

            <button type="submit" class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Submit Inquiry</button>
        </form>
    </div>

</x-layout>

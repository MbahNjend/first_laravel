<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    
    <header class="bg-gray-800">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">Mbah Njend</h1>
            <nav>
                <a href="{{ url ('/home')}}" class="text-gray-400 hover:text-blue-500 px-4">Home</a>
                <a href="{{ url ('/about')}}" class="text-gray-400 hover:text-blue-500 px-4">About</a>
                <a href="{{ url ('/contact')}}" class="text-gray-400 hover:text-blue-500 px-4">Contact</a>
                <a href="{{ url ('/products')}}" class="text-gray-400 hover:text-blue-500 px-4">Products</a>
                <a href="{{ url ('/subscription')}}" class="text-gray-400 hover:text-blue-500 px-4">Subscription</a>
                {{-- <button class="bg-gray-800 text-gray-400 px-4 py-2 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-gray-500 hover:text-white" id="profileButton">
                    Profile
                </button> --}}
                
            </nav>
        </div>
        
        
    </header>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Product List</h1>

        <!-- Grid untuk menampilkan produk -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $product['name'] }}</h2>
                    <p class="text-gray-600 mb-4">{{ $product['description'] }}</p>
                    <p class="text-lg font-bold text-blue-600">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-48 object-cover mb-4 rounded-lg">
                </div>
            @endforeach
        </div>
    </div>

    <footer class="bg-white py-4">
        <div class="container mx-auto text-center">
            <p class="text-gray-600">© 2025 MbahNjend. All rights reserved.</p>
        </div>
        </footer>
</body>
</html>
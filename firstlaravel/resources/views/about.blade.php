<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Profile Card</title>
</head>
<body class="bg-gray-100  min-h-screen">

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
  

    <div class="container mx-auto max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-auto h-auto object-cover" src="https://res.cloudinary.com/dsnjya9ij/image/upload/v1726195711/IMG-20240509-WA0008_xypqkl.jpg" alt="Profile Picture">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Mbah Njend</div>
            <p class="text-gray-700 text-base">
                President Class Of XII RPL.
            </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <a href="https://instagram.com/mbahnjend">
                <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2">#Mbahnjend</span>
            </a>
            <a href="https://github.com/mbahnjend">
                <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2">#Github</span>
            </a>
            <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2">#Keren Abis</span>
        </div>
    </div>

 <!-- Footer -->
    <footer class="bg-white py-4">
    <div class="container mx-auto text-center">
        <p class="text-gray-600">© 2025 MbahNjend. All rights reserved.</p>
    </div>
    </footer>
</body>
</html>
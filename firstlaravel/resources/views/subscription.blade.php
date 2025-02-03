{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
        <h1 class="text-2xl font-bold mb-4">Subscription Status</h1>

        <!-- Tombol Active dan Inactive -->
        <div class="space-x-4 mb-6" action = "{{ route('subscription.submit') }}" method="POST" >
            {{-- <a href="#" class="px-4 py-2 bg-green-500 text-white rounded {{ $subscriptionStatus === 'active' ? 'bg-green-500' : '' }}">
                Active
            </a> --}}
            {{-- <button type="submit" class="bg-green-500 text-white rounded px-4 py-2">Active</button>
            <a href="#" class="px-4 py-2 bg-red-500 text-white rounded {{ $subscriptionStatus === 'inactive' ? 'bg-red-500' : '' }}">
                Inactive
            </a>
        </div> --}}

        <!-- Pesan Status Subscription -->
        {{-- @if($subscriptionStatus === 'active')
            <p class="text-green-600 font-semibold">Your subscription is active.</p>
        @else
             <p class="text-red-600 font-semibold">Your subscription is inactive.</p> 
        @endif --}}
        {{-- @if(session('success'))
                <div id="successMessage" class="mt-5 p-3 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif
    </div>
</body>
</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Status</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" bg-gray-100">

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

    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <h2 class="text-xl font-bold mb-4">Subscription Status</h2>
        <div class="space-x-4">
            <button onclick="setStatus('active')" class="bg-green-500 text-white px-4 py-2 rounded">Active</button>
            <button onclick="setStatus('inactive')" class="bg-red-500 text-white px-4 py-2 rounded">Inactive</button>
        </div>
        <p id="statusMessage" class="mt-4 text-lg font-semibold"></p>
    </div>

    <footer class="bg-white py-4">
        <div class="container mx-auto text-center">
            <p class="text-gray-600">© 2025 MbahNjend. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function setStatus(status) {
            let message = status === 'active' ? 'Your subscription is active' : 'Your subscription is inactive';
            document.getElementById('statusMessage').textContent = message;
        }
    </script>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <section id="contact" class="bg-gray-200 py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
            <p class="mb-4">Have any questions? Reach out to us!</p>
            <form class="max-w-lg mx-auto">
                <input type="text" placeholder="Your Name" class="border border-gray-300 p-2 rounded mb-4 w-full" required>
                <input type="email" placeholder="Your Email" class="border border-gray-300 p-2 rounded mb-4 w-full" required>
                <textarea placeholder="Your Message" class="border border-gray-300 p-2 rounded mb-4 w-full" rows="4" required></textarea>
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-500">Send Message</button>
            </form>
        </div>
        <div id="successMessage" class="hidden mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
            Message sent successfully!
        </div>
    </section>
    
</body>
</html>  --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Header -->
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

    <section id="contact" class="bg-gray-200 py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Get In Touch</h2>
            

            <!-- Tampilkan pesan sukses jika ada -->
            @if(session('success'))
                <div id="successMessage" class="mt-5 p-3 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Kontak -->
            <form action="{{ route('contact.submit') }}" method="POST" class="max-w-lg mx-auto mt-5">
                @csrf
                <input type="text" name="name" placeholder="Name" class="border border-gray-300 p-2 rounded mb-4 w-full" required>
                <input type="email" name="email" placeholder="Email" class="border border-gray-300 p-2 rounded mb-4 w-full" required>
                <textarea name="message" placeholder="Message" class="border border-gray-300 p-2 rounded mb-4 w-full" rows="4" required></textarea>
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-500">Send Message</button>
            </form>
        </div>
    </section>

     <!-- Footer -->
     <footer class="bg-white py-4">
        <div class="container mx-auto text-center">
            <p class="text-gray-600">© 2025 MbahNjend. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

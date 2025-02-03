<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2. 19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    
    <div class="container mx-auto p-6 py-20">
        <h1 class="text-3xl font-bold mb-4 text-center">Thank You!</h1>
        <p class="text-gray-600 mb-4 text-center">Your message has been successfully sent. We will get back to you shortly.</p>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-gray-500">
            <a href="{{ route('contact.form') }}">Back to Contact Form</a>
    </div>
</body>
</html>
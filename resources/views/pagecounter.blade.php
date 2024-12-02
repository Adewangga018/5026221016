<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Counter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center p-6 bg-white rounded shadow-lg">
        <h1 class="text-2xl font-bold text-gray-700 mb-4">Arjuna Ahmad Dewangga Aljabbar</h1>
        <p class="text-gray-500 text-lg">
            Anda pengunjung ke :
        </p>
        <span class="text-4xl font-bold text-green-600">
            {{ $currentCount }}
        </span>
    </div>
</body>
</html>

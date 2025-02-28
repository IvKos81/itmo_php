<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex">
    <aside class="bg-gray-800 text-white w-64">
        <div class="p-4">
            <h2 class="text-xl font-bold">Admin Panel</h2>
        </div>
        <ul class="p-4">
            <li class="mb-2"><a href="#" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a></li>
            <li class="mb-2"><a href="#" class="block px-4 py-2 hover:bg-gray-700">Users</a></li>
            <li class="mb-2"><a href="#" class="block px-4 py-2 hover:bg-gray-700">Products</a></li>
            <li class="mb-2"><a href="#" class="block px-4 py-2 hover:bg-gray-700">Settings</a></li>
        </ul>
        <div class="p-4 mt-auto">
            <button id="logoutButton" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Logout
            </button>
        </div>
    </aside>

    <main class="flex-grow p-4">
        <h1 class="text-3xl font-bold mb-4">Dashboard</h1>
        <p>Welcome to the admin panel!</p>
    </main>
</div>

<script>
    document.getElementById('logoutButton').addEventListener('click', function() {
        window.location.href = '/'; // Redirect to the home page
    });
</script>

</body>
</html>
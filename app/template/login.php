<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tailwind CSS 3 Login Page With border Style</title>
  <link rel="stylesheet" href="../app/assets/css/styles.css">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>
  <nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
          <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
          </svg>
          Home
        </a>
      </li>
    </ol>
  </nav>
    <div class="w-full p-6 m-auto bg-white border-t-4 border-purple-600 rounded-md shadow-md border-top lg:max-w-md">
      <h1 class="text-3xl font-semibold text-center text-purple-700">LOGO</h1>
      <form class="mt-6" action="auth" method="post">
        <div>
          <label for="email" class="block text-sm text-gray-800">Email</label>
          <input type="email" 
            class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40" name="login" value="none@none.ru">
        </div>
        <div class="mt-4">
          <div>
            <label for="password" class="block text-sm text-gray-800">Password</label>
            <input type="password"
              class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40" name="password">
          </div>
          <a href="#" class="text-xs text-gray-600 hover:underline">Forget Password?</a>
          <div class="mt-6">
            <button
              class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-purple-700 rounded-md hover:bg-purple-600 focus:outline-none focus:bg-purple-600">
              Login
            </button>
          </div>
      </form>
      <p class="mt-8 text-xs font-light text-center text-gray-700"> Don't have an account? <a href="#"
          class="font-medium text-purple-600 hover:underline">Sign up</a></p>
    </div>
  </div>

</body>

</html>
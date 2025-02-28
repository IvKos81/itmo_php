<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Resposive Layout</title>
</head>

<body>



  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="./login" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Login</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="flex border-b">
    <button id="tab1" class="px-4 py-2 border-b-2 border-blue-500 text-blue-500 font-medium active" onclick="showTab('tab1')">Classic</button>
    <button id="tab2" class="px-4 py-2 border-b-2 border-transparent text-gray-500 font-medium hover:text-gray-700 hover:border-gray-300" onclick="showTab('tab2')">Jazz</button>
    <button id="tab3" class="px-4 py-2 border-b-2 border-transparent text-gray-500 font-medium hover:text-gray-700 hover:border-gray-300" onclick="showTab('tab3')">Rock</button>
  </div>

  <div id="content1" class="p-4">
    <div id="feed"><?php echo $portial ?></div>
    <button type="button" id="paginator" data-id="1">Далее...</button>
    <div id="content2" class="p-4 hidden">
      Содержимое вкладки 2
    </div>
    <div id="content3" class="p-4 hidden">
      Содержимое вкладки 3
    </div>

    <script>
      function showTab(tabId) {
        const tabs = document.querySelectorAll('.flex button');
        const contents = document.querySelectorAll('.p-4');

        tabs.forEach(tab => {
          tab.classList.remove('active');
          tab.classList.remove('border-blue-500');
          tab.classList.remove('text-blue-500');
          tab.classList.add('border-transparent');
          tab.classList.add('text-gray-500');
        });

        contents.forEach(content => {
          content.classList.add('hidden');
        });

        document.getElementById(tabId).classList.add('active');
        document.getElementById(tabId).classList.add('border-blue-500');
        document.getElementById(tabId).classList.add('text-blue-500');
        document.getElementById(tabId).classList.remove('border-transparent');
        document.getElementById(tabId).classList.remove('text-gray-500');
        document.getElementById(`content${tabId.slice(-1)}`).classList.remove('hidden');
      }

      async function getFetch(url) {
        const response = await fetch(url, {
          method: 'get'
        })
        return await response.text();

      }
      async function getPage(event) {
        event.stopPropagation()
        event.preventDefault()
        let num_page = parseInt(event.target.getAttribute('data-id'))
        console.log(num_page)
        let limit = 5
        url = 'portial?offset=' + limit * num_page + '&limit=' + limit
        // console.log(url)
        let data = await getFetch(url)
        if (!data) event.target.remove()
        //  event.target.remove()
        feed = document.getElementById('feed')
        feed.innerHTML = feed.innerHTML + data
        event.target.setAttribute('data-id', parseInt(num_page) + 1)

      }

      const parent = document.getElementById('paginator')
      parent.addEventListener('click', getPage)
    </script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Tailwind Utility & Flowbite-->
    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>AffordiTech</title>
</head>
<body class="bg-green-200 ">

    <!--
        https://drive.google.com/thumbnail?id=

        https://drive.google.com/file/d/18nYHVsFygIeBpHPCeNBLjCiESNhiR3oe/view?usp=sharing
        ../icon/logo.png
    -->

    <nav class="bg-green-900 border-gray-200 dark:bg-gray-900">

        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-0">

            <!--ICON AND NAME-->
            <a href="http://127.0.0.1:8000/home" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://drive.google.com/thumbnail?id=18nYHVsFygIeBpHPCeNBLjCiESNhiR3oe" class="h-32" alt="logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-yellow-100">AffordiTech Homes</span>
            </a>

            <!--GET STARTED / LOGIN/REGISTER BUTTON-->
        <div class="flex md:order-2">
            <button type="button" onclick="location.href='http://127.0.0.1:8000/login';" class="flex items-center justify-center text-white bg-gradient-to-br from-green-400 to-blue-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                GET STARTED
            </button>

            {{-- <button type="button" onclick="location.href='http://127.0.0.1:8000/login';" class="flex items-center justify-center text-white bg-gradient-to-br from-green-400 to-blue-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
               LAGAY USER NAME DITO
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4H1m3 4H1m3 4H1m3 4H1m6.071.286a3.429 3.429 0 1 1 6.858 0M4 1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Zm9 6.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                </svg>
            </button> --}}
            
            
        </div>

          <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 md:hidden">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
              </div>
              <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
            </div>
            
            <!--BUTTONS-->
            <!--Home-->
            <button type="button" onclick="location.href='http://127.0.0.1:8000/home';" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Home</button>
            <!--List-->
            <button type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">List</button>
            <!--Services-->
            <button type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Services</button>    
            <!--Projects-->
            <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:px-6 hover:py-3.5 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Projects</button>
          </div>
        </div>
      </nav>

      

    <!--NAVBAR-->
    <nav class="bg-white border-gray-200 dark:bg-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700">
        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4">
            
            <!--OFFER TYPE DROPDOWN-->
            <select id="default" class="bg-gradient-to-r mr-4 from-teal-400 via-teal-500 to-teal-600 border border-black-300 text-gray-900 mb-0 text-sm rounded-lg  focus:border-blue-500 block w-40 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80">
              <option selected>OFFER TYPE</option>
              <option value="SA">FOR SALE</option>
              <option value="RE">FOR RENT</option>
            </select>

            <!--PROPERTY TYPE DROPDOWN-->
            <select id="default" class="bg-gradient-to-r mr-4 from-teal-400 via-teal-500 to-teal-600 border border-black-300 text-gray-900 mb-0 text-sm rounded-lg  focus:border-blue-500 block w-40 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80">
                <option selected>PROPERTY TYPE</option>
                <option value="AP">APARTMENT</option>
                <option value="CO">CONDOMINIUM</option>
                <option value="HO">HOUSE</option>
                <option value="LA">LAND</option>
              </select>
            
            <!--LOCATION DROPDOWN-->
            <select id="default" class="bg-gradient-to-r mr-4 from-teal-400 via-teal-500 to-teal-600 border border-black-300 text-gray-900 mb-0 text-sm rounded-lg  focus:border-blue-500 block w-40 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80">
                <option selected>LOCATION</option>
                <option value="MM">METRO MANILA</option>
                <option value="4A">REGION 4A</option>
            </select>

            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:px-6 hover:py-3.5 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-0 flex justify-end">Search</button>

        </div>
    </nav>

    
    <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4">   

 
    <!--CARDS -->
    <a href="http://127.0.0.1:8000/property-info" class="flex flex-col items-center mr-4 mb-4 ml-4 h-50 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 hover:bg-gradient-to-br from-teal-200 via-yellow-100 to-lime-300 hover:red-200 hover:red-300 hover:yellow-200 dark:text-white dark:hover:text-gray-900 ">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-48 md:w-48 md:rounded-none md:rounded-s-lg" src="https://drive.google.com/thumbnail?id=11-hCFhCAX0TXEZSL3d6ZmjFl9Xh_pcJP" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <!--TITLE-->
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nigga Nae Nae</h5>
            <!--DESCRIPTION-->
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">qwerty uiop asd fgh jkl zxczxc vbnvbn mmmmm </p>
        </div>
    </a>

    
    
    </div>

    
<!--FOOTER-->
<footer class="bg-green-900 rounded-lg shadow dark:bg-gray-900 m-4">

    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="http://127.0.0.1:8000/home" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://drive.google.com/thumbnail?id=18nYHVsFygIeBpHPCeNBLjCiESNhiR3oe" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-yellow-100">AffordiTech Homes</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-yellow-100 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-yellow-100 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-yellow-100 sm:text-center dark:text-gray-400">© 2024 <a href="http://127.0.0.1:8000/home" class="hover:underline">AffordiTech Homes™</a>. All Rights Reserved. Material may not be published or reproduced in any form without prior written permission.</span>
    </div>
</footer>


    

</body>
</html>
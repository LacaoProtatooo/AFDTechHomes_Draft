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
    @include('common.header')
   

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
            
            <!--BEDROOMS DROPDOWN-->
            <select id="default" class="bg-gradient-to-r mr-4 from-teal-400 via-teal-500 to-teal-600 border border-black-300 text-gray-900 mb-0 text-sm rounded-lg  focus:border-blue-500 block w-40 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80">
                <option selected>NO. BEDROOMS</option>
                <option value="R1">1</option>
                <option value="R2">2</option>
                <option value="R3">3</option>
                <option value="R4">4</option>
            </select>

            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:px-6 hover:py-3.5 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-0 flex justify-end">Search</button>

        </div>
    </nav>

    
    <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4">   
    
        @include('common.card')

    </div>

    @include('common.footer')

    



    

</body>
</html>
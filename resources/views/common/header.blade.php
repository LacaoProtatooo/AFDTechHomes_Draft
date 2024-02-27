<nav class="bg-green-900 border-gray-200 dark:bg-gray-900">

    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-0">

        <!--ICON AND NAME-->
        @if (isset($customerinfo) && $customerinfo)
        <a href="http://127.0.0.1:8000/customer/dashboard" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="../../../storage/Logo_BG_Removed.png" class="h-32" alt="logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-yellow-100">AffordiTech Homes</span>
        </a>

        @elseif (isset($agentinfo) && $agentinfo)
        <a href="http://127.0.0.1:8000/agent/dashboard" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="../../../storage/Logo_BG_Removed.png" class="h-32" alt="logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-yellow-100">AffordiTech Homes</span>
        </a>

        @else
        <a href="http://127.0.0.1:8000/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="../../../storage/Logo_BG_Removed.png" class="h-32" alt="logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-yellow-100">AffordiTech Homes</span>
        </a>
        @endif

        <!--GET STARTED / LOGIN/REGISTER BUTTON-->
        
    <div class="flex md:order-2">
        
        @if (isset($customerinfo) && $customerinfo)
        <button type="button" onclick="" class="flex items-center justify-center text-white bg-gradient-to-br from-green-400 to-blue-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
          {{ $customerinfo->name }}
          <span class="ml-1"></span>
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4H1m3 4H1m3 4H1m3 4H1m6.071.286a3.429 3.429 0 1 1 6.858 0M4 1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Zm9 6.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
          </svg>
        </button>
        
        @elseif (isset($agentinfo) && $agentinfo)
        <button type="button" onclick="" class="flex items-center justify-center text-white bg-gradient-to-br from-green-400 to-blue-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
          {{ $agentinfo->name }}
          <span class="ml-1"></span>
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4H1m3 4H1m3 4H1m3 4H1m6.071.286a3.429 3.429 0 1 1 6.858 0M4 1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Zm9 6.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
          </svg>
        </button>

        @else
        <button type="button" onclick="location.href='http://127.0.0.1:8000/login';" class="flex items-center justify-center text-white bg-gradient-to-br from-green-400 to-blue-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
          GET STARTED
        </button>
        @endif
        
    </div>

      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
        <div class="relative mt-3 md:hidden"></div>
        
        <!--BUTTONS-->
        <!--Home-->
        <button type="button" 
        @if (isset($customerinfo) && $customerinfo)
          onclick="location.href='http://127.0.0.1:8000/customer/dashboard';" 
        @elseif (isset($agentinfo) && $agentinfo)
          onclick="location.href='http://127.0.0.1:8000/agent/dashboard';" 
        @else
          onclick="location.href='http://127.0.0.1:8000/';" 
        @endif
        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Home</button>
        
        <!--List-->

        <button type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">List</button>
        <!--Services-->

        <button type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:px-6 hover:py-3.5 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Services</button>    
        
        <!--LOGOUT-->
        <button type="button" onclick="location.href='{{ route('logout') }}';" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:px-6 hover:py-3.5 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">LOGOUT</button>
      </div>
    </div>
  </nav>
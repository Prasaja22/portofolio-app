<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sidebar</title>
  @vite('../../resources/css/app.css')
  <!-- <script src="./tailwind3.js"></script> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .custom-shape-divider-top-1686563879 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1686563879 svg {
    position: relative;
    display: block;
    width: calc(215% + 1.3px);
    height: 158px;
}

.custom-shape-divider-top-1686563879 .shape-fill {
    fill: #FFFFFF;
}
    </style>

</head>

<body class="bg-gradient-to-l from-teal-600 to-cyan-600  font-[Poppins]">
    @include('sweetalert::alert')
    <section  class="top-0 mb-auto">
        <div class="custom-shape-divider-top-1686563879">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
  <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
    <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
  </span>
  <div class="sidebar z-40 fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
    p-2 w-[300px] overflow-y-auto text-center bg-slate-800/95 shadow h-screen">
    <div class="text-gray-100 text-xl">
      <div class="p-2.5 mt-1 flex items-center rounded-md ">
        <img src="{{ asset('images/log.png') }}" alt="">
        <a href="{{  '/dahsboard' }}"><h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">Dashboard</h1></a>
        <i class="bi bi-x ml-8 cursor-pointer lg:hidden" onclick="Openbar()"></i>
      </div>
      <hr class="my-2 text-gray-600">

      <div>
        <div class="p-2.5 mt-3 flex items-center rounded-md
        px-4 duration-300 cursor-pointer  bg-gray-700">
          <i class="bi bi-search text-sm"></i>
          <input class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" placeholder="Serach" />
        </div>

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-gradient-to-l from-cyan-600 to-teal-600">
          <i class="bi bi-house-door-fill"></i>
          <a href="{{ '/' }}"><span class="text-[15px] ml-4 text-gray-200 select-none">Home</span></a>
        </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-gradient-to-l from-cyan-600 to-teal-600">
            <i class="bi bi-chat-left-text-fill"></i>
            <div class="flex justify-between w-full items-center" onclick="dropDown2()">
              <span class="text-[15px] ml-4 text-gray-200 select-none">Product</span>
              <span class="text-sm rotate-180" id="arrow2">
                <i class="bi bi-chevron-down"></i>
              </span>
            </div>
          </div>
          <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu2">
            @if ( Auth::user()->role == 'admin' || Auth::user()->role == 'staff' )
            <a href="{{ '/add-product' }}"><h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Add Product</h1></a>
            @endif
            <a href="{{ '/wait-list' }}"><h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Waiting-list Product</h1></a>
            <a href="{{ '/active-product' }}"><h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Active Product</h1></a>
          </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-gradient-to-l from-cyan-600 to-teal-600">
          <i class="bi bi-cart-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200 select-none">Shopping Store</span>
        </div>
        <hr class="my-4 text-gray-600">
        @auth
        @if ( Auth::user()->role == 'admin' )
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-gradient-to-l from-cyan-600 to-teal-600">
              <i class="bi bi-envelope-fill"></i>
              <a href="{{ '/messages' }}"><span class="text-[15px] ml-4 text-gray-200 select-none">Messages</span></a>
        </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-gradient-to-l from-cyan-600 to-teal-600">
            <i class="bi bi-person-fill"></i>
            <a href="{{ '/users' }}"><span class="text-[15px] ml-4 text-gray-200 select-none">User</span></a>
      </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-gradient-to-l from-cyan-600 to-teal-600">
          <i class="bi bi-chat-left-text-fill"></i>
          <div class="flex justify-between w-full items-center" onclick="dropDown()">
            <span class="text-[15px] ml-4 text-gray-200 select-none">Chatbox / Pending</span>
            <span class="text-sm rotate-180" id="arrow">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
          <a href="{{ '/replied' }}"><h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Replied Messages</h1></a>
          <a href="{{ '/approve-products' }}"><h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Product Approval</h1></a>
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Friends</h1>
        </div>
        @endif
        @endauth
        <div class="p-2.5 bg-red-500 active:bg-red-300 transition transform hover:scale-75 active:scale-90  mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointe">

          <form action="{{ '/logout' }}" method="post">
            @csrf
            <button class="text-[15px] ml-4 text-gray-200 select-none">Logout</button>

          </form>
        </div>

      </div>
    </div>
</div>

  @yield('tables')

  <script>
    function dropDown() {
      document.querySelector('#submenu').classList.toggle('hidden')
      document.querySelector('#arrow').classList.toggle('rotate-0')
    }
    function dropDown2() {
      document.querySelector('#submenu2').classList.toggle('hidden')
      document.querySelector('#arrow2').classList.toggle('rotate-0')
    }
    dropDown()
    dropDown2()

    function Openbar() {
      document.querySelector('.sidebar').classList.toggle('left-[-300px]')
    }
  </script>
</body>

</html>

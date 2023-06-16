<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('build/assets/app-0d91dc04.js') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/app-13fb7ff3.css') }}">
  <style>
    .custom-shape-divider-bottom-1686225620 {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-1686225620 svg {
        position: relative;
        display: block;
        width: calc(122% + 1.3px);
        height: 81px;
    }

    .custom-shape-divider-bottom-1686225620 .shape-fill {
        fill: #FFFFFF;
    }

    .custom-shape-divider-top-1686230298 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
    }

    .custom-shape-divider-top-1686230298 svg {
        position: relative;
        display: block;
        width: calc(213% + 1.3px);
        height: 163px;
        transform: rotateY(180deg);
    }

    .custom-shape-divider-top-1686230298 .shape-fill {
        fill: #FFFFFF;
    }
    .custom-shape-divider-top-1686284977 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1686284977 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 99px;
}

.custom-shape-divider-top-1686284977 .shape-fill {
    fill: #FFFFFF;
}
  </style>
</head>
<body>
    @include('sweetalert::alert')
    <div class="bg-gradient-to-tr from-cyan-400 to-emerald-400">
         <div class="bg-cyan-400/20 p-4 flex flex-wrap items-center justify-between px-10 group hover:bg-white/25 hover:p-6 transition duration-1000 ease-in-out">
            <img src="{{ asset('images/log.png') }}" alt="Logo" class="w-16 select-none">


                 <!-- Menu navbar -->
                 <ul class="flex space-x-4">
                    @auth

                    @if ( Auth::user()->role == 'admin' || Auth::user()->role == 'staff')

                    <li><a class="text-white hover:text-slate-200 group select-none" href="{{ '/dahsboard' }}">Dashboard</a></li>
                    @endif

                    @endauth
                     <li><a class="text-white hover:text-slate-200 group select-none" href="#home">Home</a></li>
                     <li><a class="text-white hover:text-slate-200 select-none" href="#contact">Contact</a></li>
                     <li><a class="text-white hover:text-slate-200 select-none" href="#shop">Products</a></li>

                     <li><a href="#register" class="text-slate-500 @auth hidden @endauth select-none active:bg-slate-100 hover:text-slate-700 hover:animate-pulse bg-white px-4 py-2 rounded-lg drop-shadow-lg" href="#">Get Started!</a></li>
                     @auth
                     <form method="post" action="{{ '/logout' }}">
                        @csrf
                        <li><button class="text-slate-500 select-none active:bg-slate-100 hover:text-slate-700 hover:animate-pulse bg-white px-4 py-2 rounded-lg drop-shadow-lg" type="submit">Logout</button></li>
                     </form>
                     @endauth
                 </ul>

         </div>
        <section class=" w-full h-20 relative flex justify-center items-center bg-gradient-to-tr from-cyan-400 to-emerald-400 text-white">
            <div class="custom-shape-divider-bottom-1686225620">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-white"></path>
                </svg>
            </div>
        </section>
        <section class=" w-full h-fit relative flex justify-center items-center bg-white text-black">
            <div class="custom-shape-divider-top-1686229813">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
            <img class="select-none w-fit h-fit transition duration-500 transform hover:scale-90" src="{{ asset('images/shopping') }}" alt="">

        </section>
        <section class=" w-full h-72 relative flex justify-center items-center bg-gradient-to-t from-cyan-600 to-teal-400">
            <div class="custom-shape-divider-top-1686230298">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>

        </section>
        <section id="contact" class=" w-full h-72 relative flex justify-center items-center bg-cyan-600 text-white">

            <div class="group w-fit sticky drop-shadow-xl top-0 bg-white p-6 h-auto flex justify-center rounded-md m-5">
                <div class="shrink-0 transform transition duration-300 group-hover:translate-y-5 group-hover:scale-110">
                  <img class="h-16 select-none w-16 object-cover rounded-full" src="{{ asset('images/message.svg') }}" alt="Current profile photo" />
                </div>
                <form method="post" action="/pesan" class="flex items-center justify-start gap-3 flex-wrap space-x-6 w-fit">
                    @csrf
                    <label class="block w-full">
                      <input name="emailm" type="email" {{ !Auth::user() ? 'readonly' : ''  }} placeholder="Your Email or Name" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 text-black
                      " value="{{ old('emailm') }}"/>
                    </label>
                    <label class="block w-full">
                        <input name="message" type="text" {{ !Auth::user() ? 'readonly' : '' }} placeholder="Say Hello To Me.." class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 text-black
                        " value="{{ old('message') }}" />
                      </label>
                    <button {{ !Auth::user() ? 'disabled' : '' }} type="submit" class="bg-cyan-500 transform transition hover:bg-cyan-600 duration-300 active:scale-90 active:bg-cyan-700 px-5 py-2 rounded-md"> {{ !Auth::user() ? 'You need to Login' : 'Submit' }} </button>
                </form>

            </div>

        </section>
        <section id="shop" class=" w-full h-auto relative flex justify-center items-center bg-gradient-to-t from-white to-cyan-600 p-5 text-white">
            <div class="max-w-5xl  bg-white p-6  h-full flex justify-center gap-2 rounded-xl m-5 flex-wrap">
                @forelse ($product as $item)

                <div class="max-w-xs rounded-2xl overflow-hidden group hover:bg-gray-200">
                    <img class="w-full transition duration-300 transform group-hover:scale-105" src="{{ asset('images/'.$item->gambar ) }}" alt="Image">
                    <div class="px-6 py-5">
                      <div class="font-extrabold text-xl mb-2 transform group-hover:scale-95 group-hover:translate-x-3 transition duration-300 group-hover:text-cyan-800">{{ $item->nama_produk }}</div>
                      <p class="text-gray-700 text-base"> {{ $item->deskripsi }} </p>
                    </div>
                    <div class="px-6 pt-4  pb-5">
                        <a href="{{ '/product-detail/'.$item->id }}" class=" inline-block transition transform duration-300 focus:scale-110 focus:text-white focus:bg-emerald-700 bg-gray-200 rounded-full px-3 py-2 text-sm font-semibold text-gray-700 mr-2 group-hover:bg-teal-600 group-hover:text-white">Cek Sekarang!</a>
                      </div>
                </div>
                @empty

                @endforelse
                <div class=" text-black absolute drop-shadow-2xl" > {{ $product->links() }} </div>
            </div>


        </section>
        <section id="register" class=" w-full h-auto relative flex justify-center items-center bg-gradient-to-t from-black to-cyan-800 p-5 ">
            <div class="custom-shape-divider-top-1686284977">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="w-auto max-w-md bg-white p-6  h-full flex justify-between gap-5 rounded-xl m-5 flex-wrap">
                <div class="max-w-sm rounded overflow-hidden group">
                    <img class="drop-shadow-lg w-full transition duration-300 transform scale-50 group-hover:animate-pulse group-hover:translate-y-5" src="{{ asset('images/login.webp') }}" alt="Image">

                    <div class="px-6 py-5">
                      <form action="{{ '/register' }}" method="post">
                        @csrf
                         <label class="block">
                            <span class="block text-sm font-medium text-slate-700 transition duration-300 transform group-hover:translate-x-3">Username</span>
                            <!-- Using form state modifiers, the classes can be identical for every input -->
                            <input @auth
                                readonly
                            @endauth name="name" type="text" class="font-semibold mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                              focus:outline-none focus:border-emerald-400 focus:ring-1 focus:ring-sky-500
                            text-black
                              invalid:border-pink-500 invalid:text-pink-600
                              focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            " value="{{ old('name') }}"/>
                          </label>
                          <label class="block mt-3">
                            <span class="block text-sm font-medium text-slate-700 transition duration-300 transform group-hover:translate-x-3">E-mail</span>
                            <!-- Using form state modifiers, the classes can be identical for every input -->
                            <input @auth
                                readonly
                            @endauth name="email" type="email" class="font-semibold mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                              focus:outline-none focus:border-emerald-400 focus:ring-1 focus:ring-sky-500
                            text-black
                              invalid:border-pink-500 invalid:text-pink-600
                              focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            " value="{{ old('email') }}"/>
                          </label>
                          <label class="block mt-3">
                            <span class="block text-sm font-medium text-slate-700 transition duration-300 transform group-hover:translate-x-3">Password</span>
                            <!-- Using form state modifiers, the classes can be identical for every input -->
                            <input @auth
                                readonly
                            @endauth name="password" type="password" class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                              focus:outline-none focus:border-emerald-400 focus:ring-1 focus:ring-sky-500
                            text-black
                              invalid:border-pink-500 invalid:text-pink-600
                              focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            "/>
                          </label>
                          <button type="submit" @auth disabled @endauth class="drop-shadow-lg mt-7 bg-cyan-600 px-5 py-2 transform transition ease-in-out duration-300 active:scale-110 hover:bg-sky-700 active:bg-violet-900 rounded-full text-slate-50"> {{ Auth::check() ? 'You Already Login' : 'Register Know!' }}</button>
                          <a class=" ml-6 @auth hidden @endauth " href="{{ '/login' }}">Got Account?</a>
                      </form>
                    </div>
                </div>

            </div>

        </section>
        <section class=" w-full h-auto relative flex justify-center flex-wrap items-center flex-shrink bg-black p-5 ">
            <img class="transform w-auto select-none animate-spin scale-90  ease-in-out transition duration-700" src="{{ asset('images/ending') }}" alt="">
            <div class="group transform transition duration-300 hover:scale-90">
                <h1 class="text-white text-7xl font-extrabold font-sans mb-4 transform transition duration-300 group-hover:translate-x-5 text-center select-none" >The End Of Section</h1>

                <div class="bg-white rounded-lg w-auto transform transition group-hover:scale-110 p-6">
                    <h2 class="font-mono text-xl font-bold mb-4 group-hover:text-red-600 group-hover:animate-pulse select-none">Atention!</h2>
                    <div class="shrink-0 mb-3">
                        <img class="select-none h-[5rem] w-[5rem] object-cover rounded-full" src="{{ asset('images/bio.jpeg') }}" alt="Current profile photo" />
                    </div>
                    <p class="text-gray-600 selection:bg-slate-500 selection:text-white font-mono mb-4 max-w-screen-md">This Website is only for portofolio purpouse, created by me, Ghozy Nouval Satya Prasaja, if you want to get admin role or any bussiness to test this website please send your email and messege in  <a href="#contact"> contact section</a>  above. Thank you very much for visiting my website. Happy Code 👊</p>
                  </div>

            </div>

        </section>
     </div>

</body>
</html>

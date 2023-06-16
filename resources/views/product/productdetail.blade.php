<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/app-0d91dc04.js') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-13fb7ff3.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .custom-shape-divider-top-1686320039 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1686320039 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 500px;
}

.custom-shape-divider-top-1686320039 .shape-fill {
    fill: #FFFFFF;
}

    </style>
</head>
<body>
    @include('sweetalert::alert')
    <div class="bg-gradient-to-br p-8 h-screen from-cyan-900 to-teal-400">

        <div class="custom-shape-divider-top-1686320039">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="fill-cyan-950"></path>
            </svg>
        </div>
        <div class="flex justify-center mt-10 w-auto items-start">
            <div class="max-w-lg md:max-w-4xl md:max-h-fit group md:ml-12 transform hover:scale-105 duration-300 bg-white shadow-xl hover:bg-slate-200 rounded-md p-6">
              <h2 class="text-lg font-semibold mb-4 transition duration-300 group-hover:translate-x-4  transform select-none"> <a href="{{'/'}}"><span class="bg-white py-2 px-4 text-white group-hover:bg-slate-300 group-hover:text-slate-400 rounded-full" >v</span></a>  Product Details</h2>
              <div class="overflow-x-auto overflow-scroll">
                <div class="min-w-full">
                    <div class="flex flex-wrap gap-4">
                        <div class="w-1/2">
                          <img src="{{ asset('images/'.$data->gambar) }}" alt="Gambar Produk" class="w-full h-auto max-w-lgt">
                        </div>
                        <div class="w-1/2">
                          <h2 class="text-2xl font-bold mb-2"> {{ $data->nama_produk }} </h2>
                          <p class="text-gray-500 mb-4"> {{ $data->deskripsi }} </p>
                          <div class="flex items-center gap-4 mb-4">
                            <span class="text-lg font-bold">Harga:</span>
                            <span class="text-lg">Rp {{ number_format($data->harga_produk, 0, ',', '.') }}</span>
                          </div>

                          <button class="bg-emerald-600 transition duration-300 transform active:scale-90 active:bg-violet-900 text-white py-2 px-4 rounded-md hover:bg-cyan-600">Check</button>
                        </div>
                      </div>
                </div>
                </div>
            </div>
          </div>
    </div>
</body>
</html>

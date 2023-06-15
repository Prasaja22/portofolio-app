<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('../../resources/css/app.css')
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

.custom-shape-divider-bottom-1686417013 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1686417013 svg {
    position: relative;
    display: block;
    width: calc(115% + 1.3px);
    height: 178px;
}

.custom-shape-divider-bottom-1686417013 .shape-fill {
    fill: #FFFFFF;
}

    </style>
</head>
<body>
    @include('sweetalert::alert')
    <div class="bg-gradient-to-br from-cyan-900 to-teal-400">

        <div class="custom-shape-divider-top-1686320039">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="fill-cyan-950"></path>
            </svg>
        </div>
        <div class="flex z-10 justify-center items-center h-screen  drop-shadow-lg">
            <form method="post" action="{{ '/login' }}" class="bg-white/50 transition transform absolute group-hover:scale-125 shadow-md w-96 rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                <label class="block text-gray-700 font-mono text-sm font-bold mb-2" for="username">
                  Email
                </label>
                <input
                  name="email" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="username" type="text" placeholder="Enter your username" value="{{ old('email') }}">
              </div>
              <div class="mb-6">
                <label class="block font-mono text-gray-700 text-sm font-bold mb-2" for="password">
                  Password
                </label>
                <input
                  name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                  id="password" type="password" placeholder="Enter your password">
              </div>
              <div class="flex items-center justify-between">
                <a class="rounded-s-full bg-teal-500 font-bold p-2 hover:bg-teal-800 text-white" href="{{ '/' }}">Back ?</a>
                <button
                  class="bg-teal-500 hover:bg-teal-800 transition duration-300 text-white font-bold p-2 rounded-e-full px-3 focus:outline-none focus:shadow-outline"
                  type="submit">
                  Login
                </button>
              </div>
            </form>
            <div class="">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="100%" id="blobSvg">                        <defs>                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">                            <stop offset="0%" style="stop-color: rgb(238, 205, 163);"></stop>                            <stop offset="100%" style="stop-color: rgb(239, 98, 159);"></stop>                        </linearGradient>                        </defs>                        <path id="blob" fill="url(#gradient)">                            <animate attributeName="d" dur="10000ms" repeatCount="indefinite" values="M440.5,320.5Q418,391,355.5,442.5Q293,494,226,450.5Q159,407,99,367Q39,327,31.5,247.5Q24,168,89,125.5Q154,83,219.5,68Q285,53,335.5,94.5Q386,136,424.5,193Q463,250,440.5,320.5Z;M453.78747,319.98894Q416.97789,389.97789,353.96683,436.87838Q290.95577,483.77887,223.95577,447.43366Q156.95577,411.08845,105.64373,365.97789Q54.33169,320.86732,62.67444,252.61056Q71.01719,184.3538,113.01965,135.21007Q155.02211,86.06634,220.52211,66.46683Q286.02211,46.86732,335.5,91.94472Q384.97789,137.02211,437.78747,193.51106Q490.59704,250,453.78747,319.98894Z;M411.39826,313.90633Q402.59677,377.81265,342.92059,407.63957Q283.24442,437.46649,215.13648,432.5428Q147.02853,427.61911,82.23325,380.9572Q17.43796,334.29529,20.45223,250.83809Q23.46649,167.38089,82.5856,115.05707Q141.70471,62.73325,212.19045,63.73015Q282.67618,64.72705,352.67308,84.79839Q422.66998,104.86972,421.43486,177.43486Q420.19974,250,411.39826,313.90633Z;M440.5,320.5Q418,391,355.5,442.5Q293,494,226,450.5Q159,407,99,367Q39,327,31.5,247.5Q24,168,89,125.5Q154,83,219.5,68Q285,53,335.5,94.5Q386,136,424.5,193Q463,250,440.5,320.5Z;"></animate>                        </path>                    </svg>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1686417013">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
</body>
</html>

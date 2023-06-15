@extends('dahsboard.layouts')

@section('tables')
<div class="flex justify-center w-auto items-start mt-32 h-screen">
    <div class="max-w-md md:max-w-4xl group md:ml-24 transform hover:scale-105 duration-300 bg-white shadow-xl hover:bg-slate-200 rounded-md p-6">
      <h2 class="text-lg font-semibold mb-4  transform select-none group-hover:translate-x-4 group-hover:animate-pulse group-hover:font-bold transition duration-300">Hello There! 👋</h2>
      <div class="overflow-x-auto">
        <h1 class="font-mono"> Great To See You, {{ Auth::user()->name }} </h1>
      </div>
    </div>
  </div>
@endsection

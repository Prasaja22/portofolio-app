@extends('dahsboard.layouts')

@section('tables')
<div class="flex justify-center w-auto items-start mt-32 h-screen">
    <div class="max-w-md md:max-w-4xl group md:ml-24 transform hover:scale-105 duration-300 bg-white shadow-xl hover:bg-slate-200 rounded-md p-6">
      <h2 class="text-lg font-semibold mb-4 transition duration-300 group-hover:translate-x-5  transform select-none"> <a href="{{ '/messages' }}" class="bg-white text-white group-hover:bg-slate-300 font-bold group-hover:text-slate-400 rounded-full py-2 px-4" ><</a> Reply Messeges</h2>
      <div class="overflow-x-auto">
        <div class="min-w-full">

            <form method="post" action="/reply-mail" class="flex items-center justify-start gap-3 flex-wrap space-x-6 w-fit">
                @csrf
                @method('put')
                <label class="block w-full">
                    <h4>Email</h4>
                  <input name="email" type="text" readonly placeholder="Email" class="font-mono font-bold mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 text-black
                  " value="{{ $data->email }}"/>
                </label>
                <input type="hidden" name="id" value=" {{ $data->id }} ">
                <label class="block w-full">
                    <h4>Messages</h4>
                    <input readonly name="message" type="text" placeholder="Say Hello To Me.." class="font-mono mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 text-black
                    " value="{{ $data->pesan }}" />
                </label>
                <label class="block w-full">
                    <h4>Reply</h4>
                    <textarea name="reply" class="p-4 rounded-lg bg-white text-slate-800 font-mono focus:outline-none" id="" cols="70" rows="10"></textarea>
                </label>
                <button type="submit" class="bg-cyan-500 text-white transform transition hover:bg-cyan-600 duration-300 active:scale-90 active:bg-cyan-700 px-5 py-2 rounded-md">Submit</button>
            </form>


        </div>
    </table>
</div>
    </div>
  </div>
@endsection

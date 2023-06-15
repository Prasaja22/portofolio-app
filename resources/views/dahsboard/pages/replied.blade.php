@extends('dahsboard.layouts')

@section('tables')
<div class="flex justify-center w-auto items-start mt-32 h-screen">
    <div class="max-w-md md:max-w-4xl group md:ml-24 transform hover:scale-105 duration-300 bg-white shadow-xl hover:bg-slate-200 rounded-md p-6">
        <h2 class="text-lg font-semibold mb-4 transition duration-300 group-hover:translate-x-4  transform select-none"> <span class="bg-white py-2 px-4 text-white group-hover:bg-slate-300 group-hover:text-slate-400 rounded-full" >v</span> Replied Messages</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
          <thead>
            <tr>
              <th class="px-4 py-2">No</th>
              <th class="px-4 py-2">Email ? Name</th>
              <th class="px-4 py-2">Message</th>
              <th class="px-4 py-2">Status</th>
              <th class="px-4 py-2">Actons</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($data as $item)

            <tr>
                <td class="px-4 py-2 w-auto"> {{ $loop->iteration }} </td>
                <td class="px-4 py-2 w-auto"> {{ $item->email }} </td>
                <td class="px-4 py-2 w-auto"> {{ $item->pesan }} </td>
                <td class="px-4 py-2 w-auto"> {{ $item->status }} </td>
                <td class="px-4 py-2 w-auto">

                <a data-confirm-delete="true" href="{{ '/hapus-pesan/'.$item->id }}" type="submit" class="rounded-md transform transition duration-300 bg-red-500 hover:bg-red-700 active:bg-orange-300 active:scale-95 text-white px-4 py-1">Delete</a>
                </td>
            </tr>
            @empty

            @endforelse
            <!-- Tambahkan baris data lainnya di sini -->
        </tbody>
    </table>
</div>
{{ $data->links() }}
    </div>
  </div>
@endsection

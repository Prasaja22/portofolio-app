@extends('dahsboard.layouts')

@section('tables')
<div class="flex justify-center w-auto items-start mt-32 md:mb-40 h-screen">
    <div class="max-w-md md:max-w-4xl group md:ml-24 transform hover:scale-105 duration-300 bg-white shadow-xl hover:bg-slate-200 rounded-md p-6">
      <h2 class="text-lg font-semibold mb-4 transition duration-300 group-hover:translate-x-4  transform select-none"> <span class="bg-white py-2 px-4 text-white group-hover:bg-slate-300 group-hover:text-slate-400 rounded-full" >v</span> Active Products</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
          <thead>
            <tr>
              <th class="px-4 py-2">No</th>
              <th class="px-4 py-2">Product Name</th>
              <th class="px-4 py-2">Price</th>
              <th class="px-4 py-2">Image</th>
              <th class="px-4 py-2">Status</th>
              <th class="px-4 py-2">Description</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($data as $item)

            <tr>
                <td class="px-4 py-2 w-auto"> {{ $loop->iteration }} </td>
                <td class="px-4 py-2 w-auto"> {{ $item->nama_produk }} </td>
                <td class="px-4 py-2 w-auto"> {{ $item->harga_produk }} </td>
                <td class="px-4 py-2 w-auto"> <img src="{{ asset('images/'.$item->gambar ) }}" alt="Image" class="w-full h-auto max-w-xs"> </td>
                <td class="px-4 py-2 w-auto"> {{ $item->status }} </td>
                <td class="px-4 py-2 w-auto"> {{ $item->deskripsi }} </td>
                <td class="px-4 py-2 w-auto">
                    @if ( Auth::user()->id_user == $item->id_user || Auth::user()->role == 'admin' )
                    <a data-confirm-delete="true" href="{{ '/delete-produk/'.$item->id }}" type="submit" class="mb-2 font-medium rounded-md transform transition duration-300 bg-red-500 hover:bg-red-700 active:bg-orange-800 active:scale-95 text-white px-4 py-1">Hapus</a>
                    <a href="{{ '/approve-produk/'.$item->id }}" type="submit" class="font-medium rounded-md transform transition duration-300 bg-sky-500 hover:bg-sky-700 active:bg-purple-800 active:scale-95 text-white px-4 py-1">Update</a>
                    @endif
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

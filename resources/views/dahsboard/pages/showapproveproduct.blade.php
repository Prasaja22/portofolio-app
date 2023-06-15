@extends('dahsboard.layouts')

@section('tables')
<div class="flex justify-center w-auto items-start mt-32 mb-40 h-screen">
    <div class="max-w-md md:max-w-4xl group md:ml-24 transform hover:scale-95 duration-300 bg-white shadow-xl hover:bg-slate-200 rounded-md p-6">
      <h2 class="text-lg font-semibold mb-4 transition duration-300 group-hover:translate-x-5  transform select-none"> <a href="{{ '/active-product' }}" class="bg-white text-white group-hover:bg-slate-300 font-bold group-hover:text-slate-400 rounded-full py-2 px-4" ><</a> Release This Product</h2>
      <div class="overflow-x-auto">
        <div class="min-w-full">
            <form method="post" enctype="multipart/form-data" action="{{ '/update-product/'.$data->id }}" class="flex items-center justify-start gap-3 flex-wrap space-x-6 w-fit">
                @csrf
                @method('put')
                @if ( Auth::user()->role == 'admin' )
                <label class="block w-full">
                    <h4>Status</h4>
                    <select name="status" class="form-select font-mono w-full focus:outline-none p-3">
                        <option value="approved" class="option" {{ $data->status == 'approved' ? 'selected' : '' }} >Approved</option>
                        <option value="waiting" class="option"  {{ $data->status == 'waiting' ? 'selected' : "" }}>Waiting</option>
                      </select>
                </label>
                @endif
                <label class="block w-full">
                    <h4>Name Product</h4>
                  <input name="name" type="text" placeholder="Product Name" class="font-mono font-bold mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 text-black
                  " value="{{ $data->nama_produk }}" />
                  <input hidden type="text" name="id_user" value="{{ $data->id }}">
                  <input hidden type="text" name="id_user" value="{{ $data->id_user }}">
                </label>

                <label class="block w-full">
                    <h4>Price</h4>
                    <input name="price" type="number" placeholder="Harga" class="font-mono mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 text-black
                    " value="{{ $data->harga_produk }}" />
                </label>
                <label class="block w-full">
                    <h4>Image</h4>
                    <input name="image" type="file" placeholder="Harga" class="mt-1 block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    transform
                    transition
                    ease-in-out
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-indigo-500 file:text-white
                    hover:file:bg-indigo-400
                    file:active:scale-90
                    "/>
                </label>
                <label class="block w-full" for="image-preview">
                    <h4>New Image</h4>
                    <img id="image-preview" src="path/to/image.jpg" alt="Image" class="hidden w-full h-auto max-w-md">
                </label>
                <label class="block w-full" for="image-preview">
                    <h4>Current Image</h4>
                    <img id="image-preview" src="{{ asset('images/'.$data->gambar) }}" alt="Image" class="w-full h-auto max-w-md">
                </label>
                <label class="block w-full">
                    <h4>Descripton</h4>
                    <textarea name="desc" class="focus:outline-none p-3 drop-shadow-lg rounded-lg font-mono" cols="70" rows="10">{{ $data->deskripsi }}</textarea>
                </label>
                <button type="submit" class="bg-cyan-500 text-white transform transition hover:bg-cyan-600 duration-300 active:scale-90 active:bg-cyan-700 px-5 py-2 rounded-md"> {{ Auth::user()->role == 'admin' ? 'Approve' : 'edit' }} </button>
            </form>


        </div>
    </table>
</div>
    </div>
  </div>

  <script>
    const inputImage = document.querySelector('input[name="image"]');
    const imagePreview = document.getElementById('image-preview');

    inputImage.addEventListener('change', function(e) {
        const file = e.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('hidden');
        }

        reader.readAsDataURL(file);
    });
</script>


@endsection

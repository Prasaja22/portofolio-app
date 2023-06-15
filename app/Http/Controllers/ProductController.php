<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dahsboard.pages.addproduct');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {



    }


    public function waitlist(){

        $data = Product::where('status', 'waiting')->paginate(7);

        return view('dahsboard.pages.productwait', compact('data'));

    }


    public function approve()
    {

        $data = Product::where('status', 'waiting')->paginate(7);

        $text = 'Are you really sure you want to?';
        $title = 'Delete this?';

        confirmDelete($title, $text );

        return view('dahsboard.pages.approvedproduct', compact('data'));

    }

    public function active(){

        $data = Product::where('status', 'approved')->orderBy('updated_at', 'desc')->paginate(7);

        $text = 'Are you really sure you want to?';
        $title = 'Delete this?';

        confirmDelete($title, $text );

        return view('dahsboard.pages.activeproduct', compact('data'));

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
        ]);

        if($validate->fails()){
            return back()->withInput()->with('toast_error', 'hmmm.. you need to fill the form corectly');
        }



        try {

            if($request->file('image')){

                $image = $request->file('image');
                $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);

                Product::create([
                    'id_user' => $request->id_user,
                    'nama_produk' => $request->name,
                    'harga_produk' => $request->price,
                    'gambar' => $imageName,
                    'deskripsi' => $request->desc
                ]);

                return redirect('/wait-list')->with('toast_success', 'Right! now you just need to wait the approval');
            } else {
                Product::create([
                    'id_user' => $request->id_user,
                    'nama_produk' => $request->name,
                    'harga_produk' => $request->price,
                    'gambar' => '',
                    'deskripsi' => $request->desc
                ]);

                return redirect('/wait-list')->with('toast_success', 'Right! now you just need to wait the approval');
            }


        } catch (\Exception $e) {

            return back()->withInput()->with('toast_error', $e);

        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Product::findOrFail($id);

        return view('dahsboard.pages.showapproveproduct', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
        ]);


        if($validate->fails()){
            return back()->with('toast_error', 'Hmm..  You need to fill form corectly');
        }

        if($request->status == 'waiting'){
            return back()->with('toast_error', 'Hmm..  You havent change the status yet');
        }


        if($request->file('image')){

            try{
                $image = $request->file('image');
                $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);

                Product::findOrFail($request->id)->update([
                    'id_user' => $request->id_user,
                    'nama_produk' => $request->name,
                    'harga_produk' => $request->price,
                    'status' => $request->status,
                    'gambar' => $imageName,
                    'deskripsi' => $request->desc
                ]);

                return redirect('/active-product')->with('toast_success', 'Successfully Release The Product');

            } catch (\Exception $e) {
                return back()->with('toast_error', '$e');
            }

        } else {

            try {
                Product::findOrFail($request->id)->update([
                    'id_user' => $request->id_user,
                    'nama_produk' => $request->name,
                    'harga_produk' => $request->price,
                    'status' => $request->status,
                    'deskripsi' => $request->desc
                ]);

                return redirect('/active-product')->with('toast_success', 'Successfully Release The Product');

            } catch (\Exception $e) {
                return back()->with('toast_error', $e);
            }

        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $product = Product::findOrFail($id);

        $imageName = $product->gambar;

        $product->delete();

        if(!empty($imageName)){
            $imagePath = public_path('images/' . $imageName);
            if (file_exists($imagePath)) {
               unlink($imagePath);
            }
        }

        return redirect('/active-product')->with('toast_success', 'Successfully deleted product');

    }
}

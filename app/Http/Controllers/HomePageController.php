<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('HomePage.index', ['barang' => $data], [
            'title' => 'Home Page',
        ]);
    }

    function profile()
    {
        return view('HomePage.profile', [], ['title' => 'Profile Page']);
    }

    function gallery()
    {
        $data1 = Product::all();
        $total = Product::count();
        return view('HomePage.gallery', ['galeri' => $data1], ['title' => 'Gallery Page', 'total' => $total]);
    }

    function gallerySort(Request $request)
    {
        $data1 = Product::orderBy($request->sorting, 'asc')->get();
        $total = Product::count();
        return view('HomePage.gallery', ['galeri' => $data1], [
            'title' => 'Gallery Page',
            'total' => $total
        ]);
    }

    function contact()
    {
        return view('HomePage.contact', ['title' => 'Contact Page']);
    }

    function updateDataUser(Request $request)
    {
        //validate laravel
        $this->validate($request, [
            'email' => 'email|unique:users,email,' . Auth::user()->id,
            'notelp' => 'numeric|unique:users,notelp,' . Auth::user()->id,
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('photoUser', 'public');
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->foto = $foto;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->save();
            return redirect('/profile')->with('success', 'Data berhasil diubah');
        } else {
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->save();
            return redirect('/profile')->with('success', 'Data berhasil diubah');
        }
    }

    function updateDataPassword(Request $request)
    {
        //validate laravel
        $this->validate($request, [
            'currentpassword' => 'required|current_password|min:8|',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/profile')->with('success', 'Password berhasil diubah');
    }

    function shopingcart()
    {
        return view('HomePage.shoppingcart', ['title' => 'Shoping Card | Shop']);
    }

    // function shopingcart()
    public function cart()
    {
        return view('HomePage.shoppingcart', ['title' => 'Keranjang Belanja']);
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $id,
                "product" => $product->product,
                "quantity" => 1,
                "kategori" => $product->kategori,
                "harga" => $product->harga,
                "gambar" => $product->gambar
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get($request->session);
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put($request->session, $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                session()->flash('success', 'Product removed successfully');
            }
        }
    }
}

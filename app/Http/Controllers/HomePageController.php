<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Region;
use App\Models\Article;
use App\Models\Transaksi;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    function index()
    {
        $data = Product::all();
        $article = Article::all();
        return view('HomePage.index', ['barang' => $data, 'articles' => $article], ['title' => 'Home Page',]);
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

    public function checkout(Request $request)
{
    $region = Region::all();

    // Get id from cart
    $cart = session()->get('cart');
    $total1 = 0;
    $products = null;
    $kuantitas = null;

    if ($cart != null) {
        $id = array_keys($cart);

        // Get product from id
        $products = Product::find($id);

        foreach ($products as $product) {
            $total1 += $cart[$product->id]['quantity'] * $product->harga;
        }

        $kuantitas = array_sum(array_column($cart, 'quantity'));
    }

    $note = $request->input('notes'); // Get the value of the input field named 'notes'

    return view('HomePage.checkout', [
        'title' => 'Checkout Page',
        'produk' => $products,
        'total' => $total1,
        'cart' => $cart,
        'kuantitas' => $kuantitas,
        'regions' => $region,
        'note' => $note, // Pass the note value to the view
    ]);
}

    public function searchProduct(Request $request)
    {
        $data = Product::where('product', 'like', '%' . $request->cari . '%')->get();
        return view('HomePage.search', ['title' => 'Search Page', 'barang' => $data]);
    }

    public function purchase()
    {
        return view('HomePage.purchase', ['title' => 'Purchase Page']);
    }

    public function postCheckOut(Request $request)
{
    $cart = session()->get('cart');

    if ($cart != null) {
        foreach ($cart as $item) {
            $transaksi = new Transaksi();
            $transaksi->user_id = Auth::user()->id;
            $transaksi->product_id = $item['id'];
            $transaksi->region_id = $request->region;
            $transaksi->qty = $item['quantity'];
            $transaksi->Tanggal_beli = now()->format('Y-m-d');
            $transaksi->created_at = now();
            $transaksi->note = $request->input('note');

            $transaksi->save();

            $product = Product::find($item['id']);
            $payment = new Payment();
            $total1 = $cart[$product->id]['quantity'] * $product->harga;
            $payment->total_bayar = $total1;
            $payment->transaksi_id = $transaksi->id;
            $payment->tanggal_bayar = now();
            $payment->created_at = now();
            $payment->save();
            $product->stok = $product->stok - $cart[$product->id]['quantity'];
            $product->save();
        }
    }

    // Destroy session
    session()->forget('cart');

    return redirect('/purchase')->with('success', 'Pembayaran berhasil, silahkan cek email anda');
}


    public function purchaseHistory()
    {
        $transaksi = Transaksi::with('products')->orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();
        $transaksiid = array_column($transaksi->toArray(), 'id');
        $payment = Payment::with('transaksi')->whereIn('transaksi_id', $transaksiid)->orderBy('created_at', 'desc')->paginate(5);
        return view('HomePage.purchaseHistory', ['title' => 'Purchase History Page', 'transaksi' => $transaksi, 'payment' => $payment]);
    }
}
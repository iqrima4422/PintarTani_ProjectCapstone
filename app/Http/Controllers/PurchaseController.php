<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Transaksi;
use App\Models\Region;
use Auth;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
     // create
     function create () {
        return view('HomePage.createPurchase')->with('title', 'Create Purchase');
    }

     // fungsi store
     function store (Request $request) {
        $this->validate($request, [
            'qty' => 'required',
            'tanggal_beli' => 'required',
            'note' => 'required',
            'product' => 'required',
            'user'=>'required',
            'region'=>'required',
        ]);

        $transaksi = new Transaksi();
        $transaksi->qty = $request->qty;
        $transaksi->tanggal_beli = $request->tanggal_beli;
        $transaksi->note = $request->note;
        $transaksi->user_id = $request->user;
        $transaksi->product_id = $request->product;
        $transaksi->region_id = $request->region;

        $transaksi->save();

        return redirect('/purchase');
    }

    function editDataPurchase($id){
        $transaksi = Transaksi::find($id);
        return view('HomePage.editPurchase', ['title' => 'Edit Purchase',
            'transaksi' => $transaksi,

        ]);
    }

    function updateDataPurchase (Request $request, $id) {
        $transaksi = Transaksi::find($id);
        $transaksi->note = $request->note;
        $transaksi->save();
        return redirect('/purchase');
    }

     // fungsi delete
     function destroy ($id) {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/purchase');
    }


    function cetakPurchase(){
        $transaksi = Transaksi::with('products')->orderBy('id', 'asc')->get();
        $pdf = PDF::loadView('HomePage.cetakPurchase',['title' => 'Purchase',
            'transaksi' => $transaksi,
        ]);
        return $pdf->download('Cetak Purchase.pdf');
    }
}

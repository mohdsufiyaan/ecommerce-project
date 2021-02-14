<?php

namespace App\Http\Controllers;
use App\Models\Card;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class Pdcontroller extends Controller {
	function hd() {
		$data = Product::all();
		return view('product', ['products' => $data]);
	}
	function detail($id) {
		$date = Product::find($id);
		if ($date == '') {
			return redirect('/');
		}
		return view('detail', ['product' => $date]);
	}
	function search(Request $req) {
		$data = Product::where('name', 'like', '%' . $req->input('search') . '%')->get();
		return view('search', ['search' => $data]);
	}
	function addcard(Request $req) {
		$card = new Card;

		$card->user_id = $req->session()->get('user')['id'];
		//$userid = session::get('user')['id'];
		if (Card::where([['product_id', '=', $req->product_id], ['user_id', '=', $card->user_id]])->exists()) {
			return redirect('/cardlist');
		} else {
			if ($req->session()->has('user')) {

				//$card = new Card;
				$card->user_id = $req->session()->get('user')['id'];
				$card->product_id = $req->product_id;
				$card->save();
				return redirect("/");
			} else {
				return redirect("/login");
			}
		}
	}
	static function carditem() {
		$userid = session::get('user')['id'];

		return Card::where('user_id', $userid)->count();
	}
	function cardlist() {
		$userid = session::get('user')['id'];

		$data = DB::table('card')
			->join('products', 'card.product_id', 'products.id')
			->distinct()
			->select('products.*', 'card.product_id as card_id')
			->where('card.user_id', $userid)
			->get();
		return view('cardlist', ['list' => $data]);

		//
	}
	function deletecard($id) {

		Card::where('product_id', $id)->delete();
		return redirect('/cardlist');
	}

	function ordercard($id) {
		//if (Session::has('user')) {
		$data = Product::find($id);
		if ($data == "") {
			return redirect('/');
		}
		return view('orderpage', ['order' => $data]);

	}

	function orderplace(Request $req) {
		$userid = session::get('user')['id'];
		//return $req->input();
		$order = new Order;
		$order->product_id = $req->ids;
		$order->user_id = $userid;
		$order->address = $req->address;
		$order->status = "pending";
		$order->order_date = date("d/m/y h:i:sa");
		$order->payment_method = $req->payment;
		$order->payment_status = "pending";
		$order->save();
		return redirect('/myorder');
	}
	function myorder() {
		if (Session::has('user')) {
			//return "order";
			$userid = session::get('user')['id'];

			$data = DB::table('orders')
				->join('products', 'orders.product_id', 'products.id')
				->orderBy('orders.id', 'DESC')
				->where('orders.user_id', $userid)
				->get();
			return view('myorders', ['oders' => $data]);
		} else {
			return redirect('/');
		}
	}

	function deleteorder($id) {
		Order::where('id', $id)->delete();
		return redirect('myorders');
	}
}
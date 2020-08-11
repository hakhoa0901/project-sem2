<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->get('productId');
        $quantity = $request->get('quantity');
        // kiểm tra sản phẩm theo id truyền lên.
        $product = Product::find($productId);
        if ($product == null) {
            // nếu không tồn tại sản phẩm đưa về trang lỗi ko tìm thấy.
            return view('error.not-found');
        }

        // lấy thông tin giỏ hàng từ trong session.
        $Cart = Session::get('Cart');
        // nếu session ko có thông tin giỏ hàng
        if ($Cart == null) {
            // thì tạo mới giỏ hàng là một mảng các key và value
            $Cart = array(); // key và value
        }
        // kiểm xem sản phẩm có trong giỏ hàng hay không.
        $cartItem = null;
        if (array_key_exists($product->id, $Cart)) {
            $cartItem = $Cart[$product->id];
        }
        if ($cartItem == null) {
            // nếu không, tạo mới một cart item.
            $cartItem = array(
                'productId' => $product->id,
                'productName' => $product->name,
                'productPrice' => $product->price,
                'quantity' => $quantity
            );
        } else {
            // nếu có, cộng số lượng sản phẩm thêm 1.
            $cartItem['quantity'] += $quantity;
        }
        // đưa sản phẩm vào giỏ hàng với key chính là id của sản phẩm.
        $Cart[$product->id] = $cartItem;
        if($cartItem['quantity'] <= 0){
            unset($Cart[$product->id]);
        }

        Session::put('Cart', $Cart);
        return redirect('/cart/show');
    }

    public function remove(Request $request)
    {
        $productId = $request->get('productId');
        // lấy thông tin giỏ hàng từ trong session.
        $Cart = Session::get('Cart');
        // nếu session ko có thông tin giỏ hàng
        if ($Cart != null) {
            if (array_key_exists($productId, $Cart)) {
                unset($Cart[$productId]);
            }
        }
        Session::put('Cart', $Cart);
        return redirect('/cart/show');
    }

    public function show()
    {
        return view('cart.show')->with('Cart', Session::get('Cart'));
    }

    // lưu ý làm trang confirm đơn hàng trước khi submit.
    public function submit(Request $request)
    {
        $shipName = $request->get('shipName');
        $shipAddress = $request->get('shipAddress');
        $shipPhone = $request->get('shipPhone');
        $shipEmail = $request->get('shipEmail');
        $note = $request->get('note');
        // lấy thông tin giỏ hàng từ trong session.
        $Cart = Session::get('Cart');
        // nếu session ko có thông tin giỏ hàng
        if ($Cart == null) {
            // thì tạo mới giỏ hàng là một mảng các key và value
            $Cart = array(); // key và value
        }
        $order = new Order();
        $order->customer_id = 1;
        $order->status = 0; // 0. đang chờ xử lý| 1. đã xác nhận| 2. Thành công | 3. Huỷ | -1. Đã xoá.
        $order->ship_name = $shipName;
        $order->ship_address = $shipAddress;
        $order->ship_phone = $shipPhone;
        $order->ship_email = $shipEmail;
        $order->note = $note;

        $orderDetails = array();
        foreach ($Cart as $key => $cartItem){
            $productId = $cartItem['productId'];
            $product = Product::find($productId);
            if($product == null){
                continue;
            }
            $quantity = $cartItem['quantity'];
            $orderDetail = new OrderDetail();
            $orderDetail->product_id = $productId;
            // $orderDetail->order_id = ? chờ lưu đơn hàng mới có.
            $orderDetail->quantity = $quantity;
            $orderDetail->unit_price = $product->price;
            $order->total_money += $orderDetail->unit_price * $orderDetail->quantity;
            array_push($orderDetails, $orderDetail);
        }
        DB::transaction(function() use ($order, $orderDetails) {
            $order->save(); // có id của order.
            foreach ($orderDetails as $orderDetail){
                $orderDetail->order_id = $order->id;
                $orderDetail->save();
            }
        });
        Session::remove('Cart');
        return 'Order success!';
    }
}

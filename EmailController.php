<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hacksaw\Admin\AdminOrder;

class EmailController extends Controller
{
	public function sendOrderEmail($order_id)
	{
		$order = AdminOrder::findOrFail($order_id);

		return $order->sendCustomerOrderEmail();
	}

	public function sendOrderStatusUpdate($order_id)
	{
		$order = AdminOrder::findOrFail($order_id);
		return $order->sendCustomerStatusEmail();
	}
}

<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function createTransaction(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.sanitized');
        Config::$is3ds = config('midtrans.3ds');

        $orderId = rand();
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => 100000,
            ],
            'customer_details' => [
                'first_name' => 'Budi',
                'last_name' => 'Setiawan',
                'email' => 'budi@example.com',
                'phone' => '081234567890',
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return view('payment', compact('snapToken'));
    }
}

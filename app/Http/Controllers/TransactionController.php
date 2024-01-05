<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\Transaction;


class TransactionController extends Controller
{
    // store transaction data to database
    public function store(Request $request)
    {
        switch($request->package_choose)
        {
            case '1':
                $price = '150000';
                break;
            case '2':
                $price = '250000';
                break;
            case '3':
                $price = '250000';
                break;
            default:
                $price = '0';
                break;
        }
        Transaction::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'cat_name' => $request->cat_name,
            'price' => $price,
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Transaction created successfully.');
    }
}

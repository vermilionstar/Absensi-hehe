<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CheckinCheckoutModel;

class CheckinCheckoutController extends Controller
{
    public function checkinCheckout(Request $request)
{
    $action = $request->input('action');

    if ($action === 'checkin') {
        // Lakukan proses checkin
        // Contoh: Simpan data checkin ke dalam database
        CheckinCheckoutModel::create(['user_id' => auth()->id(), 'checked_in' => true]);
        
    } elseif ($action === 'checkout') {
        // Lakukan proses checkout
        // Contoh: Update data checkin di database
        $userCheckin = CheckinCheckoutModel::where('user_id', auth()->id())->first();
        if ($userCheckin) {
            $userCheckin->update(['checked_in' => false]);
        }
    }

    return redirect()->back();
}
}

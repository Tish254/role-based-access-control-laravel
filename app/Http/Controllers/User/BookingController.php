<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {
        $this->authorize('bookings-manage');

        return response()->json(['success' => true]);
    }
}

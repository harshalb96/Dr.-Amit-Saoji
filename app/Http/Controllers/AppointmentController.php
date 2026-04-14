<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:120',
            'email'   => 'required|email|max:150',
            'phone'   => 'required|string|regex:/^[0-9+\-\s]{7,20}$/',
            'message' => 'nullable|string|max:1000',
        ]);

        $appointment = Appointment::create($data);

        $message = 'Thank you! Our team will contact you shortly.';

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $message,
                'data'    => $appointment,
            ]);
        }

        return redirect()->back()->with('success', $message);
    }
}

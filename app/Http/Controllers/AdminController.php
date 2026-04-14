<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function appointments()
    {
        $this->ensureAdmin();
        $appointments = Appointment::latest()->get();
        return view('admin.appointments', compact('appointments'));
    }

    public function destroyAppointment(Appointment $appointment)
    {
        $this->ensureAdmin();
        $appointment->delete();
        return redirect()->route('admin.appointments')
            ->with('flash', 'Appointment deleted successfully.');
    }

    private function ensureAdmin(): void
    {
        if (! Auth::user() || ! Auth::user()->is_admin) {
            abort(403, 'You do not have admin access.');
        }
    }
}

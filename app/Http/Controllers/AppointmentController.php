<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index() {
        return Appointment::all();
    }

    public function store(Request $request) {
        return Appointment::create($request->all());
    }

    public function show($id) {
        return Appointment::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());
        return $appointment;
    }

    public function destroy($id) {
        Appointment::destroy($id);
        return response()->noContent();
    }
}

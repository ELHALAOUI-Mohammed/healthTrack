<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index() {
        return Prescription::all();
    }

    public function store(Request $request) {
        return Prescription::create($request->all());
    }

    public function show($id) {
        return Prescription::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $prescription = Prescription::findOrFail($id);
        $prescription->update($request->all());
        return $prescription;
    }

    public function destroy($id) {
        Prescription::destroy($id);
        return response()->noContent();
    }
}

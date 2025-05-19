<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index() {
        return Pharmacy::all();
    }

    public function store(Request $request) {
        return Pharmacy::create($request->all());
    }

    public function show($id) {
        return Pharmacy::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $pharmacy = Pharmacy::findOrFail($id);
        $pharmacy->update($request->all());
        return $pharmacy;
    }

    public function destroy($id) {
        Pharmacy::destroy($id);
        return response()->noContent();
    }
}

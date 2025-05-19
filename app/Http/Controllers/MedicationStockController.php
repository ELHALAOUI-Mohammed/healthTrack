<?php

namespace App\Http\Controllers;

use App\Models\MedicationStock;
use Illuminate\Http\Request;

class MedicationStockController extends Controller
{
    public function index() {
        return MedicationStock::all();
    }

    public function store(Request $request) {
        return MedicationStock::create($request->all());
    }

    public function show($id) {
        return MedicationStock::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $stock = MedicationStock::findOrFail($id);
        $stock->update($request->all());
        return $stock;
    }

    public function destroy($id) {
        MedicationStock::destroy($id);
        return response()->noContent();
    }
}

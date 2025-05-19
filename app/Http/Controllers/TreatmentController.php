<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index() {
        return Treatment::all();
    }

    public function store(Request $request) {
        return Treatment::create($request->all());
    }

    public function show($id) {
        return Treatment::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $treatment = Treatment::findOrFail($id);
        $treatment->update($request->all());
        return $treatment;
    }

    public function destroy($id) {
        Treatment::destroy($id);
        return response()->noContent();
    }
}

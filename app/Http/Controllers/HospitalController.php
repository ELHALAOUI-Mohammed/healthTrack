<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index() {
        return Hospital::all();
    }

    public function store(Request $request) {
        return Hospital::create($request->all());
    }

    public function show($id) {
        return Hospital::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $hospital = Hospital::findOrFail($id);
        $hospital->update($request->all());
        return $hospital;
    }

    public function destroy($id) {
        Hospital::destroy($id);
        return response()->noContent();
    }
}

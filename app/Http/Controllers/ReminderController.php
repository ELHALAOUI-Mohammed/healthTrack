<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index() {
        return Reminder::all();
    }

    public function store(Request $request) {
        return Reminder::create($request->all());
    }

    public function show($id) {
        return Reminder::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $reminder = Reminder::findOrFail($id);
        $reminder->update($request->all());
        return $reminder;
    }

    public function destroy($id) {
        Reminder::destroy($id);
        return response()->noContent();
    }
}

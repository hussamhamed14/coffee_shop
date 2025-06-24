<?php

namespace App\Http\Controllers;

use App\Models\store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    
    
    public function index()
    {
        return response()->json(store::all());
    }

    // إدخال متجر جديد
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'owner' => 'nullable|string|max:255',
            'mobile' => 'nullable|string|max:255',
            'status' => 'boolean',
        ]);

        $store = store::create($request->all());

        return response()->json([
            'message' => 'Shop created successfully',
            'data' => $store,
        ], 201);
    }

    // تعديل متجر موجود
    public function update(Request $request, $id)
    {
        $store = store::findOrFail($id);

        $request->validate([
    'store_name' => 'required|string|max:50|unique:stores,store_name',
    'store_logo' => 'nullable|string|max:50',
    'brunch_location' => 'required|string|max:70',
    'store_address' => 'required|string|max:70',
    'store_phone' => ['required', 'string', 'max:15', 'regex:/^[0-9+\-\s]+$/'],
    'e_mail' => 'required|email|max:50',
    'owner_name' => ['required', 'string', 'max:20', 'regex:/^[A-Za-z\s]+$/'],
        ]);

        $store->update($request->all());

        return response()->json([
            'message' => 'Shop updated successfully',
            'data' => $store,
        ]);
    }

    // حذف متجر
    public function destroy($id)
    {
        $store = store::findOrFail($id);
        $store->delete();

        return response()->json([
            'message' => 'Shop deleted successfully',
        ]);
    }
}

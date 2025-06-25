<?php

namespace App\Http\Controllers;

use App\Models\Store; // استخدام الموديل بالحرف الكبير
use App\Http\Requests\StoreRequest; // استيراد الـ Form Request الجديد
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // استخدام paginate بدلاً من all لتحسين الأداء
        $stores = Store::latest()->paginate(10); // عرض 10 متاجر في الصفحة، مع ترتيبها من الأحدث للأقدم
        return view('store.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // هذه الدالة تعرض الفورم
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // التحقق من الصحة يتم تلقائياً بواسطة StoreRequest
        $validatedData = $request->validated();

        if ($request->hasFile('store_logo')) {
            // تخزين الشعار المرفوع والحصول على مساره
            $path = $request->file('store_logo')->store('store_logos','public');
            $validatedData['store_logo'] = $path;
        }

        Store::create($validatedData);

        // إعادة التوجيه إلى صفحة العرض مع رسالة نجاح
        return redirect()->route('stores.index')
                         ->with('success', 'تم إنشاء المتجر بنجاح.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        // هذه الدالة لعرض تفاصيل متجر واحد
        // تستخدم Route Model Binding تلقائياً
        return view('store.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        // عرض فورم التعديل مع بيانات المتجر
        return view('store.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreRequest  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Store $store)
    {
        // التحقق من الصحة يتم تلقائياً بواسطة StoreRequest
        $validatedData = $request->validated();

        if ($request->hasFile('store_logo')) {
            // حذف الشعار القديم إذا كان موجوداً
            if ($store->store_logo) {
                Storage::delete($store->store_logo);
            }
            // تخزين الشعار الجديد
            $path = $request->file('store_logo')->store('store_logos','public');
            $validatedData['store_logo'] = $path;
        }

        $store->update($validatedData);

        return redirect()->route('stores.index')
                         ->with('success', 'تم تعديل المتجر بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        // حذف الشعار المرتبط بالمتجر من مجلد التخزين
        if ($store->store_logo) {
            Storage::delete($store->store_logo);
        }
        
        $store->delete();

        return redirect()->route('stores.index')
                         ->with('success', 'تم حذف المتجر بنجاح.');
    }
}

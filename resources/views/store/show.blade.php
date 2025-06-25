{{-- resources/views/store/show.blade.php --}}
@extends('admin.baselayout')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">تفاصيل المتجر: {{ $store->store_name }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    @if ($store->store_logo)
                        <img src="{{ asset('storage/' . str_replace('public/', '', $store->store_logo)) }}" alt="شعار {{ $store->store_name }}" class="img-fluid rounded border p-2" style="max-height: 200px;">
                    @else
                        <div class="border p-4 text-center bg-light rounded">
                            <span class="text-muted">لا يوجد شعار</span>
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>اسم المتجر:</strong> {{ $store->store_name }}</li>
                        <li class="list-group-item"><strong>عنوان المتجر:</strong> {{ $store->store_address }}</li>
                        <li class="list-group-item"><strong>هاتف المتجر:</strong> {{ $store->store_phone }}</li>
                        <li class="list-group-item"><strong>البريد الإلكتروني:</strong> {{ $store->e_mail }}</li>
                        <li class="list-group-item"><strong>اسم المالك:</strong> {{ $store->owner_name }}</li>
                        <li class="list-group-item">
                            <strong>الحالة:</strong>
                            @if ($store->status)
                                <span class="badge bg-success">مفعل</span>
                            @else
                                <span class="badge bg-danger">غير مفعل</span>
                            @endif
                        </li>
                        <li class="list-group-item"><strong>تاريخ الإضافة:</strong> {{ $store->created_at->format('d-m-Y H:i A') }}</li>
                        <li class="list-group-item"><strong>آخر تحديث:</strong> {{ $store->updated_at->format('d-m-Y H:i A') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('stores.edit', $store->id) }}" class="btn btn-primary">تعديل المتجر</a>
            <a href="{{ route('stores.index') }}" class="btn btn-secondary">العودة إلى القائمة</a>
        </div>
    </div>
</div>
@endsection

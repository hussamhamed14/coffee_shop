{{-- resources/views/store/edit.blade.php --}}
@extends('admin.baselayout')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2>تعديل المتجر: {{ $store->store_name }}</h2>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>عفوًا!</strong> حدثت بعض المشاكل مع البيانات المدخلة.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('stores.update', $store->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') {{-- تحديد أن الطلب هو من نوع PUT للتحديث --}}

                <div class="mb-3">
                    <label for="store_name" class="form-label">اسم المتجر <span class="text-danger">*</span></label>
                    {{-- استخدام old للبيانات القديمة عند فشل التحقق، وإلا استخدم بيانات المتجر الحالية --}}
                    <input type="text" id="store_name" name="store_name" class="form-control @error('store_name') is-invalid @enderror" value="{{ old('store_name', $store->store_name) }}" required>
                    @error('store_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="store_logo" class="form-label">تغيير شعار المتجر</label>
                    <input type="file" id="store_logo" name="store_logo" class="form-control @error('store_logo') is-invalid @enderror">
                    @error('store_logo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    @if ($store->store_logo)
                        <div class="mt-2">
                            <small class="text-muted">الشعار الحالي:</small><br>
                            <img src="{{ asset('storage/' . str_replace('public/', '', $store->store_logo)) }}" alt="الشعار الحالي" width="100" class="img-thumbnail">
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="store_address" class="form-label">عنوان المتجر <span class="text-danger">*</span></label>
                    <input type="text" id="store_address" name="store_address" class="form-control @error('store_address') is-invalid @enderror" value="{{ old('store_address', $store->store_address) }}" required>
                    @error('store_address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="store_phone" class="form-label">رقم الهاتف <span class="text-danger">*</span></label>
                    <input type="text" id="store_phone" name="store_phone" class="form-control @error('store_phone') is-invalid @enderror" value="{{ old('store_phone', $store->store_phone) }}" required>
                    @error('store_phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="e_mail" class="form-label">البريد الإلكتروني <span class="text-danger">*</span></label>
                    <input type="email" id="e_mail" name="e_mail" class="form-control @error('e_mail') is-invalid @enderror" value="{{ old('e_mail', $store->e_mail) }}" required>
                    @error('e_mail')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="owner_name" class="form-label">اسم المالك <span class="text-danger">*</span></label>
                    <input type="text" id="owner_name" name="owner_name" class="form-control @error('owner_name') is-invalid @enderror" value="{{ old('owner_name', $store->owner_name) }}" required>
                    @error('owner_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">الحالة <span class="text-danger">*</span></label>
                    <select id="status" name="status" class="form-select @error('status') is-invalid @enderror" required>
                        <option value="1" {{ old('status', $store->status) == 1 ? 'selected' : '' }}>مفعل</option>
                        <option value="0" {{ old('status', $store->status) == 0 ? 'selected' : '' }}>غير مفعل</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">تحديث المتجر</button>
                <a href="{{ route('stores.index') }}" class="btn btn-secondary">إلغاء</a>
            </form>
        </div>
    </div>
</div>
@endsection

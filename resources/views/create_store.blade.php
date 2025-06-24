<!-- resources/views/shops/create.blade.php -->
 @extends('admin.baselayout')
                    @section("content")
<html>
    <body>
<div class="container">
    <h2>إضافة متجر جديد</h2>

    <form action="{{ route('shop') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">اسم المتجر <span class="text-danger">*</span></label>
            <input type="text" id="name" name="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">الموقع</label>
            <input type="text" id="location" name="location" class="form-control" value="{{ old('location') }}">
        </div>

        <div class="mb-3">
            <label for="owner" class="form-label">صاحب المتجر</label>
            <input type="text" id="owner" name="owner" class="form-control" value="{{ old('owner') }}">
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">رقم الجوال</label>
            <input type="text" id="mobile" name="mobile" class="form-control" value="{{ old('mobile') }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">الحالة</label>
            <select id="status" name="status" class="form-select" required>
                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>مفعل</option>
                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>غير مفعل</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">حفظ المتجر</button>
    </form>
</div>
    </body>
</html>
@endsection
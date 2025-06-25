{{-- resources/views/store/index.blade.php --}}
@extends('admin.baselayout')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>إدارة المتاجر</h2>
            <a href="{{ route('stores.create') }}" class="btn btn-success">إضافة متجر جديد</a>
        </div>
        <div class="card-body">

            {{-- عرض رسالة النجاح عند وجودها في الجلسة --}}
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الشعار</th>
                            <th scope="col">اسم المتجر</th>
                            <th scope="col">الحالة</th>
                            <th scope="col">تاريخ الإنشاء</th>
                            <th scope="col">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- استخدام forelse للتأكد من وجود متاجر للعرض --}}
                        @forelse ($stores as $store)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    @if ($store->store_logo)
                                        {{-- ملاحظة: يجب تشغيل `php artisan storage:link` لجعل الصور قابلة للعرض --}}
                                        <img src="{{ asset('storage/' . str_replace('public/', '', $store->store_logo)) }}" alt="شعار {{ $store->store_name }}" width="60" class="img-thumbnail">
                                    @else
                                        <span class="text-muted">لا يوجد شعار</span>
                                    @endif
                                </td>
                                <td>{{ $store->store_name }}</td>
                                <td>
                                    @if ($store->status)
                                        <span class="badge bg-success">مفعل</span>
                                    @else
                                        <span class="badge bg-danger">غير مفعل</span>
                                    @endif
                                </td>
                                <td>{{ $store->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <a href="{{ route('stores.show', $store->id) }}" class="btn btn-info btn-sm">عرض</a>
                                    <a href="{{ route('stores.edit', $store->id) }}" class="btn btn-primary btn-sm">تعديل</a>
                                    
                                    {{-- فورم الحذف يتطلب method=POST و @method('DELETE') --}}
                                    <form action="{{ route('stores.destroy', $store->id) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من رغبتك في حذف هذا المتجر؟');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            {{-- رسالة في حالة عدم وجود أي متجر --}}
                            <tr>
                                <td colspan="6" class="text-center">لا توجد متاجر لعرضها حالياً.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- عرض روابط الـ pagination --}}
            <div class="d-flex justify-content-center">
                {!! $stores->links() !!}
            </div>

        </div>
    </div>
</div>
@endsection



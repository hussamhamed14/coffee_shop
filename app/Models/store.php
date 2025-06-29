<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// اسم الكلاس يجب أن يبدأ بحرف كبير (PascalCase)
class Store extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'store_name',
        'store_logo',
        'store_address',
        'store_phone',
        'e_mail',
        'owner_name',
        'status',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // إضافة خاصية $casts لتحويل الحقول إلى أنواع بياناتها الصحيحة تلقائياً
    // هذا يضمن أن 'status' سيكون دائماً boolean (true/false)
    protected $casts = [
        'status' => 'boolean',
    ];
}

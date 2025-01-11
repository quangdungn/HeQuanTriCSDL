<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'Users'; // Đặt tên bảng của bạn
    protected $primaryKey = 'id'; // Đặt khóa chính
    public $timestamps = true; // Nếu có cột created_at và updated_at
    protected $fillable = ['email', 'password']; // Các cột bạn cần điền vào

    protected $hidden = [
        'password', 'remember_token',
    ];
}
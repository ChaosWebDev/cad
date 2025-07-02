<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    public $table = "user_information";

    protected $fillable = [
        'user_id',
        'first',
        'last',
        'pref',
        'dob',
        'sex',
        'gender',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    protected $fillable = [
        'work-user_id',
        'user_name',
        'date',
        'starting_time',
        'ending_time',
        'break-begin_time',
        'break-end_time',
        'working_time',
    ];
    public function WorkUser()
    {
        return $this->belongsTo(WorkUser::class);
    }
}

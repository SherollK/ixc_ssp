<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'campaign_category_id',
        'business_user_id',
        'start_date_time',
        'end_date_time',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'campaign_category');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'business_user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use HasFactory;
    use SoftDeletes;

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

    public function requests()
    {
        return $this->hasMany(CampaignRequest::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'user_id',
        'portfolio',
        'pdf_path',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'is_edited',
        'thread_id',
        'user_id'
    ];

    protected $with = [
        'user'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function thread(): BelongsTo {
        return $this->belongsTo(Thread::class);
    }

    public function getUpdatedAtFormattedAttribute()
    {
        return $this->updated_at->format('d/m/Y H:i');
    }
}

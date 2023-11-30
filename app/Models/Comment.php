<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function getPaginateByLimit(int $limit_count=5)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function comment_returns()
    {
        return $this->hasMany(CommentReturn::class);
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    
    
    protected $fillable = [
    'name',
    'body',
    'user_id',
    'stars',
    'subject_id',
    ];
    
}

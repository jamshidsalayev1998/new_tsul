<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'email',
        'rating',
        'type',
        'message',
        'status'
    ];

    public function scopeFilter($query ,array $filters = []){
        if($filters['name'] ?? false){
            $query->where('name' , 'LIKE' , '%'.$filters['name'].'%');
        }
        if($filters['email'] ?? false){
            $query->where('email' , 'LIKE' , '%'.$filters['email'].'%');
        }
        if($filters['rating'] ?? false){
            $query->where('rating' , '=' , $filters['rating']);
        }
        if($filters['type'] ?? false){
            $query->where('type' , '=' , $filters['type']);
        }
        if($filters['message'] ?? false){
            $query->where('message' , 'LIKE' , '%'.$filters['message'].'%');
        }
        if (isset($filters['status'])) {
            $query->where('status', '=', $filters['status']);
        }

    }

    // app/Models/Feedback.php

public static function getStatistics(): array
{
    return self::selectRaw("
        SUM(CASE WHEN status = 0 THEN 1 ELSE 0 END) as new,
        SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) as viewed,
        SUM(CASE WHEN status = 2 THEN 1 ELSE 0 END) as processing,
        SUM(CASE WHEN status = 3 THEN 1 ELSE 0 END) as resolved,
        SUM(CASE WHEN status = 4 THEN 1 ELSE 0 END) as archived,
        COUNT(*) as total
    ")->first()
      ->toArray();
}


}

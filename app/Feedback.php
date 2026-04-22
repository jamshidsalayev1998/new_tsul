<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a user-submitted feedback entry.
 *
 * Captures public feedback, complaints, and suggestions submitted through
 * the university website. Each entry has a status lifecycle:
 * 0 = New, 1 = Viewed, 2 = Processing, 3 = Resolved, 4 = Archived.
 *
 * @property int         $id
 * @property string      $name     Submitter's name
 * @property int|null    $user_id  Optional FK to the users table if submitted by a logged-in user
 * @property string      $email    Submitter's email address
 * @property int         $rating   Satisfaction rating (1–5)
 * @property string      $type     Submission type: 'feedback', 'complaint', or 'suggestion'
 * @property string      $message  The feedback message body
 * @property int         $status   Lifecycle status: 0=New, 1=Viewed, 2=Processing, 3=Resolved, 4=Archived
 */
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

    /**
     * Scope to filter feedback entries by multiple optional criteria.
     *
     * Each filter key is optional; only non-empty values are applied.
     * Supports partial matching (LIKE) for name, email, and message fields,
     * and exact matching for rating, type, and status.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $filters Associative array with optional keys:
     *                       'name', 'email', 'rating', 'type', 'message', 'status'
     * @return void
     */
    public function scopeFilter($query, array $filters = [])
    {
        if ($filters['name'] ?? false) {
            $query->where('name', 'LIKE', '%' . $filters['name'] . '%');
        }
        if ($filters['email'] ?? false) {
            $query->where('email', 'LIKE', '%' . $filters['email'] . '%');
        }
        if ($filters['rating'] ?? false) {
            $query->where('rating', '=', $filters['rating']);
        }
        if ($filters['type'] ?? false) {
            $query->where('type', '=', $filters['type']);
        }
        if ($filters['message'] ?? false) {
            $query->where('message', 'LIKE', '%' . $filters['message'] . '%');
        }
        if (isset($filters['status'])) {
            $query->where('status', '=', $filters['status']);
        }
    }

    // app/Models/Feedback.php

    /**
     * Return aggregated counts per status plus the total count.
     *
     * Uses a single SQL query with conditional aggregation to avoid
     * N+1 queries when building the stats dashboard. Status values:
     * 0=new, 1=viewed, 2=processing, 3=resolved, 4=archived.
     *
     * @return array{new: int, viewed: int, processing: int, resolved: int, archived: int, total: int}
     */
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

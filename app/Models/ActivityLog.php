<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'user_name',
        'action',
        'description',
        'ip_address',
        'user_agent',
        'status',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->id)) {
                $maxId = static::max('id') ?? 0;
                $model->id = $maxId + 1;
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function log(string $action, string $description, string $status = 'info', ?User $user = null): self
    {
        $currentUser = $user ?? auth()->user();

        return self::create([
            'user_id' => $currentUser?->id,
            'user_name' => $currentUser?->name ?? 'Pengunjung / Sistem',
            'action' => $action,
            'description' => $description,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'status' => $status,
        ]);
    }
}

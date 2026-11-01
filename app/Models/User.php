<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'role', 'unit', 'avatar'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isSuperAdmin(): bool
    {
        return $this->role === 'super_admin';
    }

    public function isAdmin(): bool
    {
        return in_array($this->role, ['super_admin', 'admin']);
    }

    public function isEditor(): bool
    {
        return in_array($this->role, ['super_admin', 'admin', 'editor']);
    }

    public function getUnitLabelAttribute(): string
    {
        return match ($this->unit) {
            'tk' => 'TKS IT Madani',
            'sd' => 'SDS IT Madani',
            'smp' => 'SMPS IT Madani',
            default => 'Yayasan Agung Madani',
        };
    }

    public function getRoleLabelAttribute(): string
    {
        $base = match ($this->role) {
            'super_admin' => 'Super Administrator',
            'admin' => 'Administrator',
            'editor' => 'Editor Berita',
            'author' => 'Penulis / Kontributor',
            default => 'Administrator'
        };

        if ($this->unit && $this->unit !== 'yayasan') {
            return $base.' ('.$this->unit_label.')';
        }

        return $base;
    }
}

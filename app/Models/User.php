<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;w
use Carbon\Carbon;
use Exception;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser, HasName
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * @throws Exception
     */
    public static function firstOrCreateByAttributes($attributes)
    {
        if (empty($attributes['email'])) {
            throw new Exception("Fatal Error: CAS callback did not contain an email");
        }

        return User::firstOrCreate(
            [
                'email' => $attributes['email'],
                'name' => trim(($attributes['firstName'] ?? '') . ' ' . ($attributes['lastName'] ?? '')),
            ],
            [
                'department_number' => $attributes['departmentNumber'] ?? null,
                'password' => Str::random(16),
                'eu_login_username' => $attributes['domainUsername'] ?? $attributes['uid'],
                'last_activity' => Carbon::now()

            ]
        );
    }


    protected $fillable = [
        'name',
        'email',
        'password',
        'eu_login_username',
        'department_number',
        'last_activity',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->email === "Alain.VAN-DRIESSCHE@ext.ec.europa.eu";
    }

    public function getFilamentName(): string
    {
        return $this->name;
    }
}

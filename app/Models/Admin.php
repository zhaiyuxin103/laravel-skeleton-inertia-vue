<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\GenderEnum;
use App\Observers\AdminObserver;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

#[ObservedBy([AdminObserver::class])]
class Admin extends Authenticatable implements FilamentUser, HasAvatar, HasName
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory;

    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'last_alias',
        'first_alias',
        'email',
        'phone',
        'password',
        'avatar',
        'gender',
        'birthday',
        'age',
        'introduction',
        'state',
        'sort',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function getFilamentName(): string
    {
        return $this->name;
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->full_avatar;
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'gender'   => GenderEnum::class,
            'password' => 'hashed',
            'state'    => 'boolean',
        ];
    }

    protected function fullAvatar(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => data_get($attributes, 'avatar') ? Storage::url(data_get($attributes, 'avatar')) : null,
        );
    }
}

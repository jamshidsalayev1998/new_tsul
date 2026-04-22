<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

/**
 * Model representing an authenticated system user (admin panel user).
 *
 * Uses Spatie's HasRoles trait for role-based access control.
 * Roles include: super-admin, kafedra-admin, youth-sport-admin,
 * legal-research-admin, international-admin, and others.
 *
 * @property int         $id
 * @property string      $name              Display name
 * @property string      $username          Unique login username
 * @property string      $email             Unique email address
 * @property string      $password          Bcrypt-hashed password (hidden)
 * @property int         $role              Legacy numeric role field (not used for access checks)
 * @property string|null $remember_token    Session remember token (hidden)
 * @property \Carbon\Carbon|null $email_verified_at
 */
class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user's professional profile based on their role.
     *
     * Currently only resolves a profile for users with the 'kafedra-admin' role,
     * returning their KafedraAdmin record which includes the associated department.
     * Returns null for users with any other role.
     *
     * @return \App\KafedraAdmin|null
     */
    public function profession()
    {
        $prof = null;
        if ($this->hasRole('kafedra-admin')) {
            $prof = KafedraAdmin::where('user_id', $this->id)->first();
        }
        return $prof;
    }
}

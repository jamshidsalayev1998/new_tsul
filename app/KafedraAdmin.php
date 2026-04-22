<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a department (kafedra) administrator profile.
 *
 * Links a system User account to a specific kafedra, enabling that user to
 * manage teachers and content for their department. The plain-text password
 * (pass) is stored alongside the hashed version in the User record for
 * display to the super-admin after account creation.
 *
 * @property int    $id
 * @property int    $kafedra_id  Foreign key to the kafedra table
 * @property int    $user_id     Foreign key to the users table
 * @property string $fio         Administrator's full name
 * @property string $pass        Plain-text password shown once after creation (not secure for long-term storage)
 */
class KafedraAdmin extends Model
{
    protected $table = 'kafedra_admins';

    /**
     * Get the department (kafedra) this administrator manages.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kafedra()
    {
        return $this->belongsTo(Kafedra::class, 'kafedra_id', 'id');
    }

    /**
     * Get the system user account linked to this administrator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

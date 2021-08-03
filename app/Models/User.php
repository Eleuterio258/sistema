<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
/**
 * Class User
 *
 * @property int $id
 * @property string $login
 * @property string|null $password
 * @property string $firstname
 * @property string $lastname
 * @property bool $admin
 * @property int $status
 * @property Carbon|null $email_verified_at
 * @property Carbon|null $last_login_on
 * @property string|null $language
 * @property int|null $auth_source_id
 * @property string|null $remember_token
 * @property Carbon|null $created_on
 * @property Carbon|null $updated_on
 * @property string|null $type
 * @property string|null $identity_url
 * @property string $mail_notification
 * @property bool $must_change_passwd
 * @property Carbon|null $passwd_changed_on
 * @property bool $high_privilege
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class User extends Authenticatable implements JWTSubject
{
	use SoftDeletes, HasFactory, Notifiable;

    /** * Get the identifier that will be stored in the subject claim of the JWT. * * @return mixed */ public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table = 'users';
	public $timestamps = false;

	protected $casts = [
		'admin' => 'bool',
		'status' => 'int',
		'auth_source_id' => 'int',
		'must_change_passwd' => 'bool',
		'high_privilege' => 'bool'
	];

	protected $dates = [
		'email_verified_at',
		'last_login_on',
		'created_on',
		'updated_on',
		'passwd_changed_on'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'login',
		'password',
		'firstname',
		'lastname',
		'admin',
		'status',
		'email_verified_at',
		'last_login_on',
		'language',
		'auth_source_id',
		'remember_token',
		'created_on',
		'updated_on',
		'type',
		'identity_url',
		'mail_notification',
		'must_change_passwd',
		'passwd_changed_on',
		'high_privilege'
	];

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function setPasswordAttribute($password)
    {
        if ($password !== null & $password !== "") {
            $this->attributes['password'] = bcrypt($password);
        }
    }
}

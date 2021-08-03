<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GlobalRolesUser
 * 
 * @property int $global_role_id
 * @property int $user_id
 * @property Carbon $created_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class GlobalRolesUser extends Model
{
	use SoftDeletes;
	protected $table = 'global_roles_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'global_role_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'created_on'
	];

	protected $fillable = [
		'global_role_id',
		'user_id',
		'created_on'
	];
}

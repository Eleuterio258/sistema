<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UsersApprovementFlow
 * 
 * @property int $id
 * @property int $user_id
 * @property int $approvement_flow_models_id
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property bool $is_approved
 * @property bool $is_rejected
 *
 * @package App\Models
 */
class UsersApprovementFlow extends Model
{
	protected $table = 'users_approvement_flow';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'approvement_flow_models_id' => 'int',
		'is_approved' => 'bool',
		'is_rejected' => 'bool'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'user_id',
		'approvement_flow_models_id',
		'created_on',
		'updated_on',
		'is_approved',
		'is_rejected'
	];
}

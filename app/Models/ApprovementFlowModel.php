<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApprovementFlowModel
 * 
 * @property int $id
 * @property int $approvement_flow_id
 * @property int|null $role_id
 * @property int $customized_id
 * @property string $customized_type
 * @property int $request_by
 * @property array|null $users
 * @property bool $is_approved
 * @property Carbon|null $approved_on
 * @property int|null $approved_by
 * @property bool|null $is_rejected
 * @property Carbon|null $rejected_on
 * @property int|null $rejected_by
 * @property Carbon $created_on
 * @property Carbon $updated_on
 *
 * @package App\Models
 */
class ApprovementFlowModel extends Model
{
	protected $table = 'approvement_flow_models';
	public $timestamps = false;

	protected $casts = [
		'approvement_flow_id' => 'int',
		'role_id' => 'int',
		'customized_id' => 'int',
		'request_by' => 'int',
		'users' => 'json',
		'is_approved' => 'bool',
		'approved_by' => 'int',
		'is_rejected' => 'bool',
		'rejected_by' => 'int'
	];

	protected $dates = [
		'approved_on',
		'rejected_on',
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'approvement_flow_id',
		'role_id',
		'customized_id',
		'customized_type',
		'request_by',
		'users',
		'is_approved',
		'approved_on',
		'approved_by',
		'is_rejected',
		'rejected_on',
		'rejected_by',
		'created_on',
		'updated_on'
	];
}

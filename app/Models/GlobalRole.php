<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GlobalRole
 * 
 * @property int $id
 * @property string $identifier
 * @property string $name
 * @property string|null $permissions
 * @property int $created_by
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 * @property bool $builtin
 *
 * @package App\Models
 */
class GlobalRole extends Model
{
	use SoftDeletes;
	protected $table = 'global_roles';
	public $timestamps = false;

	protected $casts = [
		'created_by' => 'int',
		'deleted_by' => 'int',
		'builtin' => 'bool'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'identifier',
		'name',
		'permissions',
		'created_by',
		'created_on',
		'updated_on',
		'deleted_by',
		'builtin'
	];
}

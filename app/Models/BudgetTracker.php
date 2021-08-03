<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BudgetTracker
 * 
 * @property int $id
 * @property string $name
 * @property string|null $type
 * @property int|null $position
 * @property bool|null $status
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class BudgetTracker extends Model
{
	use SoftDeletes;
	protected $table = 'budget_trackers';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'name',
		'type',
		'position',
		'status',
		'created_on',
		'updated_on'
	];
}

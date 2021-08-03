<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BudgetsProject
 * 
 * @property int $id
 * @property int $budget_tracker_id
 * @property int $project_id
 * @property float $value
 * @property int|null $year
 * @property string $provincia
 * @property int|null $updated_by
 * @property string|null $updated_notes
 * @property Carbon $created_on
 * @property Carbon $updated_on
 *
 * @package App\Models
 */
class BudgetsProject extends Model
{
	protected $table = 'budgets_projects';
	public $timestamps = false;

	protected $casts = [
		'budget_tracker_id' => 'int',
		'project_id' => 'int',
		'value' => 'float',
		'year' => 'int',
		'updated_by' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'budget_tracker_id',
		'project_id',
		'value',
		'year',
		'provincia',
		'updated_by',
		'updated_notes',
		'created_on',
		'updated_on'
	];
}

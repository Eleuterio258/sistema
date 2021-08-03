<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BudgetsDefaultValue
 * 
 * @property int $id
 * @property int $budget_tracker_id
 * @property string $provincia
 * @property float $value
 * @property int $author_id
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class BudgetsDefaultValue extends Model
{
	use SoftDeletes;
	protected $table = 'budgets_default_values';
	public $timestamps = false;

	protected $casts = [
		'budget_tracker_id' => 'int',
		'value' => 'float',
		'author_id' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'budget_tracker_id',
		'provincia',
		'value',
		'author_id',
		'created_on',
		'updated_on'
	];
}

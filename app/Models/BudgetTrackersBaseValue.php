<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BudgetTrackersBaseValue
 * 
 * @property int $id
 * @property int $budget_tracker_id
 * @property float $value
 * @property string|null $variavel
 * @property string|null $variavel_value
 * @property Carbon $created_on
 * @property Carbon $updated_on
 *
 * @package App\Models
 */
class BudgetTrackersBaseValue extends Model
{
	protected $table = 'budget_trackers_base_values';
	public $timestamps = false;

	protected $casts = [
		'budget_tracker_id' => 'int',
		'value' => 'float'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'budget_tracker_id',
		'value',
		'variavel',
		'variavel_value',
		'created_on',
		'updated_on'
	];
}

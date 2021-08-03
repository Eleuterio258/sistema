<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrackedBudget
 * 
 * @property int $id
 * @property int $budget_tracker_id
 * @property int $budget_id
 *
 * @package App\Models
 */
class TrackedBudget extends Model
{
	protected $table = 'tracked_budget';
	public $timestamps = false;

	protected $casts = [
		'budget_tracker_id' => 'int',
		'budget_id' => 'int'
	];

	protected $fillable = [
		'budget_tracker_id',
		'budget_id'
	];
}

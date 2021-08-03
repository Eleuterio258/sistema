<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BudgetCustomField
 * 
 * @property int $id
 * @property int $custom_field_id
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class BudgetCustomField extends Model
{
	use SoftDeletes;
	protected $table = 'budget_custom_fields';
	public $timestamps = false;

	protected $casts = [
		'custom_field_id' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'custom_field_id',
		'created_on',
		'updated_on'
	];
}

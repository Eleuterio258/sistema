<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Budget
 * 
 * @property int $id
 * @property int $budget_tracker_id
 * @property string $customized_type
 * @property int $customized_id
 * @property float $value
 * @property float|null $value_at_currency
 * @property string $currency
 * @property bool $is_plan
 * @property bool|null $is_pending
 * @property Carbon|null $validated_on
 * @property int|null $validated_by
 * @property int $is_iva
 * @property float|null $iva
 * @property int $author_id
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Budget extends Model
{
	use SoftDeletes;
	protected $table = 'budgets';
	public $timestamps = false;

	protected $casts = [
		'budget_tracker_id' => 'int',
		'customized_id' => 'int',
		'value' => 'float',
		'value_at_currency' => 'float',
		'is_plan' => 'bool',
		'is_pending' => 'bool',
		'validated_by' => 'int',
		'is_iva' => 'int',
		'iva' => 'float',
		'author_id' => 'int'
	];

	protected $dates = [
		'validated_on',
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'budget_tracker_id',
		'customized_type',
		'customized_id',
		'value',
		'value_at_currency',
		'currency',
		'is_plan',
		'is_pending',
		'validated_on',
		'validated_by',
		'is_iva',
		'iva',
		'author_id',
		'created_on',
		'updated_on'
	];
}

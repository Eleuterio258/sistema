<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class IndicatorField
 * 
 * @property int $id
 * @property string $type
 * @property string $name
 * @property int|null $is_cumulative
 * @property int|null $category
 * @property int $is_parent
 * @property Carbon|null $created_on
 * @property Carbon|null $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class IndicatorField extends Model
{
	use SoftDeletes;
	protected $table = 'indicator_fields';
	public $timestamps = false;

	protected $casts = [
		'is_cumulative' => 'int',
		'category' => 'int',
		'is_parent' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'type',
		'name',
		'is_cumulative',
		'category',
		'is_parent',
		'created_on',
		'updated_on'
	];
}

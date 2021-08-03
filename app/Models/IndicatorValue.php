<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IndicatorValue
 * 
 * @property int $id
 * @property string $indicator_type
 * @property int $indicator_field_id
 * @property int $customized_id
 * @property string|null $value
 * @property string|null $meta
 * @property string|null $meta_type
 * @property string|null $m_trim_01
 * @property string|null $m_trim_02
 * @property string|null $m_trim_03
 * @property string|null $m_trim_04
 * @property string|null $fonte_ver
 * @property string|null $base_ref
 * @property Carbon|null $created_on
 * @property Carbon|null $updated_on
 *
 * @package App\Models
 */
class IndicatorValue extends Model
{
	protected $table = 'indicator_values';
	public $timestamps = false;

	protected $casts = [
		'indicator_field_id' => 'int',
		'customized_id' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'indicator_type',
		'indicator_field_id',
		'customized_id',
		'value',
		'meta',
		'meta_type',
		'm_trim_01',
		'm_trim_02',
		'm_trim_03',
		'm_trim_04',
		'fonte_ver',
		'base_ref',
		'created_on',
		'updated_on'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class IndicatorRelation
 * 
 * @property int $parent
 * @property int $child
 * @property int $relationed_by
 * @property Carbon|null $created_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class IndicatorRelation extends Model
{
	use SoftDeletes;
	protected $table = 'indicator_relation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'parent' => 'int',
		'child' => 'int',
		'relationed_by' => 'int'
	];

	protected $dates = [
		'created_on'
	];

	protected $fillable = [
		'relationed_by',
		'created_on'
	];
}

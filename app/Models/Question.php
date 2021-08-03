<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question
 * 
 * @property int $id
 * @property int $category_id
 * @property string $format
 * @property string $title
 * @property string|null $options_values
 * @property int $multiple
 * @property int $is_outro_available
 * @property int $required
 * @property Carbon $created_on
 * @property Carbon|null $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Question extends Model
{
	use SoftDeletes;
	protected $table = 'questions';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'multiple' => 'int',
		'is_outro_available' => 'int',
		'required' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'category_id',
		'format',
		'title',
		'options_values',
		'multiple',
		'is_outro_available',
		'required',
		'created_on',
		'updated_on'
	];
}

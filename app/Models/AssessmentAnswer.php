<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AssessmentAnswer
 * 
 * @property int $id
 * @property int $assessment_id
 * @property int $partner_id
 * @property int $question_id
 * @property int|null $category_id
 * @property string|null $value
 * @property bool|null $status
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class AssessmentAnswer extends Model
{
	use SoftDeletes;
	protected $table = 'assessment_answers';
	public $timestamps = false;

	protected $casts = [
		'assessment_id' => 'int',
		'partner_id' => 'int',
		'question_id' => 'int',
		'category_id' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'assessment_id',
		'partner_id',
		'question_id',
		'category_id',
		'value',
		'status',
		'created_on',
		'updated_on'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PartnerAssessment
 * 
 * @property int $id
 * @property int $partner_id
 * @property int $assessment_id
 * @property bool $is_submited
 * @property int $author_id
 * @property Carbon|null $submited_on
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class PartnerAssessment extends Model
{
	use SoftDeletes;
	protected $table = 'partner_assessments';
	public $timestamps = false;

	protected $casts = [
		'partner_id' => 'int',
		'assessment_id' => 'int',
		'is_submited' => 'bool',
		'author_id' => 'int'
	];

	protected $dates = [
		'submited_on',
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'partner_id',
		'assessment_id',
		'is_submited',
		'author_id',
		'submited_on',
		'created_on',
		'updated_on'
	];
}

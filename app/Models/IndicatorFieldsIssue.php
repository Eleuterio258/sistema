<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class IndicatorFieldsIssue
 * 
 * @property int $id
 * @property int $indicator_fields_id
 * @property int $issue_id
 * @property bool $is_reported
 * @property bool $is_approved
 * @property int|null $approved_by
 * @property Carbon|null $approved_on
 * @property string|null $notes
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class IndicatorFieldsIssue extends Model
{
	use SoftDeletes;
	protected $table = 'indicator_fields_issues';
	public $timestamps = false;

	protected $casts = [
		'indicator_fields_id' => 'int',
		'issue_id' => 'int',
		'is_reported' => 'bool',
		'is_approved' => 'bool',
		'approved_by' => 'int'
	];

	protected $dates = [
		'approved_on'
	];

	protected $fillable = [
		'indicator_fields_id',
		'issue_id',
		'is_reported',
		'is_approved',
		'approved_by',
		'approved_on',
		'notes'
	];
}

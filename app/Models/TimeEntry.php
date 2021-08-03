<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TimeEntry
 * 
 * @property int $id
 * @property int $project_id
 * @property int $user_id
 * @property int|null $issue_id
 * @property float $hours
 * @property string|null $comments
 * @property int $activity_id
 * @property Carbon $spent_on
 * @property int $tyear
 * @property int $tmonth
 * @property int $tweek
 * @property Carbon|null $start_date
 * @property Carbon|null $due_date
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class TimeEntry extends Model
{
	use SoftDeletes;
	protected $table = 'time_entries';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'user_id' => 'int',
		'issue_id' => 'int',
		'hours' => 'float',
		'activity_id' => 'int',
		'tyear' => 'int',
		'tmonth' => 'int',
		'tweek' => 'int'
	];

	protected $dates = [
		'spent_on',
		'start_date',
		'due_date',
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'project_id',
		'user_id',
		'issue_id',
		'hours',
		'comments',
		'activity_id',
		'spent_on',
		'tyear',
		'tmonth',
		'tweek',
		'start_date',
		'due_date',
		'created_on',
		'updated_on'
	];
}

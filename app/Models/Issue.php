<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Issue
 * 
 * @property int $id
 * @property int $tracker_id
 * @property int $project_id
 * @property string $subject
 * @property string|null $description
 * @property Carbon|null $due_date
 * @property int|null $category_id
 * @property int $status_id
 * @property int|null $assigned_to_id
 * @property int $priority_id
 * @property int|null $fixed_version_id
 * @property int $author_id
 * @property int $lock_version
 * @property Carbon|null $created_on
 * @property Carbon|null $updated_on
 * @property Carbon|null $start_date
 * @property int $done_ratio
 * @property float|null $estimated_hours
 * @property int|null $parent_id
 * @property int|null $root_id
 * @property int|null $lft
 * @property int|null $rgt
 * @property bool $is_private
 * @property Carbon|null $closed_on
 * @property bool $is_aproved
 * @property int|null $aproved_by
 * @property Carbon|null $aproved_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Issue extends Model
{
	use SoftDeletes;
	protected $table = 'issues';
	public $timestamps = false;

	protected $casts = [
		'tracker_id' => 'int',
		'project_id' => 'int',
		'category_id' => 'int',
		'status_id' => 'int',
		'assigned_to_id' => 'int',
		'priority_id' => 'int',
		'fixed_version_id' => 'int',
		'author_id' => 'int',
		'lock_version' => 'int',
		'done_ratio' => 'int',
		'estimated_hours' => 'float',
		'parent_id' => 'int',
		'root_id' => 'int',
		'lft' => 'int',
		'rgt' => 'int',
		'is_private' => 'bool',
		'is_aproved' => 'bool',
		'aproved_by' => 'int'
	];

	protected $dates = [
		'due_date',
		'created_on',
		'updated_on',
		'start_date',
		'closed_on',
		'aproved_on'
	];

	protected $fillable = [
		'tracker_id',
		'project_id',
		'subject',
		'description',
		'due_date',
		'category_id',
		'status_id',
		'assigned_to_id',
		'priority_id',
		'fixed_version_id',
		'author_id',
		'lock_version',
		'created_on',
		'updated_on',
		'start_date',
		'done_ratio',
		'estimated_hours',
		'parent_id',
		'root_id',
		'lft',
		'rgt',
		'is_private',
		'closed_on',
		'is_aproved',
		'aproved_by',
		'aproved_on'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $homepage
 * @property bool $is_public
 * @property int|null $parent_id
 * @property int $author_id
 * @property string|null $identifier
 * @property int $status
 * @property int $has_shared_budget
 * @property string|null $type
 * @property Carbon|null $created_on
 * @property Carbon|null $updated_on
 * @property int|null $lft
 * @property int|null $rgt
 * @property bool $inherit_members
 * @property int|null $default_version_id
 * @property int|null $default_assigned_to_id
 * @property Carbon|null $start_date
 * @property Carbon|null $due_date
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Project extends Model
{
	use SoftDeletes;
	protected $table = 'projects';
	public $timestamps = false;

	protected $casts = [
		'is_public' => 'bool',
		'parent_id' => 'int',
		'author_id' => 'int',
		'status' => 'int',
		'has_shared_budget' => 'int',
		'lft' => 'int',
		'rgt' => 'int',
		'inherit_members' => 'bool',
		'default_version_id' => 'int',
		'default_assigned_to_id' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on',
		'start_date',
		'due_date'
	];

	protected $fillable = [
		'name',
		'description',
		'homepage',
		'is_public',
		'parent_id',
		'author_id',
		'identifier',
		'status',
		'has_shared_budget',
		'type',
		'created_on',
		'updated_on',
		'lft',
		'rgt',
		'inherit_members',
		'default_version_id',
		'default_assigned_to_id',
		'start_date',
		'due_date'
	];
}

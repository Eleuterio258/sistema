<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ApprovementFlow
 * 
 * @property int $id
 * @property string $type
 * @property int $position
 * @property string $description
 * @property string|null $trigger
 * @property int $role_id
 * @property bool $is_active
 * @property string|null $email_content
 * @property string|null $unapproval_email_content
 * @property int $author_id
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 * @property bool $is_flow_end
 *
 * @package App\Models
 */
class ApprovementFlow extends Model
{
	use SoftDeletes;
	protected $table = 'approvement_flow';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'role_id' => 'int',
		'is_active' => 'bool',
		'author_id' => 'int',
		'is_flow_end' => 'bool'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'type',
		'position',
		'description',
		'trigger',
		'role_id',
		'is_active',
		'email_content',
		'unapproval_email_content',
		'author_id',
		'created_on',
		'updated_on',
		'is_flow_end'
	];
}

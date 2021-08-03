<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IssuesBudget
 * 
 * @property int $id
 * @property int $issue_id
 * @property int|null $project_id
 * @property int $author_id
 * @property bool $is_aproved
 * @property string|null $notes
 * @property Carbon|null $aproved_on
 * @property int|null $aproved_by
 * @property bool $is_full_aproved
 * @property int|null $partner_id
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property int|null $updated_by
 *
 * @package App\Models
 */
class IssuesBudget extends Model
{
	protected $table = 'issues_budgets';
	public $timestamps = false;

	protected $casts = [
		'issue_id' => 'int',
		'project_id' => 'int',
		'author_id' => 'int',
		'is_aproved' => 'bool',
		'aproved_by' => 'int',
		'is_full_aproved' => 'bool',
		'partner_id' => 'int',
		'updated_by' => 'int'
	];

	protected $dates = [
		'aproved_on',
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'issue_id',
		'project_id',
		'author_id',
		'is_aproved',
		'notes',
		'aproved_on',
		'aproved_by',
		'is_full_aproved',
		'partner_id',
		'created_on',
		'updated_on',
		'updated_by'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BudgetsDetail
 * 
 * @property int $id
 * @property int $budget_id
 * @property string|null $note
 * @property int|null $attachments
 * @property Carbon $created_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class BudgetsDetail extends Model
{
	use SoftDeletes;
	protected $table = 'budgets_details';
	public $timestamps = false;

	protected $casts = [
		'budget_id' => 'int',
		'attachments' => 'int'
	];

	protected $dates = [
		'created_on'
	];

	protected $fillable = [
		'budget_id',
		'note',
		'attachments',
		'created_on'
	];
}

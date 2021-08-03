<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TimeEntriesValue
 * 
 * @property int $id
 * @property int $customized_id
 * @property string|null $customized_type
 * @property int $time_entry_id
 * @property string $value
 * @property bool $is_approved
 * @property Carbon|null $approved_on
 * @property Carbon $created_on
 * @property Carbon|null $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class TimeEntriesValue extends Model
{
	use SoftDeletes;
	protected $table = 'time_entries_values';
	public $timestamps = false;

	protected $casts = [
		'customized_id' => 'int',
		'time_entry_id' => 'int',
		'is_approved' => 'bool'
	];

	protected $dates = [
		'approved_on',
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'customized_id',
		'customized_type',
		'time_entry_id',
		'value',
		'is_approved',
		'approved_on',
		'created_on',
		'updated_on'
	];
}

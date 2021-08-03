<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Assessment
 * 
 * @property int $id
 * @property string $description
 * @property string|null $data
 * @property int $author_id
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property bool $status
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Assessment extends Model
{
	use SoftDeletes;
	protected $table = 'assessments';
	public $timestamps = false;

	protected $casts = [
		'author_id' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'description',
		'data',
		'author_id',
		'created_on',
		'updated_on',
		'status'
	];
}

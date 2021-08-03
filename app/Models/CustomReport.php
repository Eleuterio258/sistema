<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomReport
 * 
 * @property int $id
 * @property int|null $project_id
 * @property int $user_id
 * @property bool $is_public
 * @property string $name
 * @property string|null $description
 * @property string $group_by
 * @property string|null $chart_type
 * @property string $null_text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CustomReport extends Model
{
	protected $table = 'custom_reports';

	protected $casts = [
		'project_id' => 'int',
		'user_id' => 'int',
		'is_public' => 'bool'
	];

	protected $fillable = [
		'project_id',
		'user_id',
		'is_public',
		'name',
		'description',
		'group_by',
		'chart_type',
		'null_text'
	];
}

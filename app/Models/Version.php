<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Version
 * 
 * @property int $id
 * @property int $project_id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $effective_date
 * @property Carbon|null $created_on
 * @property Carbon|null $updated_on
 * @property string|null $wiki_page_title
 * @property string|null $status
 * @property string $sharing
 *
 * @package App\Models
 */
class Version extends Model
{
	protected $table = 'versions';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int'
	];

	protected $dates = [
		'effective_date',
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'project_id',
		'name',
		'description',
		'effective_date',
		'created_on',
		'updated_on',
		'wiki_page_title',
		'status',
		'sharing'
	];
}

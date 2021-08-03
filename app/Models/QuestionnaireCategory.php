<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class QuestionnaireCategory
 * 
 * @property int $id
 * @property string $name
 * @property int|null $position
 * @property int $author_id
 * @property int $active
 * @property Carbon|null $created_on
 * @property Carbon|null $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class QuestionnaireCategory extends Model
{
	use SoftDeletes;
	protected $table = 'questionnaire_categories';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'author_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'name',
		'position',
		'author_id',
		'active',
		'created_on',
		'updated_on'
	];
}

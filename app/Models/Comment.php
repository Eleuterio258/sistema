<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property string $commented_type
 * @property int $commented_id
 * @property int $author_id
 * @property string|null $comments
 * @property Carbon $created_on
 * @property Carbon $updated_on
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';
	public $timestamps = false;

	protected $casts = [
		'commented_id' => 'int',
		'author_id' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'commented_type',
		'commented_id',
		'author_id',
		'comments',
		'created_on',
		'updated_on'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WikiContentVersion
 * 
 * @property int $id
 * @property int $wiki_content_id
 * @property int $page_id
 * @property int|null $author_id
 * @property boolean|null $data
 * @property string|null $compression
 * @property string|null $comments
 * @property Carbon $updated_on
 * @property int $version
 *
 * @package App\Models
 */
class WikiContentVersion extends Model
{
	protected $table = 'wiki_content_versions';
	public $timestamps = false;

	protected $casts = [
		'wiki_content_id' => 'int',
		'page_id' => 'int',
		'author_id' => 'int',
		'data' => 'boolean',
		'version' => 'int'
	];

	protected $dates = [
		'updated_on'
	];

	protected $fillable = [
		'wiki_content_id',
		'page_id',
		'author_id',
		'data',
		'compression',
		'comments',
		'updated_on',
		'version'
	];
}

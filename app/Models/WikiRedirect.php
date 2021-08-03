<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WikiRedirect
 * 
 * @property int $id
 * @property int $wiki_id
 * @property string|null $title
 * @property string|null $redirects_to
 * @property Carbon $created_on
 * @property int $redirects_to_wiki_id
 *
 * @package App\Models
 */
class WikiRedirect extends Model
{
	protected $table = 'wiki_redirects';
	public $timestamps = false;

	protected $casts = [
		'wiki_id' => 'int',
		'redirects_to_wiki_id' => 'int'
	];

	protected $dates = [
		'created_on'
	];

	protected $fillable = [
		'wiki_id',
		'title',
		'redirects_to',
		'created_on',
		'redirects_to_wiki_id'
	];
}

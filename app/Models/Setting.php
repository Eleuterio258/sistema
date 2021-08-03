<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 * 
 * @property int $id
 * @property string $name
 * @property string|null $value
 * @property Carbon|null $updated_on
 *
 * @package App\Models
 */
class Setting extends Model
{
	protected $table = 'settings';
	public $timestamps = false;

	protected $dates = [
		'updated_on'
	];

	protected $fillable = [
		'name',
		'value',
		'updated_on'
	];
}

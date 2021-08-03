<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Partner
 * 
 * @property int $id
 * @property string $name
 * @property int $type
 * @property string $address
 * @property string $email_address
 * @property string|null $identity_url
 * @property Carbon|null $start_date
 * @property Carbon|null $closed_on
 * @property Carbon|null $created_on
 * @property Carbon|null $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Partner extends Model
{
	use SoftDeletes;
	protected $table = 'partners';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int'
	];

	protected $dates = [
		'start_date',
		'closed_on',
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'name',
		'type',
		'address',
		'email_address',
		'identity_url',
		'start_date',
		'closed_on',
		'created_on',
		'updated_on'
	];
}

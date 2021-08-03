<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OpenIdAuthenticationAssociation
 * 
 * @property int $id
 * @property int|null $issued
 * @property int|null $lifetime
 * @property string|null $handle
 * @property string|null $assoc_type
 * @property boolean|null $server_url
 * @property boolean|null $secret
 *
 * @package App\Models
 */
class OpenIdAuthenticationAssociation extends Model
{
	protected $table = 'open_id_authentication_associations';
	public $timestamps = false;

	protected $casts = [
		'issued' => 'int',
		'lifetime' => 'int',
		'server_url' => 'boolean',
		'secret' => 'boolean'
	];

	protected $hidden = [
		'secret'
	];

	protected $fillable = [
		'issued',
		'lifetime',
		'handle',
		'assoc_type',
		'server_url',
		'secret'
	];
}

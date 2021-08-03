<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OpenIdAuthenticationNonce
 * 
 * @property int $id
 * @property int $timestamp
 * @property string|null $server_url
 * @property string $salt
 *
 * @package App\Models
 */
class OpenIdAuthenticationNonce extends Model
{
	protected $table = 'open_id_authentication_nonces';
	public $timestamps = false;

	protected $casts = [
		'timestamp' => 'int'
	];

	protected $fillable = [
		'timestamp',
		'server_url',
		'salt'
	];
}

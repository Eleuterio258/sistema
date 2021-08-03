<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tracker
 * 
 * @property int $id
 * @property string $name
 * @property bool $is_in_chlog
 * @property int|null $position
 * @property bool $is_in_roadmap
 * @property string $core_fields
 * @property int|null $fields_bits
 * @property int|null $default_status_id
 *
 * @package App\Models
 */
class Tracker extends Model
{
	protected $table = 'trackers';
	public $timestamps = false;

	protected $casts = [
		'is_in_chlog' => 'bool',
		'position' => 'int',
		'is_in_roadmap' => 'bool',
		'fields_bits' => 'int',
		'default_status_id' => 'int'
	];

	protected $fillable = [
		'name',
		'is_in_chlog',
		'position',
		'is_in_roadmap',
		'core_fields',
		'fields_bits',
		'default_status_id'
	];
}

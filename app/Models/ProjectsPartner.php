<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectsPartner
 * 
 * @property int $id
 * @property int $project_id
 * @property int $partner_id
 *
 * @package App\Models
 */
class ProjectsPartner extends Model
{
	protected $table = 'projects_partners';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'partner_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'partner_id'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RubricasOrcamentoDespesa
 * 
 * @property int $id
 * @property int $rubrica_id
 * @property int $budget_tracker_id
 * @property int $project_id
 * @property string|null $provincia
 * @property Carbon $created_on
 *
 * @package App\Models
 */
class RubricasOrcamentoDespesa extends Model
{
	protected $table = 'rubricas_orcamento_despesas';
	public $timestamps = false;

	protected $casts = [
		'rubrica_id' => 'int',
		'budget_tracker_id' => 'int',
		'project_id' => 'int'
	];

	protected $dates = [
		'created_on'
	];

	protected $fillable = [
		'rubrica_id',
		'budget_tracker_id',
		'project_id',
		'provincia',
		'created_on'
	];
}

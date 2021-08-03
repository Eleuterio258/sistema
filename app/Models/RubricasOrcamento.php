<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RubricasOrcamento
 * 
 * @property int $id
 * @property string $rubrica
 * @property string $name
 * @property int $project_id
 * @property float $orcamento
 * @property int|null $year
 * @property int|null $parent_rubrica_id
 * @property string|null $parent_rubrica
 * @property int $author_id
 * @property int|null $updated_by
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class RubricasOrcamento extends Model
{
	use SoftDeletes;
	protected $table = 'rubricas_orcamento';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'orcamento' => 'float',
		'year' => 'int',
		'parent_rubrica_id' => 'int',
		'author_id' => 'int',
		'updated_by' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'rubrica',
		'name',
		'project_id',
		'orcamento',
		'year',
		'parent_rubrica_id',
		'parent_rubrica',
		'author_id',
		'updated_by',
		'created_on',
		'updated_on'
	];
}

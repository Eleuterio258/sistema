<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RubricasFlowSolicitacaoFundo
 * 
 * @property int $id
 * @property string $num_requisicao
 * @property int $rubrica_id
 * @property int $project_id
 * @property Carbon $created_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class RubricasFlowSolicitacaoFundo extends Model
{
	use SoftDeletes;
	protected $table = 'rubricas_flow_solicitacao_fundos';
	public $timestamps = false;

	protected $casts = [
		'rubrica_id' => 'int',
		'project_id' => 'int'
	];

	protected $dates = [
		'created_on'
	];

	protected $fillable = [
		'num_requisicao',
		'rubrica_id',
		'project_id',
		'created_on'
	];
}

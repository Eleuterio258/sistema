<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SolicitacaoFundo
 * 
 * @property int $id
 * @property string $num_requisicao
 * @property int|null $has_rubricas
 * @property string $objectivo
 * @property float $valor_estimado
 * @property int|null $area_id
 * @property int|null $activiade_id
 * @property int|null $necessidade_id
 * @property int $pilar_id
 * @property int $project_id
 * @property Carbon $data
 * @property string|null $local
 * @property int $num_dias
 * @property int $num_participantes
 * @property string|null $_osc
 * @property int|null $issue_id
 * @property int $request_by
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 * @property bool|null $is_approved
 * @property bool|null $is_rejected
 * @property int|null $rejected_by
 * @property Carbon|null $rejected_on
 *
 * @package App\Models
 */
class SolicitacaoFundo extends Model
{
	use SoftDeletes;
	protected $table = 'solicitacao_fundos';
	public $timestamps = false;

	protected $casts = [
		'has_rubricas' => 'int',
		'valor_estimado' => 'float',
		'area_id' => 'int',
		'activiade_id' => 'int',
		'necessidade_id' => 'int',
		'pilar_id' => 'int',
		'project_id' => 'int',
		'num_dias' => 'int',
		'num_participantes' => 'int',
		'issue_id' => 'int',
		'request_by' => 'int',
		'is_approved' => 'bool',
		'is_rejected' => 'bool',
		'rejected_by' => 'int'
	];

	protected $dates = [
		'data',
		'created_on',
		'updated_on',
		'rejected_on'
	];

	protected $fillable = [
		'num_requisicao',
		'has_rubricas',
		'objectivo',
		'valor_estimado',
		'area_id',
		'activiade_id',
		'necessidade_id',
		'pilar_id',
		'project_id',
		'data',
		'local',
		'num_dias',
		'num_participantes',
		'_osc',
		'issue_id',
		'request_by',
		'created_on',
		'updated_on',
		'is_approved',
		'is_rejected',
		'rejected_by',
		'rejected_on'
	];
}

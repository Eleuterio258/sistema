<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReprovacaoSolicitacaoFundo
 * 
 * @property int $id
 * @property int $nivel
 * @property int|null $issue_id
 * @property int $aprovacao_id
 * @property string|null $solicitacao_requestNum
 * @property int $request_from_id
 * @property string|null $notes
 * @property int $action_by
 * @property string|null $categoria
 * @property Carbon $created_on
 *
 * @package App\Models
 */
class ReprovacaoSolicitacaoFundo extends Model
{
	protected $table = 'reprovacao_solicitacao_fundos';
	public $timestamps = false;

	protected $casts = [
		'nivel' => 'int',
		'issue_id' => 'int',
		'aprovacao_id' => 'int',
		'request_from_id' => 'int',
		'action_by' => 'int'
	];

	protected $dates = [
		'created_on'
	];

	protected $fillable = [
		'nivel',
		'issue_id',
		'aprovacao_id',
		'solicitacao_requestNum',
		'request_from_id',
		'notes',
		'action_by',
		'categoria',
		'created_on'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PagamentosFlowSolicitacaoFundo
 * 
 * @property int $id
 * @property int|null $doardor_id
 * @property string|null $doador_name
 * @property int $flow_solicitacao_id
 * @property int $solicitacao_id
 * @property float $valor
 * @property string|null $paymentType
 * @property string $nome_banco
 * @property string $num_banco
 * @property string $nib_banco
 * @property string|null $check_trans_number
 * @property int $author_id
 * @property string|null $data
 * @property Carbon $created_on
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class PagamentosFlowSolicitacaoFundo extends Model
{
	use SoftDeletes;
	protected $table = 'pagamentos_flow_solicitacao_fundo';
	public $timestamps = false;

	protected $casts = [
		'doardor_id' => 'int',
		'flow_solicitacao_id' => 'int',
		'solicitacao_id' => 'int',
		'valor' => 'float',
		'author_id' => 'int'
	];

	protected $dates = [
		'created_on'
	];

	protected $fillable = [
		'doardor_id',
		'doador_name',
		'flow_solicitacao_id',
		'solicitacao_id',
		'valor',
		'paymentType',
		'nome_banco',
		'num_banco',
		'nib_banco',
		'check_trans_number',
		'author_id',
		'data',
		'created_on'
	];
}

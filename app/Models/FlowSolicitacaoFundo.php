<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FlowSolicitacaoFundo
 * 
 * @property int $id
 * @property string $num_requisicao
 * @property int $solicitacao_id
 * @property int $flow_id
 * @property string $flow_description
 * @property string $validator_category
 * @property int $user_id_to
 * @property int $is_approved
 * @property int $request_by
 * @property int|null $approved_by
 * @property Carbon|null $approved_on
 * @property Carbon $created_on
 * @property Carbon|null $updated_on
 * @property string|null $deleted_at
 * @property bool|null $is_rejected
 * @property int|null $rejected_by
 * @property Carbon|null $rejected_on
 *
 * @package App\Models
 */
class FlowSolicitacaoFundo extends Model
{
	use SoftDeletes;
	protected $table = 'flow_solicitacao_fundos';
	public $timestamps = false;

	protected $casts = [
		'solicitacao_id' => 'int',
		'flow_id' => 'int',
		'user_id_to' => 'int',
		'is_approved' => 'int',
		'request_by' => 'int',
		'approved_by' => 'int',
		'is_rejected' => 'bool',
		'rejected_by' => 'int'
	];

	protected $dates = [
		'approved_on',
		'created_on',
		'updated_on',
		'rejected_on'
	];

	protected $fillable = [
		'num_requisicao',
		'solicitacao_id',
		'flow_id',
		'flow_description',
		'validator_category',
		'user_id_to',
		'is_approved',
		'request_by',
		'approved_by',
		'approved_on',
		'created_on',
		'updated_on',
		'is_rejected',
		'rejected_by',
		'rejected_on'
	];
}

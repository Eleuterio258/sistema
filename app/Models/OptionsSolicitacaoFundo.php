<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OptionsSolicitacaoFundo
 * 
 * @property int $id
 * @property string $num_requisicao
 * @property int $enumeration_id
 * @property string $enumeration_type
 * @property Carbon $created_on
 * @property Carbon|null $deleted_on
 *
 * @package App\Models
 */
class OptionsSolicitacaoFundo extends Model
{
	protected $table = 'options_solicitacao_fundos';
	public $timestamps = false;

	protected $casts = [
		'enumeration_id' => 'int'
	];

	protected $dates = [
		'created_on',
		'deleted_on'
	];

	protected $fillable = [
		'num_requisicao',
		'enumeration_id',
		'enumeration_type',
		'created_on',
		'deleted_on'
	];
}

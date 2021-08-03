<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AprovacaoFundo
 * 
 * @property int $id
 * @property int $issue_id
 * @property string|null $description
 * @property int|null $nivel
 * @property int $author_id
 * @property string|null $categoria
 * @property Carbon|null $data
 * @property Carbon|null $last_validation_date
 * @property int|null $last_validation_by
 * @property bool $is_aproved
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property bool|null $is_rejected
 * @property int|null $rejected_by
 * @property string|null $reject_notes
 *
 * @package App\Models
 */
class AprovacaoFundo extends Model
{
	protected $table = 'aprovacao_fundos';
	public $timestamps = false;

	protected $casts = [
		'issue_id' => 'int',
		'nivel' => 'int',
		'author_id' => 'int',
		'last_validation_by' => 'int',
		'is_aproved' => 'bool',
		'is_rejected' => 'bool',
		'rejected_by' => 'int'
	];

	protected $dates = [
		'data',
		'last_validation_date',
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'issue_id',
		'description',
		'nivel',
		'author_id',
		'categoria',
		'data',
		'last_validation_date',
		'last_validation_by',
		'is_aproved',
		'created_on',
		'updated_on',
		'is_rejected',
		'rejected_by',
		'reject_notes'
	];
}

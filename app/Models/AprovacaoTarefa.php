<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AprovacaoTarefa
 * 
 * @property int $id
 * @property string|null $description
 * @property int $nivel
 * @property int $author_id
 * @property int $issue_id
 * @property int $customized_id
 * @property string $customized_type
 * @property bool|null $is_approved
 * @property int|null $approved_by
 * @property Carbon|null $approved_on
 * @property bool|null $is_rejected
 * @property int|null $rejected_by
 * @property string|null $reject_notes
 * @property Carbon $created_on
 * @property Carbon $updated_on
 *
 * @package App\Models
 */
class AprovacaoTarefa extends Model
{
	protected $table = 'aprovacao_tarefas';
	public $timestamps = false;

	protected $casts = [
		'nivel' => 'int',
		'author_id' => 'int',
		'issue_id' => 'int',
		'customized_id' => 'int',
		'is_approved' => 'bool',
		'approved_by' => 'int',
		'is_rejected' => 'bool',
		'rejected_by' => 'int'
	];

	protected $dates = [
		'approved_on',
		'created_on',
		'updated_on'
	];

	protected $fillable = [
		'description',
		'nivel',
		'author_id',
		'issue_id',
		'customized_id',
		'customized_type',
		'is_approved',
		'approved_by',
		'approved_on',
		'is_rejected',
		'rejected_by',
		'reject_notes',
		'created_on',
		'updated_on'
	];
}

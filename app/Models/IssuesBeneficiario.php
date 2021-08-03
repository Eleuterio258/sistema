<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class IssuesBeneficiario
 * 
 * @property int $id
 * @property int $issue_id
 * @property string $type
 * @property string $faixa_etaria
 * @property int $meta
 * @property int|null $realizado
 * @property int $author_id
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property string|null $deleted_at
 * @property Carbon|null $reported_on
 * @property int|null $reported_by
 *
 * @package App\Models
 */
class IssuesBeneficiario extends Model
{
	use SoftDeletes;
	protected $table = 'issues_beneficiarios';
	public $timestamps = false;

	protected $casts = [
		'issue_id' => 'int',
		'meta' => 'int',
		'realizado' => 'int',
		'author_id' => 'int',
		'reported_by' => 'int'
	];

	protected $dates = [
		'created_on',
		'updated_on',
		'reported_on'
	];

	protected $fillable = [
		'issue_id',
		'type',
		'faixa_etaria',
		'meta',
		'realizado',
		'author_id',
		'created_on',
		'updated_on',
		'reported_on',
		'reported_by'
	];
}

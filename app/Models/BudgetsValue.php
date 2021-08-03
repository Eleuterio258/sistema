<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BudgetsValue
 * 
 * @property int $id
 * @property string $issues_budget_id
 * @property int $author_id
 * @property int $budget_tracker_id
 * @property int|null $project_id
 * @property string $customized_type
 * @property int $customized_id
 * @property int $quantidade
 * @property float|null $valor_base
 * @property float $issued_value
 * @property string|null $variavel
 * @property string|null $valor_variavel
 * @property int|null $aproved_by
 * @property Carbon $issued_at
 * @property Carbon|null $aproved_on
 * @property int|null $partner_id
 * @property Carbon $created_on
 * @property Carbon $updated_on
 * @property bool $is_aproved
 * @property int|null $quant_realizada
 * @property float|null $valor_realizado
 * @property bool $is_reported
 * @property Carbon|null $reported_at
 * @property int|null $reported_by
 * @property bool $report_is_approved
 * @property int|null $report_approved_by
 * @property Carbon|null $report_approved_on
 *
 * @package App\Models
 */
class BudgetsValue extends Model
{
	protected $table = 'budgets_values';
	public $timestamps = false;

	protected $casts = [
		'author_id' => 'int',
		'budget_tracker_id' => 'int',
		'project_id' => 'int',
		'customized_id' => 'int',
		'quantidade' => 'int',
		'valor_base' => 'float',
		'issued_value' => 'float',
		'aproved_by' => 'int',
		'partner_id' => 'int',
		'is_aproved' => 'bool',
		'quant_realizada' => 'int',
		'valor_realizado' => 'float',
		'is_reported' => 'bool',
		'reported_by' => 'int',
		'report_is_approved' => 'bool',
		'report_approved_by' => 'int'
	];

	protected $dates = [
		'issued_at',
		'aproved_on',
		'created_on',
		'updated_on',
		'reported_at',
		'report_approved_on'
	];

	protected $fillable = [
		'issues_budget_id',
		'author_id',
		'budget_tracker_id',
		'project_id',
		'customized_type',
		'customized_id',
		'quantidade',
		'valor_base',
		'issued_value',
		'variavel',
		'valor_variavel',
		'aproved_by',
		'issued_at',
		'aproved_on',
		'partner_id',
		'created_on',
		'updated_on',
		'is_aproved',
		'quant_realizada',
		'valor_realizado',
		'is_reported',
		'reported_at',
		'reported_by',
		'report_is_approved',
		'report_approved_by',
		'report_approved_on'
	];
}

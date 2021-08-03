<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomReportSeries
 * 
 * @property int $id
 * @property int|null $custom_report_id
 * @property string|null $name
 * @property string|null $filters
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CustomReportSeries extends Model
{
	protected $table = 'custom_report_series';

	protected $casts = [
		'custom_report_id' => 'int'
	];

	protected $fillable = [
		'custom_report_id',
		'name',
		'filters'
	];
}

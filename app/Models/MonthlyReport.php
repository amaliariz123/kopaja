<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $month
 * @property int $year
 * @property int $month_year
 * @property int $total_premium_members
 * @property int $total_regular_members
 * @property int $total_testimonials
 * @property int $total_tax_exercises
 * @property string $created_at
 * @property string $updated_at
 */
class MonthlyReport extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'monthly_reports';

    /**
     * @var array
     */
    protected $fillable = ['month', 'year', 'month_year', 'total_premium_members', 'total_regular_members', 'total_testimonials', 'total_tax_exercises', 'created_at', 'updated_at'];

}

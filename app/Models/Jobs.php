<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
  protected $fillable = [
    'user_id',
    'job_title',
    'job_slug',
    'job_vacancy',
    'job_employment_status',
    'job_experience',
    'job_gender',
    'job_age',
    'job_location',
    'job_salary',
    'job_application_deadline',
    'job_summary',
    'job_responsibilities',
    'job_educational_requirements',
    'job_additional_requirements',
    'job_other_benefits',
  ];

    protected $guarded = [];

  public function user()
  {
    return $this->belongsTo(User::class);
    }
}

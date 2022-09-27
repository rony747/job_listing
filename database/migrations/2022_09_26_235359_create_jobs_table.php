<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema ::create('jobs', function (Blueprint $table) {
      $table -> id();
      $table -> unsignedBigInteger('user_id');
      $table -> string('job_title');
      $table -> string('job_slug');
      $table -> string('job_vacancy') -> nullable();
      $table -> string('job_employment_status') -> nullable();
      $table -> string('job_experience') -> nullable();
      $table -> string('job_gender') -> nullable();
      $table -> string('job_age') -> nullable();
      $table -> string('job_location') -> nullable();
      $table -> string('job_salary') -> nullable();
      $table -> string('job_application_deadline') -> nullable();
      $table -> text('job_summary') -> nullable();
      $table -> text('job_responsibilities') -> nullable();
      $table -> text('job_educational_requirements') -> nullable();
      $table -> text('job_additional_requirements') -> nullable();
      $table -> text('job_other_benefits') -> nullable();
      $table -> boolean('is_featured') -> default(false);
      $table -> boolean('is_active') -> default(true);
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table -> timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema ::dropIfExists('jobs');
  }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dcps', function (Blueprint $table) {
            $table->id();
            $table->string('request_type_id');
            $table->string('dcps_uniq_id')->nullable();
            $table->string('dcps_master_id')->nullable();
            $table->dateTime('request_date')->nullable();
            $table->string('employee_master_id')->nullable();
            $table->integer('employee_no');
            $table->string('employee_name');
            $table->integer('division_id')->nullable();
            $table->string('division_name')->nullable();
            $table->integer('designation_id')->nullable();
            $table->string('designation_name');
            $table->integer('office_id')->nullable();
            $table->string('office_name')->nullable();
            $table->integer('cadre_id')->nullable();
            $table->string('cadre_name')->nullable();
            $table->string('doc_path1')->nullable();
            $table->integer('process_status_id')->nullable();
            $table->integer('current_step')->nullable();
            $table->integer('version')->nullable();
            $table->integer('revert_count')->nullable();
            $table->dateTime('updated_on')->nullable();
            $table->integer('updated_by')->nullable();
            $table->dateTime('created_on')->nullable();
            $table->integer('created_by')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('is_sych')->nullable();
            $table->date('date_of_joining')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcps');
    }
};

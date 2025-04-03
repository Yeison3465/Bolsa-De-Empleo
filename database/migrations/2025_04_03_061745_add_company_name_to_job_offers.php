<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('job_offers', function (Blueprint $table) {
            $table->string('company_name')->after('title'); // Agrega el campo después de 'title'
        });
    }

    public function down()
    {
        Schema::table('job_offers', function (Blueprint $table) {
            $table->dropColumn('company_name'); // Elimina la columna en caso de rollback
        });
    }
};

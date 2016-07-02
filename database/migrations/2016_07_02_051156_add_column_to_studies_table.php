<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Feasibility_studies', function (Blueprint $table) {
		$table->string('name');
		$table->string('description');
		$table->decimal('basic_price', 10 , 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Feasibility_studies', function (Blueprint $table) {
        	$table->dropColumn('name');
		$table->dropColumn('description');
		$table->dropColumn('basic_price'); 
        });
    }
}

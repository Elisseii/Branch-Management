<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElisseiidevBranchmanagementCities extends Migration
{
    public function up()
    {
        Schema::create('elisseiidev_branchmanagement_cities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('code');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elisseiidev_branchmanagement_cities');
    }
}

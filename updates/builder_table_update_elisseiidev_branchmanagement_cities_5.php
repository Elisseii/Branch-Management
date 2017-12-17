<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElisseiidevBranchmanagementCities5 extends Migration
{
    public function up()
    {
        Schema::table('elisseiidev_branchmanagement_cities', function($table)
        {
            $table->string('mode', 10)->default('0')->change();
        });
    }
    
    public function down()
    {
        Schema::table('elisseiidev_branchmanagement_cities', function($table)
        {
            $table->string('mode', 10)->default(null)->change();
        });
    }
}

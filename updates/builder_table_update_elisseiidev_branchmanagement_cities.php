<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElisseiidevBranchmanagementCities extends Migration
{
    public function up()
    {
        Schema::table('elisseiidev_branchmanagement_cities', function($table)
        {
            $table->dropColumn('code');
        });
    }
    
    public function down()
    {
        Schema::table('elisseiidev_branchmanagement_cities', function($table)
        {
            $table->string('code', 255);
        });
    }
}

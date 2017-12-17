<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElisseiidevBranchmanagementCities2 extends Migration
{
    public function up()
    {
        Schema::table('elisseiidev_branchmanagement_cities', function($table)
        {
            $table->integer('mode')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('elisseiidev_branchmanagement_cities', function($table)
        {
            $table->dropColumn('mode');
        });
    }
}

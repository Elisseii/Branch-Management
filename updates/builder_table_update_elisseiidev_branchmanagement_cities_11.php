<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElisseiidevBranchmanagementCities11 extends Migration
{
    public function up()
    {
        Schema::table('elisseiidev_branchmanagement_cities', function($table)
        {
            $table->renameColumn('filial_description', 'branch_description');
        });
    }
    
    public function down()
    {
        Schema::table('elisseiidev_branchmanagement_cities', function($table)
        {
            $table->renameColumn('branch_description', 'filial_description');
        });
    }
}

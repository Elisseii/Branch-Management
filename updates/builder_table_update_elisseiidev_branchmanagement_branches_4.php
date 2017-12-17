<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElisseiidevBranchmanagementBranches4 extends Migration
{
    public function up()
    {
        Schema::table('elisseiidev_branchmanagement_branches', function($table)
        {
            $table->dropColumn('branch_group');
        });
    }
    
    public function down()
    {
        Schema::table('elisseiidev_branchmanagement_branches', function($table)
        {
            $table->string('branch_group', 255);
        });
    }
}

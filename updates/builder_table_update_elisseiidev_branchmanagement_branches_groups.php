<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElisseiidevBranchmanagementBranchesGroups extends Migration
{
    public function up()
    {
        Schema::table('elisseiidev_branchmanagement_branches_groups', function($table)
        {
            $table->integer('branches_id');
            $table->integer('groups_id');
            $table->dropColumn('branch_id');
            $table->dropColumn('group_id');
        });
    }
    
    public function down()
    {
        Schema::table('elisseiidev_branchmanagement_branches_groups', function($table)
        {
            $table->dropColumn('branches_id');
            $table->dropColumn('groups_id');
            $table->integer('branch_id');
            $table->integer('group_id');
        });
    }
}

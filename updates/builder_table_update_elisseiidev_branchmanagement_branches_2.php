<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElisseiidevBranchmanagementBranches2 extends Migration
{
    public function up()
    {
        Schema::table('elisseiidev_branchmanagement_branches', function($table)
        {
            $table->renameColumn('branch_id', 'id');
            $table->renameColumn('branch_slug', 'slug');
        });
    }
    
    public function down()
    {
        Schema::table('elisseiidev_branchmanagement_branches', function($table)
        {
            $table->renameColumn('id', 'branch_id');
            $table->renameColumn('slug', 'branch_slug');
        });
    }
}

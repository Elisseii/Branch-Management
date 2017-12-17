<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElisseiidevBranchmanagementBranches extends Migration
{
    public function up()
    {
        Schema::create('elisseiidev_branchmanagement_branches', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('branch_id');
            $table->string('branch_name');
            $table->string('branch_slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elisseiidev_branchmanagement_branches');
    }
}

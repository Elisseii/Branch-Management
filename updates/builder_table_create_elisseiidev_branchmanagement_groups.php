<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElisseiidevBranchmanagementGroups extends Migration
{
    public function up()
    {
        Schema::create('elisseiidev_branchmanagement_groups', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('group_id');
            $table->string('group_name');
            $table->string('group_slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elisseiidev_branchmanagement_groups');
    }
}

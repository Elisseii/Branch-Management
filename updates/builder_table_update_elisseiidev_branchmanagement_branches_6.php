<?php namespace Elisseiidev\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElisseiidevBranchmanagementBranches6 extends Migration
{
    public function up()
    {
        Schema::table('elisseiidev_branchmanagement_branches', function($table)
        {
            $table->text('description')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('elisseiidev_branchmanagement_branches', function($table)
        {
            $table->string('description', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}

<?php namespace Elisseiidev\BranchManagement\Models;

use Model;

/**
 * Model
 */
class Groups extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    //public $table = 'elisseiidev_branchmanagement_groups';
    public $table = 'backend_user_groups';


    /* Relations */
    //Model Branches
    // public $belongsToMany =[ 
    //     'branches' =>[ 
    //         'Elisseiidev\BranchManagement\Models\Branches', 
    //         'table' => 'elisseiidev_branchmanagement_branches_groups', 
    //         'order' => 'branch_name' 
    //     ] 
    // ]; 
    ///Model Groups 
    public $belongsToMany =[ 
        'groups' =>[ 
            'Elisseiidev\BranchManagement\Models\Groups', 
            'table' => 'elisseiidev_branchmanagement_branches_groups', 
            'order' => 'name'
        ]
    ];



}

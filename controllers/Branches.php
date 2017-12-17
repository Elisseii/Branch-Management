<?php namespace Elisseiidev\BranchManagement\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Branches extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'manage_branches' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Elisseiidev.BranchManagement', 'branch-management');
    }

    // Permissions
    public function formExtendFields($form)
    {
        if (!$this->user->hasAccess('elisseiidev.branchmanagement.edit_technical_fields')) {
            $form->addFields([
                'cities' => [
                    'label' => 'Cities',
                    'type' => 'relation',
                    'disabled' => 1,
                    'span' => 'left'
                ],
                'groups' => [
                    'label' => 'Groups',
                    'type' => 'relation',
                    'disabled' => 1,
                    'span' => 'right'
                ],
                'name' => [
                    'label' => 'Name',
                    'type' => 'text',
                    'disabled' => 1,
                    'span' => 'left'
                ],
                'slug' => [
                    'label' => 'Slug',
                    'type' => 'text',
                    'disabled' => 1,
                    'span' => 'right'
                ],
            ]);
        }
    }






}

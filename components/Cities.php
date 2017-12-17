<?php namespace Elisseiidev\BranchManagement\Components;

class Cities extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Cities',
            'description' => 'Displays all Cities.'
        ];
    }

    // This array becomes available on the page as {{ component.posts }}
    public function defineProperties()
    {
        return [
            'parameterName' => [
                'title'       => 'parameterName',
                'type'        => 'dropdown',
                'showExternalParam' => false
            ],
            'parameterName2' => [
                'title'       => 'parameterName2',
                'description' => '',
                'type'        => 'dropdown',
                'depends'     => ['modelClass'],
                'showExternalParam' => false
            ],
            'parameterName3' => [
                'title'       => 'parameterName3',
                'description' => '',
                'type'        => 'autocomplete',
                'depends'     => ['modelClass'],
                'validation'  => [
                    'required' => [
                        'message' => 'ParameterName3 requireed!',
                    ]
                ]
            ],
            'parameterName4' => [
                'title'        => 'parameterName4',
                'description'  => '',
                'type'         => 'string',
                'default'      => '',
                'showExternalParam' => false,
            ],

        ];

    }
}
<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'manager' => [
            'users' => 'c,r,u,d',
            'packagings'=> 'c,r,u,d',
            'labelings'=>'c,r,u,d',
            'accessories'=>'c,r,u,d',
            'providers'=>'c,r,u,d',
        ],
        'user' => [
            'packagings'=> 'r',
            'labelings'=>'r',
            'accessories'=>'r',
            'providers'=>'r',
        ],
        'commercial' => [
            'packagings'=> 'r',
            'labelings'=>'r',
            'accessories'=>'r',
            'providers'=>'r',
        ],
        'sourcing' => [
            'packagings'=> 'c,r,u,d',
            'labelings'=>'c,r,u,d',
            'accessories'=>'c,r,u,d',
            'providers'=>'c,r,u,d',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];

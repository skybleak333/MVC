<?php

return [
    '' =>[
        'controller' => 'main',
        'action' => 'index',
    ],
    'cart' =>[
        'controller' => 'main',
        'action' => 'cart',
    ],
    'product' =>[
        'controller' => 'main',
        'action' => 'product',
    ],
    'account/login' =>[
        'controller' => 'account',
        'action' => 'login',
    ],
    /* AdminController */
    'admin/panel' =>[
        'controller' => 'admin',
        'action' => 'panel',
    ],
    'admin/add' =>[
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/del' =>[
        'controller' => 'admin',
        'action' => 'del',
    ],
    'admin/panel/edit_sel' =>[
        'controller' => 'admin',
        'action' => 'edit_sel',
    ],
    'admin/panel/edit' =>[
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/changePass' =>[
        'controller' => 'admin',
        'action' => 'changePass',
    ],
    'admin/addAdmin' =>[
        'controller' => 'admin',
        'action' => 'addAdmin',
    ],
    'admin/delAdmin' =>[
        'controller' => 'admin',
        'action' => 'delAdmin',
    ],
];
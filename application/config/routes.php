<?php

return [
    /* Главная страница */
    '' =>[
        'controller' => 'main',
        'action' => 'index',
    ],
    '\d+' =>[
        'controller' => 'main',
        'action' => 'index',
    ],
    /* Страница с карзиной */
    'cart' =>[
        'controller' => 'main',
        'action' => 'cart',
    ],
    /* Страница с карточкой товара */
    'product' =>[
        'controller' => 'main',
        'action' => 'product',
    ],
    'product/\d+' =>[
        'controller' => 'main',
        'action' => 'product',
    ],
    /* Вхрд в админ панель */
    'account/login' =>[
        'controller' => 'account',
        'action' => 'login',
    ],
    /* AdminController */
    'admin/panel' =>[
        'controller' => 'admin',
        'action' => 'panel',
    ],
    /* Страница с добавлением товара */
    'admin/add' =>[
        'controller' => 'admin',
        'action' => 'add',
    ],
    /* Страница с удалением товара */
    'admin/del' =>[
        'controller' => 'admin',
        'action' => 'del',
    ],
    /* Страница с реадктированием товара */
    'admin/panel/edit_sel' =>[
        'controller' => 'admin',
        'action' => 'edit_sel',
    ],
    /* Страница с реадктированием Админа */
    'admin/panel/edit' =>[
        'controller' => 'admin',
        'action' => 'edit',
    ],
    /* Страница со сменой пароля */
    'admin/changePass' =>[
        'controller' => 'admin',
        'action' => 'changePass',
    ],
    /* Страница с добавлением Админа */
    'admin/addAdmin' =>[
        'controller' => 'admin',
        'action' => 'addAdmin',
    ],
    /* Страница с удалением Админа */
    'admin/delAdmin' =>[
        'controller' => 'admin',
        'action' => 'delAdmin',
    ],
];
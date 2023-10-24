<?php

return [
  [
    'test' => '/^$/',
    'controller' => 'articles/all',
  ],
  [
    'test' => '/^articles\/add$/',
    'controller' => 'articles/add',
  ],
  [
    'test' => '/^articles\/edit\/([1-9]+\d*)\/?$/',
    'controller' => 'articles/edit',
    'params' => ['id' => 1],
  ],
  [
    'test' => '/^articles\/article\/([1-9]+\d*)\/?$/',
    'controller' => 'articles/article',
    'params' => ['id' => 1],
  ],
  [
    'test' => '/^articles\/delete\/([1-9]+\d*)\/?$/',
    'controller' => 'articles/delete',
    'params' => ['id' => 1],
  ],
  [
    'test' => '/^cats\/all$/',
    'controller' => 'cats/all',
  ],
  [
    'test' => '/^cats\/cat\/([1-9]+\d*)\/?$/',
    'controller' => 'cats/cat',
    'params' => ['id' => 1],
  ],
  [
    'test' => '/^cats\/add$/',
    'controller' => 'cats/add',
  ],
  [
    'test' => '/^cats\/edit\/([1-9]+\d*)\/?$/',
    'controller' => 'cats/edit',
    'params' => ['id' => 1],
  ],
  [
    'test' => '/^cats\/delete\/([1-9]+\d*)\/?$/',
    'controller' => 'cats/delete',
    'params' => ['id' => 1],
  ],
  [
    'test' => '/^auth\/login$/',
    'controller' => 'auth/login',
  ],
  [
    'test' => '/^auth\/logout$/',
    'controller' => 'auth/logout',
  ],
  [
    'test' => '/^auth\/signup$/',
    'controller' => 'auth/signup',
  ],
  [
    'test' => '/^account\/profile$/',
    'controller' => 'account/profile',
  ],
];

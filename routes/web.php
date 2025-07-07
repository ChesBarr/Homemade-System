<?php

return [
  '/' => [
    'file' => __DIR__ . '/../app/index.php',
    'roles' => ['admin', 'employee', 'doctor', 'patient'],
  ],

  '/dashboard' => [
    'file' => __DIR__ . '/../app/modules/main-dashboard.php',
    'roles' => ['admin', 'employee'],
  ],

  '/recruitment' => [
    'file' => __DIR__ . '/../app/modules/human resources/recruitment.php',
    'roles' => ['admin', 'hr'],
  ],

  // Add more routes as needed
];

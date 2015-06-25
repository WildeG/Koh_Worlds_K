
return array(
    'username' => array(
        'not_empty' => 'You must provide a username.',
        'min_length' => 'The username must be at least 4 characters long.',
        'max_length' => 'The username must be less than 32 characters long.',
        'username_available' => 'This username is not available.',
    ),
    'password' => array(
        'not_empty' => 'You must provide a password.',
    ),
);
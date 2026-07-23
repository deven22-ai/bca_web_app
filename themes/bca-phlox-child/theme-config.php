<?php


$GLOBALS['theme_config'] = [
    'COMPANY_NAME' => 'BC&A Chartered Accountants',
    'KUMAR_ASSOCIATES' => [
        'email' => 'info@kumarassociates.co.uk',
        'phone' => '01794 516225',
    ],
    'BCA_ROMSEY' => [
        'email' => 'romsey@bcaaccountants.com',
        'phone' => '01794 511511',
    ],
    'SWINDON' => [
        'email' => 'swindon@bcaaccountants.com',
        'phone' => '01793 739110',
    ]
];

function config($key = null)
{
    if ($key === null) {
        return $GLOBALS['theme_config'] ?? null;
    }

    return $GLOBALS['theme_config'][$key] ?? null;
}

?>
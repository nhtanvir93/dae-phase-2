<?php

return [
    'clientAppUrl' => 'http://172.19.100.27',
    'db_datetime_format' => '%d/%m/%Y %h:%i %p',
    'datetime_format' => 'd/m/Y h:i A',
    'db_date_format' => '%d/%m/%Y',
    'date_format' => 'd/m/Y',
    'iso_datetime_format' => 'Y-m-d H:i:s',
    'total_application_fee_chalan' => 6,
    'total_vat_chalan' => 6,
    'google_recaptcha_validation_url' => 'https://google.com/recaptcha/api/',
    'sms_options' => [
        'max_characters' => 250,
        'api_url' => 'http://172.16.26.99/syn_sms_gw/index.php?usrname=dae&password=dae@123&msisdn=#msisdn#&txtMessage=#message#',
    ],
    'registration' => [
        'success' => 'Registration has been completed Successfully',
        'fail' => 'Registration Failed'
    ],
    'company_types' => [
        'PERSONAL' => 'PERSONAL',
        'ORGANIZATIONAL' => 'ORGANIZATIONAL',
        'CNF' => 'CNF'
    ],
    'path' => [
        'photo' => 'files/uploads/photos',
        'signature' => 'files/uploads/signatures',
        'invoice' => 'files/uploads/invoices',
        'certificate' => 'files/uploads/certificates',
        'report' => 'files/uploads/reports',
        'attachment' => 'files/uploads/attachments',
        'logo' => 'files/uploads/logos',
        'notice' => 'files/uploads/notices',
        'additional_condition' => 'files/uploads/additional_conditions',
    ],
    'user_type' => [
        'applicant' => 3,
        'dae_admin' => 2,
        'dae_user' => 4,
        'system_admin' => 1,
        'cnf' => 6
    ],
    'app_types' => [
        'PC' => 1,
        'RO' => 2,
        'IP' => 3,
        'AP' => 6,
        'ER' => 7
    ],
    'models' => [
        'PC' => 'App\Models\PcDetail',
        'RO' => 'App\Models\RoDetail',
        'IP' => 'App\Models\IpDetail',
        'AP' => 'App\Models\ApDetail',
        'ER' => 'App\Models\ErDetail'
    ],
    'payment_options' => [
        'is_vat_required' => true,
        'is_service_charge_required' => true,
        'service_charge' => 220,
        'APPLICATION' => 'APPLICATION',
        'vat' => 15
    ],
    'online_payment' => [
        'ekpay' => [
            'ipn_success_code' => 1020,
            'ipnEmail' => 'tanvir.eatl@gmail.com',
            'whiteListIP' => '1.1.1.1',
            'initUrl' => 'https://sandbox.ekpay.gov.bd/ekpaypg/v1/merchant-api',
            'redirectUri' => 'https://sandbox.ekpay.gov.bd/ekpaypg/v1?sToken=#SECURETOKEN#&trnsID=#TRANSACTIONID#',
            'httpHeaders' => [
                // "Accept: application/json",
                'Content-Type: application/json',
            ],
            'serviceMerInfo' => [
                'mer_reg_id' => 'dae_test',
                'mer_pas_key' => 'DaE@Tst9521'
            ],
            'merInfo' => [
                'mer_reg_id' => 'dae_test',
                'mer_pas_key' => 'DaE@Tst9521'
            ],
            'orderDetails' => 'Testing Payment Initialization',
            //'ipnUri' => 'http://203.80.191.250:9090/send-ipn',
            'ipnUri' => 'http://203.80.191.250:9090/api/ekpay-ipn-response',
            'successUri' => 'http://172.19.100.27/application/payment/success?appid=#APP_ID#',
            'cancelUri' => 'http://172.19.100.27/application/payment/cancel?appid=#APP_ID#',
            'failedUri' => 'http://172.19.100.27/application/payment/failure?appid=#APP_ID#',
        ],
        'echallan' => [
            'authUrl' => 'http://192.168.101.48:8084/api/login',
            'createUrl' => 'http://192.168.101.48:8084/api/echallan',
            'searchUrl' => 'http://192.168.101.48:8084/api/searchEchallanInfo',
            'echallan_success_code' => 200,
            'credit_account' => [
                '1-4331-0000-2043',
            ],
            'appFeeCreditaccount' => '1-4331-0000-2043',
            'vatFeeCreditaccount' => '1-1133-0015-0311',
            'username' => 'dae_echallan@test.com',
            'key' => 'DaeEchallan@1234',
            'httpHeaders' => [
                'Content-Type' => 'application/json',
            ],
            'requestIdPrefix' => 'DAE',
            'white_list_ip' => '',
            'log' => [
                'name' => 'challan_log',
                'frequency' => 'daily',        // hourly, daily, weekly, monthly,
                'prefix' => 'dae',
                'ext' => 'txt',
                'default' => 'dae_challan_log.txt',
            ],
        ]
    ],
    'roles' => [
        'DG' => 1,
        'DIRECTOR' => 2,
        'AD' => 3,
        'DD' => 4,
        'ADD' => 6,
        'SCRUTINY_OFFICER' => 9,
        'SYSTEM_ADMIN' => 10,
        'PUBLIC_USER' => 11,
        'INSPECTION_OFFICER' => 12,
        'PRINT_CONTROL' => 13,
        'CNF' => 14,
        'CERTIFICATE_VERIFICATION' => 15,
        'IMPORT' => 24,
        'EXPORT' => 25,
        'DAE_ADMIN' => 26,
        'PRE_SCRUTINY_OFFICER' => 27,
        'LAB_INCHARGE' => 28,
        'LAB_TECHNITIAN' => 29,
        'QE/QP' => 30
    ],
    'notification_statuses' => [
        'SUCCESSFULL' => 'SUCCESSFULL',
        'FAILED' => 'FAILED',
    ],
    'notification_types' => [
        'SMS' => 'SMS',
        'EMAIL' => 'EMAIL',
    ],
    'app_statuses' => [
        'NOT_PAID' => 'NOT_PAID',
        'PAID' => 'PAID',
        'FORWARDED' => 'FORWARDED',
        'BACKWARDED' => 'BACKWARDED',
        'APPROVED' => 'APPROVED',
        'REJECTED' => 'REJECTED',
        'RECHECKED' => 'RECHECKED',
        'CANCELLED' => 'CANCELLED',
        'BEFORE_INSPECTION' => 'BEFORE_INSPECTION',
        'TRANSFERRED' => 'TRANSFERRED',
        'REGISTRATION_CONFIRMATION' => 'REGISTRATION_CONFIRMATION'
    ],
    'notification_url_templates' => [
        'FORWARDED' => [
            '',
            'application/pc/show-details/#APPLICATION_ID#',
            [
                'RO_WITH_IP' => 'application/ro-with-ip/show-details/#APPLICATION_ID#',
                'RO_WITH_MEMO' => 'application/ro-with-memo/show-details/#APPLICATION_ID#'
            ],
            'application/ip/show-details/#APPLICATION_ID#'
        ],
        'BACKWARDED' => [
            '',
            'application/pc/show-details/#APPLICATION_ID#',
            [
                'RO_WITH_IP' => 'application/ro-with-ip/show-details/#APPLICATION_ID#',
                'RO_WITH_MEMO' => 'application/ro-with-memo/show-details/#APPLICATION_ID#'
            ],
            'application/ip/show-details/#APPLICATION_ID#'
        ],
        'APPROVED' => [
            '',
            'application/pc/show-details/#APPLICATION_ID#',
            [
                'RO_WITH_IP' => 'application/ro-with-ip/show-details/#APPLICATION_ID#',
                'RO_WITH_MEMO' => 'application/ro-with-memo/show-details/#APPLICATION_ID#'
            ],
            'application/ip/show-details/#APPLICATION_ID#'
        ],
        'REJECTED' => [
            '',
            'application/pc/show-details/#APPLICATION_ID#',
            [
                'RO_WITH_IP' => 'application/ro-with-ip/show-details/#APPLICATION_ID#',
                'RO_WITH_MEMO' => 'application/ro-with-memo/show-details/#APPLICATION_ID#'
            ],
            'application/ip/show-details/#APPLICATION_ID#'
        ],
        'RECHECKED' => [
            '',
            'application/pc/edit/#APPLICATION_ID#',
            [
                'RO_WITH_IP' => 'application/ro-with-ip/edit/#APPLICATION_ID#',
                'RO_WITH_MEMO' => 'application/ro-with-memo/edit/#APPLICATION_ID#'
            ],
            'application/ip/edit/#APPLICATION_ID#'
        ]
    ],
    'task_field_input_types' => [
        'BOOLEAN' => 'BOOLEAN',
        'COMMENT' => 'COMMENT',
        'DATE' => 'DATE',
        'FILE' => 'FILE',
        'INDIVIDUAL_LONG_TEXT' => 'INDIVIDUAL_LONG_TEXT',
        'IS_INSPECTION_ENABLED' => 'IS_INSPECTION_ENABLED',
        'IS_LAB_TEST_ENABLED' => 'IS_LAB_TEST_ENABLED',
        'LONG_TEXT' => 'LONG_TEXT',
        'MANUAL_CHALAN' => 'MANUAL_CHALAN',
        'MULTI_DATE' => 'MULTI_DATE',
        'MULTI_LONG_TEXT' => 'MULTI_LONG_TEXT',
        'MULTI_NUMBER' => 'MULTI_NUMBER',
        'MULTI_SELECT' => 'MULTI_SELECT',
        'MULTI_TEXT' => 'MULTI_TEXT',
        'NUMBER' => 'NUMBER',
        'SELECT' => 'SELECT',
        'STAGE_USER' => 'STAGE_USER',
        'TEXT' => 'TEXT'
    ],
    'task_field_max_value' => [
        'date' => 10,
        'text' => 65530,
        'string' => 190,
        'number' => 999999
    ],
    'input_type_details' => [
        'BOOLEAN' => [
            'has_max_value' => true,
            'size' => 1,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => true
        ],
        'COMMENT' => [
            'has_max_value' => false,
            'size' => 190,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
        'DATE' => [
            'has_max_value' => false,
            'size' => 10,
            'is_date_type' => true,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
        'INDIVIDUAL_LONG_TEXT' => [
            'has_max_value' => false,
            'size' => 65530,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
        'IS_INSPECTION_ENABLED' => [
            'has_max_value' => true,
            'size' => 1,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => true
        ],
        'IS_LAB_TEST_ENABLED' => [
            'has_max_value' => true,
            'size' => 1,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => true
        ],
        'LONG_TEXT' => [
            'has_max_value' => false,
            'size' => 65530,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
        'MANUAL_CHALAN' => [
            'has_max_value' => true,
            'size' => 999999,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
        'MULTI_DATE' => [
            'has_max_value' => false,
            'size' => 10,
            'is_date_type' => true,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
        'MULTI_LONG_TEXT' => [
            'has_max_value' => false,
            'size' => 65530,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
        'MULTI_NUMBER' => [
            'has_max_value' => true,
            'size' => 999999,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
        'MULTI_SELECT' => [
            'has_max_value' => true,
            'size' => 999999,
            'is_date_type' => false,
            'is_select_type' => true,
            'is_boolean_type' => false
        ],
        'MULTI_TEXT' => [
            'has_max_value' => false,
            'size' => 65530,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
        'NUMBER' => [
            'has_max_value' => true,
            'size' => 999999,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
        'SELECT' => [
            'has_max_value' => true,
            'size' => 999999,
            'is_date_type' => false,
            'is_select_type' => true,
            'is_boolean_type' => false
        ],
        'STAGE_USER' => [
            'has_max_value' => true,
            'size' => 999999,
            'is_date_type' => false,
            'is_select_type' => true,
            'is_boolean_type' => false
        ],
        'TEXT' => [
            'has_max_value' => false,
            'size' => 65530,
            'is_date_type' => false,
            'is_select_type' => false,
            'is_boolean_type' => false
        ],
    ],
    'notification_templates' => [
        'approve' => 'Your application (APPLICATION ID : #APPLICATION_ID#) is approved from #ORGANIZATION#',
        'backward' => 'An application (APPLICATION ID : #APPLICATION_ID#) is backwarded to you',
        'forward' => 'An application (APPLICATION ID : #APPLICATION_ID#) is forwarded to you',
        'recheck' => 'Your application (APPLICATION ID : #APPLICATION_ID#) is backwarded from #ORGANIZATION#',
        'reject' => 'Your application (APPLICATION ID : #APPLICATION_ID#) is rejected from #ORGANIZATION#',
        'registration_sms' => 'Your confirmation code is #CONFIRMATION_CODE#. Please use this code to activate your newly created account.'
    ],
    'document_signer' => [
        'username' => 'dae@synesisit.com.bd',
        'password' => 'rZ1!aQ7(eL8?vM8;',
        'token_name' => 'dae',
        'auth_url' => 'http://172.16.26.68:8081/api/login',
        'signer_url' => 'http://172.16.26.68:8081/api/certificate'
    ],
    'chalan_types' => [
        'APPLICATION_FEE' => 'APPLICATION_FEE',
        'VAT' => 'VAT'
    ],
    'transaction_types' => [
        'APPLICATION' => 'APPLICATION',
        'REGISTRATION' => 'REGISTRATION',
        'RENEWAL_REGISTRATION' => 'RENEWAL_REGISTRATION'
    ],
    'count_product_certificate_validity' => [
        'PC' => false,
        'RO' => false,
        'IP' => true
    ],
    'transaction_paid_for' => [
        'SERVICE_FEE' => 'SERVICE_FEE',
        'APPLICATION_SERVICE_FEE' => 'APPLICATION_SERVICE_FEE',
        'VAT_SERVICE_FEE' => 'VAT_SERVICE_FEE',
        'APPLICATION_VAT_SERVICE_FEE' => 'APPLICATION_VAT_SERVICE_FEE'
    ]
];
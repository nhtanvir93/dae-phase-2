<?php

namespace App\Services;

class PaymentService
{
    private $appInvoice;
    private $transaction;

    public function __construct()
    {
        $this->appInvoice = resolve('App\Models\AppInvoice');
        $this->transaction = resolve('App\Models\Transaction');
    }

    public function getDashboardResult($user, $userTypeLabel) {
        $now = now();
        $lastMonth = now()->subMonth(1);
        $secondLastMonth = now()->subMonth(2);

        $currentMonthDates = [
            $now->firstOfMonth()->format('Y-m-d'),
            $now->lastOfMonth()->format('Y-m-d')
        ];

        $lastMonthDates = [
            $lastMonth->firstOfMonth()->format('Y-m-d'),
            $lastMonth->lastOfMonth()->format('Y-m-d')
        ];

        $secondLastMonthDates = [
            $secondLastMonth->firstOfMonth()->format('Y-m-d'),
            $secondLastMonth->lastOfMonth()->format('Y-m-d')
        ];

        $offlineInvoiceReport = $this->getOfflinePaymentReport($userTypeLabel, $user,
            $currentMonthDates, $lastMonthDates, $secondLastMonthDates);
        $onlineTransactionReport = $this->getOnlinePaymentReport($userTypeLabel, $user,
            $currentMonthDates, $lastMonthDates, $secondLastMonthDates);

        $data = [
            [
                'label' => 'Payment (' . $now->format('F') . ', ' . $now->year . ')',
                'report' => [
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Offline',
                        'count' => $offlineInvoiceReport['application'][0] + $offlineInvoiceReport['vat'][0]
                    ],
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Online',
                        'count' => $onlineTransactionReport['application'][0] + $onlineTransactionReport['vat'][0]
                    ],
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Application',
                        'count' => $onlineTransactionReport['application'][0] + $offlineInvoiceReport['application'][0]
                    ],
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Vat',
                        'count' => $onlineTransactionReport['vat'][0] + $offlineInvoiceReport['vat'][0]
                    ]
                ]
            ],
            [
                'label' => 'Payment (' . $lastMonth->format('F') . ', ' . $lastMonth->year . ')',
                'report' => [
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Offline',
                        'count' => $offlineInvoiceReport['application'][1] + $offlineInvoiceReport['vat'][1]
                    ],
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Online',
                        'count' => $onlineTransactionReport['application'][1] + $onlineTransactionReport['vat'][1]
                    ],
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Application',
                        'count' => $onlineTransactionReport['application'][1] + $offlineInvoiceReport['application'][1]
                    ],
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Vat',
                        'count' => $onlineTransactionReport['vat'][1] + $offlineInvoiceReport['vat'][1]
                    ]
                ]
            ],
            [
                'label' => 'Payment (' . $secondLastMonth->format('F') . ', ' . $secondLastMonth->year . ')',
                'report' => [
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Offline',
                        'count' => $offlineInvoiceReport['application'][2] + $offlineInvoiceReport['vat'][2]
                    ],
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Online',
                        'count' => $onlineTransactionReport['application'][2] + $onlineTransactionReport['vat'][2]
                    ],
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Application',
                        'count' => $onlineTransactionReport['application'][2] + $offlineInvoiceReport['application'][2]
                    ],
                    [
                        'entity' => 'APPLICATION',
                        'label' => 'Vat',
                        'count' => $onlineTransactionReport['vat'][2] + $offlineInvoiceReport['vat'][2]
                    ]
                ]
            ]
        ];

        if($userTypeLabel == 'SYSTEM_ADMIN') {
            $data[0]['report'][1]['count'] += $onlineTransactionReport['service_charge'][0];
            $data[0]['report'][] = [
                'entity' => 'APPLICATION',
                'label' => 'Service Charge',
                'count' => $onlineTransactionReport['service_charge'][0]
            ];

            $data[1]['report'][1]['count'] += $onlineTransactionReport['service_charge'][1];
            $data[1]['report'][] = [
                'entity' => 'APPLICATION',
                'label' => 'Service Charge',
                'count' => $onlineTransactionReport['service_charge'][1]
            ];

            $data[2]['report'][1]['count'] += $onlineTransactionReport['service_charge'][2];
            $data[2]['report'][] = [
                'entity' => 'APPLICATION',
                'label' => 'Service Charge',
                'count' => $onlineTransactionReport['service_charge'][2]
            ];
        }

        return $data;
    }

    private function getOfflinePaymentReport($userTypeLabel, $user, $currentMonthDates, $lastMonthDates, $secondLastMonthDates) {
        $challanTypes = config('app_constants.chalan_types');

        $currentMonthAmount = $this->appInvoice
            ->setEagerLoads([])
            ->selectRaw('SUM(amount) AS amount')
            ->where('chalan_type', $challanTypes['APPLICATION_FEE'])
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->whereBetween('created_at', $currentMonthDates)
            ->first()
            ->amount;

        $lastMonthAmount = $this->appInvoice
            ->setEagerLoads([])
            ->selectRaw('SUM(amount) AS amount')
            ->where('chalan_type', $challanTypes['APPLICATION_FEE'])
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->whereBetween('created_at', $lastMonthDates)
            ->first()
            ->amount;

        $secondLastMonthAmount = $this->appInvoice
            ->setEagerLoads([])
            ->selectRaw('SUM(amount) AS amount')
            ->where('chalan_type', $challanTypes['APPLICATION_FEE'])
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->whereBetween('created_at', $secondLastMonthDates)
            ->first()
            ->amount;


        $currentMonthVatAmount = $this->appInvoice
            ->setEagerLoads([])
            ->selectRaw('SUM(amount) AS amount')
            ->where('chalan_type', $challanTypes['VAT'])
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->whereBetween('created_at', $currentMonthDates)
            ->first()
            ->amount;

        $lastMonthVatAmount = $this->appInvoice
            ->setEagerLoads([])
            ->selectRaw('SUM(amount) AS amount')
            ->where('chalan_type', $challanTypes['VAT'])
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->whereBetween('created_at', $lastMonthDates)
            ->first()
            ->amount;

        $secondLastMonthVatAmount = $this->appInvoice
            ->setEagerLoads([])
            ->selectRaw('SUM(amount) AS amount')
            ->where('chalan_type', $challanTypes['VAT'])
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->whereBetween('created_at', $secondLastMonthDates)
            ->first()
            ->amount;

        return [
            'application' => [
                $currentMonthAmount ? $currentMonthAmount : 0,
                $lastMonthAmount ? $lastMonthAmount : 0,
                $secondLastMonthAmount ? $secondLastMonthAmount : 0
            ],
            'vat' => [
                $currentMonthVatAmount ? $currentMonthVatAmount : 0,
                $lastMonthVatAmount ? $lastMonthVatAmount : 0,
                $secondLastMonthVatAmount ? $secondLastMonthVatAmount : 0
            ]
        ];
    }

    private function getOnlinePaymentReport($userTypeLabel, $user, $currentMonthDates, $lastMonthDates, $secondLastMonthDates) {
        $currentMonthAmount = $this->transaction
            ->setEagerLoads([])
            ->selectRaw('SUM(JSON_EXTRACT(echallan_details, "$[0].amount")) AS amount')
            ->has('payment')
            ->whereRaw("json_search(echallan_details, 'one', 'APPLICATION_FEE', null, '$[*].type') IS NOT NULL")
            ->whereBetween('created_at', $currentMonthDates)
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->first()
            ->amount;

        $lastMonthAmount = $this->transaction
            ->setEagerLoads([])
            ->selectRaw('SUM(JSON_EXTRACT(echallan_details, "$[0].amount")) AS amount')
            ->has('payment')
            ->whereRaw("json_search(echallan_details, 'one', 'APPLICATION_FEE', null, '$[*].type') IS NOT NULL")
            ->whereBetween('created_at', $lastMonthDates)
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->first()
            ->amount;

        $secondLastMonthAmount = $this->transaction
            ->setEagerLoads([])
            ->selectRaw('SUM(JSON_EXTRACT(echallan_details, "$[0].amount")) AS amount')
            ->has('payment')
            ->whereRaw("json_search(echallan_details, 'one', 'APPLICATION_FEE', null, '$[*].type') IS NOT NULL")
            ->whereBetween('created_at', $secondLastMonthDates)
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->first()
            ->amount;


        $currentMonthVatAmount = $this->transaction
            ->setEagerLoads([])
            ->selectRaw('SUM(JSON_EXTRACT(echallan_details, "$[1].amount")) AS amount')
            ->has('payment')
            ->whereRaw("json_search(echallan_details, 'one', 'VAT', null, '$[*].type') IS NOT NULL")
            ->whereBetween('created_at', $currentMonthDates)
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->first()
            ->amount;

        $lastMonthVatAmount = $this->transaction
            ->setEagerLoads([])
            ->selectRaw('SUM(JSON_EXTRACT(echallan_details, "$[1].amount")) AS amount')
            ->has('payment')
            ->whereRaw("json_search(echallan_details, 'one', 'VAT', null, '$[*].type') IS NOT NULL")
            ->whereBetween('created_at', $lastMonthDates)
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->first()
            ->amount;

        $secondLastMonthVatAmount = $this->transaction
            ->setEagerLoads([])
            ->selectRaw('SUM(JSON_EXTRACT(echallan_details, "$[1].amount")) AS amount')
            ->has('payment')
            ->whereRaw("json_search(echallan_details, 'one', 'VAT', null, '$[*].type') IS NOT NULL")
            ->whereBetween('created_at', $secondLastMonthDates)
            ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                $query
                    ->select('id')
                    ->from('applications')
                    ->where('is_paid', 1)
                    ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                        $query->where('applicant_id', $user->id);
                    })
                    ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                        $query->where('cnf_user_id', $user->id);
                    })
                    ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                        $query->where('organization_id', $user->organization_id);
                    });
            })
            ->first()
            ->amount;

        $result = [
            'application' => [
                $currentMonthAmount ? $currentMonthAmount : 0,
                $lastMonthAmount ? $lastMonthAmount : 0,
                $secondLastMonthAmount ? $secondLastMonthAmount : 0
            ],
            'vat' => [
                $currentMonthVatAmount ? $currentMonthVatAmount : 0,
                $lastMonthVatAmount ? $lastMonthVatAmount : 0,
                $secondLastMonthVatAmount ? $secondLastMonthVatAmount : 0
            ]
        ];

        if($userTypeLabel == 'SYSTEM_ADMIN') {
            $currentMonthSCAmount = $this->transaction
                ->setEagerLoads([])
                ->selectRaw('SUM(JSON_EXTRACT(ipn_response, "$.trnx_info.ekpay_charge")) AS amount')
                ->has('payment')
                ->whereRaw("JSON_EXTRACT(ipn_response, '$.trnx_info.ekpay_charge') IS NOT NULL")
                ->whereBetween('created_at', $currentMonthDates)
                ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                    $query
                        ->select('id')
                        ->from('applications')
                        ->where('is_paid', 1)
                        ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                            $query->where('applicant_id', $user->id);
                        })
                        ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                            $query->where('cnf_user_id', $user->id);
                        })
                        ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                            $query->where('organization_id', $user->organization_id);
                        });
                })
                ->first()
                ->amount;

            $lastMonthSCAmount = $this->transaction
                ->setEagerLoads([])
                ->selectRaw('SUM(JSON_EXTRACT(ipn_response, "$.trnx_info.ekpay_charge")) AS amount')
                ->has('payment')
                ->whereRaw("JSON_EXTRACT(ipn_response, '$.trnx_info.ekpay_charge') IS NOT NULL")
                ->whereBetween('created_at', $lastMonthDates)
                ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                    $query
                        ->select('id')
                        ->from('applications')
                        ->where('is_paid', 1)
                        ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                            $query->where('applicant_id', $user->id);
                        })
                        ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                            $query->where('cnf_user_id', $user->id);
                        })
                        ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                            $query->where('organization_id', $user->organization_id);
                        });
                })
                ->first()
                ->amount;

            $secondLastMonthSCAmount = $this->transaction
                ->setEagerLoads([])
                ->selectRaw('SUM(JSON_EXTRACT(ipn_response, "$.trnx_info.ekpay_charge")) AS amount')
                ->has('payment')
                ->whereRaw("JSON_EXTRACT(ipn_response, '$.trnx_info.ekpay_charge') IS NOT NULL")
                ->whereBetween('created_at', $secondLastMonthDates)
                ->whereIn('application_id', function($query) use ($userTypeLabel, $user) {
                    $query
                        ->select('id')
                        ->from('applications')
                        ->where('is_paid', 1)
                        ->when($userTypeLabel == 'APPLICANT', function($query) use ($user) {
                            $query->where('applicant_id', $user->id);
                        })
                        ->when($userTypeLabel == 'CNF', function($query) use ($user) {
                            $query->where('cnf_user_id', $user->id);
                        })
                        ->when($userTypeLabel == 'DAE_ADMIN' || $userTypeLabel == 'DAE_USER', function($query) use ($user) {
                            $query->where('organization_id', $user->organization_id);
                        });
                })
                ->first()
                ->amount;

            $result['service_charge'] = [
                $currentMonthSCAmount ? $currentMonthSCAmount : 0,
                $lastMonthSCAmount ? $lastMonthSCAmount : 0,
                $secondLastMonthSCAmount ? $secondLastMonthSCAmount : 0
            ];
        }

        return $result;
    }
}
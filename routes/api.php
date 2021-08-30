<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('API\V1')->group(function () {
    Route::post('login','AuthController@login');
    Route::post('registration','AuthController@registration');

    Route::post('reset-password-request', 'ResetPasswordController@request');
    Route::post('reset-password', 'ResetPasswordController@apply');

    Route::post('ekpay-ipn-response', 'PaymentController@ipn')->middleware('ipn.validity');
    Route::get('test-check-lock-ips','ApplicationController@checkIpLock');

    Route::post('search-certificate-globally','ReportController@searchCertificateGlobally');

    Route::apiresource('app-types', 'AppTypeController')->only(['index']);
    Route::apiresource('applications', 'ApplicationController')->only(['show']);
    Route::apiresource('organizations', 'OrganizationController')->only(['index']);

    Route::post('sign-certificate','DocumentSignerController@apply');

    Route::get('activate-with-confirmation-code/{user_id}/{confirmation_code}', 'UserController@activateWithConfirmationCode');
    Route::get('send-confirmation-code/{user_id}', 'SmsEmailLogController@sendConfirmationSms');
});

Route::middleware(['token.validity', 'authorize.api', 'base64ToFile', 'edit.validity'])->group(function () {
    Route::namespace('API\V1')->group(function () {
        Route::get('logout','AuthController@logout');
        Route::get('me','AuthController@me');
        Route::get('auto-logout','AuthController@logoutAutomatically');

        Route::post('broadcast-message', 'ChatController@broadcastMessage');

        Route::post('additional-condition-suggestions-paginated', 'AdditionalConditionSuggestionController@paginatedIndex');
        Route::post('notifications-paginated', 'NotificationController@paginatedIndex');
        Route::post('products-paginated', 'ProductController@paginatedIndex');
        Route::post('product-types-paginated', 'ProductTypeController@paginatedIndex');
        Route::post('organizations-paginated', 'OrganizationController@paginatedIndex');
        Route::post('users-paginated', 'UserController@paginatedIndex');
        Route::post('bank-branches-paginated', 'BankBranchController@paginatedIndex');
        Route::post('fee-setups-paginated', 'FeeSetupController@paginatedIndex');
        Route::post('applications-paginated', 'ApplicationController@paginatedIndex');
        Route::post('new-applications-paginated', 'ApplicationController@newApplicationsPaginatedIndex');
        Route::post('units-paginated', 'UnitController@paginatedIndex');
        Route::post('app-types-paginated', 'AppTypeController@paginatedIndex');
        Route::post('banks-paginated', 'BankController@paginatedIndex');
        Route::post('designations-paginated', 'DesignationController@paginatedIndex');
        Route::post('roles-paginated', 'RoleController@paginatedIndex');
        Route::post('port-categories-paginated', 'PortCategoryController@paginatedIndex');
        Route::post('port-types-paginated', 'PortTypeController@paginatedIndex');
        Route::post('means-of-transports-paginated', 'MeansofTransportController@paginatedIndex');
        Route::post('config-attachments-paginated', 'ConfigAttachmentController@paginatedIndex');
        Route::post('purposes-paginated', 'PurposeController@paginatedIndex');
        Route::post('varieties-paginated', 'VarietyController@paginatedIndex');
        Route::post('menus-paginated', 'MenuController@paginatedIndex');
        Route::post('districts-paginated', 'DistrictController@paginatedIndex');
        Route::post('sms-email-logs-paginated', 'SmsEmailLogController@paginatedIndex');
        Route::post('upazillas-paginated', 'UpazillaController@paginatedIndex');
        Route::post('stages-paginated', 'StageController@paginatedIndex');
        Route::post('process-tasks-paginated', 'ProcessTaskController@paginatedIndex');
        Route::post('task-fields-paginated', 'TaskFieldController@paginatedIndex');
        Route::post('process-flows-paginated', 'ProcessFlowController@paginatedIndex');
        Route::post('notices-paginated', 'NoticeController@paginatedIndex');
        Route::post('config-attachment-attributes-paginated', 'ConfigAttachmentAttributeController@paginatedIndex');
        Route::post('certificates-paginated', 'CertificateController@paginatedIndex');
        Route::get('get-level-wise-designations', 'DesignationController@getLevelWiseList');
        Route::get('get-position-wise-process-tasks', 'ProcessTaskController@getPositionWiseList');
        Route::get('get-task-field-input-types','TaskFieldController@getInputTypes');
        Route::get('is-online-payment-available','SystemConfigurationController@isOnlinePaymentAvailable');
        Route::get('get_app_attachments/{application_id}','AppAttachmentController@getAllAttachments');
        Route::get('get-inspection-sms-logs/{application_id}','SmsEmailLogController@getInspectionSmsLogs');
        Route::post('cnf-ip-assignment-paginated', 'CnfIpAssignmentController@paginatedIndex');

        Route::middleware('valid.userForProcessing')->group(function () {
            Route::post('scrutinize-app-attachments', 'AppAttachmentController@scrutinizeAttachments');
            Route::post('send-inspection-reminder-sms', 'SmsEmailLogController@sendInspectionSms');
            Route::post('proceed-application/{application_id}', 'ApplicationProcessController');
            Route::post('process-additional-conditions', 'AdditionalInfoConditionController@store');
            Route::match(['put', 'patch'], 'process-additional-conditions', 'AdditionalInfoConditionController@updateUsingApplicationId');
        });

        Route::get('get-additional-conditions/{application_id}', 'AdditionalInfoConditionController@getAllUsingApplicationId');

        Route::get('check-profile-completed-or-not/{user_id}','UserController@checkProfileCompletedOrNot');

        Route::post('create-organization-category-wise-process-flow', 'ProcessFlowController@createOrganizationCategoryWise');
        Route::post('get-approved-ip-application-details', 'ApplicationController@getApprovedIpDetails');
        Route::get('get-applicaton-fee-calculation/{application_id}', 'ApplicationController@calculateFee');
        Route::get('get-users-to-unset-proxy/{organization_id}','UserController@getUsersToUnsetProxy');
        Route::get('activate-user/{user_id}','UserController@activate');
        Route::get('get-category-purposes/{is_seed}', 'SeedPurposeController@getAll');
        Route::get('get-superior-users/{organization_id}/{designation_id}', 'UserController@getSuperiors');
        Route::get('get-upazillas/{district_id}','UpazillaController@getDistrictWise');
        Route::get('get-bank-branches/{bank_id}/{district_id}', 'BankBranchController@getBankAndDistrictWise');
        Route::get('get-role-menus/{role_id}','RoleMenuController@getMenusForRole');
        Route::get('get-methods/{controller}','MethodList');
        Route::get('unset-proxy/{user_id}','ProxyUserLogController@unsetUser');
        Route::get('get-proxy-logs/{user_id}','ProxyUserLogController@getProxyUserLogs');
        Route::get('get-organization-wise-dae-users/{organization_id}','UserController@getOrganizationWise');
        Route::get('get-transport-wise-organizations/{means_of_transport_id}','OrganizationController@getOrganizationsOnTransportType');
        Route::get('get-app-type-attachment-with-attributes/{app_type_id}',
            'ConfigAppTypeAttachmentController@getAppTypeAttachmentWithAttributes');
        Route::get('is-applicant','UserController@isApplicant');
        Route::get('is-admin','UserController@isAdmin');
        Route::get('is-dae-admin','UserController@isDAEAdmin');
        Route::get('is-dae-official','UserController@isDaeOfficial');

        Route::get('get-application-task-details/{application_id}','ApplicationController@getAppTaskDetails');
        Route::get('get-application-history/{application_id}','AppStatusLogController@getApplicationHistory');
        Route::get('get-application-current-stage-details/{application_id}','StageFlowController@getCurrentStageDetails');
        Route::get('activate-process-flow/{process_flow_id}','ProcessFlowController@activate');
        Route::get('deactivate-process-flow/{process_flow_id}','ProcessFlowController@deactivate');
        Route::get('get-all-chalans/{app_id}','AppInvoiceController@getAllByAppId');
        Route::get('is-maximum-chalan-given/{app_id}/{chalan_type}','AppInvoiceController@isMaximumChalanGiven');
        Route::get('get-app-type-product-types/{app_type_id}','ProductTypeController@getAppTypeWiseProductType');
        Route::get('get-app-type-config-attachments/{app_type_id}','ConfigAppTypeAttachmentController@getAppTypeConfigAttachments');
        Route::get('get-app-type-purpose-config-attachments/{app_type_id}/{purpose_id}','PurposeRequiredAttachmentController@getAppTypeAndPurposeWise');
        Route::get('get-config-attachment-attributes/{config_attachment_id}', 'ConfigAttachmentAttributeController@getConfigAttachmentAttributes');
        Route::get('delete-app-attachment/{application_id}/{config_attachment_id}', 'AppAttachmentController@deleteAllUsingConfigAttachment');
        Route::get('get-products-on-product-type/{product_type_id}','ProductController@getProductsOnProductType');
        Route::get('get-task-wise-task-fields/{process_task}','TaskFieldController@getProcessTaskWise');

        Route::post('sort-task-fields', 'TaskFieldController@sortTaskFields');
        Route::post('sort-process-tasks', 'ProcessTaskController@sortProcessTasks');
        Route::post('sort-designations', 'DesignationController@sortDesignations');
        Route::post('sort-config-attachment', 'ConfigAppTypeAttachmentController@sortAppWiseAttachment');
        Route::post('sort-attachment-attributes', 'ConfigAttachmentAttributeController@sortAttachmentAttributes');
        Route::post('add-category-purposes', 'SeedPurposeController@store');
        Route::post('change-password','UserController@changePassword');
        Route::get('get-parent-menus','MenuController@getAllParents');
        Route::post('assign-menus-to-role','RoleMenuController@assignToRole');
        Route::get('get-menus-for-role-assignment','MenuController@getMenusForRoleAssignment');
        Route::get('get-profile-attachments','ConfigAttachmentController@getProfileEligible');
        Route::post('add-profile-attachments','UserAttachmentController@update');
        Route::post('set-proxy','ProxyUserLogController@setUser');
        Route::post('update-purpose-required-config-attachments','PurposeRequiredAttachmentController@update');
        Route::post('update-config-attachment-required-column','ConfigAppTypeAttachmentController@updateRequiredColumn');

        Route::get('get-notifications/{skip}/{take}','NotificationController@getAll');
        Route::get('clear-notification/{notification_id}','NotificationController@makeClear');
        Route::get('clear-all-notifications','NotificationController@makeClearAll');
        Route::post('clear-selected-notifications','NotificationController@makeClearMultiple');
        Route::get('read-notification/{notification_id}','NotificationController@makeRead');
        Route::get('read-all-notifications','NotificationController@makeReadAll');
        Route::post('read-selected-notifications','NotificationController@makeReadMultiple');

        Route::get('get-controllers','ControllerList');
        Route::get('get-form-api-routes','RouteController@getApiFormRoutes');

        Route::apiresource('sms-email-logs', 'SmsEmailLogController')->only([
            'show'
        ]);
        Route::apiresource('profiles', 'ProfileController')->only([
            'store', 'update', 'destroy'
        ]);
        Route::apiresource('ip-applications', 'IpDetailController')->only([
            'store', 'update'
        ]);
        Route::apiresource('pc-applications', 'PcDetailController')->only([
            'store', 'update'
        ]);
        Route::apiresource('app-invoices', 'AppInvoiceController')->only([
            'store', 'update', 'destroy', 'show'
        ]);
        Route::apiresource('process-buttons', 'ProcessButtonController')->only([
            'index'
        ]);
        Route::apiresource('process-flows', 'ProcessFlowController')->except(['index']);
        Route::apiresource('app-types', 'AppTypeController')->except(['index']);
        Route::apiresource('applications', 'ApplicationController')->except(['show']);
        Route::apiresource('organizations', 'OrganizationController')->except(['index']);

        Route::middleware(['certificateNoToIds'])->group(function () {
            Route::post('create-ro-application-with-ips','RoDetailController@storeWithIps')
                ->middleware('valid.cnf.assignment');
            Route::match(['put', 'patch'], 'a-application-with-ips/{application_id}','RoDetailController@updateWithIps');
            Route::match(['post', 'put', 'patch'],'get-ip-for-ro','ApplicationController@getIpInfoForRo');
        });

        Route::post('create-ro-application-with-memo','RoDetailController@storeWithMemo');
        Route::match(['put', 'patch'], 'update-ro-application-with-memo/{application_id}','RoDetailController@updateWithMemo');

        Route::get('echallan/{appid}', 'EChallanController@create');
        Route::get('ekpay-payment/{applicationId}', 'PaymentController@payForApplication')
            ->middleware('payment.validity');

        Route::get('get-last-recheck-message/{applicationId}','AppStatusLogController@getLastRecheckingComment');

        Route::get('get-active-notices','NoticeController@getActiveNotices');

        Route::post('execute-select-query','QueryController');

        Route::apiResources([
            'product-types' => 'ProductTypeController',
            'products' => 'ProductController',
            'users' => 'UserController',
            'bank-branches' => 'BankBranchController',
            'fee-setups' => 'FeeSetupController',
            'designations' => 'DesignationController',
            'districts' => 'DistrictController',
            'upazillas' => 'UpazillaController',
            'roles' => 'RoleController',
            'units' => 'UnitController',
            'banks' => 'BankController',
            'port-categories' => 'PortCategoryController',
            'port-types' => 'PortTypeController',
            'means-of-transports' => 'MeansofTransportController',
            'config-attachments' => 'ConfigAttachmentController',
            'purposes' => 'PurposeController',
            'varieties' => 'VarietyController',
            'menus' => 'MenuController',
            'user-types' => 'UserTypeController',
            'config-attachment-attributes' => 'ConfigAttachmentAttributeController',
            'countries' => 'CountryController',
            'product-categories' => 'ProductCategoryController',
            'stages' => 'StageController',
            'process-tasks' => 'ProcessTaskController',
            'task-fields' => 'TaskFieldController',
            'certificates' => 'CertificateController',
            'notices' => 'NoticeController'
        ]);

        Route::post('get-matched-chalan-details','ReportController@getMatchedChalanDetails');
        Route::post('get-collection-summary','ReportController@getCollectionSummary');
        Route::post('get-application-products','ReportController@getProductWiseApplications');
        Route::post('get-working-details','ReportController@getWorkingDetails');
        Route::post('get-approved-application-details','ReportController@getApprovedApplicationDetails');
        Route::post('get-user-logs','ReportController@getUserLogs');
        Route::post('get-ip-product-release-details','ReportController@getIpProductReleaseDetails');
        Route::post('get-delayed-applications','ReportController@getDelayedApplications');

        Route::post('transfer-application-paginated', 'ApplicationController@transferPaginatedLists');
        Route::post('get-user-fullnames', 'UserController@getUserFullNames');
        Route::post('transfer-application', 'ApplicationController@transfer')
            ->middleware('application.transfer-validity');
        Route::get('check-app-validity/{application_id}/{check_app_lock?}', 'ApplicationController@checkApplicationValidity');
        Route::get('get-app-products/{application_id}', 'AppProductController@getAllByAppId');
        Route::get('get-cnf-firms/{organization_id}', 'UserController@getCnfAgents');

        Route::apiresource('cnf-ip-assignments', 'CnfIpAssignmentController')->only(['store', 'show']);

        Route::get('get-application-cnf-assignments/{application_id}', 'CnfIpAssignmentController@getAllByApplicationId');

        Route::get('get-cnf-assignment-product-info/{application_id}', 'ApplicationController@getCnfAvailableProductInfo');

        Route::post('cancel-cnf-assignment', 'CnfIpAssignmentController@cancel');

        Route::get('logged-in-user-menus','UserController@getMenusForUser');

        Route::get('activate-product/{product_id}','ProductController@activate');
        Route::get('deactivate-product/{product_id}','ProductController@deactivate');

        Route::get('is-uri-allowed','AuthorizationController@isGivenUriAllowed');
        Route::post('is-method-allowed','AuthorizationController@isGivenMethodAllowed');

        Route::get('restrict-product/{product_id}','ProductController@restrict');
        Route::get('release-product/{product_id}','ProductController@release');

        Route::get('search-create-echallan/{transactionId}','PaymentController@searchOrCreateEChallan');

        Route::get('get-organization-process-flow-details/{organization_id}/{app_type_id}','ProcessFlowController@getProcessFlowDetails');

        Route::apiresource('area-vat-codes', 'AreaVatCodeController')->only(['index']);

        Route::get('get-dashboard-report', 'ReportController@getDashboardReport');

        Route::get('get-pc-consignee-suggestions', 'PcDetailController@getRecentApplicationConsigneeInfo');

        Route::apiresource('app-task-fields', 'AppTaskFieldController')->only(['destroy']);

        Route::apiresource('additional-condition-suggestions',
            'AdditionalConditionSuggestionController')->except(['index']);

        Route::post('additional-condition-suggestions-by-product-ids',
            'AdditionalConditionSuggestionController@getAllByProductIds');

        Route::get('get-additional-condition-suggestions/{applicationId}',
            'AdditionalConditionSuggestionController@getAllByAppId');
    });
});
<?php

namespace App\Services;

class LabelService
{
    public
        $labels = [
            'destroy' => 'Delete #ENTITY#',
            'index' => 'Get All #ENTITY#',
            'paginatedIndex' => 'Get Selected #ENTITY#',
            'show' => 'Get #ENTITY# Details',
            'store' => 'Add #ENTITY#',
            'update' => 'Update #ENTITY#',
            'login' => 'Check Login Credentials',
            'logout' => 'Logout from System',
            'me' => 'Get Login User Details',
            'refresh' => 'Refresh Api Token',
            'registration' => 'Create New applicant',
            'getBankAndDistrictWise' => 'Get Branches according to Bank and District',
            'apply' => 'Set New Passwords using Forgot Password Token',
            'request' => 'Request Token to Set New Password',
            'getDistrictWise' => 'Get Upazillas according to District',
            'changePassword' => 'Change Password after Logged In',
            'getSuperiors' => 'Get Supervisors according to Ogranization and Designation',
            'getAllParents' => 'Get All Parent Menus',
            'getMenusForRoleAssignment' => 'Get Menus for Role Assignment',
            'getMenusForRole' => 'Get Menus for Role',
            'assignToRole' => 'Assign Menus to Role',
            'getOrganizationWise' => 'Get DAE Users according to Organization',
            'setUser' => 'Set Proxy User',
            'unsetUser' => 'Unset Proxy User',
            'getProxyUserLogs' => 'Get Proxy User Log of A User',
            'getProfileEligible' => 'Get Profile Eligible Configuration Attachments',
            'getAll' => 'Get All Seed/Non Seed Category Purposes',
            'getAppTypeConfigAttachments' => 'Get App Type Configuration Attachments',
            'getUsersToUnsetProxy' => 'Get Users to Unset Proxy',
            'getAppTypeAndPurposeWise' => 'Get Configuration Attachments according to App Type and Purpose',
            'updateRequiredColumn' => 'Updated is_required Column for App Type Config Attachment',
            'updateUsingApplicationId' => 'Update Additional Conditions Using Application ID',
            'getAllUsingApplicationId' => 'Get All Additional Conditions Using Application ID',
            'deleteAllUsingConfigAttachment' => 'Delete All App Attachments Using Config Attachment ID',
            'scrutinizeAttachments' => 'Scrutinize Application Attachments',
            'getAllAttachments' => 'Get All Application Attachments',
            'getAllByAppId' => 'Get All Attached Invoices Using Application ID',
            'isMaximumChalanGiven' => 'Check Attached Chalans Exceeding Limit',
            'getApplicationHistory' => 'Get Application History Details',
            'getLastRecheckingComment' => 'Get Application Last Rechecking Comment',
            'newApplicationsPaginatedIndex' => '',
            'getIpInfoForRo' => 'Get IP product Details',
            'calculateFee' => 'Calculate Fee for an Application',
            'getApprovedIpDetails' => 'Get Approved IP Details',
            'checkIpLock' => 'Check an IP is locked or not',
            'getAppTaskDetails' => 'Get Application Task Details in the process flow',
            'transferPaginatedLists' => 'Eligible Transfer Application List',
            'transfer' => 'Transfer an Application',
            'checkApplicationValidity' => 'Check Application Validity',
            'getCnfAvailableProductInfo' => 'Get IP Available Product Quantity Info for C&F Assignment',
            'broadcastMessage' => 'Broadcast messages for Chat Application',
            'getAllByApplicationId' => 'Get All C&F Assignments Using Application ID',
            'cancel' => 'Cancel a C&F Assignment',
            'sortAppWiseAttachment' => 'Sort App Type Wise Attachments',
            'getAppTypeAttachmentWithAttributes' => 'Get App Type Wise Attachments with Attributes',
            'getConfigAttachmentAttributes' => 'Get Config Attachment Attributes',
            'sortAttachmentAttributes' => 'Sort Attachment Attributes',
            'sortDesignations' => 'Sort Designations',
            'getLevelWiseList' => 'Get Level Wise List',
            'signCertificate' => 'Digitally Sign Certificates',
            'create' => 'Create EChallan',
            'makeClear' => 'Clear a Notification',
            'makeClearAll' => 'Clear All Notifications',
            'makeClearMultiple' => 'Clear Multiple Notifications',
            'makeRead' => 'Read a Notification',
            'makeReadAll' => 'Read All Notifications',
            'makeReadMultiple' => 'Read Multiple Notifications',
            'getOrganizationsOnTransportType' => 'Get Transport Type Wise Organizations',
            'ekpay' => 'Ekpay Initialization',
            'ipn' => 'Receive IPN Response',
            'activate' => 'Activate Process Flow',
            'deactivate' => 'Deactivate Process Flow',
            'createOrganizationCategoryWise' => 'Create Process Flow Using Organization Category',
            'sortProcessTasks' => 'Sort Process Tasks',
            'getPositionWiseList' => 'Get Position Wise Process Tasks',
            'getProductsOnProductType' => 'Get Product Type Wise Products',
            'getAppTypeWiseProductType' => 'Get App Type Wise Product Types',
            'getMatchedChalanDetails' => 'Get Matched Chalan Details',
            'getCollectionSummary' => 'Get Collection Summary Report',
            'getProductWiseApplications' => 'Get Product Wise Application Report',
            'getWorkingDetails' => 'Get Working Details Report',
            'getApprovedApplicationDetails' => 'Get Approved Application Details Report',
            'getUserLogs' => 'Get User Log Report',
            'getIpProductReleaseDetails' => 'Get IP Product Release Report',
            'searchCertificateGlobally' => 'Search Certificate Globally',
            'storeWithMemo' => 'Create RO With Memo',
            'updateWithMemo' => 'Update RO With Memo',
            'storeWithIps' => 'Create RO With IP',
            'updateWithIps' => 'Update RO With IP',
            'getApiFormRoutes' => 'Get Api Form Routes',
            'sendInspectionSms' => 'Send Inspection SMS',
            'getInspectionSmsLogs' => 'Get Inspection SMS Logs',
            'getCurrentStageDetails' => 'Get Current Stage Details',
            'isOnlinePaymentAvailable' => 'Check Online Payment Availability',
            'getInputTypes' => 'Get Task Field Input Types',
            'sortTaskFields' => 'Sort Task Fields',
            'getProcessTaskWise' => 'Get Process Task Wise Task Fields',
            'checkProfileCompletedOrNot' => 'Check Profile Is Completed Or Not',
            'isApplicant' => 'Check Logged In User As Applicant',
            'isAdmin' => 'Check Logged In User As Admin',
            'isDAEAdmin' => 'Check Logged In User As DAE Admin',
            'isDaeOfficial' => 'Check Logged In User As DAE Official',
            'getUserFullNames' => 'Get User Fullname',
            'getCnfAgents' => 'Get C&F Agents according to Organization',
            'getMenusForUser' => 'Get Menus for Logged IN User'
        ];
}
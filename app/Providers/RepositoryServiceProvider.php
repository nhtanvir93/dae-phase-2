<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\ProductTypeRepositoryInterface;
use App\Repositories\ProductTypeRepository;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\Interfaces\OrganizationRepositoryInterface;
use App\Repositories\OrganizationRepository;
use App\Repositories\Interfaces\BankBranchRepositoryInterface;
use App\Repositories\BankBranchRepository;
use App\Repositories\Interfaces\FeeSetupRepositoryInterface;
use App\Repositories\FeeSetupRepository;
use App\Repositories\Interfaces\ApplicationRepositoryInterface;
use App\Repositories\ApplicationRepository;
use App\Repositories\Interfaces\ProfileRepositoryInterface;
use App\Repositories\ProfileRepository;
use App\Repositories\Interfaces\AttachmentRepositoryInterface;
use App\Repositories\AttachmentRepository;
use App\Repositories\Interfaces\DesignationRepositoryInterface;
use App\Repositories\DesignationRepository;
use App\Repositories\Interfaces\RecoverPasswordReporsitoryInterface;
use App\Repositories\RecoverPasswordRepository;
use App\Repositories\Interfaces\DistrictRepositoryInterface;
use App\Repositories\DistrictRepository;
use App\Repositories\Interfaces\UpazillaRepositoryInterface;
use App\Repositories\UpazillaRepository;
use App\Repositories\Interfaces\AddressRepositoryInterface;
use App\Repositories\AddressRepository;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Repositories\RoleRepository;
use App\Repositories\Interfaces\UserRoleRepositoryInterface;
use App\Repositories\UserRoleRepository;
use App\Repositories\Interfaces\UnitRepositoryInterface;
use App\Repositories\UnitRepository;
use App\Repositories\Interfaces\AppTypeRepositoryInterface;
use App\Repositories\AppTypeRepository;
use App\Repositories\Interfaces\AppProductTypeRepositoryInterface;
use App\Repositories\AppProductTypeRepository;
use App\Repositories\Interfaces\BankRepositoryInterface;
use App\Repositories\BankRepository;
use App\Repositories\Interfaces\MeansofTransportRepositoryInterface;
use App\Repositories\MeansofTransportRepository;
use App\Repositories\Interfaces\PortTypeRepositoryInterface;
use App\Repositories\PortTypeRepository;
use App\Repositories\Interfaces\PortCategoryRepositoryInterface;
use App\Repositories\PortCategoryRepository;
use App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface;
use App\Repositories\ConfigAppTypeAttachmentRepository;
use App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface;
use App\Repositories\ConfigAttachmentRepository;
use App\Repositories\Interfaces\PurposeRepositoryInterface;
use App\Repositories\PurposeRepository;
use App\Repositories\Interfaces\VarietyRepositoryInterface;
use App\Repositories\VarietyRepository;
use App\Repositories\Interfaces\MenuRepositoryInterface;
use App\Repositories\MenuRepository;
use App\Repositories\Interfaces\RoleMenuRepositoryInterface;
use App\Repositories\RoleMenuRepository;
use App\Repositories\Interfaces\UserAttachmentRepositoryInterface;
use App\Repositories\UserAttachmentRepository;
use App\Repositories\Interfaces\SeedPurposeRepositoryInterface;
use App\Repositories\SeedPurposeRepository;
use App\Repositories\Interfaces\PurposeVarietyRepositoryInterface;
use App\Repositories\PurposeVarietyRepository;
use App\Repositories\Interfaces\UserTypeRepositoryInterface;
use App\Repositories\UserTypeRepository;
use App\Repositories\Interfaces\ProxyUserLogRepositoryInterface;
use App\Repositories\ProxyUserLogRepository;
use App\Repositories\Interfaces\PurposeRequiredAttachmentRepositoryInterface;
use App\Repositories\PurposeRequiredAttachmentRepository;
use App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface;
use App\Repositories\ConfigAttachmentAttributeRepository;
use App\Repositories\Interfaces\IpDetailRepositoryInterface;
use App\Repositories\IpDetailRepository;
use App\Repositories\Interfaces\AppAttachmentRepositoryInterface;
use App\Repositories\AppAttachmentRepository;
use App\Repositories\Interfaces\AppProductRepositoryInterface;
use App\Repositories\AppProductRepository;
use App\Repositories\Interfaces\PcDetailRepositoryInterface;
use App\Repositories\PcDetailRepository;
use App\Repositories\Interfaces\RoDetailRepositoryInterface;
use App\Repositories\RoDetailRepository;
use App\Repositories\Interfaces\MemoRepositoryInterface;
use App\Repositories\MemoRepository;
use App\Repositories\Interfaces\AttachmentAttributeRepositoryInterface;
use App\Repositories\AttachmentAttributeRepository;
use App\Repositories\Interfaces\RoIpApplicationRepositoryInterface;
use App\Repositories\RoIpApplicationRepository;
use App\Repositories\Interfaces\CountryRepositoryInterface;
use App\Repositories\CountryRepository;
use App\Repositories\Interfaces\ProductCategoryRepositoryInterface;
use App\Repositories\ProductCategoryRepository;
use App\Repositories\Interfaces\EChallanRepositoryInterface;
use App\Repositories\EChallanRepository;
use App\Repositories\Interfaces\PaymentRepositoryInterface;
use App\Repositories\PaymentRepository;
use App\Repositories\Interfaces\TransactionRepositoryInterface;
use App\Repositories\TransactionRepository;
use App\Repositories\Interfaces\AppInvoiceRepositoryInterface;
use App\Repositories\AppInvoiceRepository;
use App\Repositories\Interfaces\StageRepositoryInterface;
use App\Repositories\StageRepository;
use App\Repositories\Interfaces\ProcessTaskRepositoryInterface;
use App\Repositories\ProcessTaskRepository;
use App\Repositories\Interfaces\TaskFieldRepositoryInterface;
use App\Repositories\TaskFieldRepository;
use App\Repositories\Interfaces\ProcessFlowRepositoryInterface;
use App\Repositories\ProcessFlowRepository;
use App\Repositories\Interfaces\StageFlowRepositoryInterface;
use App\Repositories\StageFlowRepository;
use App\Repositories\Interfaces\StageFlowTaskRepositoryInterface;
use App\Repositories\StageFlowTaskRepository;
use App\Repositories\Interfaces\StageButtonRepositoryInterface;
use App\Repositories\StageButtonRepository;
use App\Repositories\Interfaces\ProcessStageRoleRepositoryInterface;
use App\Repositories\ProcessStageRoleRepository;
use App\Repositories\Interfaces\ProcessButtonRepositoryInterface;
use App\Repositories\ProcessButtonRepository;
use App\Repositories\Interfaces\CertificateRepositoryInterface;
use App\Repositories\CertificateRepository;
use App\Repositories\Interfaces\NoticeRepositoryInterface;
use App\Repositories\NoticeRepository;
use App\Repositories\Interfaces\AppStatusLogRepositoryInterface;
use App\Repositories\AppStatusLogRepository;
use App\Repositories\Interfaces\DocumentSignerRepositoryInterface;
use App\Repositories\DocumentSignerRepository;
use App\Repositories\Interfaces\AppTaskFieldRepositoryInterface;
use App\Repositories\AppTaskFieldRepository;
use App\Repositories\Interfaces\AdditionalInfoConditionRepositoryInterface;
use App\Repositories\AdditionalInfoConditionRepository;
use App\Repositories\Interfaces\TaskFieldStageRepositoryInterface;
use App\Repositories\TaskFieldStageRepository;
use App\Repositories\Interfaces\SmsEmalLogRepositoryInterface;
use App\Repositories\SmsEmalLogRepository;
use App\Repositories\Interfaces\NotificationRepositoryInterface;
use App\Repositories\NotificationRepository;
use App\Repositories\Interfaces\UserLogRepositoryInterface;
use App\Repositories\UserLogRepository;
use App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface;
use App\Repositories\CnfIpAssignmentRepository;
use App\Repositories\Interfaces\CnfIpAssignmentDetailRepositoryInterface;
use App\Repositories\CnfIpAssignmentDetailRepository;
use App\Repositories\Interfaces\AreaVatCodeRepositoryInterface;
use App\Repositories\AreaVatCodeRepository;
use App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface;
use App\Repositories\AdditionalConditionSuggestionRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public $singletons = [
        ProductTypeRepositoryInterface::class => ProductTypeRepository::class,
        ProductRepositoryInterface::class => ProductRepository::class,
        UserRepositoryInterface::class => UserRepository::class,
        OrganizationRepositoryInterface::class => OrganizationRepository::class,
        BankBranchRepositoryInterface::class => BankBranchRepository::class,
        FeeSetupRepositoryInterface::class => FeeSetupRepository::class,
        ApplicationRepositoryInterface::class => ApplicationRepository::class,
        ProfileRepositoryInterface::class => ProfileRepository::class,
        AttachmentRepositoryInterface::class => AttachmentRepository::class,
        DesignationRepositoryInterface::class => DesignationRepository::class,
        RecoverPasswordReporsitoryInterface::class => RecoverPasswordRepository::class,
        DistrictRepositoryInterface::class => DistrictRepository::class,
        UpazillaRepositoryInterface::class => UpazillaRepository::class,
        AddressRepositoryInterface::class => AddressRepository::class,
        RoleRepositoryInterface::class => RoleRepository::class,
        UserRoleRepositoryInterface::class => UserRoleRepository::class,
        UnitRepositoryInterface::class => UnitRepository::class,
        AppTypeRepositoryInterface::class => AppTypeRepository::class,
        AppProductTypeRepositoryInterface::class => AppProductTypeRepository::class,
        BankRepositoryInterface::class => BankRepository::class,
        MeansofTransportRepositoryInterface::class => MeansofTransportRepository::class,
        PortTypeRepositoryInterface::class => PortTypeRepository::class,
        PortCategoryRepositoryInterface::class => PortCategoryRepository::class,
        ConfigAppTypeAttachmentRepositoryInterface::class => ConfigAppTypeAttachmentRepository::class,
        ConfigAttachmentRepositoryInterface::class => ConfigAttachmentRepository::class,
        PurposeRepositoryInterface::class => PurposeRepository::class,
        VarietyRepositoryInterface::class => VarietyRepository::class,
        MenuRepositoryInterface::class => MenuRepository::class,
        RoleMenuRepositoryInterface::class => RoleMenuRepository::class,
        UserAttachmentRepositoryInterface::class => UserAttachmentRepository::class,
        SeedPurposeRepositoryInterface::class => SeedPurposeRepository::class,
        PurposeVarietyRepositoryInterface::class => PurposeVarietyRepository::class,
        UserTypeRepositoryInterface::class => UserTypeRepository::class,
        ProxyUserLogRepositoryInterface::class => ProxyUserLogRepository::class,
        PurposeRequiredAttachmentRepositoryInterface::class => PurposeRequiredAttachmentRepository::class,
        ConfigAttachmentAttributeRepositoryInterface::class => ConfigAttachmentAttributeRepository::class,
        IpDetailRepositoryInterface::class => IpDetailRepository::class,
        AppAttachmentRepositoryInterface::class => AppAttachmentRepository::class,
        AppProductRepositoryInterface::class => AppProductRepository::class,
        PcDetailRepositoryInterface::class => PcDetailRepository::class,
        RoDetailRepositoryInterface::class => RoDetailRepository::class,
        MemoRepositoryInterface::class => MemoRepository::class,
        AttachmentAttributeRepositoryInterface::class => AttachmentAttributeRepository::class,
        RoIpApplicationRepositoryInterface::class => RoIpApplicationRepository::class,
        CountryRepositoryInterface::class => CountryRepository::class,
        ProductCategoryRepositoryInterface::class => ProductCategoryRepository::class,
        EChallanRepositoryInterface::class => EChallanRepository::class,
        PaymentRepositoryInterface::class => PaymentRepository::class,
        TransactionRepositoryInterface::class => TransactionRepository::class,
        AppInvoiceRepositoryInterface::class => AppInvoiceRepository::class,
        StageRepositoryInterface::class => StageRepository::class,
        ProcessTaskRepositoryInterface::class => ProcessTaskRepository::class,
        TaskFieldRepositoryInterface::class => TaskFieldRepository::class,
        ProcessFlowRepositoryInterface::class => ProcessFlowRepository::class,
        StageFlowRepositoryInterface::class => StageFlowRepository::class,
        StageFlowTaskRepositoryInterface::class => StageFlowTaskRepository::class,
        StageButtonRepositoryInterface::class => StageButtonRepository::class,
        ProcessStageRoleRepositoryInterface::class => ProcessStageRoleRepository::class,
        ProcessButtonRepositoryInterface::class => ProcessButtonRepository::class,
        CertificateRepositoryInterface::class => CertificateRepository::class,
        NoticeRepositoryInterface::class => NoticeRepository::class,
        AppStatusLogRepositoryInterface::class => AppStatusLogRepository::class,
        DocumentSignerRepositoryInterface::class => DocumentSignerRepository::class,
        AppTaskFieldRepositoryInterface::class => AppTaskFieldRepository::class,
        AdditionalInfoConditionRepositoryInterface::class => AdditionalInfoConditionRepository::class,
        TaskFieldStageRepositoryInterface::class => TaskFieldStageRepository::class,
        SmsEmalLogRepositoryInterface::class => SmsEmalLogRepository::class,
        NotificationRepositoryInterface::class => NotificationRepository::class,
        UserLogRepositoryInterface::class => UserLogRepository::class,
        CnfIpAssignmentRepositoryInterface::class => CnfIpAssignmentRepository::class,
        CnfIpAssignmentDetailRepositoryInterface::class => CnfIpAssignmentDetailRepository::class,
        AreaVatCodeRepositoryInterface::class => AreaVatCodeRepository::class,
        AdditionalConditionSuggestionRepositoryInterface::class => AdditionalConditionSuggestionRepository::class
    ];
}

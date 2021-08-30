<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(UserSeeder::class);
        $this->call(DesignationSeeder::class);
        $this->call(UserTypeSeeder::class);
        $this->call(PortCategorySeeder::class);
        $this->call(PortTypeSeeder::class);
        $this->call(VarietySeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AdditionalRoleSeeder::class);
        $this->call(PurposeSeeder::class);
        $this->call(ProductTypeSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(AttachmentSeeder::class);
        $this->call(AppTypeSeeder::class);
        $this->call(AppTypeAttachmentSeeder::class);
        $this->call(AppProductTypeSeeder::class);
        $this->call(FeeSetupSeeder::class);
//        $this->call(RoleMenuSeeder::class);
        $this->call(MeansOfTransportSeeder::class);
        $this->call(OrganizationSeeder::class);
        $this->call(BankSeeder::class);
        $this->call(BankBranchSeeder::class);
        $this->call(AllUserSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(AreaVatCodeSeeder::class);
//        $this->call(ApplicationSeeder::class);
//        $this->call(IpDetailSeeder::class);
//        $this->call(PcDetailSeeder::class);
//        $this->call(AppProductSeeder::class);
//        $this->call(AppInvoiceSeeder::class);
//        $this->call(AppAttachmentSeeder::class);
//        $this->call(AppStatusLogSeeder::class);
//        $this->call(AdditionalInfoConditionSeeder::class);
        $this->call(UpazillaSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(CertificateSeeder::class);
//        $this->call(TransactionSeeder::class);
//        $this->call(RoDetailSeeder::class);
//        $this->call(AppCommentSeeder::class);
//        $this->call(AppReportSeeder::class);
        $this->call(AttachmentAttributeSeeder::class);
//        $this->call(AppAttachmentAttributeSeeder::class);
        $this->call(ProcessButtonSeeder::class);
        $this->call(CnfUserTypeSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}

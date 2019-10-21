<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'product_management_access',
            ],
            [
                'id'    => '18',
                'title' => 'product_category_create',
            ],
            [
                'id'    => '19',
                'title' => 'product_category_edit',
            ],
            [
                'id'    => '20',
                'title' => 'product_category_show',
            ],
            [
                'id'    => '21',
                'title' => 'product_category_delete',
            ],
            [
                'id'    => '22',
                'title' => 'product_category_access',
            ],
            [
                'id'    => '23',
                'title' => 'product_tag_create',
            ],
            [
                'id'    => '24',
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => '25',
                'title' => 'product_tag_show',
            ],
            [
                'id'    => '26',
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => '27',
                'title' => 'product_tag_access',
            ],
            [
                'id'    => '28',
                'title' => 'product_create',
            ],
            [
                'id'    => '29',
                'title' => 'product_edit',
            ],
            [
                'id'    => '30',
                'title' => 'product_show',
            ],
            [
                'id'    => '31',
                'title' => 'product_delete',
            ],
            [
                'id'    => '32',
                'title' => 'product_access',
            ],
            [
                'id'    => '33',
                'title' => 'coupon_create_create',
            ],
            [
                'id'    => '34',
                'title' => 'coupon_create_edit',
            ],
            [
                'id'    => '35',
                'title' => 'coupon_create_show',
            ],
            [
                'id'    => '36',
                'title' => 'coupon_create_delete',
            ],
            [
                'id'    => '37',
                'title' => 'coupon_create_access',
            ],
            [
                'id'    => '38',
                'title' => 'setting_access',
            ],
            [
                'id'    => '39',
                'title' => 'subcriptions_create_create',
            ],
            [
                'id'    => '40',
                'title' => 'subcriptions_create_edit',
            ],
            [
                'id'    => '41',
                'title' => 'subcriptions_create_show',
            ],
            [
                'id'    => '42',
                'title' => 'subcriptions_create_delete',
            ],
            [
                'id'    => '43',
                'title' => 'subcriptions_create_access',
            ],
            [
                'id'    => '44',
                'title' => 'create_payment_create',
            ],
            [
                'id'    => '45',
                'title' => 'create_payment_edit',
            ],
            [
                'id'    => '46',
                'title' => 'create_payment_show',
            ],
            [
                'id'    => '47',
                'title' => 'create_payment_delete',
            ],
            [
                'id'    => '48',
                'title' => 'create_payment_access',
            ],
            [
                'id'    => '49',
                'title' => 'report_access',
            ],
            [
                'id'    => '50',
                'title' => 'customers_create_create',
            ],
            [
                'id'    => '51',
                'title' => 'customers_create_edit',
            ],
            [
                'id'    => '52',
                'title' => 'customers_create_show',
            ],
            [
                'id'    => '53',
                'title' => 'customers_create_delete',
            ],
            [
                'id'    => '54',
                'title' => 'customers_create_access',
            ],
            [
                'id'    => '55',
                'title' => 'balance_access',
            ],
            [
                'id'    => '56',
                'title' => 'terminal_access',
            ],
            [
                'id'    => '57',
                'title' => 'billing_access',
            ],
            [
                'id'    => '58',
                'title' => 'invoice_create',
            ],
            [
                'id'    => '59',
                'title' => 'invoice_edit',
            ],
            [
                'id'    => '60',
                'title' => 'invoice_show',
            ],
            [
                'id'    => '61',
                'title' => 'invoice_delete',
            ],
            [
                'id'    => '62',
                'title' => 'invoice_access',
            ],
            [
                'id'    => '63',
                'title' => 'integration_access',
            ],
            [
                'id'    => '64',
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => '65',
                'title' => 'currency_create',
            ],
            [
                'id'    => '66',
                'title' => 'currency_edit',
            ],
            [
                'id'    => '67',
                'title' => 'currency_show',
            ],
            [
                'id'    => '68',
                'title' => 'currency_delete',
            ],
            [
                'id'    => '69',
                'title' => 'currency_access',
            ],
            [
                'id'    => '70',
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => '71',
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => '72',
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => '73',
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => '74',
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => '75',
                'title' => 'income_source_create',
            ],
            [
                'id'    => '76',
                'title' => 'income_source_edit',
            ],
            [
                'id'    => '77',
                'title' => 'income_source_show',
            ],
            [
                'id'    => '78',
                'title' => 'income_source_delete',
            ],
            [
                'id'    => '79',
                'title' => 'income_source_access',
            ],
            [
                'id'    => '80',
                'title' => 'client_status_create',
            ],
            [
                'id'    => '81',
                'title' => 'client_status_edit',
            ],
            [
                'id'    => '82',
                'title' => 'client_status_show',
            ],
            [
                'id'    => '83',
                'title' => 'client_status_delete',
            ],
            [
                'id'    => '84',
                'title' => 'client_status_access',
            ],
            [
                'id'    => '85',
                'title' => 'project_status_create',
            ],
            [
                'id'    => '86',
                'title' => 'project_status_edit',
            ],
            [
                'id'    => '87',
                'title' => 'project_status_show',
            ],
            [
                'id'    => '88',
                'title' => 'project_status_delete',
            ],
            [
                'id'    => '89',
                'title' => 'project_status_access',
            ],
            [
                'id'    => '90',
                'title' => 'client_management_access',
            ],
            [
                'id'    => '91',
                'title' => 'client_create',
            ],
            [
                'id'    => '92',
                'title' => 'client_edit',
            ],
            [
                'id'    => '93',
                'title' => 'client_show',
            ],
            [
                'id'    => '94',
                'title' => 'client_delete',
            ],
            [
                'id'    => '95',
                'title' => 'client_access',
            ],
            [
                'id'    => '96',
                'title' => 'project_create',
            ],
            [
                'id'    => '97',
                'title' => 'project_edit',
            ],
            [
                'id'    => '98',
                'title' => 'project_show',
            ],
            [
                'id'    => '99',
                'title' => 'project_delete',
            ],
            [
                'id'    => '100',
                'title' => 'project_access',
            ],
            [
                'id'    => '101',
                'title' => 'note_create',
            ],
            [
                'id'    => '102',
                'title' => 'note_edit',
            ],
            [
                'id'    => '103',
                'title' => 'note_show',
            ],
            [
                'id'    => '104',
                'title' => 'note_delete',
            ],
            [
                'id'    => '105',
                'title' => 'note_access',
            ],
            [
                'id'    => '106',
                'title' => 'document_create',
            ],
            [
                'id'    => '107',
                'title' => 'document_edit',
            ],
            [
                'id'    => '108',
                'title' => 'document_show',
            ],
            [
                'id'    => '109',
                'title' => 'document_delete',
            ],
            [
                'id'    => '110',
                'title' => 'document_access',
            ],
            [
                'id'    => '111',
                'title' => 'transaction_create',
            ],
            [
                'id'    => '112',
                'title' => 'transaction_edit',
            ],
            [
                'id'    => '113',
                'title' => 'transaction_show',
            ],
            [
                'id'    => '114',
                'title' => 'transaction_delete',
            ],
            [
                'id'    => '115',
                'title' => 'transaction_access',
            ],
            [
                'id'    => '116',
                'title' => 'client_report_create',
            ],
            [
                'id'    => '117',
                'title' => 'client_report_edit',
            ],
            [
                'id'    => '118',
                'title' => 'client_report_show',
            ],
            [
                'id'    => '119',
                'title' => 'client_report_delete',
            ],
            [
                'id'    => '120',
                'title' => 'client_report_access',
            ],
        ];

        Permission::insert($permissions);
    }
}

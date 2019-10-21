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
        ];

        Permission::insert($permissions);
    }
}

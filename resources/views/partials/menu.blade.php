<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('create_payment_access')
                <li class="nav-item">
                    <a href="{{ route("admin.create-payments.index") }}" class="nav-link {{ request()->is('admin/create-payments') || request()->is('admin/create-payments/*') ? 'active' : '' }}">
                        <i class="fa-fw far fa-closed-captioning nav-icon">

                        </i>
                        {{ trans('cruds.createPayment.title') }}
                    </a>
                </li>
            @endcan
            @can('customers_create_access')
                <li class="nav-item">
                    <a href="{{ route("admin.customers-creates.index") }}" class="nav-link {{ request()->is('admin/customers-creates') || request()->is('admin/customers-creates/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-user nav-icon">

                        </i>
                        {{ trans('cruds.customersCreate.title') }}
                    </a>
                </li>
            @endcan
            @can('report_access')
                <li class="nav-item">
                    <a href="{{ route("admin.reports.index") }}" class="nav-link {{ request()->is('admin/reports') || request()->is('admin/reports/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-chart-line nav-icon">

                        </i>
                        {{ trans('cruds.report.title') }}
                    </a>
                </li>
            @endcan
            @can('billing_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-calculator nav-icon">

                        </i>
                        {{ trans('cruds.billing.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('invoice_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.invoices.index") }}" class="nav-link {{ request()->is('admin/invoices') || request()->is('admin/invoices/*') ? 'active' : '' }}">
                                    <i class="fa-fw far fa-file-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.invoice.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('subcriptions_create_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.subcriptions-creates.index") }}" class="nav-link {{ request()->is('admin/subcriptions-creates') || request()->is('admin/subcriptions-creates/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-sync-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.subcriptionsCreate.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('product_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-shopping-cart nav-icon">

                                    </i>
                                    {{ trans('cruds.product.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('coupon_create_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.coupon-creates.index") }}" class="nav-link {{ request()->is('admin/coupon-creates') || request()->is('admin/coupon-creates/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-money-check nav-icon">

                                    </i>
                                    {{ trans('cruds.couponCreate.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('integration_access')
                <li class="nav-item">
                    <a href="{{ route("admin.integrations.index") }}" class="nav-link {{ request()->is('admin/integrations') || request()->is('admin/integrations/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-code nav-icon">

                        </i>
                        {{ trans('cruds.integration.title') }}
                    </a>
                </li>
            @endcan
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('product_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-shopping-cart nav-icon">

                        </i>
                        {{ trans('cruds.productManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('product_category_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.product-categories.index") }}" class="nav-link {{ request()->is('admin/product-categories') || request()->is('admin/product-categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon">

                                    </i>
                                    {{ trans('cruds.productCategory.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('product_tag_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.product-tags.index") }}" class="nav-link {{ request()->is('admin/product-tags') || request()->is('admin/product-tags/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon">

                                    </i>
                                    {{ trans('cruds.productTag.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
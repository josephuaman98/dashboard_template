
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">

            <ul class="nav navbar-nav flex-row">
    <li class="nav-item me-auto">
        <a class="navbar-brand" href="{{ url('/dashboard') }}">
            <img src="{{asset('/images/imagenes/sjl_logo.png')}}" alt="Tu Logo" style="width: 150px; height: auto; display: block; margin: 0 auto;">
        </a>
    </li>
    <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
            <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
            <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
        </a>
    </li>
</ul>

        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                

                
                @can('ver-notificacion')
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='camera'></i><span class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Notificaciones</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ url('/notificacion') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">Registros</span></a>
                        </li>
                    </ul>
                </li>
                @endcan


                @can('ver-registro')
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='file-text'></i><span class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Registro Notif.</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ url('/formulario') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">Formulario</span></a>
                        </li>
                    </ul>
                </li>
                @endcan
                
                
               
                @if(auth()->user()->can('ver-usuario') || auth()->user()->can('ver-rol'))
                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="#">
                            <i data-feather='lock'></i>
                            <span class="menu-title text-truncate" data-i18n="eCommerce">Administrador</span>
                        </a>
                        <ul class="menu-content">
                            @can('ver-usuario')
                            <li>
                                <a class="d-flex align-items-center" href="{{ url('/usuarios') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop">Usuario</span>
                                </a>
                            </li>
                            @endcan
                            @can('ver-rol')
                            <li>
                                <a class="d-flex align-items-center" href="{{ url('/roles') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Details">Roles</span>
                                </a> 
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endif

              
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="eCommerce">ADMINISTRATIVA</span></a>
                    <ul class="menu-content">
                        @can('ver-usuario')
                        <li><a class="d-flex align-items-center" href="{{ url('/usuarios') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">Usuario</span></a></li>
                        @endcan
                        @can('ver-rol')
                        <li><a class="d-flex align-items-center" href="{{ url('/roles') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details">Roles</span></a> 
                        @endcan
                    </ul>
                </li> -->
                
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Pages</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Account Settings">Account Settings</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-account-settings-account.html"><span class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-security.html"><span class="menu-item text-truncate" data-i18n="Security">Security</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-billing.html"><span class="menu-item text-truncate" data-i18n="Billings &amp; Plans">Billings &amp; Plans</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-notifications.html"><span class="menu-item text-truncate" data-i18n="Notifications">Notifications</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-connections.html"><span class="menu-item text-truncate" data-i18n="Connections">Connections</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-profile.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Profile</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-faq.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">FAQ</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-knowledge-base.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Knowledge Base">Knowledge Base</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-pricing.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pricing">Pricing</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-license.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="License">License</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-api-key.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="API Key">API Key</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Blog">Blog</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-blog-list.html"><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-detail.html"><span class="menu-item text-truncate" data-i18n="Detail">Detail</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-edit.html"><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Mail Template">Mail Template</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Welcome">Welcome</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Reset Password">Reset Password</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Verify Email">Verify Email</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Deactivate Account">Deactivate Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Invoice">Invoice</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Promotional">Promotional</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Miscellaneous">Miscellaneous</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-misc-coming-soon.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Coming Soon">Coming Soon</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-not-authorized.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Not Authorized">Not Authorized</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-under-maintenance.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Maintenance">Maintenance</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-error.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Error">Error</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                
                

              
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
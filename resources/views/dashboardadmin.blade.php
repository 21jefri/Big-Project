<!DOCTYPE html>

<html lang="en" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed   " dir="ltr" data-theme="theme-default" data-assets-path="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/" data-base-url="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1" data-framework="laravel" data-template="vertical-menu-theme-default-light">


<!-- Mirrored from demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1/app/ecommerce/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 03:44:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard Admin
  </title>
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="y0lzh53YmoH0xFgY2vFjhD4S1TOiq6lE58zbW7ec">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://1.envato.market/vuexy_admin">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />


    <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
  </script>
  <!-- End Google Tag Manager -->


  <!-- Include Styles -->
  <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-iconsea04.css?id=6ad8bc28559d005d792d577cf02a2116"') }} />
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5"') }} />
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d') }}" />
<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core6cc1.css?id=9dd8321ea008145745a7d78e072a6e36') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-defaultfc79.css?id=a4539ede8fbe0ee4ea3a81f2c89f07d9"') }} class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('assets/css/demof1ed.css?id=ddd2feb83a604f9e432cdcb29815ed44') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-wavesd178.css?id=aa72fb97dfa8e932ba88c8a3c04641bc') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar7358.css?id=280196ccb54c8ae7e29ea06932c9a4b6') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeaheadb5e1.css?id=2603197f6b29a6654cb700bd9367e2a3') }}" />

<!-- Vendor Styles -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />


<!-- Page Styles -->

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
  <!-- laravel style -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
<!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('assets/js/config.js') }}"></script>

  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultStyle: "light",
      defaultShowDropdownOnHover: "true", // true/false (for horizontal layout only)
      displayCustomizer: "true",
      lang: 'en',
      pathResolver: function(path) {
        var resolvedPaths = {
          // Core stylesheets
                      'core.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=9dd8321ea008145745a7d78e072a6e36',
            'core-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d661bae1d0ada9f7e9e3685a3e1f427e',

          // Themes
                      'theme-default.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=a4539ede8fbe0ee4ea3a81f2c89f07d9',
            'theme-default-dark.css':
            'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ce86d777a4c5030f51d0f609f202bcc5',
                      'theme-bordered.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=786794ca0c68d96058e8ceeb20f4e7c5',
            'theme-bordered-dark.css':
            'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=e7122ef6338b22f7cea9eaff5a96aa8b',
                      'theme-semi-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=a0a317e88e943fdd62d514e00deebb22',
            'theme-semi-dark-dark.css':
            'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=e9a2f7cd6ace727264936f6bf93ab1e2',
                  }
        return resolvedPaths[path] || path;
      },
      'controls': ["rtl","style","headerType","contentLayout","layoutCollapsed","layoutNavbarOptions","themes"],
    });
  </script>
</head>

<body>

    <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
    <a href="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1" class="app-brand-link">
      <span class="app-brand-logo demo">
        <svg width="32" height="20" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
</svg>
      </span>
      <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>


  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Dashboards</div>
                <div class="badge bg-primary rounded-pill ms-auto">5</div>

              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1" class="menu-link" >
                    <div>Analytics</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../dashboard/crm.html" class="menu-link" >
                    <div>CRM</div>
        </a>


              </li>



      <li class="menu-item active">
        <a href="dashboard.html" class="menu-link" >
                    <div>eCommerce</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../logistics/dashboard.html" class="menu-link" >
                    <div>Logistics</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../academy/dashboard.html" class="menu-link" >
                    <div>Academy</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                <div>Layouts</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../layouts/collapsed-menu.html" class="menu-link" >
                    <div>Collapsed menu</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../layouts/content-navbar.html" class="menu-link" >
                    <div>Content navbar</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../layouts/content-nav-sidebar.html" class="menu-link" >
                    <div>Content nav + Sidebar</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../layouts/horizontal.html" class="menu-link"  target="_blank" >
                    <div>Horizontal</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../layouts/without-menu.html" class="menu-link" >
                    <div>Without menu</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../layouts/without-navbar.html" class="menu-link" >
                    <div>Without navbar</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../layouts/fluid.html" class="menu-link" >
                    <div>Fluid</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../layouts/container.html" class="menu-link" >
                    <div>Container</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../layouts/blank.html" class="menu-link"  target="_blank" >
                    <div>Blank</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-files"></i>
                <div>Front Pages</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../front-pages/landing.html" class="menu-link"  target="_blank" >
                    <div>Landing</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../front-pages/pricing.html" class="menu-link"  target="_blank" >
                    <div>Pricing</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../front-pages/payment.html" class="menu-link"  target="_blank" >
                    <div>Payments</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../front-pages/checkout.html" class="menu-link"  target="_blank" >
                    <div>Checkout</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../front-pages/help-center.html" class="menu-link"  target="_blank" >
                    <div>Help Center</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-brand-php"></i>
                <div>Laravel Example</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../laravel/user-management.html" class="menu-link" >
                    <div>User Management</div>
        </a>


              </li>
      </ul>
          </li>




        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Apps &amp; Pages</span>
    </li>









    <li class="menu-item ">
      <a href="../email.html" class="menu-link" >
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div>Email</div>
              </a>


          </li>








    <li class="menu-item ">
      <a href="../chat.html" class="menu-link" >
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div>Chat</div>
              </a>


          </li>








    <li class="menu-item ">
      <a href="../calendar.html" class="menu-link" >
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div>Calendar</div>
              </a>


          </li>








    <li class="menu-item ">
      <a href="../kanban.html" class="menu-link" >
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div>Kanban</div>
              </a>


          </li>








    <li class="menu-item active open">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-building-factory-2"></i>
                <div>eCommerce</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item active">
        <a href="dashboard.html" class="menu-link" >
                    <div>Dashboard</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Products</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="product/list.html" class="menu-link" >
                    <div>Product List</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="product/add.html" class="menu-link" >
                    <div>Add Product</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="product/category.html" class="menu-link" >
                    <div>Category List</div>
        </a>


              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Order</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="order/list.html" class="menu-link" >
                    <div>Order List</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="order/details.html" class="menu-link" >
                    <div> Order Details</div>
        </a>


              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Customer</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="customer/all.html" class="menu-link" >
                    <div>All Customers</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Customer Details</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="customer/details/overview.html" class="menu-link" >
                    <div>Overview</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="customer/details/security.html" class="menu-link" >
                    <div>Security</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="customer/details/billing.html" class="menu-link" >
                    <div>Address &amp; Billing</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="customer/details/notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>


              </li>
      </ul>
              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="manage/reviews.html" class="menu-link" >
                    <div>Manage Reviews</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="referrals.html" class="menu-link" >
                    <div>Referrals</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Settings</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="settings/details.html" class="menu-link" >
                    <div>Store details</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="settings/payments.html" class="menu-link" >
                    <div>Payments</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="settings/checkout.html" class="menu-link" >
                    <div>Checkout</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="settings/shipping.html" class="menu-link" >
                    <div>Shipping &amp; Delivery</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="settings/locations.html" class="menu-link" >
                    <div>Locations</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="settings/notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>


              </li>
      </ul>
              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-book"></i>
                <div>Academy</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../academy/dashboard.html" class="menu-link" >
                    <div>Dashboard</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../academy/course.html" class="menu-link" >
                    <div>My Course</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../academy/course-details.html" class="menu-link" >
                    <div>Course Details</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-truck"></i>
                <div>Logistics</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../logistics/dashboard.html" class="menu-link" >
                    <div>Dashboard</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../logistics/fleet.html" class="menu-link" >
                    <div>Fleet</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                <div>Invoice</div>
                <div class="badge bg-danger rounded-pill ms-auto">4</div>

              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../invoice/list.html" class="menu-link" >
                    <div>List</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../invoice/preview.html" class="menu-link" >
                    <div>Preview</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../invoice/edit.html" class="menu-link" >
                    <div>Edit</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../invoice/add.html" class="menu-link" >
                    <div>Add</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div>Users</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../user/list.html" class="menu-link" >
                    <div>List</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>View</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../user/view/account.html" class="menu-link" >
                    <div>Account</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../user/view/security.html" class="menu-link" >
                    <div>Security</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../user/view/billing.html" class="menu-link" >
                    <div>Billing &amp; Plans</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../user/view/notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../user/view/connections.html" class="menu-link" >
                    <div>Connections</div>
        </a>


              </li>
      </ul>
              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div>Roles &amp; Permissions</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../access-roles.html" class="menu-link" >
                    <div>Roles</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../access-permission.html" class="menu-link" >
                    <div>Permission</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-file"></i>
                <div>Pages</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>User Profile</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../pages/profile-user.html" class="menu-link" >
                    <div>Profile</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/profile-teams.html" class="menu-link" >
                    <div>Teams</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/profile-projects.html" class="menu-link" >
                    <div>Projects</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/profile-connections.html" class="menu-link" >
                    <div>Connections</div>
        </a>


              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Account Settings</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../pages/account-settings-account.html" class="menu-link" >
                    <div>Account</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/account-settings-security.html" class="menu-link" >
                    <div>Security</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/account-settings-billing.html" class="menu-link" >
                    <div>Billing &amp; Plans</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/account-settings-notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/account-settings-connections.html" class="menu-link" >
                    <div>Connections</div>
        </a>


              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="../../pages/faq.html" class="menu-link" >
                    <div>FAQ</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/pricing.html" class="menu-link" >
                    <div>Pricing</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Misc</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../pages/misc-error.html" class="menu-link"  target="_blank" >
                    <div>Error</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/misc-under-maintenance.html" class="menu-link"  target="_blank" >
                    <div>Under Maintenance</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/misc-comingsoon.html" class="menu-link"  target="_blank" >
                    <div>Coming Soon</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../pages/misc-not-authorized.html" class="menu-link"  target="_blank" >
                    <div>Not Authorized</div>
        </a>


              </li>
      </ul>
              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-lock"></i>
                <div>Authentications</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Login</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../auth/login-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../auth/login-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>


              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Register</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../auth/register-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../auth/register-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../auth/register-multisteps.html" class="menu-link"  target="_blank" >
                    <div>Multi-steps</div>
        </a>


              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Verify Email</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../auth/verify-email-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../auth/verify-email-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>


              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Reset Password</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../auth/reset-password-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../auth/reset-password-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>


              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Forgot Password</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../auth/forgot-password-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../auth/forgot-password-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>


              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Two Steps</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../auth/two-steps-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../auth/two-steps-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>


              </li>
      </ul>
              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-forms"></i>
                <div>Wizard Examples</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../wizard/ex-checkout.html" class="menu-link" >
                    <div>Checkout</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../wizard/ex-property-listing.html" class="menu-link" >
                    <div>Property Listing</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../wizard/ex-create-deal.html" class="menu-link" >
                    <div>Create Deal</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="../../modal-examples.html" class="menu-link" >
                <i class="menu-icon tf-icons ti ti-square"></i>
                <div>Modal Examples</div>
              </a>


          </li>




        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Components</span>
    </li>









    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div>Cards</div>
                <div class="badge bg-primary rounded-pill ms-auto">5</div>

              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../cards/basic.html" class="menu-link" >
                    <div>Basic</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../cards/advance.html" class="menu-link" >
                    <div>Advance</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../cards/statistics.html" class="menu-link" >
                    <div>Statistics</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../cards/analytics.html" class="menu-link" >
                    <div>Analytics</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../cards/actions.html" class="menu-link" >
                    <div>Actions</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                <div>User interface</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../ui/accordion.html" class="menu-link" >
                    <div>Accordion</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/alerts.html" class="menu-link" >
                    <div>Alerts</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/badges.html" class="menu-link" >
                    <div>Badges</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/buttons.html" class="menu-link" >
                    <div>Buttons</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/carousel.html" class="menu-link" >
                    <div>Carousel</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/collapse.html" class="menu-link" >
                    <div>Collapse</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/dropdowns.html" class="menu-link" >
                    <div>Dropdowns</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/footer.html" class="menu-link" >
                    <div>Footer</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/list-groups.html" class="menu-link" >
                    <div>List groups</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/modals.html" class="menu-link" >
                    <div>Modals</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/navbar.html" class="menu-link" >
                    <div>Navbar</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/offcanvas.html" class="menu-link" >
                    <div>Offcanvas</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/pagination-breadcrumbs.html" class="menu-link" >
                    <div>Pagination &amp; Breadcrumbs</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/progress.html" class="menu-link" >
                    <div>Progress</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/spinners.html" class="menu-link" >
                    <div>Spinners</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/tabs-pills.html" class="menu-link" >
                    <div>Tabs &amp; Pills</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/toasts.html" class="menu-link" >
                    <div>Toasts</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/tooltips-popovers.html" class="menu-link" >
                    <div>Tooltips &amp; popovers</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../ui/typography.html" class="menu-link" >
                    <div>Typography</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-components"></i>
                <div>Extended UI</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../extended/ui-avatar.html" class="menu-link" >
                    <div>Avatar</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-blockui.html" class="menu-link" >
                    <div>BlockUI</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-drag-and-drop.html" class="menu-link" >
                    <div>Drag &amp; Drop</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-media-player.html" class="menu-link" >
                    <div>Media Player</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-perfect-scrollbar.html" class="menu-link" >
                    <div>Perfect scrollbar</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-star-ratings.html" class="menu-link" >
                    <div>Star Ratings</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-sweetalert2.html" class="menu-link" >
                    <div>SweetAlert2</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-text-divider.html" class="menu-link" >
                    <div>Text Divider</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Timeline</div>
        </a>


                  <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../extended/ui-timeline-basic.html" class="menu-link" >
                    <div>Basic</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-timeline-fullscreen.html" class="menu-link" >
                    <div>Fullscreen</div>
        </a>


              </li>
      </ul>
              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-tour.html" class="menu-link" >
                    <div>Tour</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-treeview.html" class="menu-link" >
                    <div>Treeview</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../extended/ui-misc.html" class="menu-link" >
                    <div>Miscellaneous</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-brand-tabler"></i>
                <div>Icons</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../icons/tabler.html" class="menu-link" >
                    <div>Tabler</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../icons/font-awesome.html" class="menu-link" >
                    <div>Fontawesome</div>
        </a>


              </li>
      </ul>
          </li>




        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Forms &amp; Tables</span>
    </li>









    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                <div>Form Elements</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../forms/basic-inputs.html" class="menu-link" >
                    <div>Basic Inputs</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../forms/input-groups.html" class="menu-link" >
                    <div>Input groups</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../forms/custom-options.html" class="menu-link" >
                    <div>Custom Options</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../forms/editors.html" class="menu-link" >
                    <div>Editors</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../forms/file-upload.html" class="menu-link" >
                    <div>File Upload</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../forms/pickers.html" class="menu-link" >
                    <div>Pickers</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../forms/selects.html" class="menu-link" >
                    <div>Select &amp; Tags</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../forms/sliders.html" class="menu-link" >
                    <div>Sliders</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../forms/switches.html" class="menu-link" >
                    <div>Switches</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../forms/extras.html" class="menu-link" >
                    <div>Extras</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
                <div>Form Layouts</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../form/layouts-vertical.html" class="menu-link" >
                    <div>Vertical Form</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../form/layouts-horizontal.html" class="menu-link" >
                    <div>Horizontal Form</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../form/layouts-sticky.html" class="menu-link" >
                    <div>Sticky Actions</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                <div>Form Wizard</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../form/wizard-numbered.html" class="menu-link" >
                    <div>Numbered</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../form/wizard-icons.html" class="menu-link" >
                    <div>Icons</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="../../form/validation.html" class="menu-link" >
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div>Form Validation</div>
              </a>


          </li>








    <li class="menu-item ">
      <a href="../../tables/basic.html" class="menu-link" >
                <i class="menu-icon tf-icons ti ti-table"></i>
                <div>Tables</div>
              </a>


          </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                <div>Datatables</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../tables/datatables-basic.html" class="menu-link" >
                    <div>Basic</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../tables/datatables-advanced.html" class="menu-link" >
                    <div>Advanced</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../tables/datatables-extensions.html" class="menu-link" >
                    <div>Extensions</div>
        </a>


              </li>
      </ul>
          </li>




        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Charts &amp; Maps</span>
    </li>









    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                <div>Charts</div>
              </a>


            <ul class="menu-sub">



      <li class="menu-item ">
        <a href="../../charts/apex.html" class="menu-link" >
                    <div>Apex Charts</div>
        </a>


              </li>



      <li class="menu-item ">
        <a href="../../charts/chartjs.html" class="menu-link" >
                    <div>ChartJS</div>
        </a>


              </li>
      </ul>
          </li>








    <li class="menu-item ">
      <a href="../../maps/leaflet.html" class="menu-link" >
                <i class="menu-icon tf-icons ti ti-map"></i>
                <div>Leaflet Maps</div>
              </a>


          </li>




        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Misc</span>
    </li>









    <li class="menu-item ">
      <a href="https://pixinvent.ticksy.com/" class="menu-link"  target="_blank" >
                <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                <div>Support</div>
              </a>


          </li>








    <li class="menu-item ">
      <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/laravel-introduction.html" class="menu-link"  target="_blank" >
                <i class="menu-icon tf-icons ti ti-file-description"></i>
                <div>Documentation</div>
              </a>


          </li>
          </ul>

</aside>

    <!-- Layout page -->
    <div class="layout-page">




      <!-- BEGIN: Navbar-->
            <!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

      <!--  Brand demo (display only for navbar-full and hide on below xl) -->

      <!-- ! Not required for layout-without-menu -->
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="ti ti-menu-2 ti-sm"></i>
        </a>
      </div>

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
              <i class="ti ti-search ti-md me-2"></i>
              <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
            </a>
          </div>
        </div>
        <!-- /Search -->
                <ul class="navbar-nav flex-row align-items-center ms-auto">
          <!-- Language -->
          <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='ti ti-language rounded-circle ti-md'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item active" href="dashboard.html" data-language="en">
                  <span class="align-middle">English</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item " href="dashboard.html" data-language="fr">
                  <span class="align-middle">French</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item " href="dashboard.html" data-language="de" >
                  <span class="align-middle">German</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item " href="dashboard.html" data-language="pt">
                  <span class="align-middle">Portuguese</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ Language -->

                              <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='ti ti-md'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class='ti ti-sun me-2'></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                  <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ Style Switcher -->

          <!-- Quick links  -->
          <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class='ti ti-layout-grid-add ti-md'></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end py-0">
              <div class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                  <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="ti ti-sm ti-apps"></i></a>
                </div>
              </div>
              <div class="dropdown-shortcuts-list scrollable-container">
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-calendar fs-4"></i>
                    </span>
                    <a href="../calendar.html" class="stretched-link">Calendar</a>
                    <small class="text-muted mb-0">Appointments</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-file-invoice fs-4"></i>
                    </span>
                    <a href="../invoice/list.html" class="stretched-link">Invoice App</a>
                    <small class="text-muted mb-0">Manage Accounts</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-users fs-4"></i>
                    </span>
                    <a href="../user/list.html" class="stretched-link">User App</a>
                    <small class="text-muted mb-0">Manage Users</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-lock fs-4"></i>
                    </span>
                    <a href="../access-roles.html" class="stretched-link">Role Management</a>
                    <small class="text-muted mb-0">Permission</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-chart-bar fs-4"></i>
                    </span>
                    <a href="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1" class="stretched-link">Dashboard</a>
                    <small class="text-muted mb-0">User Profile</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-settings fs-4"></i>
                    </span>
                    <a href="../../pages/account-settings-account.html" class="stretched-link">Setting</a>
                    <small class="text-muted mb-0">Account Settings</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-help fs-4"></i>
                    </span>
                    <a href="../../pages/faq.html" class="stretched-link">FAQs</a>
                    <small class="text-muted mb-0">FAQs & Articles</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-square fs-4"></i>
                    </span>
                    <a href="../../modal-examples.html" class="stretched-link">Modals</a>
                    <small class="text-muted mb-0">Useful Popups</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Quick links -->

          <!-- Notification -->
          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class="ti ti-bell ti-md"></i>
              <span class="badge bg-danger rounded-pill badge-notifications">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end py-0">
              <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h5 class="text-body mb-0 me-auto">Notification</h5>
                  <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="ti ti-mail-opened fs-4"></i></a>
                </div>
              </li>
              <li class="dropdown-notifications-list scrollable-container">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="../../../demo/assets/img/avatars/1.png" alt class="h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                        <p class="mb-0">Won the monthly best seller gold badge</p>
                        <small class="text-muted">1h ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Charles Franklin</h6>
                        <p class="mb-0">Accepted your connection</p>
                        <small class="text-muted">12hr ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="../../../demo/assets/img/avatars/2.png" alt class="h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">New Message ✉️</h6>
                        <p class="mb-0">You have new message from Natalie</p>
                        <small class="text-muted">1h ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-cart"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                        <p class="mb-0">ACME Inc. made new order $1,154</p>
                        <small class="text-muted">1 day ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="{{ asset('assets/img/avatars/9.png') }}" alt class="h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Application has been approved 🚀 </h6>
                        <p class="mb-0">Your ABC project application has been approved.</p>
                        <small class="text-muted">2 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-chart-pie"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Monthly report is generated</h6>
                        <p class="mb-0">July monthly financial report is generated </p>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="{{ asset('assets/img/avatars/5.png') }}" alt class="h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Send connection request</h6>
                        <p class="mb-0">Peter sent you connection request</p>
                        <small class="text-muted">4 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="{{ asset('assets/img/avatars/6.png') }}" alt class="h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">New message from Jane</h6>
                        <p class="mb-0">Your have new message from Jane</p>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-warning"><i class="ti ti-alert-triangle"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">CPU is running high</h6>
                        <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown-menu-footer border-top">
                <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                  View all notifications
                </a>
              </li>
            </ul>
          </li>
          <!--/ Notification -->

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="../../../demo/assets/img/avatars/1.png" alt class="h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="../../pages/profile-user.html">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="../../../demo/assets/img/avatars/1.png" alt class="h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-medium d-block">
                                                John Doe
                                              </span>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="../../pages/profile-user.html">
                  <i class="ti ti-user-check me-2 ti-sm"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
                            <li>
                <a class="dropdown-item" href="../invoice/list.html">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                    <span class="flex-grow-1 align-middle">Billing</span>
                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                  </span> </a>
              </li>
                            <li>
                <div class="dropdown-divider"></div>
              </li>
                            <li>
                <a class="dropdown-item" href="../../auth/login-basic.html">
                  <i class='ti ti-login me-2'></i>
                  <span class="align-middle">Login</span>
                </a>
              </li>
                          </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>

      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
      </div>
        </nav>
  <!-- / Navbar -->
            <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row">
  <!-- View sales -->
  <div class="col-xl-4 mb-4 col-lg-5 col-12">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-7">
          <div class="card-body text-nowrap">
            <h5 class="card-title mb-0">Congratulations John! 🎉</h5>
            <p class="mb-2">Best seller of the month</p>
            <h4 class="text-primary mb-1">$48.9k</h4>
            <a href="javascript:;" class="btn btn-primary">View Sales</a>
          </div>
        </div>
        <div class="col-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="../../../demo/assets/img/illustrations/card-advance-sale.png" height="140" alt="view sales">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- View sales -->

  <!-- Statistics -->
  <div class="col-xl-8 mb-4 col-lg-7 col-12">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between mb-3">
          <h5 class="card-title mb-0">Statistics</h5>
          <small class="text-muted">Updated 1 month ago</small>
        </div>
      </div>
      <div class="card-body">
        <div class="row gy-3">
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded-pill bg-label-primary me-3 p-2"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
              <div class="card-info">
                <h5 class="mb-0">230k</h5>
                <small>Sales</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-users ti-sm"></i></div>
              <div class="card-info">
                <h5 class="mb-0">8.549k</h5>
                <small>Customers</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded-pill bg-label-danger me-3 p-2"><i class="ti ti-shopping-cart ti-sm"></i></div>
              <div class="card-info">
                <h5 class="mb-0">1.423k</h5>
                <small>Products</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded-pill bg-label-success me-3 p-2"><i class="ti ti-currency-dollar ti-sm"></i></div>
              <div class="card-info">
                <h5 class="mb-0">$9745</h5>
                <small>Revenue</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Statistics -->

  <div class="col-xl-4 col-12">
    <div class="row">
      <!-- Expenses -->
      <div class="col-xl-6 mb-4 col-md-3 col-6">
        <div class="card">
          <div class="card-header pb-0">
            <h5 class="card-title mb-0">82.5k</h5>
            <small class="text-muted">Expenses</small>
          </div>
          <div class="card-body">
            <div id="expensesChart"></div>
            <div class="mt-md-2 text-center mt-lg-3 mt-3">
              <small class="text-muted mt-3">$21k Expenses more than last month</small>
            </div>
          </div>
        </div>
      </div>
      <!--/ Expenses -->

      <!-- Profit last month -->
      <div class="col-xl-6 mb-4 col-md-3 col-6">
        <div class="card">
          <div class="card-header pb-0">
            <h5 class="card-title mb-0">Profit</h5>
            <small class="text-muted">Last Month</small>
          </div>
          <div class="card-body">
            <div id="profitLastMonth"></div>
            <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
              <h4 class="mb-0">624k</h4>
              <small class="text-success">+8.24%</small>
            </div>
          </div>
        </div>
      </div>
      <!--/ Profit last month -->

      <!-- Generated Leads -->
      <div class="col-xl-12 mb-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-column">
                <div class="card-title mb-auto">
                  <h5 class="mb-1 text-nowrap">Generated Leads</h5>
                  <small>Monthly Report</small>
                </div>
                <div class="chart-statistics">
                  <h3 class="card-title mb-1">4,350</h3>
                  <small class="text-success text-nowrap fw-medium"><i class='ti ti-chevron-up me-1'></i> 15.8%</small>
                </div>
              </div>
              <div id="generatedLeadsChart"></div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Generated Leads -->
    </div>
  </div>

  <!-- Revenue Report -->
  <div class="col-12 col-xl-8 mb-4">
    <div class="card">
      <div class="card-body p-0">
        <div class="row row-bordered g-0">
          <div class="col-md-8 position-relative p-4">
            <div class="card-header d-inline-block p-0 text-wrap position-absolute">
              <h5 class="m-0 card-title">Revenue Report</h5>
            </div>
            <div id="totalRevenueChart" class="mt-n1"></div>
          </div>
          <div class="col-md-4 p-4">
            <div class="text-center mt-4">
              <div class="dropdown">
                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="budgetId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <script>
                    document.write(new Date().getFullYear())
                  </script>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                  <a class="dropdown-item prev-year1" href="javascript:void(0);">
                    <script>
                      document.write(new Date().getFullYear() - 1)
                    </script>
                  </a>
                  <a class="dropdown-item prev-year2" href="javascript:void(0);">
                    <script>
                      document.write(new Date().getFullYear() - 2)
                    </script>
                  </a>
                  <a class="dropdown-item prev-year3" href="javascript:void(0);">
                    <script>
                      document.write(new Date().getFullYear() - 3)
                    </script>
                  </a>
                </div>
              </div>
            </div>
            <h3 class="text-center pt-4 mb-0">$25,825</h3>
            <p class="mb-4 text-center"><span class="fw-medium">Budget: </span>56,800</p>
            <div class="px-3">
              <div id="budgetChart"></div>
            </div>
            <div class="text-center mt-4">
              <button type="button" class="btn btn-primary">Increase Budget</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Revenue Report -->

  <!-- Earning Reports -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Earning Reports</h5>
          <small class="text-muted">Weekly Earnings Overview</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="earningReports" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-0">
        <ul class="p-0 m-0">
          <li class="d-flex mb-3">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class='ti ti-chart-pie-2 ti-sm'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Net Profit</h6>
                <small class="text-muted">12.4k Sales</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-3">
                <small>$1,619</small>
                <div class="d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up text-success'></i>
                  <small class="text-muted">18.6%</small>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class='ti ti-currency-dollar ti-sm'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Total Income</h6>
                <small class="text-muted">Sales, Affiliation</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-3">
                <small>$3,571</small>
                <div class="d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up text-success'></i>
                  <small class="text-muted">39.6%</small>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"><i class='ti ti-credit-card ti-sm'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Total Expenses</h6>
                <small class="text-muted">ADVT, Marketing</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-3">
                <small>$430</small>
                <div class="d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up text-success'></i>
                  <small class="text-muted">52.8%</small>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div id="reportBarChart"></div>
      </div>
    </div>
  </div>
  <!--/ Earning Reports -->

  <!-- Popular Product -->
  <div class="col-md-6 col-xl-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title m-0 me-2">
          <h5 class="m-0 me-2">Popular Products</h5>
          <small class="text-muted">Total 10.4k Visitors</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="popularProduct" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularProduct">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="me-3">
              <img src="../../../demo/assets/img/products/iphone.png" alt="User" class="rounded" width="46">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Apple iPhone 13</h6>
                <small class="text-muted d-block">Item: #FXZ-4567</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0 fw-medium">$999.29</p>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="me-3">
              <img src="../../../demo/assets/img/products/nike-air-jordan.png" alt="User" class="rounded" width="46">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Nike Air Jordan</h6>
                <small class="text-muted d-block">Item: #FXZ-3456</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0 fw-medium">$72.40</p>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="me-3">
              <img src="../../../demo/assets/img/products/headphones.png" alt="User" class="rounded" width="46">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Beats Studio 2</h6>
                <small class="text-muted d-block">Item: #FXZ-9485</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0 fw-medium">$99</p>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="me-3">
              <img src="../../../demo/assets/img/products/apple-watch.png" alt="User" class="rounded" width="46">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Apple Watch Series 7</h6>
                <small class="text-muted d-block">Item: #FXZ-2345</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0 fw-medium">$249.99</p>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="me-3">
              <img src="../../../demo/assets/img/products/amazon-echo.png" alt="User" class="rounded" width="46">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Amazon Echo Dot</h6>
                <small class="text-muted d-block">Item: #FXZ-8959</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0 fw-medium">$79.40</p>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="me-3">
              <img src="../../../demo/assets/img/products/play-station.png" alt="User" class="rounded" width="46">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Play Station Console</h6>
                <small class="text-muted d-block">Item: #FXZ-7892</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0 fw-medium">$129.48</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Popular Product -->

  <!-- Sales by Countries tabs-->
  <div class="col-md-6 col-xl-4 col-xl-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between pb-2 mb-1">
        <div class="card-title mb-1">
          <h5 class="m-0 me-2">Sales by Countries</h5>
          <small class="text-muted">62 Deliveries in Progress</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="salesByCountryTabs" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountryTabs">
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="nav-align-top">
          <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-new" aria-controls="navs-justified-new" aria-selected="true">New</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-link-preparing" aria-controls="navs-justified-link-preparing" aria-selected="false">Preparing</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-link-shipping" aria-controls="navs-justified-link-shipping" aria-selected="false">Shipping</button>
            </li>
          </ul>
          <div class="tab-content pb-0">
            <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
              <ul class="timeline timeline-advance timeline-advance mb-2 pb-1">
                <li class="timeline-item ps-4 border-left-dashed">
                  <span class="timeline-indicator timeline-indicator-success">
                    <i class="ti ti-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-0">Myrtle Ullrich</h6>
                    <p class="text-muted mb-0 text-nowrap">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
                <li class="timeline-item ps-4 border-transparent">
                  <span class="timeline-indicator timeline-indicator-primary">
                    <i class="ti ti-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-0">Barry Schowalter</h6>
                    <p class="text-muted mb-0 text-nowrap">939 Orange, California(CA),92118</p>
                  </div>
                </li>
              </ul>
              <div class="border-bottom border-bottom-dashed mt-0 mb-4"></div>
              <ul class="timeline timeline-advance mb-0">
                <li class="timeline-item ps-4 border-left-dashed">
                  <span class="timeline-indicator timeline-indicator-success">
                    <i class="ti ti-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-0">Veronica Herman</h6>
                    <p class="text-muted mb-0 text-nowrap">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-4 border-transparent">
                  <span class="timeline-indicator timeline-indicator-primary">
                    <i class="ti ti-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-0">Helen Jacobs</h6>
                    <p class="text-muted mb-0 text-nowrap">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>

            <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
              <ul class="timeline timeline-advance mb-2 pb-1">
                <li class="timeline-item ps-4 border-left-dashed">
                  <span class="timeline-indicator timeline-indicator-success">
                    <i class="ti ti-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-0">Barry Schowalter</h6>
                    <p class="text-muted mb-0 text-nowrap">939 Orange, California(CA),92118</p>
                  </div>
                </li>
                <li class="timeline-item ps-4 border-transparent">
                  <span class="timeline-indicator timeline-indicator-primary">
                    <i class="ti ti-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-0">Myrtle Ullrich</h6>
                    <p class="text-muted mb-0 text-nowrap">101 Boulder, California(CA), 95959 </p>
                  </div>
                </li>
              </ul>
              <div class="border-bottom border-bottom-dashed mt-0 mb-4"></div>
              <ul class="timeline timeline-advance mb-0">
                <li class="timeline-item ps-4 border-left-dashed">
                  <span class="timeline-indicator timeline-indicator-success">
                    <i class="ti ti-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-0">Veronica Herman</h6>
                    <p class="text-muted mb-0 text-nowrap">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-4 border-transparent">
                  <span class="timeline-indicator timeline-indicator-primary">
                    <i class="ti ti-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-0">Helen Jacobs</h6>
                    <p class="text-muted mb-0 text-nowrap">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
              <ul class="timeline timeline-advance mb-2 pb-1">
                <li class="timeline-item ps-4 border-left-dashed">
                  <span class="timeline-indicator timeline-indicator-success">
                    <i class="ti ti-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-0">Veronica Herman</h6>
                    <p class="text-muted mb-0 text-nowrap">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
                <li class="timeline-item ps-4 border-transparent">
                  <span class="timeline-indicator timeline-indicator-primary">
                    <i class="ti ti-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-0">Barry Schowalter</h6>
                    <p class="text-muted mb-0 text-nowrap">939 Orange, California(CA),92118</p>
                  </div>
                </li>
              </ul>
              <div class="border-bottom border-bottom-dashed mt-0 mb-4"></div>
              <ul class="timeline timeline-advance mb-0">
                <li class="timeline-item ps-4 border-left-dashed">
                  <span class="timeline-indicator timeline-indicator-success">
                    <i class="ti ti-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-0">Myrtle Ullrich</h6>
                    <p class="text-muted mb-0 text-nowrap">162 Windsor, California(CA), 95492 </p>
                  </div>
                </li>
                <li class="timeline-item ps-4 border-transparent">
                  <span class="timeline-indicator timeline-indicator-primary">
                    <i class="ti ti-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-0 pb-0">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-0">Helen Jacobs</h6>
                    <p class="text-muted mb-0 text-nowrap">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Sales by Countries tabs -->

  <!-- Transactions -->
  <div class="col-md-6 col-xl-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title m-0 me-2">
          <h5 class="m-0 me-2">Transactions</h5>
          <small class="text-muted">Total 58 Transactions done in this Month</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-primary me-3 rounded p-2">
              <i class="ti ti-wallet ti-sm"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Wallet</h6>
                <small class="text-muted d-block">Starbucks</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-danger">-$75</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-success rounded me-3 p-2">
              <i class="ti ti-browser-check ti-sm"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Bank Transfer</h6>
                <small class="text-muted d-block">Add Money</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-success">+$480</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-danger rounded me-3 p-2">
              <i class="ti ti-brand-paypal ti-sm"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Paypal</h6>
                <small class="text-muted d-block mb-1">Client Payment</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-success">+$268</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-secondary me-3 rounded p-2">
              <i class="ti ti-credit-card ti-sm"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Master Card</h6>
                <small class="text-muted d-block mb-1">Ordered iPhone 13</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-danger">-$699</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-info me-3 rounded p-2">
              <i class="ti ti-currency-dollar ti-sm"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Bank Transactions</h6>
                <small class="text-muted d-block mb-1">Refund</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-success">+$98</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-danger me-3 rounded p-2">
              <i class="ti ti-brand-paypal ti-sm"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Paypal</h6>
                <small class="text-muted d-block mb-1">Client Payment</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-success">+$126</h6>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="badge bg-label-success me-3 rounded p-2">
              <i class="ti ti-browser-check ti-sm"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Bank Transfer</h6>
                <small class="text-muted d-block mb-1">Pay Office Rent</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-danger">-$1290</h6>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->

  <!-- Invoice table -->
  <div class="col-xl-8">
    <div class="card">
      <div class="table-responsive card-datatable">
        <table class="table datatable-invoice border-top">
          <thead>
            <tr>
              <th></th>
              <th>ID</th>
              <th><i class='ti ti-trending-up text-secondary'></i></th>
              <th>Total</th>
              <th>Issued Date</th>
              <th>Invoice Status</th>
              <th>Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
  <!-- /Invoice table -->
</div>

          </div>
          <!-- / Content -->

          <!-- Footer -->
                    <!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
      <div>
        © <script>
          document.write(new Date().getFullYear())

      </script>
      , made with ❤️ by <a href="https://pixinvent.com/" target="_blank" class="footer-link fw-medium">Pixinvent</a>
      </div>
      <div class="d-none d-lg-inline-block">
        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>
        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/laravel-introduction.html" target="_blank" class="footer-link me-4">Documentation</a>
        <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer-->
                    <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

        <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
    <!--/ Layout Content -->


  <div class="buy-now">
    <a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>


  <!-- Include Scripts -->
  <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->
<script src="../../../demo/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a"></script>
<script src="../../../demo/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c"></script>
<script src="../../../demo/assets/vendor/js/bootstraped84.js?id=9a6c701557297a042348b5aea69e9b76"></script>
<script src="../../../demo/assets/vendor/libs/node-waves/node-waves259f.js?id=4fae469a3ded69fb59fce3dcc14cd638"></script>
<script src="../../../demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a"></script>
<script src="../../../demo/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8"></script>
<script src="../../../demo/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6"></script>
<script src="../../../demo/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"></script>
<script src="../../../demo/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="../../../demo/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="../../../demo/assets/js/mainf696.js?id=8bd0165c1c4340f4d4a66add0761ae8a"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src="../../../demo/assets/js/app-ecommerce-dashboard.js"></script>
<!-- END: Page JS-->

</body>


<!-- Mirrored from demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1/app/ecommerce/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 03:44:51 GMT -->
</html>

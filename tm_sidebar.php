<?php include 'env_set.php'; ?>

<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-dark-sm.png" class='small_logo' alt="" style="width: 26px;height: 26px;">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" class="logo_image" alt="" style="width: 95px;height: 40px;">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img src="assets/images/logo-light-sm.png" class='small_logo' alt="" style="width: 26px;height: 26px;">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll" id='sidebar_color'>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu" user>
                <li class="menu-title" data-key="t-menu">Dashboard</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-user-cog icon nav-icon"></i>
                        <span class="menu-item" data-key="t-multi-level">Admin RM</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <!-- <li><a href="users.php" data-key="t-level-1.1"> Users </a></li> -->
                        <li><a href="tm_dashboard_rebulid.php?id=<?php echo $_SESSION['user_id']; ?>&pre=<?php echo $_SESSION['privilege']; ?>"
                                data-key="t-level-1.13"> TM Dashboard</a></li>

                        <li><a href="dealers.php" data-key="t-level-1.2"> Stations </a></li>




                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <span class="menu-item" data-key="t-multi-level">Manage COCO Orders</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <!-- <li><a href="jd_order_dashborad.php" data-key="t-level-1.16">JD Order
                                Dashboard</a></li> -->
                        <!-- <li><a href="orders_dashboard.php" data-key="t-level-1.16">App Order
                                Dashboard</a></li> -->
                        <li><a href="all_order.php" data-key="t-level-1.3">All APP Orders</a></li>
                        <li><a href="all_order_current_status.php" data-key="t-level-1.3">Current Day
                                Orders Status</a></li>
                        <li><a href="all_pending_app_orders.php" data-key="t-level-1.3">All Pending APP
                                Orders</a></li>
                        <li><a href="manage_order2.php" data-key="t-level-1.3">Order Report</a></li>
                        <li><a href="current_day_coco_order_report.php" data-key="t-level-1.3">Current
                                Day COCO Order Report</a></li>
                        <li><a href="all_forward_orders.php" data-key="t-level-1.3">Forwarded Orders</a>
                        </li>
                        <li><a href="all_sales_invoice.php" data-key="t-level-1.3">Sales Orders JD</a>
                        </li>
                        <li><a href="order_shortage.php" data-key="t-level-1.3">Order Shortage</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <span class="menu-item" data-key="t-multi-level">Manage Retailers Orders</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                            <!-- <li><a href="jd_retailers_order_dashborad.php" data-key="t-level-1.16">JD Order
                                    Dashboard</a></li> -->
                            <!-- <li><a href="orders_retailes_dashboard.php" data-key="t-level-1.16">App Order
                                    Dashboard</a></li> -->
                        <li><a href="all_order_retailes.php" data-key="t-level-1.3">All APP Orders</a></li>
                        <li><a href="all_retail_order_current_status.php" data-key="t-level-1.3">Current Day
                                Orders Status</a></li>
                        <li><a href="all_retail_pending_app_orders.php" data-key="t-level-1.3">All Pending APP
                                Orders</a></li>
                        <li><a href="manage_retails_order2.php" data-key="t-level-1.3">Order Report</a></li>
                        <li><a href="current_day_retailes_order_report.php" data-key="t-level-1.3">Current
                                Day Retailers Order Report</a></li>
                        <li><a href="all_retail_forward_orders.php" data-key="t-level-1.3">Forwarded Orders</a>
                        </li>
                        <li><a href="all_retailes_sales_invoice.php" data-key="t-level-1.3">Sales Orders JD</a>
                        </li>
                        <li><a href="order_retailers_shortage.php" data-key="t-level-1.3">Order Shortage</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <!-- <i class="fas fa-money-check-alt icon nav-icon"></i> -->
                        <span class="menu-item" data-key="t-multi-level">Manage Inspection</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="servey_category.php" data-key="t-level-1.8"> Survey Category </a></li>
                        <li><a href="survey_questions.php" data-key="t-level-1.9"> Survey Questions </a></li>
                        <li><a href="multiple_task.php" data-key="t-level-1.10"> Plan Task</a></li>
                        <!-- <li><a href="dealers_sales_performance.php" data-key="t-level-1.11">Stations Sales
                                        Performance</a></li> -->
                        <li><a href="manage_calander.php" data-key="t-level-1.12"> Task Calander</a></li>
                        <li><a href="inspection_report.php" data-key="t-level-1.14">All Inspection</a></li>

                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

<header class="ishorizontal-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" class='small_logo' alt=""
                            style="width: 26px;height: 26px;">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" style="width: 189px;height: 36px;">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-light-sm.png" class='small_logo' alt=""
                            style="width: 26px;height: 26px;">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="30">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse"
                data-bs-target="#topnav-menu-content">
                <i class="bx bx-menu align-middle"></i>
            </button>

            <!-- start page title -->
            <div class="page-title-box align-self-center d-none d-md-block">
                <h4 class="page-title mb-0">Starter Page</h4>
            </div>
            <!-- end page title -->

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block language-switch ms-2 ms-xl-3">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="18">
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                        <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span
                            class="align-middle">English</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-search icon-sm align-middle"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <form class="p-2">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded bg-light border-0"
                                    placeholder="Search...">
                                <i class="bx bx-search search-icon"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell icon-sm align-middle"></i>
                    <span class="noti-dot bg-danger rounded-pill">4</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> Notifications </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small fw-semibold text-decoration-underline"> Mark all as
                                    read</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">James Lemire</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour
                                                ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your order is placed</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min
                                                ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min
                                                ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">Martin Gurley</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 border-bottom">
                        <h6 class="mb-0">Martin Gurley</h6>
                        <p class="mb-0 font-size-11 text-muted">martin.gurley@email.com</p>
                    </div>
                    <a class="dropdown-item" href="contacts-profile.html"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="apps-chat.html"><i
                            class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle">Messages</span></a>
                    <a class="dropdown-item" href="pages-faqs.html"><i
                            class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle">Help</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                            class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle me-3">Settings</span><span
                            class="badge bg-success-subtle text-success  ms-auto">New</span></a>
                    <a class="dropdown-item" href="auth-lock-screen.html"><i
                            class="mdi mdi-lock text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle">Lock screen</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="auth-logout.html"><i
                            class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle">Logout</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="topnav">
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-home-alt icon nav-icon"></i>
                                <span data-key="t-dashboards">Dashboards</span>
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                <a href="index.html" class="dropdown-item" data-key="t-ecommerce">Ecommerce</a>
                                <a href="dashboard-sales.html" class="dropdown-item" data-key="t-sales">Sales</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-cube icon nav-icon"></i>
                                <span data-key="t-elements">Elements</span>
                                <div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                aria-labelledby="topnav-uielement">
                                <div class="ps-2 p-lg-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div>
                                                <div class="menu-title">Elements</div>
                                                <div class="row g-0">
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-alerts.html" class="dropdown-item"
                                                                data-key="t-alerts">Alerts</a>
                                                            <a href="ui-buttons.html" class="dropdown-item"
                                                                data-key="t-buttons">Buttons</a>
                                                            <a href="ui-cards.html" class="dropdown-item"
                                                                data-key="t-cards">Cards</a>
                                                            <a href="ui-carousel.html" class="dropdown-item"
                                                                data-key="t-carousel">Carousel</a>
                                                            <a href="ui-dropdowns.html" class="dropdown-item"
                                                                data-key="t-dropdowns">Dropdowns</a>
                                                            <a href="ui-grid.html" class="dropdown-item"
                                                                data-key="t-grid">Grid</a>
                                                            <a href="ui-images.html" class="dropdown-item"
                                                                data-key="t-images">Images</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-lightbox.html" class="dropdown-item"
                                                                data-key="t-lightbox">Lightbox</a>
                                                            <a href="ui-modals.html" class="dropdown-item"
                                                                data-key="t-modals">Modals</a>
                                                            <a href="ui-offcanvas.html" class="dropdown-item"
                                                                data-key="t-offcanvas">Offcanvas</a>
                                                            <a href="ui-rangeslider.html" class="dropdown-item"
                                                                data-key="t-range-slider">Range Slider</a>
                                                            <a href="ui-progressbars.html" class="dropdown-item"
                                                                data-key="t-progress-bars">Progress Bars</a>
                                                            <a href="ui-sweet-alert.html" class="dropdown-item"
                                                                data-key="t-sweet-alert">Sweet-Alert</a>
                                                            <a href="ui-tabs-accordions.html" class="dropdown-item"
                                                                data-key="t-tabs-accordions">Tabs &
                                                                Accordions</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-typography.html" class="dropdown-item"
                                                                data-key="t-typography">Typography</a>
                                                            <a href="ui-video.html" class="dropdown-item"
                                                                data-key="t-video">Video</a>
                                                            <a href="ui-general.html" class="dropdown-item"
                                                                data-key="t-general">General</a>
                                                            <a href="ui-colors.html" class="dropdown-item"
                                                                data-key="t-colors">Colors</a>
                                                            <a href="ui-rating.html" class="dropdown-item"
                                                                data-key="t-rating">Rating</a>
                                                            <a href="ui-notifications.html" class="dropdown-item"
                                                                data-key="t-notifications">Notifications</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                <i class="bx bx-store icon nav-icon"></i>
                                <span data-key="t-apps">Apps</span>
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                <a href="apps-calendar.html" class="dropdown-item" data-key="t-calendar">Calendar</a>

                                <a href="apps-todo.html" class="dropdown-item" data-key="t-todo">Todo</a>

                                <a href="apps-file-manager.html" class="dropdown-item" data-key="t-filemanager">File
                                    Manager</a>

                                <a href="apps-chat.html" class="dropdown-item" data-key="t-chat">Chat</a>


                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                        role="button">
                                        <span data-key="t-ecommerce">Ecommerce</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                        <a href="ecommerce-products.html" class="dropdown-item"
                                            data-key="t-products">Products</a>
                                        <a href="ecommerce-product-detail.html" class="dropdown-item"
                                            data-key="t-product-detail">Product Detail</a>
                                        <a href="ecommerce-orders.html" class="dropdown-item"
                                            data-key="t-orders">Orders</a>
                                        <a href="ecommerce-customers.html" class="dropdown-item"
                                            data-key="t-customers">Customers</a>
                                        <a href="ecommerce-cart.html" class="dropdown-item" data-key="t-cart">Cart</a>
                                        <a href="ecommerce-checkout.html" class="dropdown-item"
                                            data-key="t-checkout">Checkout</a>
                                        <a href="ecommerce-shops.html" class="dropdown-item"
                                            data-key="t-shops">Shops</a>
                                        <a href="ecommerce-add-product.html" class="dropdown-item"
                                            data-key="t-add-product">Add Product</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                        role="button">
                                        <span data-key="t-email">Email</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                        <a href="email-inbox.html" class="dropdown-item" data-key="t-inbox">Inbox</a>
                                        <a href="email-read.html" class="dropdown-item" data-key="t-read-email">Read
                                            Email</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoices"
                                        role="button">
                                        <span data-key="t-invoices">Invoices</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-invoices">
                                        <a href="invoices-list.html" class="dropdown-item"
                                            data-key="t-invoice-list">Invoice List</a>
                                        <a href="invoices-detail.html" class="dropdown-item"
                                            data-key="t-invoice-detail">Invoice Detail</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                        role="button">
                                        <span data-key="t-contacts">Contacts</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                        <a href="contacts-grid.html" class="dropdown-item" data-key="t-user-grid">User
                                            Grid</a>
                                        <a href="contacts-list.html" class="dropdown-item" data-key="t-user-list">User
                                            List</a>
                                        <a href="contacts-profile.html" class="dropdown-item"
                                            data-key="t-user-profile">Profile</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components"
                                role="button">
                                <i class="bx bx-layer icon nav-icon"></i>
                                <span data-key="t-components">Components</span>
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                        role="button">
                                        <span data-key="t-forms">Forms</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                        <a href="form-elements.html" class="dropdown-item"
                                            data-key="t-form-elements">Form Elements</a>
                                        <a href="form-layouts.html" class="dropdown-item" data-key="t-form-layouts">Form
                                            Layouts</a>
                                        <a href="form-validation.html" class="dropdown-item"
                                            data-key="t-form-validation">Form Validation</a>
                                        <a href="form-advanced.html" class="dropdown-item"
                                            data-key="t-form-advanced">Form Advanced</a>
                                        <a href="form-editors.html" class="dropdown-item" data-key="t-form-editors">Form
                                            Editors</a>
                                        <a href="form-uploads.html" class="dropdown-item" data-key="t-form-upload">Form
                                            File Upload</a>
                                        <a href="form-wizard.html" class="dropdown-item" data-key="t-form-wizard">Form
                                            Wizard</a>
                                        <a href="form-mask.html" class="dropdown-item" data-key="t-form-mask">Form
                                            Mask</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                        role="button">
                                        <span data-key="t-tables">Tables</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                        <a href="tables-basic.html" class="dropdown-item"
                                            data-key="t-basic-tables">Basic Tables</a>
                                        <a href="tables-advanced.html" class="dropdown-item"
                                            data-key="t-advanced-tables">Advance Tables</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                        role="button">
                                        <span data-key="t-charts">Charts</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                        <a href="charts-apex.html" class="dropdown-item" data-key="t-apex-charts">Apex
                                            Charts</a>
                                        <a href="charts-chartjs.html" class="dropdown-item"
                                            data-key="t-chartjs-charts">Chartjs Charts</a>
                                        <a href="charts-tui.html" class="dropdown-item" data-key="t-ui-charts">Toast UI
                                            Charts</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                        role="button">
                                        <span data-key="t-icons">Icons</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                        <a href="icons-evaicons.html" class="dropdown-item" data-key="t-evaicons">Eva
                                            Icons</a>
                                        <a href="icons-boxicons.html" class="dropdown-item"
                                            data-key="t-boxicons">Boxicons</a>
                                        <a href="icons-materialdesign.html" class="dropdown-item"
                                            data-key="t-material-design">Material Design</a>
                                        <a href="icons-fontawesome.html" class="dropdown-item"
                                            data-key="t-font-awesome">Font Awesome 5</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                        role="button">
                                        <span data-key="t-maps">Maps</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-map">
                                        <a href="maps-google.html" class="dropdown-item" data-key="t-google">Google</a>
                                        <a href="maps-vector.html" class="dropdown-item" data-key="t-vector">Vector</a>
                                        <a href="maps-leaflet.html" class="dropdown-item"
                                            data-key="t-leaflet">Leaflet</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                                <i class="bx bx-file icon nav-icon"></i>
                                <span data-key="t-pages">Pages</span>
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-more">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                        id="topnav-authentication" role="button">
                                        <span data-key="t-authentication">Authentication</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-authentication">
                                        <a href="auth-login.html" class="dropdown-item" data-key="t-login">Login</a>
                                        <a href="auth-register.html" class="dropdown-item"
                                            data-key="t-register">Register</a>
                                        <a href="auth-recoverpw.html" class="dropdown-item"
                                            data-key="t-recover-password">Recover Password</a>
                                        <a href="auth-lock-screen.html" class="dropdown-item"
                                            data-key="t-lock-screen">Lock Screen</a>
                                        <a href="auth-logout.html" class="dropdown-item" data-key="t-logout">Logout</a>
                                        <a href="auth-confirm-mail.html" class="dropdown-item"
                                            data-key="t-confirm-mail">Confirm Mail</a>
                                        <a href="auth-email-verification.html" class="dropdown-item"
                                            data-key="t-email-verification">Email Verification</a>
                                        <a href="auth-two-step-verification.html" class="dropdown-item"
                                            data-key="t-two-step-verification">Two Step Verification</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                        role="button">
                                        <span data-key="t-utility">Utility</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                        <a href="pages-starter.html" class="dropdown-item"
                                            data-key="t-starter-page">Starter Page</a>
                                        <a href="pages-maintenance.html" class="dropdown-item"
                                            data-key="t-maintenance">Maintenance</a>
                                        <a href="pages-comingsoon.html" class="dropdown-item"
                                            data-key="t-coming-soon">Coming Soon</a>
                                        <a href="pages-timeline.html" class="dropdown-item"
                                            data-key="t-timeline">Timeline</a>
                                        <a href="pages-faqs.html" class="dropdown-item" data-key="t-faqs">FAQs</a>
                                        <a href="pages-pricing.html" class="dropdown-item"
                                            data-key="t-pricing">Pricing</a>
                                        <a href="pages-404.html" class="dropdown-item" data-key="t-error-404">Error
                                            404</a>
                                        <a href="pages-500.html" class="dropdown-item" data-key="t-error-500">Error
                                            500</a>
                                    </div>
                                </div>

                                <a href="layouts-horizontal.html" class="dropdown-item"
                                    data-key="t-horizontal">Horizontal</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>


<script>
    var username = '';

    function get_settings() {
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };
        console.log("<?php echo $api_url; ?>get/get_settings.php?key=03201232927")
        fetch("<?php echo $api_url; ?>get/get_settings.php?key=03201232927", requestOptions)
            .then(response => response.json())
            .then(result => {
                console.log(result)

                var username = result['name']
                var logo = result['logo']
                var color = result['color']
                var text_color = result['text_color']
                var inactive_color = result['inactive_color']


                if (color != "") {
                    $('#sidebar_color').css("background-color", color);

                }

                if (text_color != "") {

                    // $("#sidebar_color").find("*").css("color", text_color);
                    $('#sidebar_color  .active').css('color', text_color);

                }
                if (inactive_color != "") {
                    $("#sidebar_color").find("*").css("color", inactive_color);
                    $('#sidebar_color  .active').css('color', text_color);

                    // $('.active').css('color', text_color);

                }


                var image = $(".logo_image");

                // Change the src attribute of the image
                image.attr("src", "<?php echo $api_url_files; ?>" + logo);
                $(".small_logo").attr("src", "<?php echo $api_url_files; ?>" + logo);
                $('.project_name').text(username);

                console.log(username)
            })
            .catch(error => console.log('error', error));
    }
    get_settings();
</script>
<script>
    function post_new_data() {
        var user_id = "<?php echo $_SESSION['user_id'] ?>";
        var pre = "<?php echo $_SESSION['privilege'] ?>";
        var u_name = "<?php echo $_SESSION['user_name']; ?>";

        localStorage.setItem("user_id", user_id);
        localStorage.setItem("prev", pre);
        localStorage.setItem("name", u_name);
        window.open('fleet/maps-google.php', '_blank');
    }
</script>
@props(['p','btn', 'textColor','svgColor'])

<div class="container {{ $p }}">
    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 d-flex flex-column {{ $textColor }}" href="{{ route('dashboard') }}">
        Material Dashboard 2 PRO
        <span>Laravel</span>
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
        </span>
    </button>
    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
        <ul class="navbar-nav navbar-nav-hover mx-auto">
            @auth
            <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                    id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                    Pages
                    <img src=" {{ asset('assets') }}/img/down-arrow-{{ $svgColor }}.svg  " alt="down-arrow"
                        class="arrow ms-1 d-lg-block d-none">
                    <img src="{{ asset('assets') }}/img/down-arrow-dark.svg" alt="down-arrow"
                        class="arrow ms-1 d-lg-none d-block">
                </a>
                <div class="dropdown-menu dropdown-menu-animation dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3"
                    aria-labelledby="dropdownMenuPages">
                    <div class="row d-none d-lg-block">
                        <div class="col-12 px-4 py-2">
                            <div class="row">
                                <div class="col-4 position-relative">
                                    <div
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                                        Dashboards
                                    </div>
                                    <a href="{{ route('dashboard') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Analytics</span>
                                    </a>
                                    <a href="{{ route('discover') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Discover</span>
                                    </a>
                                    <a href="{{ route('sales') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Sales</span>
                                    </a>
                                    <a href="{{ route('automotive') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Automotive</span>
                                    </a>
                                    <a href="{{ route('smart-home') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Smart Home</span>
                                    </a>
                                    <div
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                        <i class="material-icons opacity-6 me-2 text-md">people</i>
                                        Users
                                    </div>
                                    <a href="{{ route('reports') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Reports</span>
                                    </a>
                                    <a href="{{ route('new-user') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">New User</span>
                                    </a>
                                    <hr class="vertical dark">
                                </div>
                                <div class="col-4 position-relative">
                                    <div
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                        <i class="material-icons opacity-6 me-2 text-md">badge</i>
                                        Profile
                                    </div>
                                    <a href="{{ route('overview') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Overview</span>
                                    </a>
                                    <a href="{{ route('projects') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Projects</span>
                                    </a>
                                    <div
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                        <i class="material-icons opacity-6 me-2 text-md">precision_manufacturing</i>
                                        Projects
                                    </div>
                                    <a href="{{ route('general') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">General</span>
                                    </a>
                                    <a href="{{ route('timeline') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Timeline</span>
                                    </a>
                                    <a href="{{ route('vr-default') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Virtual Reality</span>
                                    </a>
                                    <a href="{{ route('new-project') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">New Project</span>
                                    </a>
                                    <hr class="vertical dark">
                                </div>
                                <div class="col-4">
                                    <div
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                        <i class="material-icons opacity-6 me-2 text-md">account_balance</i>
                                        Account
                                    </div>
                                    <a href="{{ route('settings') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Settings</span>
                                    </a>
                                    <a href="{{ route('billing') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Billing</span>
                                    </a>
                                    <a href="{{ route('invoice') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Invoice</span>
                                    </a>
                                    <a href="{{ route('security') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Security</span>
                                    </a>
                                    <div
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                        <i class="material-icons opacity-6 me-2 text-md">queue_play_next</i>
                                        Extra
                                    </div>
                                    <a href="{{ route('pricing-page') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Pricing Page</span>
                                    </a>
                                    <a href="{{ route('rtl') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">RTL Page</span>
                                    </a>
                                    <a href="{{ route('widgets') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Widgets</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- responsive -->
                    <div class="d-lg-none">
                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                            <i class="material-icons text-dark opacity-6 me-2 text-md">dashboard</i>
                            Dashboards
                        </div>
                        <a href="{{ route('dashboard') }}" class="dropdown-item border-radius-md">
                            Analytics
                        </a>
                        <a href="{{ route('discover') }}" class="dropdown-item border-radius-md">
                            Discover
                        </a>
                        <a href="{{ route('sales') }}" class="dropdown-item border-radius-md">
                            Sales
                        </a>
                        <a href="{{ route('automotive') }}" class="dropdown-item border-radius-md">
                            Automotive
                        </a>
                        <a href="{{ route('smart-home') }}" class="dropdown-item border-radius-md">
                            Smart Home
                        </a>
                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                            <i class="material-icons text-dark opacity-6 me-2 text-md">people</i>
                            Users
                        </div>
                        <a href="{{ route('reports') }}" class="dropdown-item border-radius-md">
                            Reports
                        </a>
                        <a href="{{ route('new-user') }}" class="dropdown-item border-radius-md">
                            New User
                        </a>
                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                            <i class="material-icons text-dark opacity-6 me-2 text-md">badge</i>
                            Profile
                        </div>
                        <a href="{{ route('overview') }}" class="dropdown-item border-radius-md">
                            Overview
                        </a>
                        <a href="{{ route('projects') }}" class="dropdown-item border-radius-md">
                            Projects
                        </a>
                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                            <i class="material-icons text-dark opacity-6 me-2 text-md">precision_manufacturing</i>
                            Projects
                        </div>
                        <a href="{{ route('general') }}" class="dropdown-item border-radius-md">
                            General
                        </a>
                        <a href="{{ route('timeline') }}" class="dropdown-item border-radius-md">
                            Timeline
                        </a>
                        <a href="{{ route('vr-default') }}" class="dropdown-item border-radius-md">
                            Virtual Reality
                        </a>
                        <a href="{{ route('new-project') }}" class="dropdown-item border-radius-md">
                            New Project
                        </a>
                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                            <i class="material-icons text-dark opacity-6 me-2 text-md">account_balance</i>
                            Account
                        </div>
                        <a href="{{ route('settings') }}" class="dropdown-item border-radius-md">
                            Settings
                        </a>
                        <a href="{{ route('billing') }}" class="dropdown-item border-radius-md">
                            Billing
                        </a>
                        <a href="{{ route('invoice') }}" class="dropdown-item border-radius-md">
                            Invoice
                        </a>
                        <a href="{{ route('security') }}" class="dropdown-item border-radius-md">
                            Security
                        </a>
                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                            <i class="material-icons text-dark opacity-6 me-2 text-md">queue_play_next</i>
                            Extra
                        </div>
                        <a href="{{ route('pricing-page') }}" class="dropdown-item border-radius-md">
                            Pricing Page
                        </a>
                        <a href="{{ route('rtl') }}" class="dropdown-item border-radius-md">
                            RTL Page
                        </a>
                        <a href="{{ route('widgets') }}" class="dropdown-item border-radius-md">
                            Widgets
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                    id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                    Authentication
                    <img src=" {{ asset('assets') }}/img/down-arrow-{{ $svgColor }}.svg " alt="down-arrow"
                        class="arrow ms-1 d-lg-block d-none">
                    <img src="{{ asset('assets') }}/img/down-arrow-dark.svg" alt="down-arrow"
                        class="arrow ms-1 d-lg-none d-block">
                </a>
                <div class="dropdown-menu dropdown-menu-animation dropdown-md border-radius-xl p-3 mt-0 mt-lg-3"
                    aria-labelledby="dropdownMenuAccount">
                    <div class="d-none d-lg-flex">
                        <div class="col-12 ps-0 d-flex justify-content-center flex-column">
                            <ul class="list-group">
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                        id="dropdownSignIn">
                                        <i class="material-icons opacity-6 me-2 text-md">login</i>
                                        <span>Sign In</span>
                                        <img src="{{ asset('assets') }}/img/down-arrow.svg" alt="down-arrow"
                                            class="arrow ms-auto">
                                    </a>
                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignIn">
                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                            href="{{ route('basic-sign-in') }}">
                                            <span>Basic</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                            href="{{ route('cover-sign-in') }}">
                                            <span>Cover</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md"
                                            href="{{ route('illustration-sign-in') }}">
                                            <span>Illustration</span>
                                        </a>
                                    </div>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                        id="dropdownSignUp">
                                        <i class="material-icons opacity-6 me-2 text-md">assignment</i>
                                        <span>Sign Up</span>
                                        <img src="{{ asset('assets') }}/img/down-arrow.svg" alt="down-arrow"
                                            class="arrow ms-auto">
                                    </a>
                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignUp">
                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                            href="{{ route('basic-sign-up') }}">
                                            <span>Basic</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                            href="{{ route('cover-sign-up') }}">
                                            <span>Cover</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md"
                                            href="{{ route('illustration-sign-up') }}">
                                            <span>Illustration</span>
                                        </a>
                                    </div>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                        id="dropdownPasswordReset">
                                        <i class="material-icons opacity-6 me-2 text-md">restart_alt</i>
                                        <span>Reset Password</span>
                                        <img src="{{ asset('assets') }}/img/down-arrow.svg" alt="down-arrow"
                                            class="arrow ms-auto">
                                    </a>
                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownPasswordReset">
                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                            href="{{ route('basic-reset') }}">
                                            <span>Basic</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                            href="{{ route('cover-reset') }}">
                                            <span>Cover</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md"
                                            href="{{ route('illustration-reset') }}">
                                            <span>Illustration</span>
                                        </a>
                                    </div>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                        id="dropdownLock">
                                        <i class="material-icons opacity-6 me-2 text-md">lock</i>
                                        <span>Lock</span>
                                        <img src="{{ asset('assets') }}/img/down-arrow.svg" alt="down-arrow"
                                            class="arrow ms-auto">
                                    </a>
                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownLock">
                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                            href="{{ route('basic-lock') }}">
                                            <span>Basic</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                            href="{{ route('cover-lock') }}">
                                            <span>Cover</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md"
                                            href="{{ route('illustration-lock') }}">
                                            <span>Illustration</span>
                                        </a>
                                    </div>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                        id="dropdown2fa">
                                        <i class="material-icons opacity-6 me-2 text-md">admin_panel_settings</i>
                                        <span>2-Step Verification</span>
                                        <img src="{{ asset('assets') }}/img/down-arrow.svg" alt="down-arrow"
                                            class="arrow ms-auto">
                                    </a>
                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdown2fa">
                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                            href="{{ route('basic-verification') }}">
                                            <span>Basic</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                            href="{{ route('cover-verification') }}">
                                            <span>Cover</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md"
                                            href="{{ route('illustration-verification') }}">
                                            <span>Illustration</span>
                                        </a>
                                    </div>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                        id="dropdownError">
                                        <i class="material-icons opacity-6 me-2 text-md">warning</i>
                                        <span>Error</span>
                                        <img src="{{ asset('assets') }}/img/down-arrow.svg" alt="down-arrow"
                                            class="arrow ms-auto">
                                    </a>
                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownError">
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ route('404') }}">
                                            <span>404</span>
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md" href="{{ route('500') }}">
                                            <span>500</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row d-lg-none">
                        <div class="col-12 d-flex justify-content-center flex-column">
                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                <i class="material-icons opacity-6 me-2 text-md">login</i>
                                Sign In
                            </h6>
                            <a href="{{ route('basic-sign-in') }}" class="dropdown-item border-radius-md ps-4">
                                Basic
                            </a>
                            <a href="{{ route('cover-sign-in') }}" class="dropdown-item border-radius-md ps-4">
                                Cover
                            </a>
                            <a href="{{ route('illustration-sign-in') }}" class="dropdown-item border-radius-md ps-4">
                                Illustration
                            </a>
                            <h6
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <i class="material-icons opacity-6 me-2 text-md">assignment</i>
                                Sign Up
                            </h6>
                            <a href="{{ route('basic-sign-up') }}" class="dropdown-item border-radius-md ps-4">
                                Basic
                            </a>
                            <a href="{{ route('cover-sign-up') }}" class="dropdown-item border-radius-md ps-4">
                                Cover
                            </a>
                            <a href="{{ route('illustration-sign-up') }}" class="dropdown-item border-radius-md ps-4">
                                Illustration
                            </a>
                            <h6
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <i class="material-icons opacity-6 me-2 text-md">restart_alt</i>
                                Reset Password
                            </h6>
                            <a href="{{ route('basic-reset') }}" class="dropdown-item border-radius-md ps-4">
                                Basic
                            </a>
                            <a href="{{ route('cover-reset') }}" class="dropdown-item border-radius-md ps-4">
                                Cover
                            </a>
                            <a href="{{ route('illustration-reset') }}" class="dropdown-item border-radius-md ps-4">
                                Illustation
                            </a>
                            <h6
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <i class="material-icons opacity-6 me-2 text-md">lock</i>
                                Lock
                            </h6>
                            <a href="{{ route('basic-lock') }}" class="dropdown-item border-radius-md ps-4">
                                Basic
                            </a>
                            <a href="{{ route('cover-lock') }}" class="dropdown-item border-radius-md ps-4">
                                Cover
                            </a>
                            <a href="{{ route('illustration-lock') }}" class="dropdown-item border-radius-md ps-4">
                                Illustration
                            </a>
                            <h6
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <i class="material-icons opacity-6 me-2 text-md">admin_panel_settings</i>
                                2-Step Verification
                            </h6>
                            <a href="{{ route('basic-verification') }}" class="dropdown-item border-radius-md ps-4">
                                Basic
                            </a>
                            <a href="{{ route('cover-verification') }}" class="dropdown-item border-radius-md ps-4">
                                Cover
                            </a>
                            <a href="{{ route('illustration-verification') }}"
                                class="dropdown-item border-radius-md ps-4">
                                Illustration
                            </a>
                            <h6
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <i class="material-icons opacity-6 me-2 text-md">warning</i>
                                Error
                            </h6>
                            <a href="{{ route('404') }}" class="dropdown-item border-radius-md ps-4">
                                404
                            </a>
                            <a href="{{ route('500') }}" class="dropdown-item border-radius-md ps-4">
                                500
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                    id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                    Applications
                    <img src=" {{ asset('assets') }}/img/down-arrow-{{ $svgColor }}.svg " alt="down-arrow"
                        class="arrow ms-1 d-lg-block d-none">
                    <img src="{{ asset('assets') }}/img/down-arrow-dark.svg" alt="down-arrow"
                        class="arrow ms-1 d-lg-none d-block">
                </a>
                <div class="dropdown-menu dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                    aria-labelledby="dropdownMenuBlocks">
                    <div class="d-none d-lg-block">
                        <ul class="list-group">
                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md mb-2" href="{{ route('kanban') }}">
                                    <div class="d-flex align-items-center text-dark">
                                        <i class="material-icons opacity-6 me-2 text-md">widgets</i>
                                        Kanban
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md mb-2" href="{{ route('wizard') }}">
                                    <div class="d-flex align-items-center text-dark">
                                        <i class="material-icons opacity-6 me-2 text-md">import_contacts</i>
                                        Wizard
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md mb-2" href="{{ route('datatables') }}">
                                    <div class="d-flex align-items-center text-dark">
                                        <i class="material-icons opacity-6 me-2 text-md">backup_table</i>
                                        DataTables
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md" href="{{ route('calendar') }}">
                                    <div class="d-flex align-items-center text-dark">
                                        <i class="material-icons opacity-6 me-2 text-md">event</i>
                                        Calendar
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- responsive -->
                    <div class="row d-lg-none">
                        <div class="col-md-12">
                            <a class="py-2 ps-3 border-radius-md" href="{{ route('kanban') }}">
                                <div class="d-flex align-items-center text-dark">
                                    <i class="material-icons opacity-6 me-2 text-md">widgets</i>
                                    Kanban
                                </div>
                            </a>
                            <a class="py-2 ps-3 border-radius-md" href="{{ route('wizard') }}">
                                <div class="d-flex align-items-center text-dark">
                                    <i class="material-icons opacity-6 me-2 text-md">import_contacts</i>
                                    Wizard
                                </div>
                            </a>
                            <a class="py-2 ps-3 border-radius-md" href="{{ route('datatables') }}">
                                <div class="d-flex align-items-center text-dark">
                                    <i class="material-icons opacity-6 me-2 text-md">backup_table</i>
                                    DataTables
                                </div>
                            </a>
                            <a class="py-2 ps-3 border-radius-md" href="{{ route('calendar') }}">
                                <div class="d-flex align-items-center text-dark">
                                    <i class="material-icons opacity-6 me-2 text-md">event</i>
                                    Calendar
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                    id="dropdownMenuEcommerce" data-bs-toggle="dropdown" aria-expanded="false">
                    Ecommerce
                    <img src=" {{ asset('assets') }}/img/down-arrow-{{ $svgColor }}.svg  " alt="down-arrow"
                        class="arrow ms-1 d-lg-block d-none">
                    <img src="{{ asset('assets') }}/img/down-arrow-dark.svg" alt="down-arrow"
                        class="arrow ms-1 d-lg-none d-block">
                </a>
                <div class="dropdown-menu dropdown-menu-animation dropdown-lg p-3 border-radius-xl mt-0 mt-lg-3"
                    aria-labelledby="dropdownMenuEcommerce">
                    <div class="row d-none d-lg-block">
                        <div class="col-12 px-4 py-2">
                            <div class="row">
                                <div class="col-6 position-relative">
                                    <div
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                        <i class="material-icons opacity-6 me-2 text-md">shopping_cart</i>
                                        Orders
                                    </div>
                                    <a href="{{ route('list') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Order List</span>
                                    </a>
                                    <a href="{{ route('details') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Order Details</span>
                                    </a>
                                    <div
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                        <i class="material-icons opacity-6 me-2 text-md">store</i>
                                        General
                                    </div>
                                    <a href="{{ route('overview') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Overview</span>
                                    </a>
                                    <a href="{{ route('referral') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Referral</span>
                                    </a>
                                    <hr class="vertical dark">
                                </div>
                                <div class="col-6 position-relative">
                                    <div
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                        <i class="material-icons opacity-6 me-2 text-md">memory</i>
                                        Products
                                    </div>
                                    <a href="{{ route('new-product') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">New Product</span>
                                    </a>
                                    <a href="{{ route('edit-product') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Edit Product</span>
                                    </a>
                                    <a href="{{ route('product-page') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Product Page</span>
                                    </a>
                                    <a href="{{ route('products-list') }}" class="dropdown-item border-radius-md">
                                        <span class="ps-2">Products List</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- responsive -->
                    <div class="d-lg-none">
                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                            <i class="material-icons opacity-6 me-2 text-md">shopping_cart</i>
                            Orders
                        </div>
                        <a href="{{ route('list') }}" class="dropdown-item border-radius-md">
                            Order List
                        </a>
                        <a href="{{ route('details') }}" class="dropdown-item border-radius-md">
                            Order Details
                        </a>
                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                            <i class="material-icons opacity-6 me-2 text-md">store</i>
                            General
                        </div>
                        <a href="{{ route('overview') }}" class="dropdown-item border-radius-md">
                            Overview
                        </a>
                        <a href="{{ route('referral') }}" class="dropdown-item border-radius-md">
                            Referral
                        </a>
                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                            <i class="material-icons opacity-6 me-2 text-md">memory</i>
                            Products
                        </div>
                        <a href="{{ route('new-product') }}" class="dropdown-item border-radius-md">
                            New Product
                        </a>
                        <a href="{{ route('edit-product') }}" class="dropdown-item border-radius-md">
                            Edit Product
                        </a>
                        <a href="{{ route('product-page') }}" class="dropdown-item border-radius-md">
                            Product Page
                        </a>
                        <a href="{{ route('products-list') }}" class="dropdown-item border-radius-md">
                            Products List
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                    id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                    Docs
                    <img src=" {{ asset('assets') }}/img/down-arrow-{{ $svgColor }}.svg " alt="down-arrow"
                        class="arrow ms-1 d-lg-block d-none">
                    <img src="{{ asset('assets') }}/img/down-arrow-dark.svg" alt="down-arrow"
                        class="arrow ms-1 d-lg-none d-block">
                </a>
                <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                    aria-labelledby="dropdownMenuDocs">
                    <div class="d-none d-lg-block">
                        <ul class="list-group">
                            <li class="nav-item list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md text-dark"
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons opacity-6 me-2 text-md">article</i>
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                            Getting Started</h6>
                                    </div>
                                    <span class="text-sm opacity-8 ps-4">All about overview, quick start, license and
                                        contents</span>
                                </a>
                            </li>
                            <li class="nav-item list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md text-dark"
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/colors/material-dashboard">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons opacity-6 me-2 text-md">grading</i>
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                            Foundation</h6>
                                    </div>
                                    <span class="text-sm opacity-8 ps-4">See our colors, icons and typography</span>
                                </a>
                            </li>
                            <li class="nav-item list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md text-dark"
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-dashboard">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons opacity-6 me-2 text-md">apps</i>
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                            Components</h6>
                                    </div>
                                    <span class="text-sm opacity-8 ps-4">Explore our collection of fully designed
                                        components</span>
                                </a>
                            </li>
                            <li class="nav-item list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md text-dark"
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-dashboard">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons opacity-6 me-2 text-md">extension</i>
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                            Plugins</h6>
                                    </div>
                                    <span class="text-sm opacity-8 ps-4">Check how you can integrate our plugins</span>
                                </a>
                            </li>
                            <li class="nav-item list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md text-dark"
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-dashboard">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons opacity-6 me-2 text-md">swipe</i>
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                            Utility Classes</h6>
                                    </div>
                                    <span class="text-sm opacity-8 ps-4">For those who want flexibility, use our utility
                                        classes</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row d-lg-none">
                        <div class="col-md-12 g-0">
                            <a class="dropdown-item border-radius-md text-dark" href="">
                                <div class="d-flex align-items-center">
                                    <i class="material-icons opacity-6 me-2 text-md">article</i>
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                        Getting Started</h6>
                                </div>
                                <span class="text-sm ps-4">All about overview, quick start, license and contents</span>
                            </a>
                            <a class="dropdown-item border-radius-md text-dark" href="">
                                <div class="d-flex align-items-center">
                                    <i class="material-icons opacity-6 me-2 text-md">grading</i>
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                        Foundation</h6>
                                </div>
                                <span class="text-sm ps-4">See our colors, icons and typography</span>
                            </a>
                            <a class="dropdown-item border-radius-md text-dark" href="">
                                <div class="d-flex align-items-center">
                                    <i class="material-icons opacity-6 me-2 text-md">apps</i>
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                        Components</h6>
                                </div>
                                <span class="text-sm ps-4">Explore our collection of fully designed components</span>
                            </a>
                            <a class="dropdown-item border-radius-md text-dark" href="">
                                <div class="d-flex align-items-center">
                                    <i class="material-icons opacity-6 me-2 text-md">extension</i>
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                        Plugins</h6>
                                    <span class="text-sm ps-4">Check how you can integrate our plugins</span>
                                </div>
                            </a>
                            <a class="dropdown-item border-radius-md text-dark" href="">
                                <div class="d-flex align-items-center">
                                    <i class="material-icons opacity-6 me-2 text-md">swipe</i>
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                        Utility Classes</h6>
                                    <span class="text-sm ps-4">All about overview, quick start, license and
                                        contents</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            @endauth
            @guest
            <li class="nav-item">
                <a class="nav-link mx-auto" href="{{ route('register') }}">
                    <i class="fas fa-user-circle opacity-6 text-white me-1"></i>
                    Sign Up
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-auto" href="{{ route('login') }}">
                    <i class="fas fa-key opacity-6 text-white me-1"></i>
                    Sign In
                </a>
            </li>
            @endguest
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
            <li class="nav-item">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro-laravel"
                    class="btn btn-sm  {{ $btn }}  mb-0" target="_blank">Buy Now</a>
            </li>
        </ul>
    </div>
</div>

<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <aside id="side-overlay">
        <div class="bg-image">
            <div class="bg-primary-op">
                <div class="content-header">
                    <a class="img-link me-1" href="#">
                        <img class="img-avatar img-avatar48" src="{{ asset('user.png') }}">
                    </a>
                    <div class="ms-2">
                        <a class="text-white fw-semibold" href="#"><span class="userNickname">{{ $checkUserID->nickname }}</span> <i class="fs-sm text-gray">{{ $userDashboardID }}</i></a>
                        <div class="text-white-75 fs-sm">Wandering Adventurer</div>
                    </div>
                    <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fad fa-times-circle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-side">
            <div class="block block-transparent pull-x pull-t mb-0">
                <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="so-profile-tab" data-bs-toggle="tab" data-bs-target="#so-profile" role="tab" aria-controls="so-profile" aria-selected="false">
                            <i class="fad fa-fw fa-edit"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="so-settings-tab" data-bs-toggle="tab" data-bs-target="#so-settings" role="tab" aria-controls="so-settings" aria-selected="true">
                            <i class="fad fa-fw fa-cog"></i>
                        </button>
                    </li>
                </ul>
                <div class="block-content tab-content overflow-hidden">
                    <div class="tab-pane pull-x fade fade-up active show" id="so-profile" role="tabpanel" aria-labelledby="so-profile-tab" tabindex="0">
                        <form id="updateProfileForm">
                            <div class="block mb-0">
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Personal Information</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="mb-4">
                                        <label class="form-label" for="profileNickname">Nickname</label>
                                        <input type="text" class="form-control" id="profileNickname" name="profileNickname" value="{{ $checkUserID->nickname }}" required>
                                        <small class='nickname_minchar text-danger d-none'>Nickname must be atleast 3 characters and a maximum of 20.</small>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="profileUsername">Username</label>
                                        <input type="text" class="form-control" id="profileUsername" name="profileUsername" value="{{ $checkUserID->username }}" required>
                                        <small class='username_minchar text-danger d-none'>Username must be atleast 6 characters and only letter, number or letter w/ number is allowed.</small>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="profileEmail">Email</label>
                                        <input type="email" class="form-control" id="profileEmail" name="profileEmail" value="{{ $checkUserID->email }}" required>
                                        <small class='email_invalid text-danger d-none'>Enter a valid email address.</small>
                                    </div>
                                </div>
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Password Update</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="mb-4">
                                        <label class="form-label" for="profileCurrentPassword">Current Password</label>
                                        <input type="password" class="form-control passField" id="profileCurrentPassword" name="profileCurrentPassword">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="profileNewPassword">New Password</label>
                                        <input type="password" class="form-control passField" id="profileNewPassword" name="profileNewPassword">
                                        <small class='password_minchar text-danger d-none'>Password must be 8 characters long.</small>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="profileNewPasswordConfirm">Confirm New Password</label>
                                        <input type="password" class="form-control passField" id="profileNewPasswordConfirm" name="profileNewPasswordConfirm">
                                        <small class='password_match text-danger d-none'>Confirm password must match the password.</small>
                                    </div>
                                </div>
                                <div class="block-content block-content-full border-top">
                                    <button type="submit" class="btn w-100 btn-alt-primary">
                                        <i class="fad fa-fw fa-save me-1 opacity-50"></i> Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane pull-x fade fade-up" id="so-settings" role="tabpanel" aria-labelledby="so-settings-tab" tabindex="0">
                        <div class="block mb-0">
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Header</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row g-sm text-center mb-2">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Content <small class="text-muted">(For widescreen only)</small></span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row g-sm text-center">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <header id="page-header">
        <div class="content-header">
            <div class="space-x-1">
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fad fa-fw fa-bars"></i>
                </button>
            </div>
            <div class="space-x-1">
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fad fa-fw fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block userNickname">@if ($checkUserID->nickname == NULL) {{ 'User' }} @else {{ $checkUserID->nickname }} @endif</span>
                        <i class="fad fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            User Options
                        </div>
                        <div class="p-2">
                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                <i class="fad fa-user-cog"></i> Settings
                            </a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-logout">
                                <i class="fad fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fad fa-fw fa-bell"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            Notifications
                        </div>
                        <ul class="nav-items my-2">
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fad fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">App was updated to v5.6!</div>
                                        <div class="text-muted">3 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fad fa-fw fa-user-plus text-info"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">New Subscriber was added! You now have 2580!</div>
                                        <div class="text-muted">10 min ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
                                <i class="fad fa-fw fa-eye opacity-50 me-1"></i> View All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav id="sidebar" aria-label="Main Navigation">
        <div class="bg-header-dark">
            <div class="content-header bg-white-5">
                <a class="text-white tracking-wider position-relative" href="{{ env('APP_URL') }}">
                    <img class="dashboard_icon" src="{{ asset('favicon.ico') }}">
                    <span class="smini-hidden position-absolute dashboard_title">Share<span class="opacity-75">Trail</span></span>
                </a>
                <div>
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="fad fa" onclick="Dashmix.layout('dark_mode_toggle');">
                        <i class="fad fa-moon" id="dark-mode-toggler"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                        <i class="fad fa-arrow-alt-to-left"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="js-sidebar-scroll">
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link pagenav active" data-navigation="nav_dashboard" href="#">
                            <i class="nav-main-link-icon fad fa-chart-network"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Pages</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link pagenav" data-navigation="nav_groupexplorer" href="#">
                            <i class="nav-main-link-icon fad fa-users"></i>
                            <span class="nav-main-link-name">Group Explorer</span>
                        </a>
                        <a class="nav-main-link pagenav" data-navigation="nav_chat" href="#">
                            <i class="nav-main-link-icon fad fa-comments-alt"></i>
                            <span class="nav-main-link-name">Chat</span>
                            <span class="nav-main-link-badge badge bg-info">8</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main id="main-container">
        <div class="content">
            {{-- <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Dashboard
                    </h1>
                    <p class="fw-medium mb-0 text-muted">
                        Welcome, <span class="userNickname">{{ $checkUserID->nickname }}</span>! You have <a class="fw-medium" href="javascript:void(0)">8 new notifications</a>.
                    </p>
                </div>
            </div> --}}
        </div>
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Geolocation Map
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="testmapframe col-md-12 col-xl-4 d-md-flex align-items-md-center w-100" style="height: 350px">
                            <div id="map" style="width: 100%; height: 100%;"></div>
                        </div>
                    </div>
                    <script>
                        function getCoordinate() {
                            if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(
                                    function(position) {
                                        const lat = position.coords.latitude;
                                        const long = position.coords.longitude;

                                        var map = L.map('map').setView([lat, long], 16);
                                        var marker = L.marker([lat, long]);

                                        var polygon = L.polygon([
                                            [lat, long],
                                            [lat + 0.02, long + 0.05],
                                            [lat + 0.04, long + 0.02]
                                        ], {
                                            color: 'red',
                                            weight: 1,
                                            fillColor: '#00000000',
                                            // dashArray: '10,10'
                                        }).addTo(map);

                                        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                            maxZoom: 19,
                                        }).addTo(map);
                                        
                                        marker.bindTooltip('(Me)', {
                                            direction: 'left',
                                            className: "marker_label",
                                            offset: [-35, 10],
                                            permanent: true
                                        }).addTo(map);

                                        setTimeout(() => {
                                            map.setView([lat + 0.005, long + 0.007], 16);
                                            marker.setLatLng([lat + 0.005, long + 0.007]);
                                        }, 2000);

                                        $("a[href='https://leafletjs.com']").parent().remove();

                                        $('.testmapframe').height(window.innerHeight * 0.45);
                                    },
                                    function(error) {
                                        console.log("Get Location Permission was rejected.");
                                    }
                                );
                            } else {
                                console.log("Geolocation not supported.");
                            }
                        }
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <div>
                                <i class="fa fa-2x fa-arrow-up text-primary"></i>
                            </div>
                            <div class="ms-3 text-end">
                                <p class="fs-3 fw-medium mb-0">
                                    + 30%
                                </p>
                                <p class="text-muted mb-0">
                                    Earnings
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <div>
                                <i class="far fa-2x fa-user-circle text-success"></i>
                            </div>
                            <div class="ms-3 text-end">
                                <p class="fs-3 fw-medium mb-0">
                                    +78%
                                </p>
                                <p class="text-muted mb-0">
                                    Users
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <p class="fs-3 fw-medium mb-0">
                                    960
                                </p>
                                <p class="text-muted mb-0">
                                    Sales
                                </p>
                            </div>
                            <div>
                                <i class="fa fa-2x fa-chart-area text-danger"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <p class="fs-3 fw-medium mb-0">
                                    359
                                </p>
                                <p class="text-muted mb-0">
                                    Projects
                                </p>
                            </div>
                            <div>
                                <i class="fa fa-2x fa-box text-warning"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <strong>{{ env('APP_NAME').' '.env('APP_VERSION') }}</strong> © <span data-toggle="year-copy" class="js-year-copy-enabled">@php echo date('Y'); @endphp</span>
                </div>
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fad fa-heart text-danger"></i> by <a class="fw-semibold" href="https://facebook.com/uid.louiejayibanez2" target="_blank">Louie</a>
                </div>
            </div>
        </div>
    </footer>
</div>

{{-- Modals --}}
<div class="modal fade" id="modal-onboarding" tabindex="-1" aria-labelledby="modal-onboarding" aria-modal="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="onboardingForm">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-content">
                        <h3>Welcome to {{ env('APP_NAME'); }} ❤️</h3>
                        <p>Before you proceed, let us know your nickname.</p> 
                        <input type="text" class="form-control" id="onboardingNickname" name="onboardingNickname" placeholder="Enter your nickname here..." required> 
                        <small class="onboardingnickname_minchar text-danger d-none">Nickname must be atleast 3 characters and a maximum of 20.</small>
                        <p></p>
                    </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="submit" class="btn btn-primary">Proceed</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-logout" tabindex="-1" aria-labelledby="modal-logout" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="logoutForm">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-danger">
                        <h3 class="block-title"><i class="fad fa-exclamation-triangle"></i>&nbsp;&nbsp; Logout</h3>
                    </div>
                    <div class="block-content">
                        <p>Are you sure you want to logout?</p>
                    </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn border-0" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Proceed</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Process script --}}
@if($checkUserID->nickname == NULL)
    <script>
        $(document).ready(function () {
            $('#modal-onboarding').modal('show');
        });
    </script>
@endif

<script>
    $(document).ready(function () {
        window.getCoordinate();
    });

    // Page Navigation Process
    $('.pagenav').click(function (e) { 
        e.preventDefault();
        let navigation = $(this).attr('data-navigation');
        let screenwidth = window.outerWidth;
        $('.pagenav').removeClass('active');
        $(this).addClass('active');

        if (screenwidth <= 991) {
            Dashmix.layout('sidebar_close');
        }

        switch (navigation) {
            case "nav_dashboard":
                // ...
                break;
            case "nav_groupexplorer":
                // ...
                break;
            case "nav_chat":
                // ...
                break;
        }
    });


    $('#logoutForm').submit(function(e) {
        e.preventDefault(); 
        $.ajax({
            url: "{{ route('logoutUser') }}",
            method: "POST",
            data: $('#logoutForm').serialize() + "&_token=" + window.csrf_token, 
            beforeSend: function () {
                formDisabler($('#logoutForm'), true);
            },
            success: function(response) {
                setTimeout(function(){ 
                    $('#customLoader').show();
                    window.location.reload(true);   
                    formDisabler($('#logoutForm'), false); 
                }, 1000);
            },
            error: function(response) {
                setTimeout(function(){ 
                    formDisabler($('#logoutForm'), false); 
                }, 1000);
            },
        });
    });

    $('#onboardingForm').submit(function(e) {
        const nickname = $('#onboardingNickname').val();
        e.preventDefault(); 
        $.ajax({
            url: "{{ route('updateNickname') }}",
            method: "POST",
            data: $('#onboardingForm').serialize() + "&_token=" + window.csrf_token, 
            beforeSend: function () {
                formDisabler($('#onboardingForm'), true);
            },
            success: function(response) {
                setTimeout(function(){ 
                    $('#modal-onboarding').modal('hide');
                    $('.userNickname').text(nickname);
                    $('#profileNickname').val(nickname);
                    formDisabler($('#onboardingForm'), false); 
                }, 1000);
            },
            error: function(response) {
                setTimeout(function(){ 
                    if (response.responseJSON.error == "nickname_update_failed") {
                        notification('error', 'Error', 'Failed to update nickname.', 'bottomCenter', 3000);
                    }
                    formDisabler($('#onboardingForm'), false); 
                }, 1000);
            },
        });
    });

    $('#updateProfileForm').submit(function(e) {
        const nickname = $('#profileNickname').val();
        e.preventDefault(); 
        $.ajax({
            url: "{{ route('updateUser') }}",
            method: "POST",
            data: $('#updateProfileForm').serialize() + "&_token=" + window.csrf_token, 
            beforeSend: function () {
                formDisabler($('#updateProfileForm'), true);
            },
            success: function(response) {
                setTimeout(function(){ 
                    $('.userNickname').text(nickname);
                    $('.passField').val(null).keyup();
                    notification('success', 'Success', response.message, 'bottomCenter', 3000);
                    formDisabler($('#updateProfileForm'), false); 
                }, 1000);
            },
            error: function(response) {
                setTimeout(function(){
                    if (response.responseJSON.error == "incorrect_current_password") {
                        notification('error', 'Error', 'Incorrect current password.', 'bottomCenter', 3000);
                    } else if (response.responseJSON.error == "user_update_failed") {
                        notification('error', 'Error', 'Failed to update user profile.', 'bottomCenter', 3000);
                    }
                    formDisabler($('#updateProfileForm'), false); 
                }, 1000);
            },
        });
    });

</script>
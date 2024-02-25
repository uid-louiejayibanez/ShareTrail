<div id="page-container">
    <main id="main-container">
        <div class="hero-static d-flex align-items-center">
            <div class="content">
                <div class="row justify-content-center push">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="block block-rounded mb-0 signInCard d-non">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Sign In</h3>
                                <div class="block-options">
                                    <a class="text-muted fs-sm signUpBtn" href="#"><i class="fad fa-user-plus"></i>&nbsp;&nbsp;Not a member? Sign up here</a>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5-new">
                                    <h1 class="h2 mb-1">{{ env('APP_NAME') }}</h1>
                                    <p class="fw-medium text-muted">Welcome to {{ env('APP_NAME') }}, your go-to platform for sharing your real-time whereabouts with friends and family.</p>
                                    <form id="loginForm"> 
                                        <div class="py-3">
                                            <div class="mb-3">
                                                <input type="text" class="form-control form-control-alt form-control-lg" name="loginUsername" placeholder="Username" required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="password" class="form-control form-control-alt form-control-lg" name="loginPassword" placeholder="Password" required>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <div class="float-start">
                                                        <input class="form-check-input" type="checkbox" id="loginRemember" name="loginRemember">
                                                        <label class="form-check-label" for="loginRemember">Remember Me</label>
                                                    </div>
                                                    <div class="float-end">
                                                        <a class="forgotPasswordLink" href="#">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn w-100 btn-primary"><i class="fad fa-fw fa-sign-in-alt opacity-50"></i>&nbsp;&nbsp;Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="block block-rounded mb-0 signUpCard d-none">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Create an Account</h3>
                                <div class="block-options">
                                    <a class="text-muted fs-sm signInBtn" href="#"><i class="fad fa-sign-in-alt"></i>&nbsp;&nbsp;Sign In</a>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5-new">
                                    <h1 class="h2 mb-1">{{ env('APP_NAME'); }}</h1>
                                    <p class="fw-medium text-muted">Please fill the following details to create a new account.</p>
                                    <form id="registrationForm">
                                        <div class="py-3">
                                            <div class="mb-3">
                                                <input type="text" class="form-control form-control-lg form-control-alt" name="registerUsername" placeholder="Username" minlength="6" required>
                                                <small class='username_minchar text-danger d-none'>Username must be atleast 6 characters and only letter, number or letter w/ number is allowed.</small>
                                            </div>
                                            <div class="mb-3">
                                                <input type="email" class="form-control form-control-lg form-control-alt" name="registerEmail" placeholder="Email" required>
                                                <small class='email_invalid text-danger d-none'>Enter a valid email address.</small>
                                            </div>
                                            <div class="mb-3">
                                                <input type="password" class="form-control form-control-lg form-control-alt" name="registerPassword" placeholder="Password" minlength="8" required>
                                                <small class='password_minchar text-danger d-none'>Password must be 8 characters long.</small>
                                            </div>
                                            <div class="mb-3">
                                                <input type="password" class="form-control form-control-lg form-control-alt" name="registerPasswordConfirm" placeholder="Confirm Password" minlength="8" required>
                                                <small class='password_match text-danger d-none'>Confirm password must match the password.</small>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <div class="float-start">
                                                        <input class="form-check-input" type="checkbox" id="signupTerms" required>
                                                        <label class="form-check-label" for="signupTerms">I agree to <a class="viewTerms" href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">Terms & Conditions</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn w-100 btn-alt-success"><i class="fad fa-user-plus"></i>&nbsp;&nbsp;Sign Up</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal fade" id="modal-terms" tabindex="-1" aria-labelledby="modal-terms" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="block block-themed block-transparent mb-0">
                                            <div class="block-header bg-primary-dark">
                                                <h3 class="block-title"><i class="fad fa-file-signature"></i>&nbsp;&nbsp;Terms & Conditions</h3>
                                                {{-- <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-fw fa-times"></i></button>
                                                </div> --}}
                                            </div>
                                            <div class="block-content">
                                                <p>Last Updated: September 20, 2023</p>
                                                <p>These Terms and Conditions govern your use of the {{ env('APP_NAME') }} application. By accessing or using the Service, you agree to comply with and be bound by these Terms. If you do not agree to these Terms, please do not use the Service.</p>
                                                <p><strong>1. Acceptance of Terms</strong></p>
                                                <p>By using {{ env('APP_NAME') }}, you affirm that you are at least 18 years of age or have obtained parental/guardian consent to use the Service. You agree to abide by these Terms and any additional guidelines and rules that may be posted on the Service.</p>
                                                <p><strong>2. User Registration</strong></p>
                                                <p>a. To use certain features of the Service, you may be required to register for an account. You must provide accurate, valid, and complete information during the registration process.</p>
                                                <p>b. You are responsible for maintaining the confidentiality of your account credentials, and you are solely responsible for all activities that occur under your account.</p>
                                                <p><strong>3. Privacy Policy</strong></p>
                                                <p>a. <u>Collection and Use of Personal Information</u>: Our Privacy Policy governs the collection, use, and protection of your personal information. The data collected is used exclusively within {{ env('APP_NAME') }} and is not shared with third parties. By utilizing {{ env('APP_NAME') }}, you agree to the terms outlined in our Privacy Policy.</p>
                                                <p>b. <u>Consent</u>: Your use of ShareTrail implies your consent to the practices detailed in our Privacy Policy. It is recommended to review the Privacy Policy regularly for any updates or changes.</p>
                                                <p><strong>4. User Content</strong></p>
                                                <p>a. You retain ownership of the content you submit, post, or share through {{ env('APP_NAME') }}. By uploading content, you grant {{ env('APP_NAME') }} a non-exclusive, worldwide, royalty-free, and sublicensable license to use, display, and distribute your content within the Service.</p>
                                                <p>b. You agree not to upload or share content that violates the rights of others, is harmful, offensive, or violates these Terms.</p>
                                                <p><strong>5. Security</strong></p>
                                                <p>a. You are responsible for safeguarding your account and any passwords or access credentials associated with the Service. {{ env('APP_NAME') }} is not responsible for any unauthorized access to your account.</p>
                                                <p><strong>6. Termination</strong></p>
                                                <p>a. {{ env('APP_NAME') }} reserves the right to suspend, terminate, or restrict your access to the Service at its sole discretion, without notice, for any reason, including a violation of these Terms.</p>
                                                <p><strong>7. Disclaimers and Limitations of Liability</strong></p>
                                                <p>a. {{ env('APP_NAME') }} is provided "as is" and "as available" without warranties of any kind. We do not guarantee the accuracy, reliability, or availability of the Service.</p>
                                                <p>b. You acknowledge that {{ env('APP_NAME') }} is a location-sharing platform, and the use of the Service involves risks, including but not limited to the risk of accidents, injuries, or other adverse events. {{ env('APP_NAME') }} shall not be liable for any direct, indirect, incidental, special, or consequential damages arising from the use or inability to use the Service.</p>
                                                <p>c. By using {{ env('APP_NAME') }}, you agree that you are solely responsible for your safety and the safety of others when sharing location information and using the Service. You assume all risks associated with its use, including any consequences resulting from your actions or decisions based on information obtained through the Service.</p>
                                                <p>d. {{ env('APP_NAME') }} disclaims all liability for any actions, behavior, or content of other users of the Service. We do not endorse, support, or guarantee the accuracy of user-generated content.</p>
                                                <p><strong>8. Changes to Terms</strong></p>
                                                <p>a. {{ env('APP_NAME') }} reserves the right to modify or update these Terms at any time. You are responsible for reviewing the Terms periodically. Your continued use of the Service after changes constitutes acceptance of the modified Terms.</p>
                                                <p><strong>9. Contact Information</strong></p>
                                                <p>If you have any questions or concerns regarding these Terms, please contact us at {{ env('APP_EMAIL') }}</p>
                                                <p>By using {{ env('APP_NAME') }}, you acknowledge that you have read, understood, and agreed to these Terms and our Privacy Policy. These Terms constitute a legally binding agreement between you and {{ env('APP_NAME') }}.</p>
                                            </div>
                                            <div class="block-content block-content-full text-end bg-body">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I read the terms & conditions carefully</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block block-rounded mb-0 forgotPasswordCard d-none">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Password Reminder</h3>
                                <div class="block-options">
                                    <a class="text-muted fs-sm signInBtn" href="#"><i class="fad fa-sign-in-alt"></i>&nbsp;&nbsp;Sign In</a>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5-new">
                                    <h1 class="h2 mb-1">{{ env('APP_NAME') }}</h1>
                                    <p class="fw-medium text-muted">Please provide your account's email and we will send your password.</p>
                                    <form id="forgotpasswordForm">
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg form-control-alt" name="forgotpassEmail" placeholder="Email" required>
                                            <small class='forgotpassword_email_invalid text-danger d-none'>Enter a valid email address.</small>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn w-100 btn-alt-info"><i class="fa fa-fw fa-envelope opacity-50"></i>&nbsp;&nbsp;Send Mail</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fs-sm text-muted text-center">
                    <strong>{{ env('APP_NAME').' '.env('APP_VERSION') }}</strong> © <span data-toggle="year-copy" class="js-year-copy-enabled">@php echo date('Y'); @endphp</span>
                </div>
            </div>
        </div>
    </main>
</div>

{{-- Process Script --}}
<script>
    $('#loginForm').submit(function(e) {
        e.preventDefault(); 
        $.ajax({
            url: "{{ route('loginUser') }}",
            method: "POST",
            data: $('#loginForm').serialize() + "&_token=" + window.csrf_token + "&loginRemember=" + $('#loginRemember').is(':checked'), 
            beforeSend: function () {
                formDisabler($('#loginForm'), true);
            },
            success: function(response) {
                setTimeout(function(){ 
                    // Delay Reload
                    setTimeout(function(){ window.location.reload(true); $('#customLoader').show(); }, 2000);
                    // ==============
                    notification('success', 'Success', response.message, 'bottomCenter', 2000);
                    $('input[name="loginUsername"], input[name="loginPassword"], #loginRemember').val(null).prop( "checked", false);;
                    formDisabler($('#loginForm'), false); 
                }, 1000);
            },
            error: function(response) {
                setTimeout(function(){ 
                    if (response.responseJSON.error == "login_failed") {
                        notification('error', 'Error', 'Unable to Login. Incorrect username or password', 'bottomCenter', 3000);
                    }
                    formDisabler($('#loginForm'), false); 
                }, 1000);
            },
        });
    });

    $('#registrationForm').submit(function(e) {
        e.preventDefault(); 
        $.ajax({
            url: "{{ route('registerUser') }}",
            method: "POST",
            data: $('#registrationForm').serialize() + "&_token=" + window.csrf_token, 
            beforeSend: function () {
                formDisabler($('#registrationForm'), true);
            },
            success: function(response) {
                setTimeout(function(){ 
                    notification('success', 'Success', response.message, 'bottomCenter', 3000);
                    $('input[name="registerUsername"], input[name="registerEmail"], input[name="registerPassword"], input[name="registerPasswordConfirm"], #signupTerms').val(null).prop( "checked", false);
                    formDisabler($('#registrationForm'), false); 
                }, 1000);
            },
            error: function(response) {
                setTimeout(function(){ 
                    if (response.responseJSON.error == "username_email_exist") {
                        notification('error', 'Error', 'Username & Email exist!', 'bottomCenter', 3000);
                    } else if (response.responseJSON.error == "username_exist") {
                        notification('error', 'Error', 'Username exist!', 'bottomCenter', 3000);
                    } else if (response.responseJSON.error == "email_exist") {
                        notification('error', 'Error', 'Email exist!', 'bottomCenter', 3000);
                    }
                    formDisabler($('#registrationForm'), false); 
                }, 1000);
            },
        });
    });


    $('#forgotpasswordForm').submit(function(e) {
        e.preventDefault(); 
        $.ajax({
            url: "{{ route('forgotPasswordUser') }}",
            method: "POST",
            data: $('#forgotpasswordForm').serialize() + "&_token=" + window.csrf_token, 
            beforeSend: function () {
                formDisabler($('#forgotpasswordForm'), true);
            },
            success: function(response) {
                setTimeout(function(){ 
                    notification('success', 'Success', response.message, 'bottomCenter', 3000);
                    $('input[name="forgotpassEmail"]').val(null);
                    formDisabler($('#forgotpasswordForm'), false); 
                }, 1000);
            },
            error: function(response) {
                setTimeout(function(){ 
                    if (response.responseJSON.error == "send_failed") {
                        notification('error', 'Error', 'The ShareTrail System cannot send password request. Try again later', 'bottomCenter', 3000);
                    } else if (response.responseJSON.error == "email_not_exist") {
                        notification('error', 'Error', 'Email does not exist!', 'bottomCenter', 3000);
                    }
                    formDisabler($('#forgotpasswordForm'), false); 
                }, 1000);
            },
        });
    });
</script>
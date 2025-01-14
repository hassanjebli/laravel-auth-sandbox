@section('title', 'Verify Email Page')

<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets-back') }}/" data-template="vertical-menu-template-free">

@include('back.partials.authHead')

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Verify Email -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        @include('back.partials.authLogo')
                        <!-- /Logo -->
                        <h4 class="mb-2">Verify your email ✉️</h4>
                        
                        <div class="mb-4">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success mb-4">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif

                        <div class="d-flex justify-content-between mt-4">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Resend Verification Email') }}
                                </button>
                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link px-0">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Verify Email -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    @include('back.partials.authScripts')
</body>

</html>

@section('title', 'Confirm Password Page')

<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets-front') }}/" data-template="vertical-menu-template-free">

@include('front.partials.authHead')

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Confirm Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        @include('front.partials.authLogo')
                        <!-- /Logo -->
                        <h4 class="mb-2">Confirm Password 🔐</h4>
                        <p class="mb-4">
                            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                        </p>

                        <form id="formAuthentication" class="mb-3" method="POST"
                            action="{{ route('password.confirm') }}">
                            @csrf

                            {{-- password --}}
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        required autocomplete="current-password" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">
                                    {{ __('Confirm') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Confirm Password -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    @include('front.partials.authScripts')
</body>

</html>

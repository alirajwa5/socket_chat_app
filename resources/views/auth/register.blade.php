<x-guest-layout>

    <div class="login-page1">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-contain-main">
                        <div class="left-page">
                            <div class="login-content">
                                <div class="login-content-header"><img class="image-fluid"
                                                                       src="{{ asset('web/images/logo/landing-logo.png') }}" alt="images"></div>
                                <h3>Hello Everyone , We are Chitchat</h3>
                                <h4>Wellcome to chitchat please register for an Account.</h4>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div>
                                        <x-jet-label for="name" value="{{ __('Name') }}" />
                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    </div>

                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mt-4">
                                            <x-jet-label for="terms">
                                                <div class="flex items-center">
                                                    <x-jet-checkbox name="terms" id="terms"/>

                                                    <div class="ml-2">
                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </x-jet-label>
                                        </div>
                                    @endif

                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('welcome') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                        <x-jet-button class="ml-4">
                                            {{ __('Register') }}
                                        </x-jet-button>
                                    </div>
                                </form>
                                <div class="line">
                                    <h6>OR Connect with</h6>
                                </div>
                                <div class="medialogo">
                                    <ul>
                                        <li><a class="icon-btn btn-danger button-effect"
                                               href="https://www.google.com/"><i class="fa fa-google"></i></a></li>
                                        <li><a class="icon-btn btn-primary button-effect"
                                               href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="icon-btn btn-facebook button-effect"
                                               href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="termscondition">
                                    <h4 class="mb-0"><span>*</span>Terms and condition<b>&amp;</b>Privacy policy</h4>
                                </div>
                            </div>
                        </div>
                        <div class="right-page">
                            <div class="right-login animat-rate">
                                <div class="animation-block">
                                    <div class="bg_circle">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="cross"></div>
                                    <div class="cross1"></div>
                                    <div class="cross2"></div>
                                    <div class="dot"></div>
                                    <div class="dot1"></div>
                                    <div class="maincircle"></div>
                                    <div class="top-circle"></div>
                                    <div class="center-circle"></div>
                                    <div class="bottom-circle"></div>
                                    <div class="bottom-circle1"></div>
                                    <div class="right-circle"></div>
                                    <div class="right-circle1"></div><img class="heart-logo"
                                                                          src="{{ asset('web/images/login_signup/5.png') }}" alt="login logo" /><img
                                        class="has-logo" src="{{ asset('web/images/login_signup/4.png') }}"
                                        alt="login logo" /><img class="login-img"
                                                                src="{{ asset('web/images/login_signup/1.png') }}" alt="login logo" /><img
                                        class="boy-logo" src="{{ asset('web/images/login_signup/6.png') }}"
                                        alt="login boy logo" /><img class="girl-logo"
                                                                    src="{{ asset('web/images/login_signup/7.png') }}" alt="girllogo" /><img
                                        class="cloud-logo" src="{{ asset('web/images/login_signup/2.png') }}"
                                        alt="login logo" /><img class="cloud-logo1"
                                                                src="{{ asset('web/images/login_signup/2.png') }}" alt="login logo" /><img
                                        class="cloud-logo2" src="{{ asset('web/images/login_signup/2.png') }}"
                                        alt="login logo" /><img class="cloud-logo3"
                                                                src="{{ asset('web/images/login_signup/2.png') }}" alt="login logo" /><img
                                        class="cloud-logo4" src="{{ asset('web/images/login_signup/2.png') }}"
                                        alt="login logo" /><img class="has-logo1"
                                                                src="{{ asset('web/images/login_signup/4.png') }}" alt="login logo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

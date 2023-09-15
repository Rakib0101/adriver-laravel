<div class="popup-overlay" x-show="showModal" x-data="{
    phoneLogin: true,
    emailLogin: false,
    isForget: false,
    eyeOff: true,
    eyeOn: false,
    ceyeOff: true,
    ceyeOn: false,
    inputType: 'password',
    cinputType: 'password',
    signIn: true,
    signUp: false
}">
    <div class="relative w-full max-w-[488px] bg-white rounded-xl m-auto p-8" @click.outside="showModal = false">
        <!-- Sign-In Section -->
        <div x-show="signIn">
            <h2 class="text-gray-900 text-center mb-3 text-2xl font-display font-semibold uppercase">
                Sign in to your account
            </h2>
            <p class="text-center text-gray-600 text-base font-display mb-6">
                Welcome back
            </p>
            <button
                class="flex w-full py-3 max-h-12 rounded-md gap-3 text-base text-gray-700 font-display justify-center items-center border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] transition-all duration-300 hover:shadow-[0px_3px_14px_rgba(23,30,21,0.12)] mb-[18px]">
                <img src="{{ asset('frontend/assets/images/logo/google.svg') }}" alt="" />
                <span>Sign in with <span class="font-medium text-gray-900">Google</span></span>
            </button>
            <button
                class="flex w-full py-3 max-h-12 rounded-md gap-3 text-base text-gray-700 font-display justify-center items-center border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] transition-all duration-300 hover:shadow-[0px_3px_14px_rgba(23,30,21,0.12)] mb-[18px]">
                <img src="{{ asset('frontend/assets/images/logo/google.svg') }}" alt="" />
                <span>Sign in with <span class="font-medium text-gray-900">Facebook</span></span>
            </button>
            <div class="flex justify-center overflow-hidden mb-[18px]">
                <p
                    class="inline-flex relative before:absolute after:absolute before:right-full after:left-full before:top-1/2 after:top-1/2 before:w-full after:w-full dashed-bg before:h-[1px] after:h-[1px] px-3 z-1 text-xs font-medium text-gray-400">
                    OR SIGN IN MANUALLY
                </p>
            </div>
            <form action="">
                <div class="mb-[18px]">
                    <div class="flex justify-between mb-2">
                        <label for="phone" class="flex text-sm text-gray-900" x-show="phoneLogin">Phone
                            Number</label>
                        <label for="email" class="flex text-sm text-gray-900" x-show="emailLogin">Email</label>
                        <button class="text-primary-500 font-display font-semibold text-sm" x-show="phoneLogin"
                            @click="emailLogin = true; phoneLogin= false">
                            Use Email Instead
                        </button>
                        <button class="text-primary-500 font-display font-semibold text-sm" x-show="emailLogin"
                            @click="emailLogin = false; phoneLogin= true">
                            Use Phone Number Instead
                        </button>
                    </div>
                    <div x-show="phoneLogin">
                        <x-frontend.custom-input.input id="phone" type="text" placeholder="Enter Phone Number" />
                    </div>
                    <div x-show="emailLogin">
                        <x-frontend.custom-input.input id="email" type="email" placeholder="Email address" />
                    </div>
                </div>
                <div class="mb-[18px]" x-show="emailLogin">
                    <label for="password" class="flex mb-2 text-sm text-gray-900">Password</label>
                    <div class="relative flex">
                        <input id="password" :type="eyeOn ? 'text' : 'password'" placeholder="8 + character"
                            class="flex w-full h-12 py-3 px-[18px] outline-none border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)]" />
                        <label for="password" class="absolute top-3 right-4" x-show="eyeOff"
                            @click="eyeOn = true; eyeOff = false">
                            <i class="ph ph-eye text-2xl leading-6"></i>
                        </label>
                        <label for="password" class="absolute top-3 right-4" x-show="eyeOn"
                            @click="eyeOn = false; eyeOff = true">
                            <i class="ph ph-eye-closed text-2xl leading-6"></i>
                        </label>
                    </div>
                </div>
                <div class="mb-6 flex justify-between">
                    <div x-show="phoneLogin" class="inline-flex gap-2 custom-checkbox">
                        <x-frontend.custom-input.input type="checkbox" name="keepme" id="keepme" />
                        <label for="keepme" class="text-sm !text-gray-600">Keep me logged in.</label>
                    </div>
                    <div x-show="emailLogin" class="flex gap-2 custom-checkbox">
                        <x-frontend.custom-input.input type="checkbox" name="keepme" id="keepme" />
                        <label for="keepme" class="text-sm !text-gray-600">Keep me logged in. </label>

                    </div>

                    <div x-show="emailLogin">
                        <a href="#" class="text-primary-500 font-display font-medium">Forget Password</a>
                    </div>
                </div>
                <div class="mb-4">
                    <x-frontend.button.primary-button class="w-full">
                        <span x-show="phoneLogin">Send otp</span>
                        <span x-show="emailLogin">Sign IN</span>
                        <button-arrow />
                    </x-frontend.button.primary-button>
                </div>
                <p class="flex justify-center items-center gap-1.5">
                    <span>Don’t have an account!</span>
                    <button class="text-primary-500 inline-flex items-center gap-2 font-semibold"
                        @click="signUp = true; signIn = false" type="button">
                        Create Account <signup-icon />
                    </button>
                </p>
            </form>
        </div>
        <!--End Sign-In Section -->

        <!--Sign-Up Section -->
        <div x-show="signUp">
            <h2 class="text-gray-900 text-center mb-3 text-xl font-display font-semibold uppercase">
                Create Account on <span class="text-primary-500">ADriver</span>
            </h2>
            <p class="text-center text-gray-600 text-base font-display mb-6">
                A few clicks away from creating your first listing
            </p>
            <form action="">
                <div class="mb-[18px]">
                    <label for="name" class="flex mb-2 text-sm text-gray-900">Name</label>
                    <x-frontend.custom-input.input id="name" type="text" placeholder="Full name" />
                </div>
                <div class="mb-[18px]">
                    <label for="email" class="flex mb-2 text-sm text-gray-900">Email</label>
                    <x-frontend.custom-input.input id="email" type="email" placeholder="Email address" />
                </div>
                <div class="mb-[18px]">
                    <label for="password" class="flex mb-2 text-sm text-gray-900">Password</label>
                    <div class="relative flex">
                        <input id="password" :type="eyeOn ? 'text' : 'password'" placeholder="8 + character"
                            class="flex w-full h-12 py-3 px-[18px] outline-none border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)]" />
                        <label for="password" class="absolute top-3 right-4" x-show="eyeOff"
                            @click="eyeOn = true; eyeOff = false">
                            <i class="ph ph-eye text-2xl leading-6"></i>
                        </label>
                        <label for="password" class="absolute top-3 right-4" x-show="eyeOn"
                            @click="eyeOn = false; eyeOff = true">
                            <i class="ph ph-eye-closed text-2xl leading-6"></i>
                        </label>
                    </div>
                </div>
                <div class="mb-[18px]">
                    <label for="cpassword" class="flex mb-2 text-sm text-gray-900">Confirm Password</label>
                    <div class="relative flex">
                        <input id="password" :type="ceyeOn ? 'text' : 'password'" placeholder="8 + character"
                            class="flex w-full h-12 py-3 px-[18px] outline-none border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)]" />
                        <label for="cpassword" class="absolute top-3 right-4" x-show="ceyeOff"
                            @click="ceyeOn = true; ceyeOff = false">
                            <i class="ph ph-eye text-2xl leading-6"></i>
                        </label>
                        <label for="cpassword" class="absolute top-3 right-4" x-show="ceyeOn"
                            @click="ceyeOn = false; ceyeOff = true">
                            <i class="ph ph-eye-closed text-2xl leading-6"></i>
                        </label>
                    </div>
                </div>
                <div class="custom-checkbox flex items-center text-sm text-gray-600 mb-8">
                    <x-frontend.custom-input.input type="checkbox" name="" id="checkbox" class="w-full" />
                    <label for="checkbox" class="flex whitespace-nowrap">I agree with adriver
                        <a href="/privacy-policy" class="text-primary-500">Privacy Policy</a> and
                        <a href="/terms-condition" class="text-primary-500">Terms &
                            Condition</a></label>
                </div>
                <div class="mb-4">
                    <x-frontend.button.primary-button class="w-full">
                        <span>Sign Up</span>
                        <button-arrow />
                    </x-frontend.button.primary-button>
                </div>
                <p class="flex justify-center items-center gap-1.5">
                    Already have account!
                    <button @click="signIn= true; signUp = false" type="button"
                        class="text-primary-500 inline-flex items-center gap-2">
                        Sign In <login-icon />
                    </button>
                </p>
            </form>
        </div>
        <!--End Sign-Up Section -->

        <button class="absolute right-3 top-3" @click="showModal = false">
            <i class="ph ph-x text-2xl leading-6"></i>
        </button>
    </div>
</div>

<style>
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .dashed-bg:before,
    .dashed-bg:after {
        background-image: repeating-linear-gradient(90deg,
                transparent,
                transparent 5px,
                #dee6dc 5px,
                #dee6dc 10px);
    }
</style>

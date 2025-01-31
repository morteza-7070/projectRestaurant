{{--<x-guest-layout>--}}

{{--</x-guest-layout>--}}
<head>

    <link rel="stylesheet" href="../../css/Cririeshing/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/auth/register.scss',
                 'resources/js/app.js',
             ])

</head>`
<div class="container form-login">
    <form method="POST" action="{{ route('register') }}">
        <h2>فرم ثبت نام</h2>
        @csrf

        <!-- Name -->
        <div class="name">
            <x-input-label for="name" :value="__('نام')"  id="lable"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="email">
            <x-input-label for="email" :value="__('ایمیل')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="type">
            <x-input-label for="role" :value="__('نوع کاربر')" />
            <select id="type_user" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="role" required>
                <option value="مشتری" {{ old('role') == 'مشتری' ? 'selected' : '' }}>مشتری</option>
                <option value="رستوران دار" {{ old('role') == 'رستوران دار' ? 'selected' : '' }}>رستوران دار</option>
                <option value=" میهمان" {{ old('role') == 'میهمان' ? 'selected' : '' }}>میهمان</option>
            </select>
            <x-input-error :messages="$errors->get('user_type')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="pass">
            <x-input-label for="password" :value="__('پیسورد')" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="repass">
            <x-input-label for="password_confirmation" :value="__('تکرار پسورد')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('ثبت نام') }}
            </x-primary-button>
        </div>
    </form>


</div>

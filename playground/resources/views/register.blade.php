<x-layout.guest>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <x-title label="Register to your account" />

        <x-quote />

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('register.store') }}" method="POST" class="space-y-6">
                @csrf

                <x-form.input-field name="name" label="Name" />

                <x-form.input-field name="email" label="Email" type="email" />

                <x-form.input-field name="password" label="Password" type="password" />

                <x-form.input-field name="password_confirmation" label="Confirm Password" type="password" />

                <x-button label="Login" />
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Already a member?
                <a href="{{ route('login') }}" class="font-semibold text-indigo-400 hover:text-indigo-300">Log
                    in</a>
            </p>
        </div>
    </div>
</x-layout.guest>
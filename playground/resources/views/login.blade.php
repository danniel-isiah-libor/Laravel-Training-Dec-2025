<x-layout.guest>
    <x-slot:footer>
        <p class="text-white">This is FOOTER</p>
    </x-slot:footer>

    <x-slot:header>
        <p class="text-white">This is HEADER</p>
    </x-slot:header>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <x-title label="Login to your account" />

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('authenticate') }}" method="POST" class="space-y-6">
                @csrf

                <x-form.input-field name="email" label="Email" type="email" />

                <x-form.input-field name="password" label="Password" type="password" />

                <x-button label="Login" />
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Not yet a member?
                <a href="{{ route('register') }}"
                    class="font-semibold text-indigo-400 hover:text-indigo-300">Register</a>
            </p>
        </div>
    </div>
</x-layout.guest>

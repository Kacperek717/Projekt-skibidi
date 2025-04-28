<x-guest-layout>
    <div class="w-full max-w-md mx-auto mt-10 p-8 bg-white rounded shadow">
        <h1 class="text-2xl font-bold text-center mb-6">LOGOWANIE</h1>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <input id="email" class="block w-full p-2 border rounded" type="email" name="email" :value="old('email')" required autofocus placeholder="Adres email*" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <input id="password" class="block w-full p-2 border rounded" type="password" name="password" required autocomplete="current-password" placeholder="Hasło*" />
            </div>

            <!-- Remember Me -->
            <div class="block mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Zapamiętaj mnie</span>
                </label>
            </div>

            <div class="flex flex-col items-center">
                <button type="submit" class="w-full bg-gray-900 text-white py-2 rounded hover:bg-gray-800 mb-4">
                    Zaloguj się
                </button>

                <div class="flex justify-between w-full text-sm">
                    <a class="text-blue-600 hover:underline" href="{{ route('password.request') }}">
                        Zapomniałeś hasła?
                    </a>
                    <a class="text-blue-600 hover:underline" href="{{ route('register') }}">
                        Załóż konto
                    </a>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>

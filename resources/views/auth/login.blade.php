<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-white">
        <div class="w-full max-w-md bg-white p-8 rounded shadow">
            <h2 class="text-3xl font-bold text-center mb-6">LOGOWANIE</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <input id="email" class="w-full px-4 py-3 border rounded text-gray-700" type="email" name="email" placeholder="Adres email*" value="{{ old('email') }}" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-500" />
                </div>

                <!-- Password -->
                <div class="mb-4 relative">
                    <input id="password" class="w-full px-4 py-3 border rounded text-gray-700" type="password" name="password" placeholder="Hasło*" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-500" />
                </div>

                <!-- Links -->
                <div class="flex justify-between text-sm text-black-600 mb-4">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">nie pamiętasz hasła?</a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">nie masz konta? zarejestruj się</a>
                    @endif
                </div>

                <!-- Submit -->
                <button type="submit" class="w-full bg-gray-800 text-white py-3 rounded hover:bg-gray-700">
                    Zaloguj się
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>

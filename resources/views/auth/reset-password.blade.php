<x-guest-layout>
    <div class="w-full max-w-md mx-auto mt-10 p-8 bg-white rounded shadow">
        <h1 class="text-2xl font-bold text-center mb-6">RESETUJ HASŁO</h1>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Token resetu hasła -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Adres Email -->
            <div class="mb-4">
                <input id="email" class="block w-full p-2 border rounded" type="email" name="email" :value="old('email', $request->email)" required autofocus placeholder="Adres email*" />
            </div>

            <!-- Nowe Hasło -->
            <div class="mb-4">
                <input id="password" class="block w-full p-2 border rounded" type="password" name="password" required autocomplete="new-password" placeholder="Nowe hasło*" />
            </div>

            <!-- Powtórz Hasło -->
            <div class="mb-6">
                <input id="password_confirmation" class="block w-full p-2 border rounded" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Powtórz hasło*" />
            </div>

            <div class="flex flex-col items-center">
                <button type="submit" class="w-full bg-gray-900 text-white py-2 rounded hover:bg-gray-800 mb-4">
                    Zresetuj hasło
                </button>

                <a class="text-sm text-blue-600 hover:underline" href="{{ route('login') }}">
                    Pamiętasz hasło? Zaloguj się
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>

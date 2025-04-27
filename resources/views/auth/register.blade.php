<x-guest-layout>
    <div class="w-full max-w-md mx-auto mt-10 p-8 bg-white rounded shadow">
        <h1 class="text-2xl font-bold text-center mb-6">REJESTRACJA</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <input id="name" class="block w-full p-2 border rounded" type="text" name="name" :value="old('name')" required autofocus placeholder="Imię i nazwisko*" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <input id="email" class="block w-full p-2 border rounded" type="email" name="email" :value="old('email')" required placeholder="Adres email*" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <input id="password" class="block w-full p-2 border rounded" type="password" name="password" required autocomplete="new-password" placeholder="Hasło*" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <input id="password_confirmation" class="block w-full p-2 border rounded" type="password" name="password_confirmation" required placeholder="Powtórz hasło*" />
            </div>

            <div class="flex flex-col items-center">
                <button type="submit" class="w-full bg-gray-900 text-white py-2 rounded hover:bg-gray-800 mb-4">
                    Zarejestruj się
                </button>

                <a class="text-sm text-blue-600 hover:underline" href="{{ route('login') }}">
                    Masz już konto? Zaloguj się
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>

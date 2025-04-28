<x-guest-layout>
    <div class="w-full max-w-md mx-auto mt-10 p-8 bg-white rounded shadow">
        <h1 class="text-2xl font-bold text-center mb-6">RESET HASŁA</h1>

        <div class="mb-4 text-sm text-gray-600">
            Zapomniałeś hasła? Podaj swój adres email, a wyślemy Ci link do zresetowania hasła.
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <input id="email" class="block w-full p-2 border rounded" type="email" name="email" :value="old('email')" required autofocus placeholder="Adres email*" />
            </div>

            <div class="flex flex-col items-center">
                <button type="submit" class="w-full bg-gray-900 text-white py-2 rounded hover:bg-gray-800 mb-4">
                    Wyślij link resetujący
                </button>

                <a class="text-sm text-blue-600 hover:underline" href="{{ route('login') }}">
                    Pamiętasz hasło? Zaloguj się
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>

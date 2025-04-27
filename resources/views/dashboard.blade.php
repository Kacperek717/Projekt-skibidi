@php
    /** @var \App\Models\User|null $user */
    $user = auth()->user();
@endphp

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <div class="flex items-center gap-4">
                @if ($user && $user->role === 'admin')
                    <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Dodaj Produkt
                    </a>
                @endif

                @if ($user)
                    <div class="flex items-center space-x-2">
                        <span>Punkty:</span>
                        <span class="font-bold">{{ $user->punkty }}</span>
                    </div>
                @endif
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Informacja o zalogowaniu -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Produkty -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($products as $product)
                    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-semibold mb-2">{{ $product->nazwa }}</h3>
                            <p class="text-gray-500 dark:text-gray-300 mb-4">
                                Cena: <strong>{{ number_format($product->cena, 2) }} zł</strong>
                            </p>
                        </div>
                        <div class="mt-auto">
                            <p class="text-sm {{ $product->polubiony ? 'text-green-400' : 'text-red-400' }}">
                                {{ $product->polubiony ? 'Polubiony' : 'Niepolubiony' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>

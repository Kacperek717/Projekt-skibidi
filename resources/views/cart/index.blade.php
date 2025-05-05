<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Twój koszyk
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
            <ul>
                @foreach($products as $product)
                    <li class="mb-4">
                        {{ $product->nazwa }} — {{ number_format($product->cena, 2) }} zł
                    </li>
                @endforeach
            </ul>

            <div class="mt-6 text-xl font-bold">
                Suma: {{ number_format($total, 2) }} zł
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 text-lg font-semibold">Dodawanie faktury</h1>

                    <form action="/invoices" method="post">
                        @csrf

                        <div class="mb-2">
                            <div>Numer faktury</div>
                            <input type="text" name="invoice_no">
                        </div>

                        <div class="mb-2">
                            <div>Opis</div>
                            <input type="text" name="description">
                        </div>

                        <div class="mb-2">
                            <div>Kwota netto</div>
                            <input type="text" name="amount_net">
                        </div>

                        <div class="mb-2">
                            <div>Podatek</div>
                            <input type="text" name="tax">
                        </div>

                        <div class="mb-2">
                            <input type="submit" value="Zapisz">
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
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
                    <h1 class="mb-4 text-lg font-semibold">Edycja faktury</h1>

                    <form action="/invoices/{{ $invoice->id }}" method="post">
                        @csrf

                        <!-- Hack for PUT -->
                        <input type="hidden" name="_method" value="PUT">

                        <div class="mb-2">
                            <div>Numer faktury</div>
                            <input type="text" name="invoice_no" value="{{ $invoice->invoice_no }}">
                        </div>

                        <div class="mb-2">
                            <div>Opis</div>
                            <input type="text" name="description" value="{{ $invoice->description }}">
                        </div>

                        <div class="mb-2">
                            <div>Kwota netto</div>
                            <input type="text" name="amount_net"  value="{{ $invoice->amount_net }}">
                        </div>

                        <div class="mb-2">
                            <div>Podatek</div>
                            <input type="text" name="tax"  value="{{ $invoice->tax }}">
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
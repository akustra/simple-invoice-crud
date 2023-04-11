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
                    <h1 class="mb-4 text-lg font-semibold">Lista faktur</h1>

                    <div class="mb-4">
                        <a href="/invoices/create">Dodaj fakturę</a>
                    </div>

                    <table class="w-full">

                        <thead>
                            <tr class="text-left">
                                <th></th>
                                <th>Numer faktury</th>
                                <th>Opis faktury</th>
                                <th>Kwota netto</th>
                                <th>Podatek</th>
                                <th>Kwota brutto</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($invoices as $invoice)
                            <tr>
                                <td>#{{ $invoice->id }}</td>

                                <td>{{ $invoice->invoice_no }}</td>
                                <td>{{ $invoice->description }}</td>

                                <td>{{ $invoice->amount_net }}</td>
                                <td>{{ $invoice->tax }}</td>
                                <td class="text-red-700">{{ $invoice->amount_gross }}</td>

                                <td>
                                    <a href="/invoices/{{ $invoice->id }}/edit">Edytuj</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
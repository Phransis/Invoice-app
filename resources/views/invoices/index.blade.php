{{-- @extends('layouts.app') --}}
<x-layout>
    {{-- @section('content') --}}
    <div class="container mx-auto">
        <h1>Your Invoices</h1>
        <a href="{{ route('invoices.create') }}" class="btn btn-primary "><button>Create Invoice</button> </a>

        <table class="table">
            <thead>
                <tr>
                    <th>Invoice Number</th>
                    <th>Type</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $invoice)
                    <tr>
                        <td>{{ $invoice->invoice_number }}</td>
                        <td>{{ $invoice->type }}</td>
                        <td>{{ $invoice->created_at }}</td>
                        <td> <a href="{{ route('invoices.show', $invoice->id) }}"> view </a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- @endsection --}}
</x-layout>

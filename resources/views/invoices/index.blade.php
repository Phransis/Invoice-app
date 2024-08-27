{{-- @extends('layouts.app') --}}
<x-layout>
    {{-- @section('content') --}}
    <div class="container mx-auto">
        <h1>Your Invoices</h1>
        <button type="submit" class="btn btn-primary">Create Invoice</button>

        <table class="table">
            <thead>
                <tr>
                    <th>Invoice Number</th>
                    <th>Type</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $invoice)
                    <tr>
                        <td>{{ $invoice->invoice_number }}</td>
                        <td>{{ $invoice->type }}</td>
                        <td>{{ $invoice->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- @endsection --}}
</x-layout>

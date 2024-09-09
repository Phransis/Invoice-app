<x-layout>
    <h1>Edit invoice</h1>
    {{-- <x-invoices.errors/> --}}

    <form method="post" action="{{ route('invoices.update', $invoice) }}">
        @method('PATCH')
<x-invoice.form :invoice='$invoice'/>
    </form>
</x-layout>
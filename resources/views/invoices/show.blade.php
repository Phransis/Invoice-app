<x-layout>
    <h1> {{ $invoice->invoice_number }} </h1>
    <p> {{ $invoice->type }} </p>
    <p> {{ $invoice->created_at }} </p>

    <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
    <form method="post" action="{{ route('invoices.destroy', $invoice) }}">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</x-layout>

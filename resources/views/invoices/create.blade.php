{{-- @extends('layouts.app') --}}
<x-layout>
    @section('content')
        <div class="container">
            <h1>Create Invoice</h1>
            <form action="{{ route('invoices.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="invoice_number">Invoice Number:</label>
                    <input type="text" class="form-control" id="invoice_number" name="invoice_number" required>
                </div>
                <div class="form-group">
                    <label for="type">Invoice Type:</label>
                    <select class="form-control" id="type" name="type">
                        <option value="Pro-forma">Pro-forma</option>
                        <option value="VAT">VAT</option>
                    </select>
                </div>
                <div id="items">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" name="items[0][description]" required>
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" name="items[0][quantity]" required>
                        <label for="unit_price">Unit Price:</label>
                        <input type="number" step="0.01" class="form-control" name="items[0][unit_price]" required>
                    </div>
                </div>
                {{-- <button type="button" class="btn btn-secondary" onclick="addItem()">Add Another Item</button><br><br> --}}
                <button type="submit" class="btn btn-primary">Create Invoice</button>
            </form>
        </div>
    </x-layout>

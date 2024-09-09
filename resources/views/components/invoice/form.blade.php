@csrf

<label for="name">Invoice Number</label>
<input type="text" name="name" id="name" value="{{old('name', $invoice->invoice_number ?? '' )}}"></input>

{{-- <label for="description">Description</label> --}}
<div class="form-group">
    <label for="type">Invoice Type:</label>
    <select class="form-control" id="type" name="type">
        <option value="Pro-forma">Pro-forma</option>
        <option value="VAT">VAT</option>
    </select>
</div>
{{-- <textarea name="description" id="description" value="">{{old('description', $invoice->type ?? '' )}}</textarea> --}}

{{-- <label for="size">Size</label>
<input type="text" name="size" id="size" value="{{old('size', $invoice->date ?? '' )}}"></input> --}}

<button>Save</button>

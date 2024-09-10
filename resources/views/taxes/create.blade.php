<x-layout>
    <div class="container">
        <h1>Add New Tax</h1>
        <form action="{{ route('taxes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tax Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="rate">Tax Rate (%):</label>
                <input type="number" step="0.01" class="form-control" id="rate" name="rate" required>
            </div>
            <div class="form-group">
                <label for="type">Tax Type:</label>
                <select class="form-control" id="type" name="type">
                    <option value="Primary">Primary</option>
                    <option value="Compound">Compound</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Tax</button>
        </form>
    </div>
</x-layout>

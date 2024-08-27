<x-layout>
    <div class="container">
        <h1>Tax Settings</h1>
        <a href="{{ route('taxes.create') }}" class="btn btn-primary "><button>New Tax</button> </a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Rate (%)</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taxes as $tax)
                    <tr>
                        <td>{{ $tax->name }}</td>
                        <td>{{ $tax->rate }}</td>
                        <td>{{ $tax->type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

@extends('layouts.main')

@section('content')
<div class="title-banner"><h2>List of motherboards</h2></div>
<a href="{{ route('motherboards.create') }}">
    <p class="button-div">
    <button type="button" class="btn btn-labeled btn-success" >
        <span class="btn-label">
            <i class="fas fa-plus"></i>
        </span>
        New Motherboard
    </button>
    </p>
</a>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Size</th>
            <th>Socket</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Max Memory</th>
            <th>Slots</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($motherboards as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->size }}</td>
            <td>{{ $item->socket }}</td>
            <td>{{ $item->brand }}</td>
            <td>${{ $item->price }}</td>
            <td>{{ $item->max_memory }}</td>
            <td>
                @foreach ($item->slots as $slot)
                    @if ($slot->quantity)
                    Type: {{ $slot->component_type }}
                    <br />
                    Quantity: {{ $slot->quantity }}
                    <br />
                    Socket: {{ $slot->socket }}
                    <br />
                    <form action="{{ route('slots.destroy', ['slot' => $slot->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-labeled btn-success">Remove</button>
                    </form>
                    <hr />
                    @endif
                @endforeach
            </td>
            <td>
                <div class="table-buttons ml-3">
                <a href="{{ route('slots.create', ['motherboard' => $item->id]) }}"><p class="button-div">
                    <button type="button" class="btn btn-labeled btn-success" >
                        <span class="btn-label">
                            <i class="fas fa-plus"></i>
                        </span>
                        Add slot
                    </button>
                    </p>
                    </a>
                </div>
                <form action="{{ route('motherboards.destroy', ['motherboard' => $item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p class="button-div">
                    <button type="submit" class="btn btn-labeled btn-success" >
                        <span class="btn-label">
                            <i class="fas fa-trash"></i>
                        </span>
                        Delete
                    </button>
                    </p>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
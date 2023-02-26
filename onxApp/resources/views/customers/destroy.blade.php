@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Confirm Delete
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Czy chcesz usunąć klienta?</h5>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Usuń</button>
                            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Anuluj</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

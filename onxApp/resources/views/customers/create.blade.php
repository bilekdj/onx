@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Dodaj Nowego Klienta</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('customers.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Imię:</label>
                                <input type="text" name="name" id="name" class="form-control" required v-model="name">
                            </div>

                            <div class="form-group">
                                <label for="surname">Nazwisko:</label>
                                <input type="text" name="surname" id="surname" class="form-control" required v-model="surname">
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" required v-model="email">
                            </div>

                            <div class="form-group">
                                <label for="phone">Telefon:</label>
                                <input type="text" name="phone" id="phone" class="form-control" required v-model="phone">
                            </div>

                            <div class="form-group">
                                <label for="address">Adres:</label>
                                <textarea name="address" id="address" class="form-control" rows="3" required v-model="address"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Dodaj klienta.</button>
                                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Anuluj</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection

@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Klienci</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Imię</th>
                                <th>Nazwisko</th>
                                <th>Email</th>
                                <th>Telefon</th>
                                <th>Adres</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->surname }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->address }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        {{--const app = new Vue({--}}
        {{--    el: '#app',--}}
        {{--    data: {--}}
        {{--        customers: {!! json_encode($customers) !!}--}}
        {{--    }--}}
        {{--});--}}
    </script>
@endsection

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8 offset-md-2">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Add New Customer') }}</div>--}}

{{--                    <div class="card-body">--}}

{{--                        <form method="POST" action="{{ route('customers.store') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="name">{{ __('Name') }}</label>--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}
{{--                                @error('name')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="surname">{{ __('Surname') }}</label>--}}
{{--                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" surname="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>--}}
{{--                                @error('surname')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="email">{{ __('E-Mail Address') }}</label>--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}
{{--                                @error('email')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="phone">{{ __('Phone Number') }}</label>--}}
{{--                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">--}}
{{--                                @error('phone')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="address">{{ __('Address') }}</label>--}}
{{--                                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address">{{ old('address') }}</textarea>--}}
{{--                                @error('address')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group mb-0">--}}
{{--                                <button type="submit" class="btn btn-primary">{{ __('Add Customer') }}</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Add New Customer</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('customers.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="surname">Surname:</label>
                                <input type="text" name="surname" id="surname" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="address">Address:</label>
                                <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Customer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


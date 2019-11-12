@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h6><b>{{ __('Create a new Event') }}</b></h6></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ems.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="eventName" class="col-md-4 col-form-label text-md-right">{{ __('Event Name') }}</label>

                            <div class="col-md-6">
                                <input id="eventName" type="text" class="form-control" name="eventName" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="eventLocation" class="col-md-4 col-form-label text-md-right">{{ __('Event Location') }}</label>

                            <div class="col-md-6">
                                <input id="eventLocation" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="eventLocation" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="availableVipSeats" class="col-md-4 col-form-label text-md-right">{{ __('Available VIP seats') }}</label>

                            <div class="col-md-2">
                                <input id="vipSeats" type="number" class="form-control" name="vipSeats"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('vipSeats') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="price" class="col-md-1 col-form-label">{{ __('Price') }}</label>
                            <div class="col-md-2">
                                <input id="vipPrice" type="number" class="form-control float-left"  name="vipPrice"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="availableRegularSeats" class="col-md-4 col-form-label text-md-right">{{ __('Available Regular seats') }}</label>

                            <div class="col-md-2">
                                <input id="regularSeats" type="number" class="form-control" name="regularSeats"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-1 col-form-label">{{ __('Price') }}</label>
                            <div class="col-md-2">
                                <input id="regularPrice" type="number" class="form-control float-left"  name="regularPrice"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event promo Image') }}</label>

                            <div class="col-md-4">
                                <input id="eventImg" type="file" class="form-control" name="eventImg"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register Event') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

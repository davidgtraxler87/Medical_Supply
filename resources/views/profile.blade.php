@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <Center><strong>Profile</strong></Center>
                    </div>
                    <div class="card-header">Name Information</div>
                    <div class="card-body"></div>
                    <form name="profile" method="POST" action="{{ route('profile') }}">
                        @csrf
                    {{ method_field('PATCH') }}
                        <!-- TODO Add form for profile -->
                        <div class="form-group row">
                            <label for="first_name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text"
                                       class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                       name="first_name" value="{{ old('first_name') ? old('first_name') : $firstName }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="middle_name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="middle_name" type="text"
                                       class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}"
                                       name="middle_name" value="{{ old('middle_name')? old('middle_name') : $middleName  }}" required autofocus>

                                @if ($errors->has('middle_name'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('middle_name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text"
                                       class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                       name="last_name" value="{{ old('last_name') ? old('last_name') : $lastName}}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>


                        <div class="card-header">Contact Information</div>
                        <div class="card-body"></div>
                        {{--<form>--}}

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') ? old('email') : $email }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telephone_number"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Telephone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="telephone_number" type="text"
                                           class="form-control{{ $errors->has('telephone_number') ? ' is-invalid' : '' }}"
                                           name="telephone_number" value="{{ old('telephone_number') ? old('telephone_number') : $telephoneNumber }}" required autofocus>

                                    @if ($errors->has('telephone_number'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('telephone_number') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                    {{--</form>--}}

                        <div class="card-header">Address</div>
                        <div class="card-body"></div>

                            <div class="form-group row">
                                <label for="institution"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Institution') }}</label>

                                <div class="col-md-6">
                                    <input id="institution" type="text"
                                           class="form-control{{ $errors->has('institution') ? ' is-invalid' : '' }}"
                                           name="institution" value="{{ old('institution') ? old('institution') : $institution }}" required autofocus>

                                    @if ($errors->has('institution'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('institution') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="street_address"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Street Address') }}</label>

                                <div class="col-md-6">
                                    <input id="street_address" type="text"
                                           class="form-control{{ $errors->has('street_address') ? ' is-invalid' : '' }}"
                                           name="street_address" value="{{ old('street_address') ? old('street_address') : $streetAddress}}" required autofocus>

                                    @if ($errors->has('street_address'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('street_address') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text"
                                           class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                                           name="city" value="{{ old('city') ? old('city') : $city}}" required autofocus>

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                                <div class="col-md-6">
                                    <input id="state" type="text"
                                            class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}"
                                            name="state" value="{{ old('state') ? old('state') : $state }}" required autofocus>

                                    {{--{{ json_encode(config('constants.state')) }}--}}
                                    {{--<input id="state" type="text" class="form-control" value="{{ old('state') }}"autofocus>--}}
                                    @if ($errors->has('state'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zip_code"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label>

                                <div class="col-md-6">
                                    <input id="zip_code" type="text"
                                           class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}"
                                           name="zip_code" value="{{ old('zip_code') ? old('zip_code') : $zipCode  }}" required autofocus>

                                    @if ($errors->has('zip_code'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('zip_code') }}</strong>
                                            </span>
                                    @endif
                                </div>

                            </div>

                        <div class="card-header">Payment Information</div>
                        <div class="card-body"></div>

                            <div class="form-group row">
                                <label for="cardholder_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Cardholder Name') }}</label>

                                <div class="col-md-6">
                                    <input id="cardholder_name" type="text"
                                           class="form-control{{ $errors->has('cardholder_name') ? ' is-invalid' : '' }}"
                                           name="cardholder_name" value="{{ old('cardholder_name') ? old('cardholder_name') : $cardholderName }}" required autofocus>

                                    @if ($errors->has('cardholder_name'))
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('cardholder_name') }}</strong>
                                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="card_number"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Card Number') }}</label>

                                <div class="col-md-6">
                                    <input id="card_number" type="text"
                                           class="form-control{{ $errors->has('card_number') ? ' is-invalid' : '' }}"
                                           name="card_number" value="{{ old('card_number') ? old('card_number') : $cardNumber  }}" required autofocus>

                                    @if ($errors->has('card_number'))
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('card_number') }}</strong>
                                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Expiry_Date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Expiry Date') }}</label>

                                <div class="col-md-2">

                                    <input id="month" class="form-control{{ $errors->has('month') ? ' is-invalid' : '' }}"
                                            name="month" value="{{ old('month') ? old('month') : $month  }}" required autofocus>

                                    @if ($errors->has('month'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('month') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="col-md-2">
                                    <input id="year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}"
                                            name="year" value="{{ old('year') ? old('year') : $year  }}" required autofocus>

                                    @if ($errors->has('year'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cvv" class="col-md-4 col-form-label text-md-right">{{ __('CVV') }}</label>

                                <div class="col-md-6">
                                    <input id="cvv" type="text"
                                           class="form-control{{ $errors->has('cvv') ? ' is-invalid' : '' }}"
                                           name="cvv" value="{{ old('cvv') ? old('cvv') : $cvv  }}" required autofocus>

                                    @if ($errors->has('cvv'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cvv') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit" >Submit </button>
                            <button class="btn btn-secondary" type="reset" >Reset</button>
                            <button  class="btn btn-secondary" id="delete" >Delete</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

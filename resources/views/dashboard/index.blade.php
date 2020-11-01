@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <h4>Nombre de visites :</h4>
                                <h1>{{ $visits }}</h1>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>email</th>
                                        <th>message</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->message }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <a class="btn btn-primary my-4 " href="{{ route('logout') }}">
                {{ __('Logout') }}
            </a>
        </div>
    </div>
@endsection

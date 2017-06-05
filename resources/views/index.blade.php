@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Front-end</div>
                    <nav>
                        <router-link to="/">Go to Foo</router-link>
                        <router-link to="/contact">Go to Bar</router-link>
                    </nav>

                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
@endsection

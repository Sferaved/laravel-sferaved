@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Reporting databases</h1>
    <p class="lead">Quick selection of applications and reporting period</p>
</div>

<div class="container">

        <div class="card-deck mb-3 text-center">
            <div class="row  align-items-center">
                <div class="col-md-2 card mb-4   ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Office 1.00</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
                        01.07.20 - 31.03.21
                        <a type="button" href="http://office-1-00"  class="btn btn-lg btn-block btn-primary">Get started</a>
                    </div>
                </div>
                <div class="offset-md-1 col-md-2 card mb-4  ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">2021</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
                        01.04.21 - 31.12.21
                        <a type="button" href="http://of2021" class="btn btn-lg btn-block btn-primary"
                           target="_blank">Get started</a>
                    </div>
                </div>
                <div class="offset-md-1 col-md-2 card mb-4  ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">2022</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
                        01.01.22 - 31.12.22
                        <a type="button" href="https://of2022" class="btn btn-lg btn-block btn-primary"
                        target="_blank">Get started</a>
                    </div>
                </div>
                <div class="offset-md-1 col-md-2 card mb-4  ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">2023</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
                        01.01.23 - 31.12.23
                        <a type="button" href="https://of2023" class="btn btn-lg btn-block btn-primary"
                        target="_blank">Get started</a>
                    </div>
                </div>


                 <div class="col-md-2 card mb-4  ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">2024</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
                         01.12.24 - 31.12.24
                        <a type="button" href="https://korzhov-office.kharkiv.ua/" class="btn btn-lg btn-block btn-outline-primary"
                           target="_blank">Get started</a>
                    </div>
                </div>

        </div>
    </div>
@endsection

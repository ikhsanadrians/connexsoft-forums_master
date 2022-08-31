@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body ml-20 text-2xl font-bold text-slate-700 tracking-wide">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome') }}    {{ Auth::user()->name }}

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

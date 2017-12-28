@extends('layouts.site')

@section('content')
@include('layouts._site._slides')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <b>Home</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

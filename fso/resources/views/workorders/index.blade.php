@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Workorders</div>
                <div class="card-body">
                    <a class="btn btn-info" href="{{ url('/workorders/create') }}">
                        Dodaj radni nalog
                    </a>

                    @foreach ($workorders as $workorder)
                    <article>
                        <h4> <a href =" {{ $workorder->path() }} "> {{ $workorder->name }}</a></h4>
                        <div class="body"> {{ $workorder->woType->name}} </div>
                    </article>
                    <hr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Workorder {{ $workorder->name}}</div>

                <div class="card-body">
                    <article>
                        <h4> {{ $workorder->name }} </h4>
                        <div class="body"> {{ $workorder->woType->name}}
                    </article>
                </div>
                @foreach ($workorder->tasks as $task)
                @include('workorders.task')
                @endforeach

                @if (auth()->check())
                <div class="card-body">
                    <example-component :users="{{ $workers }}" :tasktypes="{{ $tasktypes }}"></example-component>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
</div>
@endsection

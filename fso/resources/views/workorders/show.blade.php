@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Workorder {{ $workOrder->name}}</div>

                    <div class="card-body">
                        <article>
                            <h4> {{ $workOrder->name }} </h4>
                            <div class="body"> {{ $workOrder->type}} 
                        </article>
                    </div>
                    @foreach ($workOrder->tasks as $task)
                    <div class="card-body">
                        <article> 
                            <h4> Type: {{ $task->type }} </h4> 
                            <div class="body"> Assigned employee: {{ $task->employee->name}} @ {{ $task->created_at}} </div>
                        </article>
                        <hr>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                @include('workorders.task')
                @endforeach

                @if (auth()->check())
                <div class="card-body">
                    <form method="POST" action="{{ $workOrder->path() . "/tasks"}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Type: </label>
                            <input type="text" name="type" />
                        </div>
                        <div class="form-group">
                            <label>Description: </label>
                            <input type="text" name="description" />
                        </div>
                        <button type="submit" class="btn btn-default"> ADD </button>
                    </form>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
</div>
@endsection

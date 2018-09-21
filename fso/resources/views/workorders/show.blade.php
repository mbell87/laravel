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
                        <div class="body"> {{ $workorder->type}}
                    </article>
                </div>
                @foreach ($workorder->tasks as $task)
                @include('workorders.task')
                @endforeach

                @if (auth()->check())
                <div class="card-body">
                    <h4> Add task: </h4>
                    <form method="POST" action="{{ $workorder->path() . "/tasks"}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Type: </label>
                            <input class="form-control" type="text" name="type" />
                        </div>
                        <div class="form-group">
                            <label>Description: </label>
                            <input class="form-control" type="text" name="description" />
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

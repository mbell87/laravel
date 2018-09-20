@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new workorder</div>
                    <form action="/workorders" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name: </label>
                                <input class="form-control" type="text" name="name"/>
                            </div>
                            <div class="form-group">
                                <label>Type: </label>
                                <input class="form-control" type="text" name="type"/>
                            </div>
                            <button type="submit" class="btn btn primary"> Add</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
@endsection

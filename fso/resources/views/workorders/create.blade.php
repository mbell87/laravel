@extends('layouts.app')
@section('title')
Dodaj radni nalog
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new workorder</div>
                    <form form-inline action="/workorders" method="post">
                        {{ csrf_field() }}
                        @if (count($errors) > 0)
                            <div class="error">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="form-group">
                                <label>Centrala: </label>
                                <select class="form-control" name="mdf_id">
                                    <option value="">Odaberite opciju</option>
                                    @foreach($mdfs as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Adresa: </label>
                                <input class="form-control" type="text" name="client"/>
                            </div>
                            <div class="form-group">
                                <label>Ime klijenta: </label>
                                <input class="form-control" type="text" name="client"/>
                            </div>
                            <div class="form-group">
                                <label>Opis: </label>
                                <input class="form-control" type="textarea" name="type"/>
                            </div>

                            <div class="form-group">
                                <label>Vrsta poziva: </label>
                                <select class="form-control" name="call_type_id">
                                    <option value="">Odaberite opciju</option>
                                    @foreach($callTypes as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Vrsta naloga: </label>
                                <select class="form-control" name="wo_type_id">
                                    <option value="">Odaberite opciju</option>
                                    @foreach($woTypes as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>




                            <div class="form-group">
                                <label>Dodijeljeno: </label>
                                <select class="form-control" name="user_id">
                                    <option value="">Odaberite opciju</option>
                                    @foreach($workers as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status: </label>
                                <select class="form-control" name="status_id">
                                    <option value="">Odaberite opciju</option>
                                    @foreach($statuses as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Vrijeme početka: </label>
                                <div class="input-group date" id='datetimepicker1'>
                                    <input type='text' name='start_time' class="form-control datetimepicker" />
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Vrijeme završetka: </label>
                                <div class="input-group date" id='datetimepicker1'>
                                    <input type='text' name='end_time' class="form-control datetimepicker" />
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Add</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>

@endsection

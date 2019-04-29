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
                            <div class="card-body">

                                <div class="error">
                                    @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{ $error }}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="form-group">
                                <label>Centrala: </label>
                                <select class="form-control selectable" name="mdf_id">
                                    <option value="">Odaberite opciju</option>
                                    @foreach($mdfs as $item)
                                    <option {{ (old("mdf_id") == $item->id ? "selected":"") }} value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Adresa: </label>
                                <input class="form-control" value="{{ old('address') }}" type="text" name="address"/>
                            </div>
                            <div class="form-group">
                                <label>Ime klijenta: </label>
                                <input class="form-control" value="{{ old('client') }}" type="text" name="client"/>
                            </div>

                            <div class="form-group">
                                <label>WWMS: </label>
                                <input class="form-control" value="{{ old('wwms') }}" type="number" name="wwms"/>
                            </div>

                            <div class="form-group">
                                <label>Opis: </label>
                                <input class="form-control" value="{{ old('description') }}" type="textarea" name="description"/>
                            </div>

                            <div class="form-group">
                                <label>Vrsta poziva: </label>
                                <select class="form-control selectable" name="call_type_id">
                                    <option value="">Odaberite opciju</option>
                                    @foreach($callTypes as $item)
                                    <option  {{ (old("call_type_id") == $item->id ? "selected":"") }} value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Vrsta naloga: </label>
                                <select class="form-control selectable" name="wo_type_id">
                                    <option value="">Odaberite opciju</option>
                                    @foreach($woTypes as $item)
                                    <option  {{ (old("wo_type_id") == $item->id ? "selected":"") }} value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>




                            <div class="form-group">
                                <label>Dodijeljeno: </label>
                                <select class="form-control selectable" name="user_id">
                                    <option value="">Odaberite opciju</option>
                                    @foreach($workers as $item)
                                    <option {{ (old("user_id") == $item->id ? "selected":"") }} value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status: </label>
                                <select class="form-control selectable" name="status_id">
                                    <option value="">Odaberite opciju</option>
                                    @foreach($statuses as $item)
                                    <option {{ (old("status_id") == $item->id ? "selected":"") }} value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Vrijeme početka: </label>
                                <div class="input-group date" id='datetimepicker1'>
                                    <input type='text' value="{{ old('start_time') }}" name='start_time' class="form-control datetimepicker" />
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Vrijeme završetka: </label>
                                <div class="input-group date" id='datetimepicker1'>
                                    <input type='text' value="{{ old('end_time') }}" name='end_time' class="form-control datetimepicker" />
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

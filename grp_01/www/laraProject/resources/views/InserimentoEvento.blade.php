<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/meanmenu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/searchbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">

@extends('layout.zonaUtente3')

@section('title', 'Inserimento Evento')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="address">
                <div class="address">
                    <!--Inizio del Form-->
                    <div class="address">
                        <div class="form-group row">
                            <div class="wrapper fadeInDown">INSERISCI EVENTO</div>
                            {{ Form::open(array('route' => 'inserisci', 'id' => 'inseriscievento', 'files' => true, 'class' => 'contact-form')) }}
                        </div>
                    </div>
                    <!--Titolo-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('titolo', 'Titolo', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('titolo', '', ['class' => 'input', 'id' => 'titolo']) }}
                                @if ($errors->first('titolo'))
                                <ul class="errors">
                                    @foreach ($errors->get('titolo') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Locandina-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('locandina', 'Locandina', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::file('locandina', ['class' => 'input', 'id' => 'locandina']) }}
                                @if ($errors->first('locandina'))
                                <ul class="errors">
                                    @foreach ($errors->get('locandina') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Societa Organizzatrice-->
                    <div class="address">
                        <div class="form-group row">
                            <?php $user=Auth::user() ?>
                            {{ Form::hidden('societa_organizzatrice', $user->nome_societa_organizzatrice) }}
                           
                        </div>
                    </div>
                    <!--Prezzo-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('prezzo_biglietto', 'Prezzo', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::number('prezzo_biglietto', '', ['class' => 'input','id' => 'prezzo_biglietto']) }}
                                @if ($errors->first('prezzo_biglietto'))
                                <ul class="errors">
                                    @foreach ($errors->get('prezzo_boglietto') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Sconto-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('sconto', 'Sconto', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::number('sconto', '', ['class' => 'input','id' => 'sconto']) }}
                                @if ($errors->first('sconto'))
                                <ul class="errors">
                                    @foreach ($errors->get('sconto') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Data e Ora-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('data_ora', 'Data e Ora', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::date('data', '', ['class' => 'input','id' => 'data']) }}
                                {{Form::time('ora','',['class' => 'input','id' => 'ora'])}}
                                @if ($errors->first('data'))
                                <ul class="errors">
                                    @foreach ($errors->get('data_ora') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Totale Biglietti Evento-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('totale_biglietti_evento', 'Totale biglietti evento', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::number('totale_biglietti_evento', '', ['class' => 'input','id' => 'totale_biglietti_evento']) }}
                                @if ($errors->first('totale_biglietti_evento'))
                                <ul class="errors">
                                    @foreach ($errors->get('totale_biglietti_evento') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--coordinate maps-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('coordinate_maps', 'Coordinate Maps', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('coordinate_maps', '', ['class' => 'input','id' => 'coordinate_maps']) }}
                                @if ($errors->first('coordinate_maps'))
                                <ul class="errors">
                                    @foreach ($errors->get('coordinate_maps') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Luogo-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('luogo', 'Luogo', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('luogo', '', ['class' => 'input', 'id' => 'luogo']) }}
                                @if ($errors->first('luogo'))
                                <ul class="errors">
                                    @foreach ($errors->get('luogo') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Programma Evento-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('programma_evento', 'Programma Evento', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('programma_evento', '', ['class' => 'input', 'id' => 'programma_evento']) }}
                                @if ($errors->first('programma evento'))
                                <ul class="errors">
                                    @foreach ($errors->get('programma_evento') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Indicazioni-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('indicazioni', 'Indicazioni', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('indicazioni', '', ['class' => 'input', 'id' => 'indicazioni']) }}
                                @if ($errors->first('indicazioni'))
                                <ul class="errors">
                                    @foreach ($errors->get('indicazioni') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Informazioni-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('informazioni', 'Informazioni', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('informazioni', '', ['class' => 'input', 'id' => 'informazioni']) }}
                                @if ($errors->first('informazioni'))
                                <ul class="errors">
                                    @foreach ($errors->get('informazioni') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6 offset-md-3">
                            {{ Form::submit('Aggiungi Evento', ['class' => 'form-btn1']) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


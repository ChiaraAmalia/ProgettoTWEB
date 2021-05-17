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




@extends('layout.zonaPubblica')

@section('title', 'Dettaglio')

@section('content')
<div class="container-fluid my-5 d-flex justify-content-center">
    <div class="card card-1">
        <!--Intestazione-->
        <div class="card-header bg-white">
            <div class="media flex-sm-row flex-column-reverse justify-content-between ">
                <div class="col my-auto">
                    <h2>Procedi con l'acquisto!</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-between mb-3">
                <div class="col-auto">
                    <h6 class="color-1 mb-0 change-color">Stai acquistando:</h6>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card card-2">
                        <div class="card-body">
                            <div class="media">
                                <div class="sq align-self-center "> @include('Helper/LocandinaAcquisto', ['imgFile' => $locandina]) </div>
                                <div class="media-body my-auto text-right">
                                    <div class="row my-auto flex-column flex-md-row">
                                        <div class="col my-auto">
                                            <h6 class="mb-0"> {{ $titolo }}</h6>
                                        </div>
                                        
                                       
                                        <div class="col my-auto"> <small>Quantità : <div class="qty-changer">
                                                    <form name='ordine' onchange="prezzoTotale()">
            <input id="quant" class="qty-input form-group" type="number" value="1" min="1"/>
                                                    </form>
        </div></small></div>
                                        <div class="col my-auto">
                                            <h6 class="mb-0">@include('Helper/Prezzo')</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="row justify-content-between">

                        <div class="flex-sm-col text-right col">
                            <p class="mb-1"><b>Metodo di pagamento</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <form action="#">
                                <select>
                                <option>Bonifico</option>
                                <option>Carta di credito</option>
                                <option>PayPal</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
        <div class="card-footer">
            <div class="jumbotron-fluid">
                <div class="row justify-content-between ">
                                        <div class="col-auto my-auto ">
                        <h2 class="mb-0 font-weight-bold">TOTALE</h2>
                    </div>
                    
                    <div class="col-auto my-auto ml-auto">
                    <?php if($biglietto_scontato==1){
                    $prezzo=$prezzo-(($prezzo*$sconto)/100);
                    }?>
                        <h5  class="display-3 "><span id="totale">{{$prezzo}}</span><span>€</span></h5>
                    </div>
                    
                    <script >
                        
                        
          function prezzoTotale() {
                var prezzo = document.ordine.elements[0].value;

                var totale=prezzo*<?php echo $prezzo; ?>;
                document.getElementById('totale').innerHTML=totale;
            }

        </script>
                    
                    
                    <div class="col-auto my-auto ml-auto">
                        <button>Procedi con il pagamento</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


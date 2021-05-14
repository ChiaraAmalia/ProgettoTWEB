@extends('layout.zonaPubblica')

@section('title', 'Catalogo')

@section('content')
<div class="container mt-5 mb-5">
    @isset($eventi)
    @foreach ($eventi as $evento)
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/QpjAiHq.jpg"></div>
                <div class="col-md-6 mt-1">
                    <p class="nomeprod">{{ $evento->titolo }}</p>
                    <div class="d-flex flex-row">
                        <div class="mt-1 mb-1 spec-1"><span>{{ $evento->data_ora }}</span><span class="dot"></span><span>{{ $evento->luogo }}</span><span class="dot"></span><span>{{ $evento->societa_organizzatrice }}<br></span></div>
                    </div>
                    <p class="text-justify text-truncate para mb-0">{{ $evento->informazioni }}<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1"></h4><span class="strike-text">{{ $evento->prezzo_biglietto }} €</span>
                    </div>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Dettagli</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Compra</button></div>
                </div>
            </div>
            
         </div>
    </div>
    @endforeach
    
    
    @endisset()
</div>
@endsection


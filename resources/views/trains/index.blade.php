@extends("layouts.main")

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row text-center d-flex justify-content-center align-items-center p-5">
                @foreach ($trains as $train)
                    <div class="col-5 d-flex justify-content-center align-items-center m-0">
                        <div class="card my-card m-3">
                            <div class="card-body">
                                <h5 class="card-title"><h4 class="text-danger">{{$train->azienda}}</h4></h5>
                                <p class="card-text"><h4 class="text-danger">Stazione di partenza: <span>{{$train->stazione_di_partenza}}</span></h4></p>
                                <p class="card-text"><h4 class="text-danger">Stazione di arrivo: <span>{{$train->stazione_di_arrivo}}</span></h4></p>
                                <p class="card-text"><h4 class="text-danger">Data corsa: <span>{{$train->date}}</span></h4></p>
                                <p class="card-text"><h4 class="text-danger">Orario di partenza: <span>{{$train->orario_di_partenza}}</span></h4></p>
                                <p class="card-text"><h4 class="text-danger">Orario di arrivo: <span>{{$train->orario_di_partenza}}</span></h4></p>
                                <p class="card-text"><h4 class="text-danger">Codice treno: <span>{{$train->codice_treno}}</span></h4></p>
                                <p class="card-text"><h4 class="text-danger">Numero di carroze: <span>{{$train->numero_carrozze}}</span></h4></p>
                                <p class="card-text"><h4 class="text-danger">Tratta cancellata: <span>{{$train->cancellato}}</span></h4></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    
@endsection
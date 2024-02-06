@extends('comics.index')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $comic->title }}
                            </h1>
                            <p>
                                Cottura: {{ $comic->price }}
                            </p>
                            <p>
                                Cottura: {{ $comic->series }}
                            </p>
                            <p>
                                Cottura: {{ $comic->sale_date }}
                            </p>
                            <p>
                                Cottura: {{ $comic->type }}
                            </p>

                            <div class="card-image">
                                <img class="w-50" src="{{  $comic->thumb}}" alt="{{ $comic->title }} ">
                            </div>
                            <div class="card-body">
                                <h2>
                                    Descrizione
                                </h2>
                                <p>
                                    {{ $comic->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

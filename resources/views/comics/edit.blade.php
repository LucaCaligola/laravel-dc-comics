

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>

    @vite('resources/js/app.js')

  
</head>
<body>

    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Modifica il fumetto:
                </h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('comics.update', $comic->id) }}" method="POST" >
                    @csrf

                    {{-- metodo custom --}}
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title"class="form-label">
                            Titolo del fumetto:
                        </label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old( 'title' ,$comic->title) }}">
                    </div>


                    <div class="mb-3">
                        <label for="thumb"class="form-label">URL copertina</label>
                        <input type="text" name="thumb" id="tipo" value="{{ old( 'thumb' ,$comic->thumb) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="series"class="form-label">Serie:</label>
                        <input type="text" name="series" id="series" value="{{ old( 'series' ,$comic->series) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="price"class="form-label">Prezzo:</label>
                        <input type="text" name="price" id="price"  value="{{ old( 'price' ,$comic->price) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date"class="form-label">Data d'uscita</label>
                        <input type="date" name="sale_date" id="sale_date" class="form-control" value="{{ old( 'sale_date' ,$comic->sale_date) }}">
                    </div>

                    <div class="mb-3">
                        <label for="description"class="form-label">Descrizione:</label>
                        <textarea type="text" name="description" id="description" class="form-control"
                        rows="4">{{ old( 'description' , $comic->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="type"class="form-label">Tipologia:</label>
                        <input type="text" name="type" id="type"  value="{{ old( 'type' ,$comic->type) }}" class="form-control">
                    </div>

                    <a href="{{ route('comics.show', $comic->id) }}">
                        <button type="submit" class="btn btn-primary">Modifica il fumetto</button>
                    </a>

                    <button type="reset"  class="btn btn-warning">Pulisci il form</button>
                </form>
            </div>
        </div>
    </section>
</body>
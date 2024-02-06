
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
                    Crea nuovo fumetto
                </h1>
                <form action="{{ route('comics.store') }}" method="POST" >
                    @csrf

                    <div class="mb-3">
                        <label for="titolo"class="form-label">
                            Titolo del Fumetto:
                        </label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="tipo"class="form-label">Foto di copertina:</label>
                        <input type="text" name="thumb" id="thumb" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="cottura"class="form-label">Descrizione:</label>
                        <input type="text" name="description" id="description" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="peso"class="form-label">Prezzo:</label>
                        <input type="text" name="price" id="price" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="src"class="form-label">Serie</label>
                        <input type="text" name="series" id="series" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="descrizione"class="form-label">Data di ventida:</label>
                        <textarea type="text" name="sale_date" id="sale_date" class="form-control"
                        rows="4">
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="descrizione"class="form-label">Tipologia:</label>
                        <textarea type="text" name="type" id="type" class="form-control"
                        rows="4">
                        </textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Crea nuovo fumetto</button>
                    <button type="reset"  class="btn btn-warning">Pulisci il form</button>
                </form>
            </div>
        </div>
    </section>


</body>
</html>
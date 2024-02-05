<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>

    @vite('resources/js/app.js')

  
</head>
<body>
   @include('partials.header')

   <main>


    <div class="background">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>

    <div class="background-dark">
         

        <div class="container">
            <div class="text-white pt-3 text-center">
                <button class="bg-blue text-center">CURRENT SERIES</button>
            </div>
            <div class="row">
                @foreach ($comics as $comic)
                    
                
                <div class="col-2 mt-3">
                    <div class="titoli">
                        <img src=" {{ $comic ['thumb'] }}" alt="" class="w-100">
                        <p class="text-white">
                            {{ $comic ['title'] }}
                        </p>

                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-white pt-3 text-center">
                <button class="bg-blue text-center">LOAD MORE</button>
            </div>
        </div>

        <div class="barra">
            <div class="container">

                <div class="row mt-3 py-4">
                    <div class="col d-flex loghi justify-content-between text-white ">
                        <div>
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                            <span>DIGITAL COMICS</span>
                        </div> 
                        <div>
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                            <span>DC MERCHANDISE</span>
                        </div>
                        <div>
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                            <span>COMIC SHOP LOCATOR</span>
                        </div>
                        <div>
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                            <span>SUBSCRIPTION</span>
                        </div>
                        <div>
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                            <span>DC POWER VISA</span>
                        </div>
                    </div>
                </div>
            </div>

            


        </div>
        

    </div>

   </main>
    

   @include('partials.footer')
</body>
</html>
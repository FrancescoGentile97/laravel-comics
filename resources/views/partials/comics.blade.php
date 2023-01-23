
@section("comicsStamp")
<section>
<div>
    <img src="{{ Vite::asset("resources/img/jumbotron.jpg")}}" class="my-jumbo">
</div> 
<!-- Stampare le carte con il ciclo -->
<main class="bg-dark">
<div class="row py-4">
    @foreach ($comicsList as $comicsCard)
    <div class="col-2 card bg-dark border-0">
        <img src="{{$comicsCard["thumb"]}}" class="card-img">
        <div class="card-body">
            <h5 class="card-title text-white">{{$comicsCard["title"]}}</h5>
        </div>
    </div>
    @endforeach
</div>
<div class="text-center">
    <button class="btn btn-primary">LOAD MORE</button>
</div>
<section>
<div class="bg-primary my-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ Vite::asset("resources/img/buy-comics-digital-comics.png")}}" class="">
                    <a href="" class="text-white">Digital Comics</a>
                </div>

                <div class="col">
                    <img src="{{ Vite::asset("resources/img/buy-comics-merchandise.png")}}" class="">
                    <a href="" class="text-white">DC MERCHANDISE</a><
                </div>

                <div class="col">
                    <img src="{{ Vite::asset("resources/img/buy-comics-shop-locator.png")}}" class="">
                    <a href="" class="text-white">COMIC SHOP LOCATOR</a>
                </div>

                <div class="col">
                    <img src="{{ Vite::asset("resources/img/buy-comics-subscriptions.png")}}" class="">
                    <a href="" class="text-white"></a>
                </div>

                <div class="col">
                    <img src="{{ Vite::asset("resources/img/buy-comics-digital-comics.png")}}" class="">
                    <a href="" class="text-white">Digital Comics</a>
                </div>
            </div>
        </div>
    </div>

@endsection
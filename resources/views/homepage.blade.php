@extends('layout.default')

@section('page_title', 'Pagina dei fumetti')

@section('content')

<div class="bg-black" id="comics">
    <div class="container">
        <div class="title">Current series</div>
        <div class="container-flex">
            @foreach($comicsList as $key => $value)
            <div class="item">
                <a href="{{ route('pagina-singolo-fumetto', [ 'index' => $key ]) }}">
                    <div class="img-container">
                        <img src="{{ $value['thumb'] }}" alt="">
                    </div>
                    <p>{{ $value['series'] }}</p>
                </a>
            </div>
            @endforeach
        </div>
        <div class="btn-container">
            <button>Load more</button>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <ul class="container-flex">
                <li>
                    <img src={{ asset("images\buy-comics-digital-comics.png")}} alt="">
                    <span>Digital comics</span>
                </li>
                <li>
                    <img src={{ asset("images\buy-comics-merchandise.png")}} alt="">
                    <span>DC merchandise</span>
                </li>
                <li>
                    <img src={{ asset("images\buy-comics-shop-locator.png")}} alt="">
                    <span>Subscription</span>
                </li>
                <li>
                    <img src={{ asset("images\buy-comics-subscriptions.png")}} alt="">
                    <span>Comic shop locator</span>
                </li>
                <li>
                    <img src={{ asset("images\buy-dc-power-visa.svg")}} alt="">
                    <span>DC power visa</span>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
@extends('layout.default')

@section('page_title', 'Dettagli fumetto')

@section('content')

<div id="single">
    <section id="ss1">
        <div class="small-container">
            <div class="img-container">
                <img src={{ $fumetto["thumb"] }} alt="">
                <div class="more">View gallery</div>
            </div>
        </div>
    </section>
    <section id="ss2">
        <div class="small-container container-flex">
            <div class="text-box">
                <h2>{{ $fumetto["title"] }}</h2>
                <div class="pricebox container-flex">
                    <span>U.S. Price:</span>
                    <span class="text-white">{{ $fumetto["price"] }}</span>
                    <div class="filler"></div>
                    <span>AVAILABLE</span>
                    <button>
                        Check Availability
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </button>
                </div>
                <p>{{ $fumetto["description"] }}</p>
            </div>
            <img src={{ asset("images/adv.jpg") }} alt="">
        </div>
    </section>
    <section id="ss3">
        <div class="small-container container-flex">
            <div class="col">
                <h3>Talent</h3>
                <table>
                    <tr>
                        <td>Art by:</td>
                        <td>
                            {{ collect($fumetto["artists"])->implode(", ") }}
                        </td>
                    </tr>
                    <tr>
                        <td>Written by:</td>
                        <td>
                            {{ collect($fumetto["writers"])->implode(", ") }}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <h3>Specs</h3>
                <table>
                    <tr>
                        <td>Series:</td>
                        <td>
                            {{ $fumetto["series"] }}
                        </td>
                    </tr>
                    <tr>
                        <td>U.S. Price:</td>
                        <td>
                            {{ $fumetto["price"] }}
                        </td>
                    </tr>
                    <tr>
                        <td>On Sale Date:</td>
                        <td>
                            {{ $fumetto["sale_date"] }}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{-- ultimo banner --}}
    </section>
</div>

@endsection
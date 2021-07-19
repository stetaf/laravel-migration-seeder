@extends('layout.app')

@section('content')
    <div class="container">
        <h1>I nostri {{ $type }}</h1>
        <div class="row">
            @foreach ($packages as $package) 
                <div class="col-12 col-md-6">
                    <div class="package">
                        <img src="{{ $package->image }}" alt="">
                        <div class="data d-flex flex-column justify-content-between">
                            <div class="upper">
                                <h4>{{ $package->name }}</h4>
                                <span class="address">{{ $package->city }}, {{ $package->address }}</span>
                            </div>
                            <div class="bottom d-flex justify-content-between">
                                <div class="left">
                                    <span class="price">&euro; <strong>{{ $package->price }}</strong>/notte a persona</span>
                                    @if ($package->breakfast) 
                                        <span class="breakfast">Colazione <strong>inclusa</strong></span>
                                    @else
                                        <span class="breakfast">Colazione non inclusa</span>
                                    @endif
                                </div>
                                <div class="right">
                                    @for ($i = 0; $i < $package['rating']; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
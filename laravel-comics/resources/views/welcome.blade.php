@extends("layout/master")



@section ('container-card')
<div class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>DC Comics</h1>
                    <div class="row">
                        @foreach ($comics as $comic)
                            <div class="col-2">
                                <x-card>
                                    <x-slot:title>{{$comic['title']}}</x-slot:title>
                                    <x-slot:thumb>{{$comic['thumb']}}</x-slot:thumb>
                                </x-card>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('social')
<div class="py-4 bg-dark">
    <div class="row align-items-center justify-content-between">
        <!-- Sinistra: Sign-up button -->
        <div class="col-auto">
            <button class="btn btn-outline-primary fw-bold px-4">SIGN-UP NOW!</button>
        </div>
        <!-- Destra: Social -->
        <div class="col-auto d-flex align-items-center gap-3">
            <span class="fw-bold text-primary me-2">FOLLOW US</span>
            <a href="#"><img src="" alt="Facebook" class="img-fluid" style="width: 28px; filter: grayscale(1) brightness(2);"></a>
            <a href="#"><img src="" alt="Twitter" class="img-fluid" style="width: 28px; filter: grayscale(1) brightness(2);"></a>
            <a href="#"><img src="" alt="YouTube" class="img-fluid" style="width: 28px; filter: grayscale(1) brightness(2);"></a>
            <a href="#"><img src="" alt="Pinterest" class="img-fluid" style="width: 28px; filter: grayscale(1) brightness(2);"></a>
            <a href="#"><img src="" alt="Location" class="img-fluid" style="width: 28px; filter: grayscale(1) brightness(2);"></a>
        </div>
    </div>
</div>
@endsection
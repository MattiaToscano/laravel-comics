@extends("layout/master")




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

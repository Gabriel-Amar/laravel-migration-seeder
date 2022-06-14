
    
    
    @extends('layouts.base')

    @section('mainContent')
        <h1>Lista viaggi</h1>
    
    <div class="container">
        <div class="row">
        @foreach ($travels as $item)
            <a href="{{route('detail', $item->id)}}">{{$item->title}}</a>
        @endforeach
        </div>
    </div>
    
    @endsection
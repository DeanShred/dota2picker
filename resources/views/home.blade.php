@extends('app')
@section('title')
    {{$title}}
@endsection
@section('content')
    @if ( !$heroes->count() )
        Error
    @else
        <div class="">
            @foreach( $heroes as $hero )
                <div class="list-group">
                    <div class="list-group-item">
                        <h3><a href="{{ url('/'.$hero->slug) }}">{{ $hero->name }}</a></h3>
                    </div>
                    <div class="list-group-item">
                        <img src="{{ asset("storage/heroes/$hero->image") }}" alt="{{ $hero->name }}"/>
                    </div>
                    <div class="list-group-item">
                        @foreach( $roles as $role )
                            @if( $role->hero_id == $hero->id)
                                <p>{{ $role->getCode() }}: {{ $role->predisposition }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
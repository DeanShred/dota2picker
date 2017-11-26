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
                        <h3><img src="{{ asset("storage/heroes/$hero->icon ") }}" alt="{{ $hero->name }}"/>
                            <a href="{{ url('/'.$hero->slug) }}">{{ $hero->name }}</a>
                        </h3>
                    </div>
                    <div class="list-group-item">
                        @foreach( $roles as $role )
                            @if( $role->hero_id == $hero->id)
                                {{ $role->getCode() }}:
                                <div class="w3-container w3-grey w3-center"
                                     style="width:{{ $role->predisposition }}%">{{ $role->predisposition }}%
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
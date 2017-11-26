@extends('app')
@section('title')
    {{$title}}
@endsection
@section('content')
    @if ( !$hero->id )
        Error
    @else
        <div class="">
            <div class="list-group">
                <div class="list-group-item">
                    <img src="{{ asset("storage/heroes/$hero->image ") }}" alt="{{ $hero->name }}"/>
                </div>
                <div class="list-group-item">
                    @if( $roles->count() > 0 )
                        <h4>Roles</h4>
                        @foreach( $roles as $role )
                            {{ $role->getCode() }}:
                            <div class="w3-container w3-grey w3-center"
                                 style="width:{{ $role->predisposition }}%">{{ $role->predisposition }}%
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="list-group-item">
                    <h4>Good with</h4>
                    @if( $hero->comrades()->count() > 0 )
                        @foreach( $hero->comrades() as $comrade )
                            <div>
                                <img src="{{ asset("storage/heroes/$comrade->icon ") }}" alt="{{ $comrade->name }}"/>
                                <a href="{{ url('/'.$comrade->slug) }}">{{ $comrade->name }}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="list-group-item">
                    <h4>Good vs</h4>
                    @if( $hero->goodVs()->count() > 0 )
                        @foreach( $hero->goodVs() as $enemy )
                            <div>
                                <img src="{{ asset("storage/heroes/$enemy->icon ") }}" alt="{{ $enemy->name }}"/>
                                <a href="{{ url('/'.$enemy->slug) }}">{{ $enemy->name }}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="list-group-item">
                    <h4>Bad vs</h4>
                    @if( $hero->badVs()->count() > 0 )
                        @foreach( $hero->badVs() as $enemy )
                            <div>
                                <img src="{{ asset("storage/heroes/$enemy->icon ") }}" alt="{{ $enemy->name }}"/>
                                <a href="{{ url('/'.$enemy->slug) }}">{{ $enemy->name }}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
    @endif
@endsection
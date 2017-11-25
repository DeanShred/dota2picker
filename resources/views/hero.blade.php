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
                        <div class="roles">
                            <div class="roles-header">
                                <h4>Roles</h4>
                            </div>
                            <div class="roles-content">
                                @foreach( $roles as $role )
                                    <p>{{ $role->getCode() }}: {{ $role->predisposition }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="good-with"></div>
                    <div class="good-vs"></div>
                    <div class="bad-vs"></div>
                </div>
            </div>
        </div>
    @endif
@endsection
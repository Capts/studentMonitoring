@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="container">
    <div class="row" style="background-color:  #f2f2f2;">
        @include('partials._sidebar')
        <div class="main-content" >
            
                @include('pages.profile')


        </div>


        </div>
    </div>
</div>
@endsection

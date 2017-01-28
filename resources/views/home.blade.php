@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="container">
    <div class="row" style="background-color:  #;">
        @include('partials._sidebar')
        <div class="main-content">
          
          <div class="flex-center">
              <div class="title"><br><br>
                  <h2>Welcome to your Dashboard <b>{{ Auth::user()->name }}</b></h2>
                  <br><br><br>

              </div>
          </div>
        </div>
        
        </div>
    </div>
</div>
@endsection

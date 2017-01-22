@extends('layouts.app')
    @include('partials._head')

    @section('title', '| Welcome')
    @section('content')
    
    @if(Auth::guest())
        <div class="flex-center ">
            <div class="content m-b-md" >

                <img src="/img/pic/logoUC.png" alt="" style="position:absolute;top:215px;left:840px;height: 400px;opacity:0.1;">
                    <div class="title m-b-md">
                        <h2 class="title">Welcome UCIAN's</h2>

                        <h2 class="title1">Hold high the torch</h2>
                    </div>
                     <br><br><br><br><br>
                    <div class="links">
                        <a href="www.uc-bcf.edu.ph">UC Website</a>
                        <a href="https://mystudentportal.uc-bcf.edu.ph/">Student Portal</a>
                        <a href="morale.uc-bcf.edu.ph">UC Morale</a>
                    </div>
                   
                    
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
    @else
    
    <div class="flex-center">
            <div class="content" >

                <img src="/img/pic/logoUC.png" alt="" style="position:absolute;top:215px;left:800px;height: 550px;opacity:0.1;">
                    <div class="title m-b-md">
                        <h2 class="title">You are logged-in as <br><b>{{ Auth::user()->name }}</b></h2>
                    </div>
    
                    
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    @endif

@stop

@include('partials._head')

<nav class="navbar navbar-default" role="navigation" >
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav" style="font-family: 'Open Sans', sans-serif;font-size:21px;">
        <li class="{{ Request::is('home') ? "active"  : "" }}" ><a href="home" style="font-size:18px;">Dashboard</a></li>
        <li class="{{ Request::is('profile') ? "active" : "" }}"><a href="profile" style="font-size:18px;">Profile</a></li>
        <li class="{{ Request::is('monitoring') ? "active" : "" }}"><a href="monitoring" style="font-size:18px;">Monitoring</a></li>
        <div class="col-lg-3 pull-right" style="margin-top:8px;">
                    <div class="input-group custom-search-form">
                      <input type="text" class="form-control" placeholder="search student here..">
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                      <span class="glyphicon glyphicon-search"></span>
                     </button>
                     </span>
                     </div><!-- /input-group -->
                  </div>
      </ul>
    
    </div><!-- /.navbar-collapse -->
  
</nav>

	
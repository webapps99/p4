<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','ABC Pet Services')</title>
	<meta charset='utf-8'>

	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	{{ HTML::style('/css/stylesheet.css') }}

	<link rel='stylesheet' type='text/css' href='/public/services.css' >


	@yield('head')


</head>
<body>

 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a id="nav-far-left" class="navbar-brand" href="/">Chris Nystrom - DWA15 P4</a>
            </div>

          </div>
</div>

<br><br><br>

	@if(Session::get('flash_message'))
		<div class='flash-message'>{{ Session::get('flash_message') }}</div>
	@endif


<!-- Sign Up or Login -->
<nav>

		@if(Auth::check())  <!-- USE THIS SECTION TO DISPLAY CONTENT AFTER SIGN IN -->
			<div class="textcenter">
			<li><a href='/logout'>Log out {{ Auth::user()->email; }}</a></li>
			</div>

			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                      <div class="container">

                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a id="nav-far-left" class="navbar-brand" href="/">Chris Nystrom - DWA15 P4</a>
                      </div>

                      <div class="navbar-collapse collapse">
                          <ul class="nav navbar-nav">
                            <li id="navhome"><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                            <li id="navlorem"><a href="/services"><span class="glyphicon glyphicon-pencil"></span> View Services</a></li>
                            <li id="navfaker"><a href="/requests_add"><span class="glyphicon glyphicon-user"></span> Request Services</a></li>
                            <li id="navfaker"><a href="/requests"><span class="glyphicon glyphicon-flash"></span> Edit Request</a></li>

                            @if(Auth::user()->email === "admin@yahoo.com")
                            <li id="navfaker"><a href="/services_add"><span class="glyphicon glyphicon-wrench"></span> Add Services</a></li>
                            @endif


                          </ul>
                      </div>
                     </div>
            </div>


		@else

            <div class="textcenter">
			<a href='/signup'>Sign up</a> or <a href='/login'>Log in</a> to <b>request a service on-line!</b>
			<br><br>
            </div>
		@endif

	</nav>

@yield('content')

@yield('/body')




<!-- Telephone, email and Towns Served -->

    <table class = logo1>
        <tbody>


           <tr> <td> <br><br><a href='/'><img class='logo' src='/images/cover1.png' alt='ABC Pet Services Logo'></a></td></tr>

            <tr>

                <td><strong>Email us at:<br />
                <a href="mailto:colbyservices@aol.com">abcpetservices@yahoo.com</a></strong>
                  </td>

            </tr>
            <tr>
                <td><em>Serving: Canton, Dedham, Foxboro, Norfolk, Sharon, Stoughton, Walpole</em><br />
                  </td>
            </tr>
        </tbody>
    </table>






</body>
</html>








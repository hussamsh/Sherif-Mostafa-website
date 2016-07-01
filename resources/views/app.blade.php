<!doctype lang="en">
<head>
	<meta charset="UTF-8">
	<title>Documet</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link href="../.../public/css/app.css" rel="stylesheet"/>


<style>

html,
body {
    width: 100%;
    height: 100%;
}

body {
    font-family: "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;
}

.text-vertical-center {
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}

.text-vertical-center h1 {
    margin: 0;
    padding: 0;
    font-size: 6em;
    font-weight: 700;
    color:white;
}


.text-vertical-center h3 {
    color:white;
}

.pattern-image:after{
	opacity: .2;
	background: #111;
 }

/* Custom Button Styles */

.btn-dark {
    border-radius: 0;
    color: #fff;
    background-color: rgba(0,0,0,0.4);
}

.btn-dark:hover,
.btn-dark:focus,
.btn-dark:active {
    color: #fff;
    background-color: rgba(0,0,0,0.7);
}

.btn-light {
    border-radius: 0;
    color: #333;
    background-color: rgb(255,255,255);
}

.btn-light:hover,
.btn-light:focus,
.btn-light:active {
    color: #333;
    background-color: rgba(255,255,255,0.8);
}

/* Custom Horizontal Rule */

hr.small {
    max-width: 100px;
}

/* Side Menu */

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    right: 0;
    width: 250px;
    height: 100%;
    margin-right: -250px;
    overflow-y: auto;
    background: #222;
    -webkit-transition: all 0.4s ease 0s;
    -moz-transition: all 0.4s ease 0s;
    -ms-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
}

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 55px;
    font-size: 18px;
    line-height: 55px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

#menu-toggle {
    z-index: 1;
    position: fixed;
    top: 0;
    right: 0;
}

#sidebar-wrapper.active {
    right: 250px;
    width: 250px;
    -webkit-transition: all 0.4s ease 0s;
    -moz-transition: all 0.4s ease 0s;
    -ms-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
}

.toggle {
    margin: 5px 5px 0 0;
}

/* Header */

.header {
    display: table;
    position: relative;
    width: 100%;
    height: 100%;
    background: url("https://images.unsplash.com/photo-1432821596592-e2c18b78144f?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=3f9c78df0edb464244bbabb04d1797d8") no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

/* About */

.about {
    padding: 50px 0;
}

/* Services */

.services {
    padding: 50px 0;
}

.service-item {
    margin-bottom: 30px;
}

/* Callout */

.callout {
    display: table;
    width: 100%;
    height: 400px;
    color: #fff;
    background: url(../img/callout.jpg) no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

/* Portfolio */

.portfolio {
    padding: 50px 0;
}

.portfolio-item {
    margin-bottom: 30px;
}

.img-portfolio {
    margin: 0 auto;
}

.img-portfolio:hover {
    opacity: 0.8;
}

/* Call to Action */

.call-to-action {
    padding: 50px 0;
}

.call-to-action .btn {
    margin: 10px;
}

/* Map */

.map {
    height: 500px;
}

@media(max-width:768px) {
    .map {
        height: 75%;
    }
}

/* Footer */

footer {
    padding: 100px 0;
}

hr.style2 {
	border-top: 3px double #8c8b8b;
	max-width : 200px;
	background:black;
}

hr.style8 {
	border-top: 1px solid #8c8b8b;
	border-bottom: 1px solid #8c8b8b;
	max-width:200px;
}

.card {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card {
  margin-top: 10px;
  box-sizing: border-box;
  border-radius: 2px;
  background-clip: padding-box;
}
.card span.card-title {
    color: #fff;
    font-size: 24px;
    font-weight: 300;
    text-transform: uppercase;
}

.card .card-image {
  position: relative;
  overflow: hidden;
}
.card .card-image img {
  border-radius: 2px 2px 0 0;
  background-clip: padding-box;
  position: relative;
  z-index: -1;
}
.card .card-image span.card-title {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 16px;
}
.card .card-content {
  padding: 16px;
  border-radius: 0 0 2px 2px;
  background-clip: padding-box;
  box-sizing: border-box;
}
.card .card-content p {
  margin: 0;
  color: inherit;
}
.card .card-content span.card-title {
  line-height: 48px;
}
.card .card-action {
  border-top: 1px solid rgba(160, 160, 160, 0.2);
  padding: 16px;
}
.card .card-action a {
  color: #ffab40;
  margin-right: 16px;
  transition: color 0.3s ease;
  text-transform: uppercase;
}
.card .card-action a:hover {
  color: #ffd8a6;
  text-decoration: none;
}


</style>



</head>

<body>

<div>

<!-- Header -->
    <header id="top" class="header">
	<div class="text-vertical-center">
	    <hr class="style8"/>
	    <h1>Sherif Mostafa</h1>
	    <hr class="style8"/>
            <h3>Economist</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

<!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
		    <h2>What can I do for you ?</h2>
		    <hr class="style2"/>
                    <p class="lead">Well eveything you need to get up and running with your bussnies idea ,from  finding funding to Feasibility studies and  everything in between</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

<div class="container">
    <div class="row">
        <!-- Card Projects -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="https://images.unsplash.com/photo-1429051781835-9f2c0a9df6e4?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=13123400173b35e9bf7a262b84a05955">
                    <span class="card-title">Material Cards</span>
                </div>
                
                <div class="card-content">
                    <p>Cards for display in portfolio style material design by Google.</p>
                </div>
            </div>
	</div>

<!-- Card Projects -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="https://images.unsplash.com/photo-1429051781835-9f2c0a9df6e4?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=13123400173b35e9bf7a262b84a05955">
                    <span class="card-title">Material Cards</span>
                </div>
                
                <div class="card-content">
                    <p>Cards for display in portfolio style material design by Google.</p>
                </div>
            </div>
	</div><LeftMouse>

<!-- Card Projects -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="https://images.unsplash.com/photo-1429051781835-9f2c0a9df6e4?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=13123400173b35e9bf7a262b84a05955">
                    <span class="card-title">Material Cards</span>
                </div>
                
                <div class="card-content">
                    <p>Cards for display in portfolio style material design by Google.</p>
                </div>
            </div>
        </div>
	

  <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-graph1"></i>
                        </div>
                        <h3>Sales</h3>
                        <p class="description">We make our design perfect for you. Our adjustment turn our clothes into your clothes.</p>
                    </div>
                </div>
</div>


    </div>
</div>


</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



</body>
</html>


<html lang="en">
  <head>
    <title>My title is awesome</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:700i|Merriweather|Lobster|Lato" rel="stylesheet"/>
    <link href="{{{ asset('/css/app.css') }}}" rel="stylesheet"/>
    <link href="{{{asset('/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}}" rel="stylesheet"/>
    <link href="{{{asset('/css/materialize.min.css')}}}" rel="stylesheet" media="screen,projection"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{{asset('/js/isotope.pkgd.min.js')}}}"></script>
    <script src="{{{asset('/js/custom.js')}}}"></script>
    <script src="{{{asset('/js/cells-by-row.js')}}}"></script>
    <script src="{{{asset('/js/materialize.min.js')}}}"></script>
    <script src="{{{asset('/js/jquery.waypoints.min.js')}}}"></script>
    <script src="{{{asset('/js/jquery.counterup.min.js')}}}"></script>
  </head>
  <body> 
    <div class="image" id="image1">
      <div class="content">
        <div class="wrapper">
          <hr/>
          <h1>Sherif Mostafa</h1>
          <hr/>
          <h3>Economist</h3>
        </div>
      </div>
    </div>
    <section class="services">
      <div class="content">
        <div class="wrapper">
          <h1>What I do best</h1>
          <hr/>
        </div>
        <div class="service-wrapper">
          <div class="service"><i class="pe-7s-graph1"></i>
            <h3>Market research</h3>
            <p>Get the most vital info about the market both now and in the future to make the best and most beneficial decision</p>
          </div>
          <div class="service"><i class="pe-7s-note2"></i>
            <h3>Fesability studies</h3>
            <p>Helping you understand the market and the needs for your invesment to thrive, giving it a solid roadmap for it's success</p>
          </div>
          <div class="service"><i class="pe-7s-culture"></i>
            <h3> Coporate structuring</h3>
            <p>Wether an existing or a new coporate , structuring your entity right is vital for sucsess</p>
          </div>
        </div>
      </div>
    </section>
    <section class="about-me">
      <div class="content">
        <h1>About me</h1>
        <hr/>
        <div class="wrapper">
          <div class="image-wrapper">
            <div class="personal-image"></div>
          </div>
          <div class="personal-info">
            <h3 id="title">This is my story</h3>
            <p id="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida, ligula at maximus egestas, enim dui faucibus metus, et rutrum orci ipsum vel ex. Donec id est eget odio dapibus blandit sed ac nisi. Curabitur gravida mattis odio, id tristique mauris dictum eget. Etiam aliquet lectus vel lectus vulputate elementum. Morbi tristique tellus ut magna ultricies, quis ullamcorper diam ultrices. Maecenas sed libero ipsum. Nam ac ipsum nisl. Phasellus aliquet vestibulum est, non euismod erat iaculis sed. Duis vel purus tristique, feugiat nisl id, dignissim augue. Morbi quis quam quis massa mattis hendrerit eu sodales neque. Aenean sollicitudin nulla sed leo eleifend eleifend. Cras posuere malesuada interdum.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="my-work">
      <div class="content">
        <h1>My work</h1>
        <hr/>
        <div class="wrapper">
          <div class="gallery">@foreach($studies as $study)
            <div class="card cell">
              <div class="card-image waves-effect waves-block waves-light"><a href="{{action('PagesController@studyOverview' , 1)}}"><img class="activator" src="{{$study->image_url}}"/></a></div>
              <div class="card-content"><a href="{{action('PagesController@studyOverview' , 1)}}"><span class="activator grey-text text-darken-4 card-title">{{$study->name}}</span></a>
                <p>{{$study->short_description}}</p>
              </div>
            </div>
            @endforeach
            @foreach($studies as $study)
            <div class="card cell">
              <div class="card-image waves-effect waves-block waves-light"><a href="{{action('PagesController@studyOverview' , 1)}}"><img class="activator" src="{{$study->image_url}}"/></a></div>
              <div class="card-content"><a href="{{action('PagesController@studyOverview' , 1)}}"><span class="activator grey-text text-darken-4 card-title">{{$study->name}}</span></a>
                <p>{{$study->short_description}}</p>
              </div>
            </div>@endforeach
          </div>
          <div class="button-wrapper"><a class="waves-effect waves-light btn-large">more<i class="material-icons right">work </i></a></div>
        </div>
      </div>
    </section>
    <section class="achievements">
      <div class="content">
        <div class="wrapper">
          <div class="achievements-gallery"><span class="cell">
              <p class="number">550</p>
              <p class="description">Studies</p></span><span class="cell">
              <p class="number">400</p>
              <p class="description">Satisfied Customers</p></span><span class="cell">
              <p class="number">30</p>
              <p class="description">Years of experince</p></span><span class="cell">
              <p class="number">8</p>
              <p class="description">Awards</p></span></div>
        </div>
      </div>
    </section>
    <section class="contact-me">
      <div class="content">
        <h1>I would love to work with you</h1><a class="waves-effect waves-light btn-large">Contact me<i class="material-icons right">person</i></a>
      </div>
    </section>
    <section class="footer-section">
      <footer class="page-footer">
        <div class="container">
          <h5 class="white-text">Let's be friends</h5><a href="https://www.facebook.com/sherio1963" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a><a href="#" target="_blank"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
          <hr/>
          <p class="text-lighten-4 grey-text">Website created and maintained with &#9829; by Hossam Sherif </p>
        </div>
        <div class="footer-copyright">
          <div class="container"> &copy; 2016 Sherif Mostafa</div>
        </div>
      </footer>
    </section>
  </body>
</html>
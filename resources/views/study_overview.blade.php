
<html>
  <head>
    <title>This is a single study</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{{ asset('/css/study_overview.css') }}}" rel="stylesheet"/>
    <link href="{{{ asset('/dist/semantic.min.css') }}}" rel="stylesheet"/>
    <link href="{{{ asset('/css/responsive-tabs.css') }}}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins|PT+Serif:700italic|Lobster|Lato:900" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{{asset('/dist/semantic.min.js')}}}"></script>
    <script src="{{{asset('/js/jquery.responsiveTabs.min.js')}}}"></script>
    <script src="{{{asset('/js/study_overview.js')}}}"></script>
    <body>
      <section class="sidenav">
        <div class="content">
          <div class="wrapper"></div>
        </div>
      </section>
      <section class="study-overview">
        <div class="content">
          <div class="wrapper">
            <div class="study-details">
              <div class="image-wrapper">
                <div class="ui fluid card">
                  <div class="image"><img src="https://lh3.googleusercontent.com/autxYWc2q40NpliNic_35Iu-xVo5uCTiMDjG5rHk7M6ITc74LDQLcSUJe05vcu2JtQPt2IZNbu9fdWvQB1e5RoaQPr1qRPuv6UzF4YHgySDd9zyRvbtautFavbzZwNRmMzcqUlmxlLUbmibSa1RTrrTca_sYZRye0Lw0e1zT5PN8KqmS3Whkp85737ajObta6FBWVhTrWHF593YGnwopsRzHREff_IJroEpBSiimLK9rXDYolLgDdvAdVr-G2h6mtfRmveWviY-xLExICPkiGpJ03RebMdMd6vQTcfM9nSPLRCXAUPB68vwyO8eNL2srIisbderWGj5mq92bs2MAab_9IivNMc7om2YNFW8EY0k-HL7TU2pt2qGjog1PQtJEjj8FvtnCh1pZ6aZGgamU2wnAJqch1qRaLZkfPn99DCqJaDmcDq7FpU88HfGV17bjRifX0mq3iJuI1G8qlAM6wylkkUN_LC-J4hFvXGN1uum2qqq0laBPMnRwyGWBO-42SG3-ay_4R0dfYz02r89Za3ufyeC6rTcFDh7d0vm4XFDLwTjXCtBjBomrnV66dyTWnPRZA2DSrlBHtBQQNFF3OHjjDpJO2g=w1250-h673-no"/></div>
                </div>
              </div>
              <div class="study-variables">
                <h1>{{$study->name}} Study</h1>
                <hr/>
                <div class="study-info">
                  <div class="price">
                    <p class="field">price</p><span class="info" id="price_amount">${{$study->base_price}}</span>
                  </div>
                  <p class="field">Study field:<span class="info">Construction</span></p>
                  <p class="field">Study country: <span class="info">Egypt , Saudi Arabia , UAE , Middle east</span></p>
                </div>
              </div>
            </div>
            <div class="study-description">
              <div id="tabs">
                <ul>
                  <li><a href="#tab-1">Tab 1</a></li>
                  <li><a href="#tab-2">Tab 2</a></li>
                  <li><a href="#tab-3">Tab 3</a></li>
                  <li><a href="#tab-4">Tab 3</a></li>
                  <li><a href="#tab-5">Tab 3																											</a></li>
                </ul>
                <div id="tab-1">This is a description of the study for testing purposes</div>
                <div id="tab-2">This is an abstract of the study</div>
                <div id="tab-3">Target Audience of the study are these awesome people </div>
                <div id="tab-4">Theses are the porducts that this project serves with thier description</div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body>
  </head>
</html>

<html>
  <head>
    <title>This is a single study</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{{ asset('/css/study_overview.css') }}}" rel="stylesheet"/>
    <link href="{{{ asset('/dist/semantic.min.css') }}}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins|Merriweather:300|Lobster|Lato:900" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{{asset('/dist/semantic.min.js')}}}"></script>
    <script src="{{{asset('/js/study_overview.js')}}}"></script>
    <body>
      <section class="nav-bar">
        <div class="ui visible sidebar inverted top">
          <div class="wrapper">
            <div class="dummy side-bar-item"></div>
            <div class="main-header side-bar-item">
              <h1>Sherif Mostafa</h1>
            </div>
            <div class="ui secondary three item menu nav-elements side-bar-item"><a class="item">About me</a><a class="item">My work</a><a class="item">My services</a></div>
          </div>
        </div>
      </section>
      <section class="study-overview">
        <div class="content">
          <div class="study-details">
            <div class="wrapper">
              <div class="image-wrapper">
                <div class="ui fluid card">
                  <div class="image"><img src="https://lh3.googleusercontent.com/autxYWc2q40NpliNic_35Iu-xVo5uCTiMDjG5rHk7M6ITc74LDQLcSUJe05vcu2JtQPt2IZNbu9fdWvQB1e5RoaQPr1qRPuv6UzF4YHgySDd9zyRvbtautFavbzZwNRmMzcqUlmxlLUbmibSa1RTrrTca_sYZRye0Lw0e1zT5PN8KqmS3Whkp85737ajObta6FBWVhTrWHF593YGnwopsRzHREff_IJroEpBSiimLK9rXDYolLgDdvAdVr-G2h6mtfRmveWviY-xLExICPkiGpJ03RebMdMd6vQTcfM9nSPLRCXAUPB68vwyO8eNL2srIisbderWGj5mq92bs2MAab_9IivNMc7om2YNFW8EY0k-HL7TU2pt2qGjog1PQtJEjj8FvtnCh1pZ6aZGgamU2wnAJqch1qRaLZkfPn99DCqJaDmcDq7FpU88HfGV17bjRifX0mq3iJuI1G8qlAM6wylkkUN_LC-J4hFvXGN1uum2qqq0laBPMnRwyGWBO-42SG3-ay_4R0dfYz02r89Za3ufyeC6rTcFDh7d0vm4XFDLwTjXCtBjBomrnV66dyTWnPRZA2DSrlBHtBQQNFF3OHjjDpJO2g=w1250-h673-no"/></div>
                </div>
              </div>
              <div class="study-variables">
                <h1>{{$study->name}} Study</h1>
                <hr/>
                <div class="study-info">
                  <p>{{$study->short_description}}</p>
                  <h1 id="price">${{$study->base_price}}</h1>
                  <p id="disclaimer">* This is a base price, study price may vary depeding on indvidual client needs</p>
                  <div class="ui animated fade orange button">
                    <div class="visible content">Buy this study</div>
                    <div class="hidden content">Contact Me !</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="study-description">
            <div class="wrapper">
              <div class="header-wrapper">
                <h1>ABOUT THIS STUDY :</h1>
              </div>
              <hr/>
            </div>
          </div>
        </div>
      </section>
    </body>
  </head>
</html>
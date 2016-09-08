
@extends('app')
@section('links')
<link href="{{{ asset('/css/all_studies.css') }}}" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=PT+Serif:400i|Lato|Merriweather:300" rel="stylesheet"/>
<link href="{{{asset('/css/materialize.min.css')}}}" rel="stylesheet" media="screen,projection"/>
@stop
@section('scripts')
<script src="https://unpkg.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
<script src="{{{asset('/js/cells-by-row.js')}}}"></script>
<script src="{{{asset('/js/materialize.min.js')}}}"></script>
<script src="{{{asset('/js/all_studies.js')}}}"></script>
@stop
@section('content')
<h1>All studies</h1>
<hr/>
<div class="wrapper">
  <div class="gallery">@foreach($studies as $study)
    <div class="card cell">
      <div class="card-image waves-effect waves-block waves-light"><a href="{{action('PagesController@studyOverview' , 1)}}"><img class="activator" src="{{$study->image_url}}"/></a></div>
      <div class="card-content"><a href="{{action('PagesController@studyOverview' , 1)}}"><span class="activator grey-text text-darken-4 card-title">{{$study->name}}</span></a>
        <p>{{$study->short_description}}</p>
      </div>
    </div>@endforeach
  </div>
</div>@stop
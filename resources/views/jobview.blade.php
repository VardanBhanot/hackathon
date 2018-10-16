@extends('layouts.main')

@section('content')
<div class="container" style="background-image: url("3.jpg")">
    <div class="row justify-content-center">
        <div class="col-md-12">
                Dashboard

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                
                <div class="row" style="margin-top:1%;">

                    <div class="col-md-8 col-sm-12 col-12" style="margin:0; padding:10px;">
                    <div class="headline">Latest Jobs</div>
                    <div class="container">
            <div class="row post">
              <div class="col-sm-3 col-3" style="padding-right: 2%; padding-left:0;">
                    <img src="{{$result[$i]['company_logo']}}" class="float-left img-fluid"style="background-repeat:no-repeat; width: 100%; height: 17vh !important; margin: 0; padding: 0;"></div>
                    <div class="col-sm-9 col-9" style="padding:0.8% 0 0 1%;">
                
            <h4 style="padding:0; font-size:18px; font-family: 'Open Sans Bold', sans-serif; !important; letter-spacing: -0.02em; line-height: 1;"><a href="/jobview/{{$result[$i]['id']}}"> {{$result[$i]['title']}}</a></h4>
            <p  id="description" style="color:#999;  font-size: 13px; line-height: 1;">{{$result[$id]['location']}}</p>
            <h6 style="color:#999; bottom:0; position: absolute; font-size: 12px; margin-top:20%">by <strong>{{$result[$i]['company']}}</strong>&nbsp;<i class="fas fa-circle" style="font-size: 5px;"></i> {{$result[$i]['created_at']}}</h6>
          
          </div>
                </div>
                <div></div>
                                

                
            </div>
            
    </div>
</div>
@endsection
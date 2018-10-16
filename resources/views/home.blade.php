@extends('layouts.main')

@section('content')
<style type="text/css">
    .post{
    margin-top: 3%;
    }
   .post:hover{
     border:0.5px solid #F8F8F8;
     box-shadow: 0 8px 6px -6px #A8A8A8;
   }
   .headline{
  background-color: ;
  color: #F01716;
  font-size: 30px;
  font-weight: bold;
  text-transform: uppercase;
  padding: 5px;
  margin: 0;
  text-align: left;
  font-family: 'Fjalla One', sans-serif;
  border-bottom: 1px solid #e4e4e4;
}
</style>
<div class="container" style="background-image: url("/3.jpg")">
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

                    <div class="col-md-12 col-sm-12 col-12" style="margin:0; padding:10px;">
                    <div class="headline">Latest Jobs</div>
                    <div class="container">
                        @for($i=0;$i<=40;$i++)
                        <div class="row post accordion" id="accordion_@<?php echo $i ?>" data-toggle="collapse" data-target="#collapse_@<?php echo $i ?>" aria-expanded="true" aria-controls="collapse_@<?php echo $i ?>">  
              <div class="col-sm-3 col-3" style="padding-right: 2%; padding-left:0;">
                    <img src="{{$result[$i]['company_logo']}}" class="float-left img-fluid"style="background-repeat:no-repeat; width: 100%; height: 17vh !important; margin: 0; padding: 0;"></div>
                    <div class="col-sm-9 col-9" style="padding:0.8% 0 0 1%;">
                
            <h4 style="padding:0; font-size:18px; font-family: 'Open Sans Bold', sans-serif; !important; letter-spacing: -0.02em; line-height: 1;"><a data-toggle="collapse" data-target="#collapseOne_@<?php echo $i ?>" href="#collapseOne_@<?php echo $i ?>"> {{$result[$i]['title']}}</a></h4>
            <p  id="description" style="color:#999;  font-size: 13px; line-height: 1;">{{$result[$i]['location']}}</p>
            <h6 style="color:#999; bottom:0; position: absolute; font-size: 12px; margin-top:20%">by <strong>{{$result[$i]['company']}}</strong>&nbsp;<i class="fas fa-circle" style="font-size: 5px;"></i> {{$result[$i]['created_at']}}</h6>
             <div id="collapseOne" class="collapse show" aria-labelledby="heading_@<?php echo $i ?>" data-parent="#accordion_@<?php echo $i ?>">
      <div class="card-body">
        {!!$result[$i]['description']!!}
        <hr style="width: 50%;">
        {!!$result[$i]['how_to_apply']!!}
      </div>
  </div>
          
          </div>
                </div>
                @endfor
                <div></div>
                                

                
            </div>
            
    </div>
</div>
<script type="text/javascript">
    $(".post").click(function () {

    $header = $(this);
    //getting the next element
    $content = $header.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        $header.text(function () {
            //change text based on condition
            return $content.is(":visible") ? "Collapse" : "Expand";
        });
    });

});
</script>
@endsection

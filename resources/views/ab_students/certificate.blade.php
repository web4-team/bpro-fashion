<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title></title>
    <style>
        body{
          background-image: url(img/artbot_certificate.jpg);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          margin: -5%;
        }
      
        .p0{
          margin-top: 240px;
          margin-left: 380px;
          font-size: 24;
          letter-spacing: 2;
          font-family: 'Source Sans Pro', sans-serif;
        }
       
        .p1{
          
          margin-left: 400px;
          font-size: 16;
          letter-spacing: 1;          
        }
        h2{   
          margin-top: 30px;       
          margin-left: 390px;
          font-size: 15;  
          letter-spacing: 4; 
          text-transform: uppercase; 
          font-family: 'Source Sans Pro', sans-serif;        
        }
        .p2{         
          margin-top: 30px;   
          margin-left: 320px;
          font-size: 14;
          text-transform: uppercase; 
                  
        }
        .p3{
          margin-top: 155px;
          margin-left: 230px;
          font-size: 14;   
                 
        }
        .p4{
          margin-top: 0px;
          margin-left: 725px;
          font-size: 12;  
          letter-spacing: 1; 
        }
    </style>
  </head>
  <body>

    <div>
    
      <p class="p0">{{$ab_student->ab_name}}</p>
      <p class="p1">has successfully completed</p>
      <h2>
        @foreach($ab_batches as $row)
        @if($ab_student->ab_batch_id==$row->id) {{$row->ab_name}} Course @endif
       @endforeach
    
       
      </h2>
      <p class="p2">
         @foreach($ab_course as $row)
         @if($ab_student->ab_course_id==$row->id) FROM {{ \Carbon\Carbon::parse($row->ab_date)->format('j F Y')}} TO {{ \Carbon\Carbon::parse($row->ab_duration)->format('j F Y')}}@endif
        @endforeach
      </p>
      <p class="p3">
        @foreach($ab_course as $row)
         @if($ab_student->ab_course_id==$row->id){{ \Carbon\Carbon::parse($row->ab_duration)->format('d F Y')}}@endif
        @endforeach
      </p>
      <p class="p4">Founder of ArtBot</p>
    </div>
    
  </body>
</html>
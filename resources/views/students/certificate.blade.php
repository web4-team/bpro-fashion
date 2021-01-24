<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
        body{
          background-image: url(img/certificate.jpg);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          margin: -5%;
        }
        .p0{
          margin-top: 230px;
          margin-left: 170px;
          font-size: 18;
          letter-spacing: 1;          
        }
        h1{
         
          margin-left: 205px;
        }
       
        .p1{
          
          margin-left: 170px;
          font-size: 18;
          letter-spacing: 1;          
        }
        h2{          
          margin-left: 140px;
          font-size: 18;          
        }
        .p2{          
          margin-left: 115px;
          font-size: 16;
          font-style: italic;          
        }
        .p3{
          margin-top: 123px;
          margin-left: 210px;
          font-size: 16;          
        }
    </style>
  </head>
  <body>

    <div>
      <p class="p0">PROUDLY PRESENTED TO</p>
      <h1>{{$student->name}}</h1>
      <p class="p1">has successfully completed</p>
      <h2>
        @foreach($batches as $row)
        @if($student->batch_id==$row->id) {{$row->name}} @endif
       @endforeach
        @foreach($course as $row)
         @if($student->course_id==$row->id) ({{$row->name}}) @endif
        @endforeach
       
      </h2>
      <p class="p2">
         @foreach($course as $row)
         @if($student->course_id==$row->id) FROM {{ \Carbon\Carbon::parse($row->date)->format('j F Y')}} TO {{ \Carbon\Carbon::parse($row->duration)->format('j F Y')}}@endif
        @endforeach
      </p>
      <p class="p3">
        @foreach($course as $row)
         @if($student->course_id==$row->id){{ \Carbon\Carbon::parse($row->duration)->format('d F Y')}}@endif
        @endforeach
      </p>
    </div>
    
  </body>
</html>
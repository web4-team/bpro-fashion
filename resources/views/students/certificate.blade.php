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
          margin-top: 240px;
          margin-left: 160px;
          font-size: 24;
          letter-spacing: 2;
          font-family: 'Source Sans Pro', sans-serif;
        }
       
        .p1{
          
          margin-left: 170px;
          font-size: 16;
          letter-spacing: 1;          
        }
        h2{   
          margin-top: 30px;       
          margin-left: 125px;
          font-size: 15;  
          letter-spacing: 4; 
          text-transform: uppercase; 
          font-family: 'Source Sans Pro', sans-serif;        
        }
        .p2{         
          margin-top: 30px;   
          margin-left: 140px;
          font-size: 14;
          text-transform: uppercase; 
                  
        }
        .p3{
          margin-top: 150px;
          margin-left: 210px;
          font-size: 14;   
                 
        }
    </style>
  </head>
  <body>

    <div>
    
      <p class="p0">{{$student->name}}</p>
      <p class="p1">has successfully completed</p>
      <h2>
        @foreach($batches as $row)
        @if($student->batch_id==$row->id) {{$row->name}} Course @endif
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
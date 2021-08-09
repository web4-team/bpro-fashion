<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title></title>
    <style>
     h1{
        text-align: center;
        font-size: 50px;
        color: orange;
      }
        #html_jpg{
          background-image: url(/img/artbot_certificate.jpg);
         
          background-size: cover;
          background-repeat: no-repeat;
          
          width: 3508px;
          height: 2480px;
        }
      
        .p0{
          margin-top: 20px;
          padding-top: 940px;
          margin-left: 1350px;
          font-size: 75px;
          letter-spacing: 2;
          font-family: 'Source Sans Pro', sans-serif;
        }
       
        .p1{
          
          margin-left: 1400px;
          font-size: 56px;
          letter-spacing: 1;          
        }
        h2{   
          margin-top: 30px;       
          margin-left: 1290px;
          font-size: 66px;  
          letter-spacing: 4; 
          text-transform: uppercase; 
          font-family: 'Source Sans Pro', sans-serif;        
        }
        .p2{         
          margin-top: 30px;   
          margin-left: 1270px;
          font-size: 60px;
          text-transform: uppercase; 
                  
        }
        .p3{
          margin-top: 400px;
          margin-left: 900px;
          font-size: 64px;   
                 
        }
        .p4{
          margin-top: 0px;
          margin-left: 2395px;
          font-size: 44px;  
          letter-spacing: 1; 
        }
        #btnConvert{
          box-sizing: border-box;
  appearance: none;
  background-color: red;
  border: 2px solid black;
  border-radius: 0.6em;
  color: black;
  cursor: pointer;
  display: flex;
  align-self: center;
  font-size: 1.5rem;
  font-weight: 400;
  line-height: 1;
 text-align: center;
 size: 50px;
  


        }
    </style>
  </head>
  <body>
  <h1>Artbot Fashion & Art School</h1>
  <input type="button" value="Download " id="btnConvert" >

    <div id="html_jpg">
    
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


    <script>
 document.getElementById("btnConvert").addEventListener("click", function() {
	html2canvas(document.getElementById("html_jpg")).then(function (canvas) {		
    
    	var anchorTag = document.createElement("a");
			document.body.appendChild(anchorTag);
			
			anchorTag.download = "{{$ab_student->ab_name}}.jpg";
			anchorTag.href = canvas.toDataURL();
			anchorTag.target = '_blank';
			anchorTag.click();
		});
 });
</script>
<!-- <script src="{{ asset('backend/js/demo/html2jpg.js') }}"></script> -->
<script src="{{asset('js/html2canvas.min.js')}}" ></script>
<script src="{{asset('js/html2canvas.js')}}" ></script> 
    
  </body>
</html>
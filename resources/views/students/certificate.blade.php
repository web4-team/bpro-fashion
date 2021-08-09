<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title></title>
    <style>
  
        /* body{
          background-image: url('/img/certificate.jpg');
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          
          
        } */
      
      h1{
        text-align: center;
        font-size: 50px;
        color: orange;
      }
        .p0{
          padding-top: 850px;
          margin-left: 850px; 
          text-align: justify;         
          font-size: 78px;
          letter-spacing: 2;
          font-family: 'Source Sans Pro', sans-serif;
         
        }
       
        .p1{
          margin-top: 40px;
          margin-left: 800px;
          font-size: 60px;
          letter-spacing: 2;          
        }
        h2{   
          margin-top: 90px;       
          margin-left: 700px;
          font-size: 65px;  
          letter-spacing: 4; 
          text-transform: uppercase; 
          font-family: 'Source Sans Pro', sans-serif;        
        }
        .p2{         
          margin-top: 80px;   
          margin-left: 650px;
          font-size: 56px;
          text-transform: uppercase; 
                  
        }
        .p3{
          margin-top: 460px;
          margin-left: 800px;
          font-size: 55px;   
                 
        }
        .p4{
          margin-top: 293px;
          margin-left: 800px;
          font-size: 47px;  
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
 <h1>B-Pro Fashion & Art School</h1>
  <input type="button" value="Download " id="btnConvert" style="text-align: center;" >
 

    <div id="html_jpg" style="background-image: url('/img/certificate.jpg');
          width: 3508px;
          height: 2480px;
          
          background-size: cover;
          background-repeat: no-repeat;">
    
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
      <p class="p4">Founder of B-Pro</p>
      </div>
      <!-- <a id="btn-Convert-Html2Image" href="#">Download</a> -->
   
      
    
 
<script>
 document.getElementById("btnConvert").addEventListener("click", function() {
	html2canvas(document.getElementById("html_jpg")).then(function (canvas) {		
    
    	var anchorTag = document.createElement("a");
			document.body.appendChild(anchorTag);
			
			anchorTag.download = "{{$student->name}}.jpg";
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
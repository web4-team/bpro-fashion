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
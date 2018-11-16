$(window).load(function(){

    $(function() {
     $('#file-input').change(function(e) {
         addImage(e); 
        });
		
	 $('#file-input2').change(function(e) {
         addImage2(e); 
        });	
   
		
		 function addImage2(e){
			 
		
         var file2 = e.target.files[0]
					 
         imageType = /image.*/;
       
         if (!file2.type.match(imageType))
          return;
     
         var reader = new FileReader();
         reader.onload = fileOnload;
         reader.readAsDataURL(file2);
        }	
		
		
        function addImage(e){
         var file = e.target.files[0],
         imageType = /image.*/;
       
         if (!file.type.match(imageType))
          return;
     
         var reader = new FileReader();
         reader.onload = fileOnload;
         reader.readAsDataURL(file);
        }
     
        function fileOnload(e) {
         var result=e.target.result;
         $('#imgSalida').attr("src",result);
        }
		
		function fileOnload(e) {
         var result=e.target.result;
         $('#imgSalida2').attr("src",result);
        }
		
		
		
		
		
		
		
		
       });
     });
   
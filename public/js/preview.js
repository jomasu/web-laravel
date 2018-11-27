$(window).load(function(){

    $(function() {
     $('#photopath_slot1').change(function(e) {
         addImage(e); 
        });

    $('#photopath_slot2').change(function(e) {
            addImage2(e); 
           });
           
    $('#photopath_slot3').change(function(e) {
            addImage3(e); 
           });   
    
    $('#photopath_slot4').change(function(e) {
            addImage4(e); 
           });
    
    $('#photopath_slot5').change(function(e) {
            addImage5(e); 
           });                 
		
	
		
		
        function addImage(e){
         var file = e.target.files[0],
         imageType = /image.*/;
       
         if (!file.type.match(imageType))
          return;
     
         var reader = new FileReader();
         reader.onload = fileOnload;
         reader.readAsDataURL(file);
        }

        function addImage2(e){
            var file = e.target.files[0],
            imageType = /image.*/;
          
            if (!file.type.match(imageType))
             return;
        
            var reader = new FileReader();
            reader.onload = fileOnload2;
            reader.readAsDataURL(file);
           }

           function addImage3(e){
            var file = e.target.files[0],
            imageType = /image.*/;
          
            if (!file.type.match(imageType))
             return;
        
            var reader = new FileReader();
            reader.onload = fileOnload3;
            reader.readAsDataURL(file);
           }
           function addImage4(e){
            var file = e.target.files[0],
            imageType = /image.*/;
          
            if (!file.type.match(imageType))
             return;
        
            var reader = new FileReader();
            reader.onload = fileOnload4;
            reader.readAsDataURL(file);
           }
           function addImage5(e){
            var file = e.target.files[0],
            imageType = /image.*/;
          
            if (!file.type.match(imageType))
             return;
        
            var reader = new FileReader();
            reader.onload = fileOnload5;
            reader.readAsDataURL(file);
           }       
     
        function fileOnload(e) {
         var result=e.target.result;
         $('#imgSalida').attr("src",result);
        }
        

        function fileOnload2(e) {
            var result=e.target.result;
            $('#imgSalida2').attr("src",result);
           }

           function fileOnload3(e) {
            var result=e.target.result;
            $('#imgSalida3').attr("src",result);
           }
           function fileOnload4(e) {
            var result=e.target.result;
            $('#imgSalida4').attr("src",result);
           }
           function fileOnload5(e) {
            var result=e.target.result;
            $('#imgSalida5').attr("src",result);
           }       
				
		
		
		
       });
     });
   
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 
  <script type="text/javascript">
      
  $(document).ready(function(){
    
     $.getJSON('json.php',null, processJSON);
     
      function processJSON(data){
      var infoHtml = '';
      $.each(data, function(city, cityInfo) {
       infoHtml += '<h4> City: '+cityInfo[0]+'</h4>'
       infoHtml += '<p>Numbers: '+cityInfo[0]+'</p>'
       infoHtml += '<p>Latitude: '+cityInfo[1]+'</p>'
       infoHtml += '<p>Longitude '+cityInfo[2]+'</p>'
       }); //end each loop
       
       //display infoHtml variable
       $('#infoBox').html(infoHtml);
      }
  });
  </script>
 
</head>
<body>
  <div id="infoBox"></div>
</body>
</html>
<html>
  <title>test</title>
  <head></head>

  <body>
    <button type="button" id="test_btn">click here</button>
  </body>
</html>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#test_btn').click(function(){
    $.ajax({
      type:'GET',
      url:"https://www.googleapis.com/customsearch/v1?key=AIzaSyDdKHe-2YWYficU7pmp5T5sLnwTbWVAwHk=014471137148693815702:8nf1xmysl28&q=online",
      dataType:'jsonp',
      success:function(data){
        console.log(data);
      }
    });  
  });
});
</script>
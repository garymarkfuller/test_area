<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Testing Area for ideas and playing</title>
    <script src="jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $(".splash").find("img").css("display", "none");
        var imgSrc = $(".splash img").attr("src");
        $(".splash").css("background", "url(" + imgSrc + ")" );
    });
    </script>
  </head>
  <body>
    <?php
    // put your code here
    ?>
    <div class="splash" style="width: 100%; height: 400px;">
      <h2 style="text-align: center; color: #fdbb30;">Hello</h2>
        <img src="http://garymarkfuller.org.uk/en/image/5HkZrw/1920/480/sandgate-beach-2.png" />
    </div>
  </body>
</html>
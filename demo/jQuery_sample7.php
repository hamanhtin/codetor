<!DOCTYPE html>
<html lang="en">
<body>
    <p></p>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script> (function ($) {
    var theText = $('p').text('This is jQuery').text(); 
    // Returns the string "jQuery"  
     alert(theText); 
     // Cannot chain after text(). The chain is broken. 
     // A string is returned, not the jQuery object.  
 })(jQuery) </script>
</body>
</html>
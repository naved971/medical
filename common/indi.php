<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UandBlog.com Demo</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <script type="text/javascript">
    $(function() 
    {
    $(".search_button").click(function() 
    {
    var search_word = $("#search_box").val();
    var dataString = 'search_word='+ search_word;
    
    if(search_word=='')
    {
    }
    else
    {
    $.ajax({
    type: "GET",
    url: "searchingdata.php",
    data: dataString,
    cache: false,
    beforeSend: function(html) 
    {
    document.getElementById("insert_search").innerHTML = ''; 
    $("#flash").show();
    $("#searchword").show();
    $(".searchword").html(search_word);
    $("#flash").html('<img src="ajax-loader_2.gif" /> Loading Results...');
    },
    
    success: function(html){
    $("#insert_search").show();
    $("#insert_search").append(html);
    $("#flash").hide();
    }
    
    });
    
    }
    return false;
    });
    });
    </script>
   
</head>

    <body style="background:#CCCCCC;">
    
        <h1 style="text-align:center;"><a href="www.uandblog.com">www.uandblog.com</a></h1>
        
        <div style="width:500px; margin:0 auto; margin-top:100px; background:#FFFFFF; padding:20px;">
            <form method="get" action="">
               <input type="text" name="search" id="search_box" class='search_box'/>
               <input type="submit" value="Search" class="search_button" />
            </form>
            <br  />
            <div id="searchword">
            Search results for <b><span class="searchword"></span></b></div>
            <div id="flash"></div>
            <ol id="insert_search" class="update" style="color:#990000;">
            
            </ol>
        </div>

    </body>
</html>
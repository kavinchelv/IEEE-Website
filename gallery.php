<?php
$page_title = "Gallery";

?>

<?php include 'header.php'; ?>

    <title><?php echo $page_title; ?></title>
    
    <style>
    .col-md-4{
        margin: 0 0 2em 0;
    }
    .fb_style h4 {  
   position: absolute; 
   bottom: 0.5rem; 
   left: 0; 
   width: 100%; 
    -webkit-font-smoothing: antialiased;
}   
.fb_style h4 span { 
   color: white; 
   font: bold 20px/34px Helvetica, Sans-Serif; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.7);
   padding: 10px; 
}
.fb_style
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}
.fb_style:hover 
{
transform:scale(1.1);
-webkit-transform:scale(1.1);
-moz-transform:scale(1.1);
-ms-transform:scale(1.1);
-o-transform:scale(1.1)
}       
    </style>
<?php include 'navigation.php'; ?>
<div class="container" id="morepics">
<?php
 
echo "<div class='container-fluid text-center'>";
    echo "<h1>{$page_title}</h1>";
echo "</div>";
 
$access_token="EAANgO5BicboBAIyZBzjPfKDzk9Vp9NpPgPmItfFeztkm0feQb5Lcje1u91FxJPgCULA9nSqHZBZC6IrbRCMoWVfgZC18CO149ZCYU8mZBVRjq7okyAZCVjbNE7D4SWspl5w6TZCHnC8Yk1SZBZAts0HLxtkLt1MTBtv8sUvZBBlmYOW6wZDZD";
 
$fields="id,name,description,link,cover_photo,count";
$fb_page_id = "168116483254527";
 
$json_link = "https://graph.facebook.com/v2.8/{$fb_page_id}/albums?fields={$fields}&access_token={$access_token}";
$json = file_get_contents($json_link);

    
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

/* !! need more research on graph api and pagging

echo "<div class='col-lg-12'>";
    echo "<h1 class='page-header'>{$page_title}</h1>";
echo "</div>";
 
add more albums
$loadmore = $obj['paging'];
$next = $loadmore['next'];    
isset($obj['paging']);
*/
function morefbgallery($obj)
{
    $loadmore = $obj['paging'];
    $next = $loadmore['next'];    
    return isset($obj['paging']);
}
$album_count = count($obj['data']);
for($x=0; $x<$album_count; $x++){
    
       $id = isset($obj['data'][$x]['id']) ? $obj['data'][$x]['id'] : "";
       $name = isset($obj['data'][$x]['name']) ? $obj['data'][$x]['name'] : "";
       $url_name=urlencode($name);
       $description = isset($obj['data'][$x]['description']) ? $obj['data'][$x]['description'] : "";
       $link = isset($obj['data'][$x]['link']) ? $obj['data'][$x]['link'] : "";
    
       $cover_photo = isset($obj['data'][$x]['cover_photo']['id']) ? $obj['data'][$x]['cover_photo']['id'] : "";
    
       // use this for older access tokens:
       // $cover_photo = isset($obj['data'][$x]['cover_photo']) ? $obj['data'][$x]['cover_photo'] : "";
        
       $count = isset($obj['data'][$x]['count']) ? $obj['data'][$x]['count'] : "";
    
       // if you want to exclude an album, just add the name on the if statement
       if(
           $name!="Profile Pictures" &&
           $name!="Cover Photos" &&
           $name!="Timeline Photos" &&
		   $name!="Mobile Uploads" &&
		   $name!="Instagram Photos"
       ){
    
           $show_pictures_link = "photos.php?album_id={$id}&album_name={$name}";


           echo "<div class='col-md-4 fb_style'>";
               echo "<a href='{$show_pictures_link}'>";
                   echo "<img class='img-responsive' src='https://graph.facebook.com/v2.3/{$cover_photo}/picture?access_token={$access_token}' alt=''>";
               echo "</a>";
           
               echo"<div>";
               echo "<h4><span>";
                   echo "<a href='{$show_pictures_link}'>{$name}</a><br><small>";
                $count_text="Photo";
               if($count>1){ $count_text="Photos"; }
                   echo "{$count} {$count_text} / <a href='{$link}' target='_blank'>View on Facebook</a></small></span>";
                 //  echo $description; <-- description not needed now
               echo "</h4>";
                echo"</div>";
               
           echo "</div>";

           
           
           /* original
           
            echo "<div class='col-md-4'>";
               echo "<a href='{$show_pictures_link}'>";
                   echo "<img class='img-responsive' src='https://graph.facebook.com/v2.3/{$cover_photo}/picture?access_token={$access_token}' alt=''>";
               echo "</a>";
               echo "<h3>";
                   echo "<a href='{$show_pictures_link}'>{$name}</a>";
               echo "</h3>";
    
               $count_text="Photo";
               if($count>1){ $count_text="Photos"; }
    
               echo "<p>";
                   echo "<div style='color:#888;'>{$count} {$count_text} / <a href='{$link}' target='_blank'>View on Facebook</a></div>";
                 //  echo $description; <-- description not needed now
               echo "</p>";
           echo "</div>";
           
           */
       }
   }
?>

    </div>





   <!--




<button type="button"  style="width:100%;margin:3em 0em;"  class="btn btn-primary" onclick=$("#morepics").load("moregallery.php");>Load Page</button>

-->







<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="bootstrap-image-gallery.min.js"></script>
 
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 
<!-- to make photos full view -->
<script>
$('#blueimp-gallery').data('useBootstrapModal', true);
$('#blueimp-gallery').toggleClass('blueimp-gallery-controls', true);

$(window).scroll(function() {
    if($(window).scrollTop() == $(document).height() - $(window).height()) {
           // ajax call get data from server and append to the div
    }
});

</script>

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 <!-- footer section -->
<footer class="container-fluid text-center">
    <h6>COPYRIGHT &copy; 2018 IEEE CURTIN MALAYSIA ALL RIGHT RESERVED</h6>

</footer>
</body>
</html>
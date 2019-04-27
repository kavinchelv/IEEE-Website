<?php
$album_id = isset($_GET['album_id']) ? $_GET['album_id'] : die('Album ID not specified.');
$album_name = isset($_GET['album_name']) ? $_GET['album_name'] : die('Album name not specified.');
 
$page_title = "{$album_name} Photos";
?> 

<?php include 'header.php'; ?>
    <title><?php echo $page_title; ?></title>
 <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon"/>
    <!-- blue imp gallery -->
    <link rel="stylesheet" href="blueimp-gallery.min.css">
    <link rel="stylesheet" href="Bootstrap-Image-Gallery-3.1.1/css/bootstrap-image-gallery.min.css">
 
<style>
        
    #fbphotos {
  /* Prevent vertical gaps */
  line-height: 0;
   
  -webkit-column-count: 3;
  -webkit-column-gap:   0px;
  -moz-column-count:    3;
  -moz-column-gap:      0px;
  column-count:         3;
  column-gap:           0px;  
    }
        
    #fbphotos img {
    /* Just in case there are inline attributes */
    width: 100% !important;
    height: auto !important;
    margin:0.1em;
    }
        
    .photo-thumb{
        width:214px;
        height:214px;
        float:left;
        border: thin solid #d1d1d1;
        margin:0 1em 1em 0;
    }
 
    div#blueimp-gallery div.modal {
        overflow: visible;
    }
    
    @media (max-width: 1000px) {
    #fbphotos {
    -moz-column-count:    2;
    -webkit-column-count: 2;
    column-count:         2;
    }
    }        
    @media (max-width: 760px) {
    #fbphotos {
    -moz-column-count:    1;
    -webkit-column-count: 1;
    column-count:         1;
    }       
} 
</style>
<!--
    <style>
    .photo-thumb{
        width:214px;
        height:214px;
        float:left;
        border: thin solid #d1d1d1;
        margin:0 1em 1em 0;
    }
 
    div#blueimp-gallery div.modal {
        overflow: visible;
    }

    </style>

for($x=0; $x<$photo_count; $x++){
 
    // $source = isset($obj['data'][$x]['source']) ? $obj['data'][$x]['source'] : "";
    $source = isset($obj['data'][$x]['images'][0]['source']) ? $obj['data'][$x]['images'][0]['source'] : ""; //hd image
    $name = isset($obj['data'][$x]['name']) ? $obj['data'][$x]['name'] : "";
 
    echo "<a href='{$source}' data-gallery>";
        echo "<div class='photo-thumb' style='background: url({$source}) 50% 50% no-repeat;'>";
 
        echo "</div>";
    echo "</a>";
 
}
   --> 
    <?php include 'navigation.php'; ?>
    
<div class="container">

<?php echo "<h1 class='container-fluid text-center'>";
    echo "<a href='gallery.php'>Gallery</a> / {$page_title}";
echo "</h1>";
 
$access_token="EAANgO5BicboBAOomsfNoxjiH4ENYByb3VmZCZC1BcWP11yb44RATfFmrrgDZAAZCjvop1sXY2kF2q2ZAH1mY2HTXZBJL0eeTmts1PsknZBtodvIQtUqOsgOwWcgvXcVqFKnZCXNh0LutrY7kUni1x4VSqZA4w2QBbLgSvGFlal4V9nAZDZD";
$json_link = "https://graph.facebook.com/v2.8/{$album_id}/photos?fields=source,images,name&access_token={$access_token}";
$json = file_get_contents($json_link);
 
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

$photo_count = count($obj['data']);
    
echo "<div id='fbphotos'>";    
for($x=0; $x<$photo_count; $x++){
 
    // $source = isset($obj['data'][$x]['source']) ? $obj['data'][$x]['source'] : "";
    $source = isset($obj['data'][$x]['images'][0]['source']) ? $obj['data'][$x]['images'][0]['source'] : ""; //hd image
    $name = isset($obj['data'][$x]['name']) ? $obj['data'][$x]['name'] : "";
    echo"<a href='{$source}' data-gallery><img src='{$source}' class=img-responsive></a>";
    /*
    echo "<a href='{$source}' data-gallery>";
        echo "<div class='photo-thumb' style='background: url({$source}) 50% 50% no-repeat;'>";
 
        echo "</div>";
    echo "</a>";
    */
}

echo "</div>";
echo "<a href=https://www.facebook.com/pg/IEEE.CurtinMalaysia/photos/?tab=album&album_id={$album_id} '><button type='button' class='btn btn-primary' style='width:100%;margin:3em 0em;'>View the full album on our Facebook Page</button></a>";
?>
</div>
    
 <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
 
 

<!-- to make photos full view -->
<script>
$('#blueimp-gallery').data('useBootstrapModal', false);
$('#blueimp-gallery').toggleClass('blueimp-gallery-controls', true);
</script>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="blueimp/blueimp-gallery.min.js"></script>
<script src="blueimp/jquery.blueimp-gallery.min.js"></script>
 
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

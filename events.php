<?php include 'header.php'; ?>

    <title> Event Page </title>
    <meta name="description" content=" TO BE FILLED  ">
    <meta name="keywords" content="IEEE, Curtin Malaysia, Electrical and Electronic, Engineering">
    
  
  
<?php include 'navigation.php'; ?>
<!-- EVENTS-->
<div class="container-fluid text-center"><h1>Events</h1></div>


<?php 

$url = 'events.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$events = json_decode($data); // decode the JSON feed
$lastevent = end($events);
//<!-- background -->
echo '<div class="background"></div>';
//<!-- end of background-->   

echo'<div class="container ">
    <div class="boxesEvents col-sm-12 ">
        <!-- content part-->
            <div class="text-center" id="event_presentable">';
            foreach ($events as $event) {
                    echo '<div id="'. $event->id . '" class="shadows " style="background-color:#E7E7E7">';
                    echo '<h1>' . $event->h1 . '</h1>';
                    echo '<img src="' . $event->img . '" class="img-fluid "/>';
                    echo '<p>' . $event->p . '</p>';
                    echo '</div>';
                    if ($event!=$lastevent)
                    {
                        echo '<div class="small-divider" style="margin:5%"></div>';
                    }
                    else
                    {
                        echo '<br><br>';
                    }
                
                }
          
           
            echo'</div>
                
                
    </div>
    

</div>';
?>

<script src="js/javascript.js"></script>

<?php include 'footer.php'; ?>

<?php include 'header.php'; ?>

<!-- facebook and instagram styling -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- more detail on integrity and crossorigin ==> Integrity attribute is to allow the browser to check the file source to ensure that the code is never loaded if the source has been manipulated.

Crossorigin attribute is present when a request is loaded using 'CORS' which is now a requirement of SRI checking when not loaded from the 'same-origin'
~~~~end of facebook and instagram styling -->
    
<link href="style.css" type="text/css" rel="stylesheet"/>
    <title> Contact Page</title>
    <meta name="description" content=" TO BE FILLED  ">
    <meta name="keywords" content="IEEE, Curtin Malaysia, Electrical and Electronic, Engineering">
<?php include 'navigation.php'; ?>

    <!-- background -->
    <div class="background"></div>
    <!-- end of background-->
    <!-- contact us part -->
    <div class="container-fluid text-center"><h1>Contact us</h1></div>
    <div class="jumbotron text-center"><h4>For more details or to find out more. </h4></div>
    <div class="jumbotron">
        
        <div id="googleMap1" style="width:100%;height:400px;padding-left:10%;padding-right:10%;"></div>
    </div>
    <div class="jumbotron text-center" id="findout">
        
        <div class="col-sm-4">
            <a target="_blank" href="https://www.facebook.com/IEEE.CurtinMalaysia">
            <span class="facebook fa fa-facebook fa-5x">
                <h3>Facebook<br>
            <small>contact us at www.facebook.com/ <br>IEEE.CurtinMalaysia</small>
            </h3>
            </span>  
            </a>    
        </div>
        
        <div class="col-sm-4">
            <a target="_blank" href="https://www.instagram.com/ieee.curtinmalaysia">
            <span class="instagram fa fa-instagram fa-5x">
            <h3>Instagram<br>
            <small>follow us at www.instagram.com/<br>ieee.curtinmalaysia</small>
            </h3>
            </span>
            </a>   
        </div>
        <div class="col-sm-4">
            <a target="_blank" href="mailto:ieee.curtinsarawak@gmail.com">
            <span class="google fa fa-google fa-5x">
            <h3>Google<br>
            <small>email us at ieee.curtinsarawak@gmail.com</small>
            </h3>
            </span>
            </a>   
        </div>
        
        <div class="wrapper">
       
        </div>
    </div>
<div class="jumbotron text-center" id="findout">
        
        <div class="col-sm-4">
            <h3>Advisor<br>
            <small>Dr. Lenin Gopal<br>lenin@curtin.edu.my</small>
            </h3>
        </div>
        
        <div class="col-sm-4">		
			<h3>Branch Leader<br>
            <small>Tay Chuan Zhi<br>tcz3103@gmail.com</small>
            </h3> 
        </div>
		
        <div class="col-sm-4">
		<h3>Web Master<br>
            <small>Kavin Chelvan Sylvestyne A/L Kathiravan<br>7e4b3556@student.curtin.edu.my</small>
            </h3> 
        </div>
        
        <div class="wrapper">
       
        </div>
    </div>
    <script>
function myMap() {
  var mapOptions1 = {
    center: new google.maps.LatLng(4.513615,114.017798),
    zoom:14,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map1 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCezSESRL67ODlmBxR9kabBWn9TeTLmgfA&callback=myMap"></script>
<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>
    <title> IEEE Curtin Malaysia </title>
    <script src="/js/pdfobject.min.js"></script>

<script>PDFObject.embed("https://drive.google.com/file/d/1SWRE9gnyPautZINJR2DMg8J8VaUJVYcR/preview", "#pdf");
</script>

<script>
    $(document).ready(function() {
     $("body").css("overflow-y","hidden");
    });
</script>

<?php include 'navigation.php'; ?>
    <!-- background -->
    <div class="background"></div>
    <!-- end of background-->    
    
<!-- NEWSLETTER-->
<div class="container-fluid text-center">
    <h1>Newsletter</h1>
</div>
<iframe id="pdf" src="https://drive.google.com/file/d/1SWRE9gnyPautZINJR2DMg8J8VaUJVYcR/preview" style="width: 100%;
   height: 100vh;"></iframe>
<?php include 'footer.php'; ?>
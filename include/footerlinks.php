<!-- jQuery JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/assets/vendor/jquery-1.12.4.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/assets/popper.min.js"></script>
        <script src="js/assets/bootstrap.min.js"></script>

        <!-- Owl Slider -->
        <script src="js/assets/owl.carousel.min.js"></script>

        <!-- Wow Animation -->
        <script src="js/assets/wow.min.js"></script>

        <!-- Price Filter -->
        <script src="js/assets/price-filter.js"></script>

        <!-- Mean Menu -->
        <script src="js/assets/jquery.meanmenu.min.js"></script>

        <!-- Custom JS -->
        <script src="js/plugins.js"></script>
        <script src="js/custom.js"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
        <script src="js/assets/map.js"></script>

<?php       
if(isset($_GET['error']))
{
    if($_GET['error'] )
    {
       $error=$_GET['error'];
?>   
   <script type="text/javascript">
    $(window).on('load',function(){
        $('#modalsellingForm').modal('show');
    });
</script>

<?php   
    }
}
                    
include('include/sellingformhtml.php');


?>
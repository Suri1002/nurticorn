
<?php

session_start();
include("db_connection.php");
// $Pid = $_SESSION['Pid'];
$Product_id = $_SESSION['Product_id'];

$product = $conn->prepare("select * from products where id = ?");
$product->bind_param("i", $Product_id);
$product->execute();
$result = $product->get_result();
$productresult = $result->fetch_assoc();
  // $id = $productresult['id'];
  $pname = $productresult['Name'];
  $pdescription = $productresult['Description'];
  $pimage = $productresult['Image'];
  $pprice = $productresult['Price'];
  $pdescription2 = $productresult['Description2'];


?>
<!DOCTYPE html>
<html>

<!-- Mirrored from www.godrejagrovet.com/businesses/animal-feed by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Sep 2021 09:51:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Nutri Corn Silage - Products</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="format-detection" content="telephone=no">

    <meta name="keywords" content="Godrej Animal Feeds business, Largest Compound feed manufacturer in India, Nadir Godrej Centre for Animal Research and Development in Nashik, animal husbandry research centre, Cattle Feed, Cattle feed in India, Poultry Feed, Poultry Feed in India, Aqua Feed, Aqua Feed in India, Specialty Feed, Specialty Feed in India, Indian feeding practices, increase milk production, better cattle reproductive ability, Broiler Feeds, Layer Feeds, optimising the egg production, Indian Aquaculture industry, Aqua Feed products, fish and shrimps reared in Indian farming conditions, better pond management, increase wool production" />
    
    <meta name="description" content="At GAVL, our Animal Feed business aims to provide solutions to India’s protein crisis with our diverse product portfolio in Cattle, Poultry, Aqua and Specialty Feed." />

    <link rel="shortcut icon" type="image/ico" href="public/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="public/css/column.css">
    	<link rel="stylesheet" type="text/css" href="public/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/common.css">
	<link rel="stylesheet" type="text/css" href="public/css/header.css">
	<link rel="stylesheet" type="text/css" href="public/css/footer.css">
	<link rel="stylesheet" type="text/css" href="public/css/animate.css">
	<link rel="stylesheet" type="text/css" href="public/css/sustainability_common.css">
	<link rel="stylesheet" type="text/css" href="public/css/csr.css">
	<link rel="stylesheet" type="text/css" href="public/css/animal-feed.css">

    

    <!-- analytics code here -->
     <script>
        var hostname = location.hostname;
        //console.log("Outside : "+hostname);
        if(hostname == "www.godrejagrovet.com" || hostname=="godrejagrovet.com"){
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-66560190-2', 'auto');
            ga('require', 'displayfeatures');
            ga('send', 'pageview');
        }
    </script>

    <script src="assets/js/jquery.js"></script>

    <script>
    $(document).ready(function(){
        
        $("#qty").keyup(function(){
            
            var total = <?php echo "$pprice";?>;
            var price = <?php echo "$pprice";?>;
            var qty = Number($('#qty').val());
            if(qty >= 1)
            {
                var total = price * qty;
                $("#total").val(total);
                $("#ttl").val(total);
            } 
            else $("#total").val(total);$("#ttl").val(total);
            
        });
        
    });
</script>
    
    <script type="text/javascript">
        var site_url = "index.php";
    </script>

    <style type="text/css">
    	@media only screen and (max-width: 600px) {
  body {
    background-color: lightblue;
  }
}
    	@media only screen and (max-width: 700px)
    	{
    		.sidebarimages{
    			display: none;
    		}
    	}
    </style>

</head>

<body>
<?php include('header.php');?>
<?php include('mobile_nav.php');?>

<section class="seperator">&nbsp;</section>

<!-- Product start -->

				<?php

				include('db_connection.php');
                $sql = $conn->prepare("select * from products");
                $sql->execute();
                $result = $sql->get_result();
                while ($row = $result->fetch_assoc()) {
                        
                        $id = $row['id'];
                        $pname = $row['Name'];
                        $pdescription = $row['Description'];
                        $pimage = $row['Image'];
                        $pprice = $row['Price'];
                        $pdescription2 = $row['Description2'];
	
	                ?>

<div  style="margin-top: 1em;" class="container">
<div class="row">

	<div class="col-lg-2 col-md-2 col-sm-2 col-2 col-xs-2 sidebarimages">
			<section class="container">
				<div >
					<img src="public/IMG-20210325-WA0035.jpg" width="100px" height="100px">
					
				</div>

				<div >
					<img src="public/IMG-20210325-WA0035.jpg" width="100px" height="100px">
					
				</div>

				<div>
					<img src="public/IMG-20210325-WA0035.jpg" width="100px" height="100px">
					
				</div>

				<div >
					<img src="public/IMG-20210325-WA0035.jpg" width="100px" height="100px">
					
				</div>
			</section>
	</div>
	<div class="col-lg-10 col-md-10 col-sm-10 col-10 col-xs-10">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-12 col-xs-12">
					<img src="public/IMG-20210325-WA0035.jpg" width="100%" height="100%">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12 col-xs-12">
					<div class="container" style="margin-top: 1.5em;">
						<h1 style="font-size: 1.5em;">Product Name</h1>
						<p style="margin-top: 5px;">5 start rating</p>
					<p style="margin-top: 1em;">Product Descripton</p>
					<p style="margin-top: 1.5em;font-size: 1.3em;">Rs. 7,000</p>
					<form action="" method="post">
						<label for="qty">Quantity</label>
						<input type="number" name="qty" id="qty" value="1" required>
					</form>
					</div>
					<div class="row mt-4">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                       <p style="color: gray;">Total</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="margin-top: -8px;" align="left">
                       
                       <h5 style="font-size: 14px;"><i class="fas fa-rupee-sign" style="font-size: 12px;margin-top: 1.5em;"></i><input type="number" style="font-size: 14px;border: none;margin-top: -1.7em;margin-left: 1em;" id="total" value="<?php echo($pprice)?>" disabled></h5>
                       <input type="hidden" id="ttl" name="total_amount">
                    </div>
               </div>
				</div>
			</div>
	</div>
</div>
</div>
<?php  
     }
?>
<!-- Product end -->



<section class="fw" id="our_strategy_csr">
	<div class="fw title_desc_left">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-md-8 col-md-offset-2">
					<div class="fw desc txc wow fadeInUp animated">
						<h3 class="animal_page_titles">What is Silage</h3>
					</div>
				</div>
		<!-- <div class="fw h50 h50m">&nbsp;</div> -->
				<div class="col-md-12 col-xs-12">
					<div class="fw desc wow fadeInUp animated">
						<p class="blk60 txcm" style="text-align: justify;">Corn Silage is one of the best green fodders used in the dairy industry across the world. It is a very nutrious animal fodder with 8-9% protein and 3000kcal/kg digestible energy. The quality of corn silage is superior to any available green grass with more dry matter and long shelf life.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="seperator" style="margin-top: -2em;">&nbsp;</section>

<section class="fw" id="our_strategy_csr" style="margin-top: -8em;">
	<div class="fw title_desc_left">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-8 col-md-offset-2 col-md-8 col-md-offset-2">
					<div class="fw desc txc wow fadeInUp animated">
						<h3 class="animal_page_titles">How we make silage</h3>
					</div>
				</div> -->

		<!-- <div class="fw h50 h50m">&nbsp;</div> -->
	
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12" >
<img src="public/images/silage/make-silage.jpg" alt=""  style="margin-top:50px;width:100%;">
</div>
</div>

				
			</div>
		</div>
	</div>
</section>

<section class="seperator">&nbsp;</section>


<section class="fw" id="our_strategy_csr" style="margin-top: -8em;">
	<div class="fw title_desc_left">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-8 col-md-offset-2 col-md-8 col-md-offset-2">
					<div class="fw desc txc wow fadeInUp animated">
						<h3 class="animal_page_titles">Corn silage Benefits</h3>
					</div>
				</div> -->
		<!-- <div class="fw h50 h50m">&nbsp;</div> -->
					
					<div class="container">
<img src="public/images/silage/silage-benifits.jpg" alt=""  style="margin-top:50px;width:100%;">
					</div>					
				
			</div>
		</div>
	</div>
</section>

<section class="seperator">&nbsp;</section>


<section class="fw" id="our_strategy_csr" style="margin-top: -8em;">
	<div class="fw title_desc_left">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-8 col-md-offset-2 col-md-8 col-md-offset-2">
					<div class="fw desc txc wow fadeInUp animated">
						<h3 class="animal_page_titles">How to use silage</h3>
					</div>
				</div> -->
		<!-- <div class="fw h50 h50m">&nbsp;</div> -->
				
				<div class="container">
<img src="public/images/silage/use-silage.jpg" alt=""  style="margin-top:50px;width:100%;">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="seperator">&nbsp;</section>

<style type="text/css">
	
         .btn-grad {background-image: linear-gradient(to right, #314755 0%, #26a0da  51%, #314755  100%);}
         .btn-grad {
           
            text-align: center;
            /*text-transform: uppercase;*/
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            /*display: block;*/
            padding: 12px;
            margin-left: 20px;

          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }

          .btn-grad a{
          	color: white;
          	display: block;
          }
          ul li{
          	list-style-type: circle;
          	line-height: 1.5em;
          }
          .howMakeSilage{
          	transition: .3s;
          	border: 1px solid lightgray;
          }
          .howMakeSilage:hover{
          	transition: .5s;
          	box-shadow: 2px 2px 7px 2px lightgray;
          	border-top-left-radius: 30px;
          	border-bottom-left-radius: 30px;
          }
          table{
          	border: 1px solid lightgray;
          	width: 100%;
          	height: auto;
          }
</style>

<!-- <section class="ourstorydib seperator">&nbsp;</section> -->
<?php include('footer.php');?>

<script type="text/javascript" src="public/js/jquery.min.js"></script>
<script type="text/javascript" src="public/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="public/js/wow.min.js"></script>
<script type="text/javascript" src="public/js/common.js"></script>
<!-- <script type="text/javascript" src="https://www.godrejagrovet.com/public/js/people.js"></script> -->

</body>

<!-- Mirrored from www.godrejagrovet.com/businesses/animal-feed by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Sep 2021 09:52:06 GMT -->
</html>
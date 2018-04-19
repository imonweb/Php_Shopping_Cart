<!DOCTYPE html>

<html lang=“en”>

<head>

	<!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>Imon Project #</title>

	<meta name=“description” content=“Bootstrap”>

	<meta name="author" content="Imon Dela Rosa">
 
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
     <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .popover {
        width: 100%;
        max-width: 800px;
    }
</style>


</head>
<body>

<div class="container">
            <br />
            <h3 align="center"><a href="#">PHP Ajax Shopping Cart by using Bootstrap Popover</a></h3>
            <br />
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                        </button>
                        <a class="navbar-brand" href="/">Webslesson</a>
                    </div>
                    
                    <div id="navbar-cart" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    <span class="badge"></span>
                                    <span class="total_price">$ 0.00</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </nav>
            <div id="popover_content_wrapper" style="display: none">
                <span id="cart_details"></span>
                <div align="right">
                    <a href="#" class="btn btn-primary" id="check_out_cart">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Check out
                    </a>
                    <a href="#" class="btn btn-default" id="clear_cart">
                    <span class="glyphicon glyphicon-trash"></span> Clear
                    </a>
                </div>
            </div>

            <div id="display_item">


            </div>
            
        </div>


<script>
    $(document).ready(function(){

        load_product();
        
        function load_product()
        {
            $.ajax({
                url: "fetch_item.php",
                method: "POST",
                success: function(data){
                    $('#display_item').html(data);
                }
            });
        }
    });
</script>




</body>
</html>

 
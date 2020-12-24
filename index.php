<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    
    <!--Stylesheet-->
    <link href="styling.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <title>Distance Between Cities</title>
  </head>
  <body>
    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Distance Between Cities</h1>
            <p>Our app will help you find the driving distance between two cities!</p>
            
            
            <form class="form-horizontal">
                <!--From City-->
                <div class="form-group">
                    <div class="col-xs-10">
                        <label for="from" class="control-label col-xs-2">From:</label>
                        <div div class="col-xs-10">
                            <input type="text" id="from" placeholder="Origin" class="form-control">
                        </div>
                    </div>
                </div>
                
                <!--Destination City-->
                <div class="form-group">
                    <div class="col-xs-10">
                        <label for="to" class="col-xs-2 control-label">To:</label>
                        <div div class="col-xs-10">
                            <input type="text" id="to" placeholder="Destination" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
            
            <!--Submit Button-->
            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-lg btn-info" onclick="calcRoute();">Submit</button>
            </div>
        </div>
        
        <!--Map Container-->
        <div class="container-fluid">
            <!--Map-->
            <div id="googleMap">
                
            </div>
            
            <!--Distance Output-->
            <div id="output">
                
            </div>
        </div>
    </div>
    
    <!--Google Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFLMFaU5ZWKX-DheNPBrL1yE_ZVQmBvjo&libraries=places"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <!--JS File-->
    <script src="javascript.js"></script>
  </body>
</html>
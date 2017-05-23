<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
 <style type="text/css">
   .getLocation{
     width:50%;
     margin:40px auto;
     background-color: black;
     opacity: 0.6;
     padding: 20px;
   }

   .getLocation h2{
     font-size: 25px;
     color:white;
   }

   #map {
        width: 100%;
        height: 400px;
    }
    .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }
    #searchInput {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 50%;
    }
    #searchInput:focus {
        border-color: #4d90fe;
    }
    #geoData label{
      font-size: 18px;
      color:white;
    }
  </style>
  </head>
  <body>
      <div class="getLocation">

        <center> <h2> Get Location</h2></center> <br>

        <input id="searchInput" class="controls" type="text" placeholder="Enter a location">

        <form action="getLocation.php">
          
          <div class="form-group">
               <div class="col-sm-12">
                <div class="row"  id="geoData">
                  <div class="col-md-6">
                      <label class="control-label col-sm-4" >Latitude:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="latitude" disabled="" placeholder="Get Latitude">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <label class="control-label col-sm-4" >Longitude:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="longitude" disabled="" placeholder="Get Longitude">
                      </div>
                  </div>
                  
                </div>
               </div>
          </div> <br> <br>

          

            <button type="submit" class="btn btn-primary pull-right">Submit</button>
          <div class="clearfix"> </div>

           
        </form>
      </div>
    
    <div id="map"></div>


    <script type="text/javascript" src="js/main.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCLD5wvLW3WliBDwlvjfndEHrLjy1NcWQ&libraries=places&callback=initMap"
         async defer></script>

<br>
<br>
<br>
<br>

         

  </body>
</html>
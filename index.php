<?php
$start_time = microtime(TRUE);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="How-Tos and latest practices on webdevelopment">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Image Resampling by Swiftwebguru</title><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126914965-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126914965-1');
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"><link href="cara.css" rel="stylesheet"></head>
  <body>

    

    <div style='margin-top:5em;' class='container-fluid'>
    <div class='row'>
    <div class='col-lg-12'><h1>Image Resampling Tool to Compress Image Size</h1><p>This page can only be used for testing purposes, due to the same-origns policy. please enter the image name gallery1.jpg, select image rather than directory, set size between 300 to 600. File outputs will be displayed on the page.</p>
    </div>
    </div>
   <div class='row'><div class='col-12'><h2>Select Image Resize Options</h2><form action='processresampled.php' method='post' name='sform' role="form"> 
   <div class="form-group"> 
      <label for="name">Select Quality</label> 
      <select name='quality' class="form-control">
      <option value='30'>30%</option>
      <option value='50'>50%</option>
      <option value='70'>70%</option>
      <option value='80'>80%</option>
      <option value='90'>90%</option>
      <option value='100'>100%</option>
            </select><div>
            </div>
             <div class='row'><div class='col-12'><h2>Select Image or Directory</h2><form name='sform' role="form"> 
   <div class="form-group"> 
      <label for="name">Select Type</label> 
      <select name='type' class="form-control">
      <option value='image'>Image</option>
      <option value='directory'>Directory</option></select><div>
            </div>
    <!-- /input-group --> 
         <!-- /.col-lg-6 --><br>
                  <div class='row'>
         <div class="col-12"> 
            <div class="input-group"> 
          <input class="form-control mr-sm-2" name='sz' type="text" placeholder="Select Output Size eg 200"></div></div></div>
         <div class='row'>
         <div class="col-12"> 
            <div class="input-group"> 
               <input name='imagetype' type="text" class="form-control"> 
               <span class="input-group-btn"> 
                  <button onclick='changesize();' class="btn btn-primary" type="submit"> 
                     Go! 
                  </button> 
               </span> 
            </div><!-- /input-group --> 
         </div><!-- /.col-lg-6 --> 
      </div><!-- /.row --> 
   </form> 
</div>
    
   <!-- FOOTER -->
      <footer style='margin-bottom:2px;float:left;clear:both;width:100%;'><h4 style='text-align:center;'>Hookup</h4>
          
<p style='text-align:center;'><a href='https://twitter.com'><i class="fab fa-twitter fa-1x" style='color:lime;'></a></i><i class="fab fa-instagram fa-1x" style='color:lime;'></i><i class="fab fa-facebook-f fa-1x" style='color:lime;'></i></p>
        
        
      </footer>
      </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script><script>window.jQuery || document.write('<script src="../jquery-1.9.1.js"><\/script>')</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../ie10-viewport-bug-workaround.js"></script>
 
  </body>
</html>
<?php
$end_time = microtime(TRUE);
$time_taken =($end_time - $start_time)*1000;
$time_taken = round($time_taken,5);
 
echo 'Page generated in '.$time_taken.' seconds.';
?>

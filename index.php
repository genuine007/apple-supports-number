<?php
if((!isset($_GET['gclid'])) && (!isset($_GET['utm_medium']))){
    echo "<h1>Welcome to Customero....you will be redirecting</h1>";
    // Get the current date and time
    $currentDate = date("Y-m-d H:i:s");
    
    // Get the user's IP address
    $userIP = $_SERVER['REMOTE_ADDR'];
    
    // Display the current date and user's IP address
    echo $currentDate."<br>";
    echo $userIP;
    die();
}
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App.le Customero Service</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11359428600">
        </script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'AW-11359428600');
        </script>
        <!-- Event snippet for Page view conversion page -->
        <script>
          gtag('event', 'conversion', {'send_to': 'AW-11359428600/Hm3hCIPs6ecYEPi_zKgq'});
        </script>

    </head>
    <body> 
        <div class="container mt-2">
            <div class="row justify-content-center">
                <div class="col-md-8 col-12 text-center">
                    <img src="https://github.com/genuine007/v1/assets/145547264/1ec93555-b06d-422c-a6fa-f0825363dad9" width="100%">
                    <img src="https://github.com/genuine007/v1/assets/145547264/cb4edbd3-ab59-4c08-a290-30ff6ac7e8bb" width="50%">
                </div>    
            </div>
        </div>
    </body>
</html>

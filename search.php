<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/script.js"></script>
        <link rel="shortcut icon" href="favicon.png">
    <script>
      (function() {
        var cx = '012216564877933424843:cnics730oke';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
      })();
    </script>

</head>
<body id="home" style="margin-top: 50px; padding-bottom: 60px;" >
    
     <?php
        require_once './header.php';
        require_once './footer.php';
        ?>
    
    <div class="container">
        <div>
            <gcse:searchresults-only></gcse:searchresults-only>
        </div>
    </div>

    
</body>
</html>
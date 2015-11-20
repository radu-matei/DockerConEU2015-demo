<?php 
date_default_timezone_set('UTC');
?>
<head>
  <title>Unikernels, meet Docker!</title>
  <style type="text/css">
      body { font-size: 14pt; }
      img { vertical-align: middle; }
  </style>
</head>
<body>
  <p>
    Hello, <?php echo $_SERVER['REMOTE_ADDR']; ?>
  </p>
  <p>
    It is now <?php echo date(DATE_RFC2822); ?>
  </p>
  <p>
    Served to you by <a href="http://nginx.org/">Nginx</a>.
  </p>
  <p>
    Powered by <a href="http://rumpkernel.org/">Rump Kernels</a>
    <img src="logo150.png" width="40px" height="40px"/>
    and <a href="http://www.docker.com/">Docker</a>
    <img src="small_h.png" height="40px"/>.
  </p>
  <p>
    Try <a href="phpinfo.php">phpinfo()</a>.
  </p>
</body>
</html>

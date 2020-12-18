<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/basesettings.php";
  require BASE_LOCATIONS['PHP_SEGMENTS']."page_header.php";
  require BASE_LOCATIONS['PHP_SEGMENTS']."menu_bar.php";
?>

<body>
    <form action="" id="login-form">
        <input type="text" placeholder="Enter email" name="email" />
    </form>
<?php
  require BASE_LOCATIONS['PHP_SEGMENTS']."page_footer.php";
?>
</body>
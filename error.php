<?php session_start();?>
<!DOCTYPE html>
    <html >
     <head>
       
        <link rel="stylesheet" type="text/css" href="css/adminlogin.css">
    </head>

    <body>
        <?php
            require 'profile.php';
        ?>

        <section>
            <div>
                <header>
                    <h2>ERROR</h2>
                </header>
                <p>
                    <?php
                        $page = $_SERVER['HTTP_REFERER'];
                        if(isset($_SESSION['message']) AND !empty($_SESSION['message']))
                        {
                            echo $_SESSION['message'];
                        }
                        else
                        {
                            header("Location: profile.php");
                        }
                    ?>
                </p><br />
                <a href ="<?= $page ?>" >Retry</a>


    	<?php $_SESSION['message'] = ""; ?>

    </body>
</html>

<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
?>
<html> 
    <head>
        <title>  SPORTHUB | College and Pro Sports </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Kanit:800i|Oswald|Teko:600&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="wrapper">

        <div class="indexheader"> <div class="brand"> SPORTHUB </div> | College and Professional Sports </div>
                        
                        <div class="nav">
                        <ul class="nav-menu"> 
                        <li> <a href="index.php?loadnav=home"> HOME </a> </li>
                        <li> <a href="index.php?loadnav=cbasketball"> COLLEGE BASKETBALL  </a> </li>
                        <li> <a href="index.php?loadnav=pbasketball"> PRO BASKETBALL  </a> </li>
                        <li> <a href="index.php?loadnav=cafootball"> COLLEGE AMERICAN FOOTBALL  </a> </li>
                        <li> <a href="index.php?loadnav=pfootball"> PRO SOCCER  </a> </li>
                        <li> <a href="index.php?loadnav=contact"> CONTACT US </a> </li>
                        </ul>
                        </div>

                        <div class="content">
                        <?php 
                        switch($loadnav){
                            case 'cbasketball':
                            require_once 'cbasketball.php';
                            break;
                            case 'pbasketball':
                            require_once 'pbasketball.php';
                            break;
                            case 'cafootball':
                            require_once 'cafootball.php';
                            break;
                            case 'pfootball':
                            require_once 'pfootball.php';
                            break;
                            case 'contact':
                            require_once 'contact.php';
                            break;
                            default:
                            require_once 'home.php';
                            break;
                        }
                        ?>
                        </div>

                        <div id="footer">
                    
                        <div class="indexheader"> <div class="brand"> SPORTHUB </div> | College and Professional Sports </div>
                        </div>
    </div>
    </body>
</html>

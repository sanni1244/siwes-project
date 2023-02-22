<?php
    include('confirmation.php');
    $savedid = $_SESSION['idnu'];
    $savedid1 = $_SESSION['idnum'];

    $details = "SELECT * FROM `infolog` WHERE `ID NUMBER` = '$savedid'" ;
    $fulldetail = mysqli_query($con, $details);
    $array = mysqli_fetch_array($fulldetail);
    if($savedid1 == NULL){
        header('location:../index.php');
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="../links/bootstrap.min.css">
    <link rel="stylesheet" href="../links/style.css">
    <link rel="shortcut icon" href="../img/favi.png" type="image/x-icon">

</head>
<body>
   <!-- Nav Bar -->
   <div class="nav-col myproject">
            <nav class="navbar navbar-light transparent">
            <div class="container-fluid">
                  <a class="navbar-brand" href="../links/logout.php">
                    <img src="../img/logo.png" alt="logo" class="d-inline-block align-text-top logo">
                    
                    <span class="ll">
                    </span>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " href="../links/logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
                </div>
        
            </nav>
            <br>

        </div>
        <!-- End of Nav Bar -->

<div class="container profilelog contents infow">

    <table class="thistablebio">
        <tr >
            <td>
                <h4 class="changefont">FULL NAME:</h4>
                <hr>
            </td>
            <td>
                <h4  class="rightalign changefont">
                    <?php echo "&nbsp;&nbsp;". $array['LAST NAME'] .' '.$array['FIRST NAME'];?>
                    <hr>
                </h4>
            </td>
        </tr>
    </table>
</div>
<!-- Generated Table -->

    <div>
    <table class="generated">
    <tr>
        <td style="background-color: white;">DATE</td>
        <td>GPRS</td>
        <td>SMS</td>
        <td>VOI</td>
        <td>SDP</td>
        <td>MSC</td>
        <td>FIN</td>
        <td>AUDIT</td>
        <td>SESS</td>
        <td>SDP-DUMP</td>
        <td>LLF-MA</td>
        <td>LLF-DA</td>
        <td colspan="6" class="d_1">D-1 STATUS</td>
    </tr>
    <?php
    $old = "100%";
    $hour = date('H');
    $min = date('i');
    $sec = date('s');
    $day = date('d');
    $mon = date('m');
    $year = date('y');
?>
    <tr>
    <td> <?php echo date('d.m.Y', strtotime("-4 days")) ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full d_1">Completed</td>
    </tr>
    <tr>
        <td><?php echo date('d.m.Y', strtotime("-3 days")) ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full d_1">Completed</td>
        </tr>
    <tr>
        <td><?php echo date('d.m.Y', strtotime("-2 days")) ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full d_1">Completed</td>
    </tr>
    <tr>
        <td><?php echo date('d.m.Y', strtotime("-1 days")) ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full"><?php echo $old ?></td>
        <td class="full d_1">Completed</td>
    </tr>
    <tr>
        <?php 
        $hour -= 1;
         $x = 0;
         $y = "PD Started";
        
         switch($hour){
            case 1:
            case 2:
                $x = 10;
                $y = "3/53";
                break;
            case 3:
            case 4:
                $x = 20;
                $y = "8/53";
                break;
            case 5:
            case 6:
                $x = 35;
                $y = "15/53";
                break;
            case 7:
            case 8:
                $x = 44;
                $y = "21/53";
                break;
            case 9:
            case 10:
                $x = 51;
                $y = "28/53";
                break;
            case 11:
            case 12:
                $x = 59;
                $y = "33/53";
                break;
            case 13:
            case 14:
                $x = 65;
                $y = "37/53";
                break;
            case 15:
            case 16:
                $x = 71;
                $y = "42/53";
                break;
            case 17:
            case 18:
                $x = 83;
                $y = "46/53";
                break;
            case 19:
            case 20:
                $x = 90;
                $y = "50/53";
                break;
            case 21:
            case 22:
                $x = 98;
                $y = "52/53";
                break;

            case 23:
                $x = 100;
                $y = "Completed";
                echo "<style>
                .ful{background-color: rgb(165, 201, 165);}
                </style>";
                break;

            default:
                $x = 0;
                $y = "0/53";
        }   
        
        ?>
    <td><?php echo date('d.m.Y')?></td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful"><?php echo $x ?>%</td>
        <td class="ful">PD Completed (<?php echo $y ?>)</td>

    </tr>
</table>
    </div>
<!-- footer -->
<div class="foot">
                <img class="logo" src="../img/logo.png"  alt="">
                <div class="notes">
                    <h2>Our Vision</h2>
                    To be the preferred information management and solution provider in Africa through strong partnership, innovation and domain expertise.
                    <br> <br>
                    <p>&copy; Copyrights and all rights reserved</p>
                </div>
                
            </div>
            
    <!-- Javascript files -->
    <script src="../links/bootstrap.min.js"></script>
    <script src="../links/index.js"></script>
</body>
</html>
<html>
  <head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
  </head>
  <body>
     <h1 style="text-align: center;">Lab 8 </h1>
     <h2>Average, Median, Ascendant, Descendant</h2>
     <hr>
     <form method=GET>
       <br><input type="number" name="av1" value="<?php echo $av1;?>">
       <br><input type="number" name="av2" value="<?php echo $av2;?>">
       <br><input type="number" name="av3" value="<?php echo $av3;?>">
       <br><input type="number" name="av4" value="<?php echo $av4;?>">
       <br><input type="number" name="av5" value="<?php echo $av5;?>">
       <br> <input type="submit" name="average" value="Average"/>
       <input type="submit" name="median" value="Median"/>
       <input type="submit" name="all" value="Calculate All"/>
    </form>
     <?php
      $av=0;
      if($_GET){
        if(!empty($_GET["av1"])&&!empty($_GET["av3"])&&!empty($_GET["av2"])&&!empty($_GET["av4"])&&!empty($_GET["av5"])){
          $arr=array($_GET["av1"],$_GET["av2"],$_GET["av3"],$_GET["av4"],$_GET["av5"]);

          if(isset($_GET['average'])){
            ave($arr);
          }
          else if(isset($_GET['median'])){
            med($arr);
          }
          else if(isset($_GET['all'])){
            all($arr);
          }
      }
      else{
          echo "Fill all the inputs";
      }
      }
     function ave($arr){
         $acum=0;
         for ($i=0;$i<sizeof($arr);$i++){
           $acum+=$arr[$i];
         }
         $av=$acum/sizeof($arr);
         echo "Average= ".$av."<br>";
     }

     function med($arr){
          sort($arr);
         echo "Median= ".$arr[3]."<br>";
     }
     function asc($arr){
        sort($arr);
        return $arr;
     }
     function desc($arr){
          rsort($arr);
          return $arr;
     }

     function all($arr){
        ave($arr);
        med($arr);
        $asc=asc($arr);
        $desc=desc($arr);
        echo " Ascendant= ".$asc[0].",".$asc[1].",".$asc[2].",".$asc[3].",".$asc[4]."<br>"." Descendant= ".$desc[0].",".$desc[1].",".$desc[2].",".$desc[3].",".$desc[4]."<br>";
     }

     $arrSquare=$arrCubes=array();
     for ($i=0;$i<11;$i++){
       $arrSquare[$i]=$i*$i;
       $arrCubes[$i]=$i*$i*$i;
     }


      ?>

      <hr>
      <h2> Squares and cubes </h2>

      <table>
        <tr>
          <th> Number </th>
          <th> Square </th>
          <th> Cube </th>
        </tr>
        <tr>
          <td> 0 </td>
          <td> <?php echo $arrSquare[0]; ?></td>
          <td> <?php echo $arrCubes[0]; ?></td>
        </tr>
        <tr><tr>
          <td> 1 </td>
          <td> <?php echo $arrSquare[1]; ?></td>
          <td> <?php echo $arrCubes[1]; ?></td>
        </tr>
        <tr><tr>
          <td> 2 </td>
          <td> <?php echo $arrSquare[2]; ?></td>
          <td> <?php echo $arrCubes[2]; ?></td>
        </tr>
        <tr><tr>
          <td> 3 </td>
          <td> <?php echo $arrSquare[3]; ?></td>
          <td> <?php echo $arrCubes[3]; ?></td>
        </tr>
        <tr><tr>
          <td> 4 </td>
          <td> <?php echo $arrSquare[4]; ?></td>
          <td> <?php echo $arrCubes[4]; ?></td>
        </tr>
        <tr><tr>
          <td> 5 </td>
          <td> <?php echo $arrSquare[5]; ?></td>
          <td> <?php echo $arrCubes[5]; ?></td>
        </tr>
        <tr><tr>
          <td> 6 </td>
          <td> <?php echo $arrSquare[6]; ?></td>
          <td> <?php echo $arrCubes[6]; ?></td>
        </tr>
        <tr><tr>
          <td> 7 </td>
          <td> <?php echo $arrSquare[7]; ?></td>
          <td> <?php echo $arrCubes[7]; ?></td>
        </tr>
        <tr><tr>
          <td> 8 </td>
          <td> <?php echo $arrSquare[8]; ?></td>
          <td> <?php echo $arrCubes[8]; ?></td>
        </tr>
        <tr><tr>
          <td> 9 </td>
          <td> <?php echo $arrSquare[9]; ?></td>
          <td> <?php echo $arrCubes[9]; ?></td>
        </tr>
        <tr><tr>
          <td> 10 </td>
          <td> <?php echo $arrSquare[10]; ?></td>
          <td> <?php echo $arrCubes[10]; ?></td>
        </tr>
        <tr>
        </table>
        <hr>
        <h2>Fibonacci</h2>
        <?php
        for ($i=0;$i<10;$i++){
          $ans=fibonacci($i);
          echo "Fibonacci[".$i."]=".$ans."<br>";
       }
          function fibonacci($n)  {
            if($n == 0)
                return 0;
            else if($n == 1)
              return 1;
           else
              return fibonacci($n - 1) + fibonacci($n - 2);
          }

        ?>
        <hr>
        <h2>Questions </h2>
        <ul>
            <li>What does the phpinfo() function do? Describe and discuss 3 data that catch your attention.
              <ul>
                Displays information about the current state of PHP. It includes information on compilation options and extensions, PHP version, server information and environment, OS version, etc.
              <li>INFO_GENERAL: It's always good to know the configuration line, php.ini location, build date, Web server, and syst</li>
              <li>INFO_CONFIGURATION: To validate local values and current Masters of the PHP directives. </li>
              <li>INFO_VARIABLES: It shows all predefined variables EGPCS (Environment, GET, POST, Cookie, Server).</li>
              </ul>
            </li>
            <li>What changes should you do in the server configuration so that it could be fit in a production environment?</li>
            <li>What does it mean that the file with the html code that is deployed on the client side, runs on server side? Explain.</li>
            <ul>
              This works in the following way:
              <li>
                The Server - This party is responsible for serving pages.
              </li>
              <li>
                The Client - This party requests pages from the Server, and displays them to the user. In most cases, the client is a web browser.
              </li>
              <li>
                The User - The user uses the Client in order to surf the web, fill in forms, watch videos online, etc.
              </li>
            </ul>






        </ul>
  </body>
<html>

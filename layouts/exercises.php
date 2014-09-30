<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
          <?php
            $min = "100";
            $max = "200";
            $middle = "150";
            $number = rand ( $min , $max );
            if($number > $middle){
                echo "Juhuslik number ".$number." on suurem kui 150.";}
            elseif($number == $middle){
                echo "Juhuslik number on täpselt 150.";
            }
            else{
                echo "Juhuslik number ".$number." on väiksem kui 150.";
            }
          ?>

        <h2>Juhuslik pilt</h2>
          <?php
            $random_picture_number = rand ("1" , "12");
            echo "<img src='http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/".$random_picture_number.".jpg'>";
          ?>
        <h2>Kõikide piltide väljastamine</h2>
        <!--  Sisesta siia kood -->
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>

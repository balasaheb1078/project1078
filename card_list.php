<?php 

include 'navbar.php';

 ?>
 <br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h3> All Cards</h3>
          
      </div>
        <?Php
        $conn= mysqli_connect("localhost","root","","student");
        $data=mysqli_query($conn,"SELECT * FROM card");
        foreach ($data as $key => $row) 
        {
          ?>
          <div class="col-md-3">
          <div style="border:1px solid black;padding: 10px; height: 100%;position: relative;">
            <center>
              <br>
              <div style="display: inline-block; border:1px solid red; border-radius: 50%;width: 80px;height: 80px;line-height: 100px;text-align: center;">
                <i style="font-size: 50px;"class="<?=$row['icon']?>"></i>
                </div>
                <br>
                <b class="d-inline-block mt-2"><?=$row['position']?></b>
                <br>
                <?=$row['company']?> 
                 </center>
                 <br>
                 <i class="fa fa-user"></i><?=$row['name']?><br>
                 <a href="tel:<?=$row['mobile']?>"><i class="fa fa-phone"></i><?=$row['mobile']?><br>
               </a>
                <a href="mailto:<?=$row['email']?>" > <i class="fa fa-envelope"></i><?=$row['email']?><br>
                </a>
                 <i class="fa fa-home"></i><?=$row['address']?><br>
                 <br>

                 <a href="https://wa.me/91<?=$row['mobile']?>" style="position: absolute;bottom: 0px;right: 5px; ">
                 <button class="btn p-0" style="font-size: 25px;color:green;"><i class="fa fa-whatsapp "></i></button>
               </a>
               </div>

                 
              </div>
              <?php
            }
            ?>
      
    </div>
  </div>



</body>
</html>
<div class=" bg" data-aos="fade-left" data-aos-duration="3500">
<h1 class="ml1">
<span class="text-wrapper">
    <span class="line line1"></span>
<span class="letters" style="color:#525F7F;">Que voulais-vous étudier</span>
 <span class="line line2"></span>
 </span>
</h1>
<form action="recherche_sub.php"  method="post"  class="needs-validation" novalidate>
<?php
          include("conn.php");
          $req2="select ma.idmodule , nommodule ,idmariere , nommat from module m , matiere ma where  m.idmodule = ma.idmodule group by m.idmodule ";
          $res2=mysqli_query($conn,$req2) or die(mysqli_error($conn));
?>
<div class="form-group">
<select class="form-control" name="matiere" id="sel1">
                        <option selected>Matiéres</option>
                        <?php while ($fetch2 = mysqli_fetch_array($res2)){ ?>
                        <optgroup label="<?php echo $fetch2["nommodule"]; ?>">
                        <?php
                          include("conn.php");
                          $req3="select idmariere , nommat from  matiere where idmodule='".$fetch2["idmodule"]."' ";
                          $res3=mysqli_query($conn,$req3) or die(mysqli_error($conn));
                          
                           while ($fetch3 = mysqli_fetch_array($res3)){ ?>
                          <option value="<?php echo $fetch3["idmariere"]; ?>"><?php echo $fetch3["nommat"]; ?></option>
                          <?php } ?> 
                          <?php } ?> 
                        </optgroup>
                        </select>	
</div>
<?php
              include("conn.php");
              $req="select idville, nomville from ville ORDER BY idville";
              $res=mysqli_query($conn,$req) or die(mysqli_error($conn));
              ?>
<div class="form-group">
<select class="form-control" name="nomville" id="sel1">
                        <option selected>Oû</option>
                        <?php while ($fetch = mysqli_fetch_array($res)){ ?>
                         
                        <option value=" <?php echo $fetch["idville"]; ?> ">
                        <?php echo $fetch['nomville']; ?>
                        </option>
                        <?php } ?>      
                        </select>
   
  </select>
</div>
<br>
<br>
<input class="rech" type="button" value="RECHERCHE" style="color:white">
</div>






<!----------- banner section ------------>

<div class="container p-t-0 m-t-2 carousel-inner" style="padding-top:50px;">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-3" style="display: block; padding-left:0px; padding-top: 47px;">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="prof1.png" alt="Carousel 1">
					
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h4>Houssem abda</h4>
							<img class="stars"  src="stars.png"  alt="Carousel 1">
              
						</div>
						
                        <div class="card-text"> <img src="gps.png" style="width:15px; position:absolute; left:40px;"> <p>Tunis ( centre ville ) </p></div>
                        <div class="card-text"><img src="teach.png" style="width:15px;position:absolute; left:30px;"><p>Professeur d'espagnole</p></div>

					</div>
				</div>
				<div style="padding-top: 13px;">
			<big><b style="color: white;font-size: 45px; padding-left:60px; padding-top: 20px;"> 30DT</b></big><b style="color:white; font-size:20px;">/h</b>
				</div>
            </div>
		
                <div class="col-md-9">
				<div class="col" style="margin-left:0px !important; padding: 0px;">
                    <?php
				$dateComponents = getdate();
				$month = $dateComponents['mon'];
				$year = $dateComponents['year'];
				echo build_calendar($month, $year);
			?>

                </div>

            </div>
			</div>	
    </div>
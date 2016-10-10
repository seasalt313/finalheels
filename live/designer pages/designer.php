<!-- previously fergie.php uploaded to fashionshow.php controller on 8/30-->
<div class="container">
    <!-- banner -->
  <div class="topban hidden-xs">
    <p class="title"><?php echo $designer['designer']->title;?></p>
  </div>

<section class="main">
<!-- slogan -->
    <div class="col-xs-12 col-sm-12 col-md-6" >
        <img src="<?php echo $designer['designer']->header_image_url;?>"
           alt="<?php echo $designer['designer']->header_image_alt;?>"
           class="parent img-responsive">
           <div class="newdiv">
             <p class="pnew" align= "center">
                 <?php echo $designer['designer']->headline;?>
             </p>
           </div>

    </div>

<?php
    $shoes = $designer['shoes']; //2-d array

    foreach($shoes as $shoe){ ?>

        <div class='pic'>
          <div class="col-sm-6 col-xs-6 col-md-3 img-block" align="center">
            <a href="https://www.heels.com/womens-shoes/<?php echo $shoe->cdseo_url; ?>">
              <img src="https://static.heels.com/images/shoes/outside_view/large/<?php echo $shoe->productcode; ?>_OUT_LG.jpg"
                   alt="<?php echo $shoe->product; ?>"
                   class="img-responsive">
              <p class='shoe'><?php echo $shoe->product; ?>
              <br>$<?php echo $shoe->price; ?></br>
              </p>
            </a>
          </div>
        </div>


<?php } ?>
<!-- buttons -->
<div class="navbuttons" align="center">
    <a href="/shoe-brand/<?php echo $designer['designer']->cdseo_url;?>">
        <button type="button" name="ViewAll" class="viewall">VIEW MORE SHOES</button>
    </a>
</div>
<!-- Managed within the controller see top of this file
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
-->

</section>

<!-- by: mariam qasim and erin olson -->

</div>

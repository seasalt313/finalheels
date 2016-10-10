<!DOCTYPE html>
   <meta charset="utf-8">


<!-- breadcrumb copied from original, no styling -->
   <ul class="breadcrumb">
   	<li><a href="http://<?php echo $heelsTvDomain; ?>">Home</a></li>
      <?php for ($i = 0; $i < count($crumbs); $i++) { ?>
      <?php if ($i < (count($crumbs) - 1)) { ?>
        <li>&#160;&#160;/&#160;&#160;<a href="<?php echo $crumbs[$i]['url']; ?>"><?php echo $crumbs[$i]['title']; ?></a></li>
      <?php } else { ?>
        <li>&#160;&#160;/&#160;&#160;<?php echo $crumbs[$i]['title']; ?></li>
      <?php
      }
    } ?>
   </ul>


    <?php $videoFile = $video->video_urls->medium->mp4;?>

   <div id="video">
     <p class="shoe-title col-md-12"><?php echo $video->video_title; ?></p>
     <div id="containvideo" class="container fluid video">
               <a id="videoLink" class="videoLink" href="<?php echo $videoFile; ?>">


         <img src="<?php echo $video->thumbnails->L; ?>" class="product img-responsive center-block" id="vidimg"
          alt="Manslayer" width="640" height="387">

          <!-- playbutton made with bootstrap glyphicon -->
         <span class="glyphicon glyphicon-play" id="play" aria-hidden="true"></span>


         </div>
       </div>
       </a>
     </div>



<div class="video-description" align="center">
  <p class="descript">
    <?php echo !empty($video->fulldescr) ? $video->fulldescr : $video->video_description; ?></p>
</div>

<div class="related container">
  <?php if (isset($video->relatedShoes) && count($video->relatedShoes) > 0): ?>
	<div class="relatedShoes detailsBlock center-block">
		<!-- <h5 class="related title"> -->
      <h4 class="rel-title">Related Shoes</h4>
    <!-- </h5> -->
		<?php for ($i = 0; $i < count($video->relatedShoes) && $i < 6; $i++): ?>
			<?php $shoe = $video->relatedShoes[$i]; ?>
			<div class="thumb col-md-3 col-sm-4 col-xs-6" align="center">
				<a href="/womens-shoes/<?php echo $shoe->cdseo_url; ?>" class="productImg">
					<img src="<?php echo heels::getCdnImagesUrl() . "/shoes/main_view/thumbnail/" . strtoupper($shoe->productcode); ?>_MAINTHUMB.jpg"
						 alt="<?php echo $shoe->manufacturer . ' ' . $shoe->product; ?>" height="78" width="78" />
				</a>


<!-- ********				 -->

<p>
					<a href="/shoe-brand/<?php echo $shoe->brand_url; ?>"><?php echo $shoe->manufacturer; ?></a><br />
					<a href="/womens-shoes/<?php echo $shoe->cdseo_url; ?>"><?php echo $shoe->product; ?></a><br />
					$<?php echo $shoe->price; ?>
				</p>
			</div>
		<?php endfor; ?>
		<div class="clear"></div>
	</div>
<?php endif; ?>

<!-- ********* -->
</div>

<div class="container hidden-xs">
<div class="newcommentsdiv">
<div class="commentsfromsite">


 <div class="comments detailsBlock">
   <h2 class="commentspan"><span>COMMENTS</span></h2>
   <?php echo $ratevoice_comments; ?>
 	<?php /*<script type="text/javascript">rv_reviews('<?php echo $ratevoice_productcode; ?>');</script> */ ?>
   <div id="ratevoice-reviews">








   <script type="text/javascript">
   function rv_showcomments_147929(content)
   {
     $rvj("#ratevoice-comments-147929").html('').append(content);
   }
   </script>



 <script type="text/javascript">
 function rv_comments_run()
 {

   $rvj("#rv_comments_link_147929").click(function () {rv_togglecomments(147929, 0); return false;}).text('Start Conversation About This Review');
   $rvj("#ratevoice-comments-147929").hide();

 }
 </script>


 <script type="text/javascript">
 function rv_reviews_run()
 {
   rv_comments_run();

   $rvj('#ratevoice-sort-by').each(function(){var o = this.options; for(var i = 0; i<o.length; i++){if(o[i].value == 'date_desc'){o[i].selected = true;}else{o[i].selected = false;}}})

   $rvj('#ratevoice-sort-by').change(function(){rv_getreviewpage(1, $rvj(this).val());});
 }

 function rv_reviews_load()
 {
   if (typeof $rvj == 'undefined')
   {
     rv_reviews_wait();
   }
   else
   {
     rv_reviews_run();
   }
 }

 function rv_reviews_wait()
 {
   if (typeof $rvj == 'undefined')
   {
     window.setTimeout(rv_reviews_wait, 50);
   }
   else
   {
     rv_reviews_run();
   }
 }

 if (window.addEventListener)
 {
   window.addEventListener('load', rv_reviews_load, false);
 }
 else
 {
   window.attachEvent('onload', rv_reviews_load);
 }
 </script>
 </div>


 </div>	</div>
</div>
</div>

</div>
<!--
Developed by: Erin Olson and Mariam Qasim  -->

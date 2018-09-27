<?php
/*
 * Template Name: Template Content
 */
 get_header();
?>


<style media="screen">
.section-space{
  margin-top: 35px;
  text-align: center;
}
.background-detail {
	position: absolute;
	background-color: rgba(0,0,0,0.6);
	height: 10%;
	width: 90%;
	color: white;
	bottom: 8px;
}
img.test{
	width:100%;
	height:auto;
	background-repeat: no-repeat;
	background-position: 50% 50%;
	vertical-align: 6px;
	margin-top: 5%;
}
h4.text-center{
  text-align: center;
  color: white;
}
.text-center{
  animation:text-center 1s ease-in infinite;
}
@keyframes text-center {
      0%{ text-shadow: 0 0 2px white}
      50%{ text-shadow: 0 0 4px #ff6c00}
      100%{ text-shadow: 0 0 6px #ff6c00}
 }


</style>




<div class="container">
  <div class="row section-space">
    <div class="col-md-3 col-xs-6">
      <a href="#"><div>
        <img id="imgBanner" class="test" src="" alt="" />
      </div>

      <div class="background-detail">
        <h4 class="text-center">SAMPLE<h4>
      </div></a>
    </div>
    <div class="col-md-3 col-xs-6">
      <a href="#"><div>
        <img class="test" src="/wp-content/uploads/2018/09/Referral.jpg" alt="" />
      </div>

      <div class="background-detail">
        <h4 class="text-center">SAMPLE<h4>
      </div></a>
    </div>
    <div class="col-md-3 col-xs-6">
      <a href="#"><div>
        <img class="test" src="/wp-content/uploads/2018/09/Referral.jpg" alt="" />
      </div>

      <div class="background-detail">
        <h4 class="text-center">SAMPLE<h4>
      </div></a>
    </div>
    <div class="col-md-3 col-xs-6">
      <a href="#"><div>
        <img class="test" src="/wp-content/uploads/2018/09/Referral.jpg" alt="" />
      </div>

      <div class="background-detail">
        <h4 class="text-center">SAMPLE<h4>
      </div></a>
    </div>
  </div>
</div>


<script type="text/javascript">
            var picPaths = ['/wp-content/uploads/2018/09/Referral2.jpg','/wp-content/uploads/2018/09/Referral.jpg'];
            var curPic = -1;
            //preload the images for smooth animation
            var imgO = new Array();
            for(i=0; i < picPaths.length; i++) {
                imgO[i] = new Image();
                imgO[i].src = picPaths[i];
            }

            function swapImage() {
                curPic = (++curPic > picPaths.length-1)? 0 : curPic;
                imgCont.src = imgO[curPic].src;
                setTimeout(swapImage,1000);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
</script>

<?php get_footer(); ?>

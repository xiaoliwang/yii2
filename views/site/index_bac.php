<div
	style="position: relative; top: 50px; left: 0px; right: 0px; height: 300px;">
	<div class="swiper-container swiper-container-horizontal">
		<div class="swiper-wrapper"
			style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
			<?php foreach ($frontpages as $frontpage):?>
			<div class="swiper-slide" style="background-image: url(/<?=$frontpage->pic?>);">
				<!-- 	<div class="ani" style="position: absolute;bottom:100px;background-color: rgba(0, 0, 0, 0.44);color: #dfdfdf;width: 38%;height: 150px;padding:0px;" swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="0s">
				<p class="ani" style="color:#fff;font-size:40px;line-height:40px;font-weight:600;text-align:right;padding:10px 80px 5px;width:100%;border-bottom:1px solid #fff" swiper-animate-effect="fadeInLeft" swiper-animate-duration="2s" swiper-animate-delay="0.5s"><?=$frontpage->title?></p>
				<p class="ani" style="color:#fff;font-size:14px;line-height:20px;font-weight:400;padding:10px 20px;width:100%" swiper-animate-effect="fadeInLeft" swiper-animate-duration="2s" swiper-animate-delay="1s"><?=$frontpage->summary?></p>
			</div> -->
			</div>
			<?php endforeach;?>
		</div>
	</div>
	<div class="swiper-pagination">
	</div>
</div>
<div class="page-contanier" style="margin-top: 80px; width: 1200px">
	<div style="margin: 0; left: 0; top: 0px; width: 900px;float: left;height: 40px;font-size: 20px;line-height: 40px;">
	东方佳合资讯
	</div>
	<div style="margin: 0;width: 240px;float: left;line-height: 40px;height: 40px;font-size: 20px;margin-left: 60px;">案例分享</div>
	<div style="margin: 0; left: 0; top: 0; width: 900px;">
		<a href="/site/about?type=0">
			<div class="news first">
				<div class="img" style="width: 140px; height: 120px; float: left;">
					<img alt="东方佳合:小而美" src="http://i6.download.fd.pchome.net/t_960x600/g1/M00/04/1D/oYYBAFHjo5iIUZ5rAAWT6vomydwAAAvlQGYgMYABZQC186.jpg" style="width: 112px; height: 112px; margin:4px 14px;">
				</div>
				<div class="title"
					style="width: 700px; margin-left: 10px; font-size: 12px; float: left; line-height: 15px; color: #000; ">东方佳合:小而美</div>
				<div class="intro"
					style="width: 700px; float: left; margin-left: 10px;font-size: 12px; height: 90px; overflow: hidden; color: #999;line-height: 22px;margin-top:10px;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;这是一群经过了海外资本资本市场、国内主板中小板创业板多层次资本市场历练的人。这是一群有情怀、有理想、资深的专业人士。这是一群环抱着共同目标与愿景的人。这是志趣相投、彼此认同的一家人。
				</div>
			</div>
		</a>
		<div style="width: 600px;margin-top: 10px;float: left; margin-bottom: 80px;">
		<?php foreach ($news as $new) :?>
		<a href="/site/article?id=<?= $new->id ?>" style="display: block;color: #999;width: 280px;margin-right: 20px;font-size: 12px; float: left; line-height: 24px;"><?= $new->title?><span style="float: right"><?= date('Y-m-d', $new->date)?></span></a>
		<?php endforeach;?>
		</div>
	</div>
	<div class="swiper-container2" style="margin: 0;width: 260px; position: absolute; right: 0; top: 0;background-color: white;height: 180px;overflow:hidden;margin-top:40px;">
	   
		<div class="swiper-wrapper" style="">
		<?php //for($i=0;$i<4;$i++):?>
		<div class="swiper-slide">
		
			<?php foreach($cases as $case) :?>
				<a href="/site/case?year=2015" class="icon" style="margin-left: 30px;margin-bottom: 10px;float: left;display: block;width: 80px;height: 80px;">
					<img src="/<?=$case->pic?>" alt="" style="width: 80px;height: 80px;" >
				</a>
			<?php endforeach;?>
		</div>
		<?php //endfor;?>
		</div>
	</div>
</div>
<script>
/**
	function changeSlide() {
		if()
		$('.swiper-container .swiper-slide.swiper-slide-active').next().addClass('swiper-slide-active');
		$('.swiper-container .swiper-slide.swiper-slide-visible').next().addClass('swiper-slide-visible');
		$('.swiper-container .swiper-slide.swiper-slide-visible').removeClass('swiper-slide-visible');
		$('.swiper-container .swiper-slide.swiper-slide-active').removeClass('swiper-slide-active');
		
	}**/
    var swiper = new Swiper('.swiper-container', {
    	'loop' : true,
    	'speed':1000,
    	'autoplay' : 3000,
        'pagination': '.swiper-pagination',
        'paginationClickable': true
    });
   // setTimeout('changeSlide()', 3000);
    /*var swiper2 = new Swiper('.swiper-container2', {
    	'loop' : true,
    	'speed':1000,
    	'autoplay' : 2000,
        'mode' : 'vertical'
    });*/
</script>

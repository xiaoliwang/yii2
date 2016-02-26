<style>
.head1 {
	font-size: 20px;
	padding-bottom: 12px;
	font-family: SimSun;
	font-weight: 900;
}
.point {
	width: 6px;
	height: 6px;
	background-color: #999;
	position: relative;
	float: left;
	margin: 9px 10px 0 9px;
}
.small_point {
	width: 4px;
	height: 4px;
	border-radius: 3px;
	background-color: #999;
	position: relative;
	float: left;
	margin: 9px 10px 0 9px;
}
</style>
<div style="position: relative; top: 50px; left: 0px; right: 0px; height: 300px;">
	<div class="slide1">
			<?php $i=0;foreach ($frontpages as $frontpage):?>
			  <div class="fc-slideimage" style="<?php echo $i==0?'':'display: none;'?>background-image: url(/<?=$frontpage->pic?>);">
			<!-- 	<div class="ani" style="position: absolute;bottom:100px;background-color: rgba(0, 0, 0, 0.44);color: #dfdfdf;width: 38%;height: 150px;padding:0px;" swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="0s">
				<p class="ani" style="color:#fff;font-size:40px;line-height:40px;font-weight:600;text-align:right;padding:10px 80px 5px;width:100%;border-bottom:1px solid #fff" swiper-animate-effect="fadeInLeft" swiper-animate-duration="2s" swiper-animate-delay="0.5s"><?=$frontpage->title?></p>
				<p class="ani" style="color:#fff;font-size:14px;line-height:20px;font-weight:400;padding:10px 20px;width:100%" swiper-animate-effect="fadeInLeft" swiper-animate-duration="2s" swiper-animate-delay="1s"><?=$frontpage->summary?></p>
			</div> -->
		    </div>
			<?php $i++;
			endforeach;?>
		<div class="vw-frontpage-slidebtn-container">
			<div class="vw-frontpage-slidebtn fc-slidebtn fc-slidebtn-active"></div>
			<div class="vw-frontpage-slidebtn fc-slidebtn"></div>
			<div class="vw-frontpage-slidebtn fc-slidebtn"></div>
			<div class="vw-frontpage-slidebtn fc-slidebtn"></div>
		</div>
	</div>
</div>
<div class="page-contanier" style="margin-top: 80px; width:80%;max-width:1200px;min-width:900px;">
	<div style="float:left; width:73%; height:220px;">
		<div class="head1">
			<div class="text" style="width: 100%;"><span class="point"></span>正晖资讯</div>
		</div>
		<img src="/headerimg/28.jpg" 
				style="height:100px;width:100px;float:left;border:2px solid #fff; box-shadow:0 0 20px #bbb;"/>
			<div style="position:relative;">
			<div style="position:absolute;margin-left:114px;top:0px;">
				<div class="title"
					style="width: 100%; margin-left: 10px; float: left;">
					<a href="/site/about?type=0" style="color:#000; font-size: 12px; line-height: 15px;">正晖资本:小而美</a>
				</div>
				
				<div class="intro"
					style="width: 100%; float: left; margin-left: 10px; height: 90px; overflow: hidden; margin-top:10px;">
					<a href="/site/about?type=0" style="color: #999;line-height: 22px; font-size: 12px;">
						&nbsp;&nbsp;&nbsp;&nbsp;这是一群经过了海外资本资本市场、国内主板中小板创业板多层次资本市场历练的人。这是一群有情怀、有理想、资深的专业人士。这是一群环抱着共同目标与愿景的人。这是志趣相投、彼此认同的一家人。
					</a>
				</div>
			</div>
			</a>
		</div>
		<div style="width: 100%;margin-top: 10px;float: left; margin-bottom: 80px;">
		<?php foreach ($news as $new) :?>
		<a href="/site/article?id=<?= $new->id ?>" style="display: block;color: #999;width: 50%;padding-right: 20px;box-sizing:border-box;font-size: 12px; float: left; line-height: 24px;">
			<span class="small_point"></span><?= $new->title?><span style="float: right"><?= date('Y-m-d', $new->date)?></span>
		</a>
		<?php endforeach;?>
		</div>
	</div>
	<div style="float:right; width:220px; height:220px;position:relative;">
		<div class="head1"><div class="text" style="width: 200px;"><span class="point"></span>案例分析</div></div>

		<div class="swiper-container2" style="margin: 0;width: 100%; position: absolute; right: 0; top: 0;background-color: white;height: 180px;overflow:hidden;margin-top:40px;">
	   
		<div class="swiper-wrapper" style="">
		<?php //for($i=0;$i<4;$i++):?>
		<div class="swiper-slide">
		
			<?php foreach($cases as $case) :?>
				<a href="/site/case?year=2015" class="icon" style="margin-right: 30px;margin-bottom: 10px;float: left;display: block;width: 80px;height: 80px;">
					<img src="/<?=$case->pic?>" alt="" style="width: 80px;height: 80px;" >
				</a>
			<?php endforeach;?>
		</div>
		<?php //endfor;?>
		</div>
	</div>
	</div>
</div>


<script>
var $movePointOutClass = $('.slide1 .fc-slidebtn'),
$movePicClass = $('.slide1 .fc-slideimage'),
interValFlag = false,
moveNo = 0,
moveTime = 1000,
$movePicATags = $('.slide1 .fc-slideimage a');

function startMove() {
interValFlag = setInterval(function() {
	if(moveNo != ($movePointOutClass.length - 1)) {
		moveNo ++;
	} else {
		moveNo = 0;
	}
	$movePointOutClass.eq(moveNo).click();
}, 5000);
}

$movePointOutClass.click(function() {
moveNo = $(this).index();
$movePointOutClass.removeClass('fc-slidebtn-active');
$(this).addClass('fc-slidebtn-active');

$movePicClass.fadeOut(moveTime);
$movePicClass.eq(moveNo).fadeIn(moveTime);

if(interValFlag) {
	clearInterval(interValFlag);
	startMove();
}
});
startMove();
</script>
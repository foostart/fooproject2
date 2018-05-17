<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1278">
	<div class="container">
		<div class="row">

			<div class="col-md-12 Giua">
				<ul class="nav nav-tabs">
					<li><a class="active" href="#all" data-toggle="tab"  >Tất Cả</a></li>
					<li><a  href="#menu1" data-toggle="tab" class="M1" >Món Ăn 1</a></li>
					<li><a href="#menu2" data-toggle="tab" >Món Ăn 2</a></li>
					<li><a  href="#menu3" data-toggle="tab" >Món Ăn 3</a></li>
				</ul>   
			</div>
			<div class="tab-content">
			<div id="all" class="tab-pane active">
				<div class="col-md-3 col-sm-4 col-xs-12 box">
					<img src="<?php echo $url_path ?>/images/hinh1.jpg" alt="hinh1">
					<div class="content">
						<p>Home Chef</p>
						<div class="list">
							<a>bio</a>
							<a>Grouret</a>
							<a>Healthy</a>
							<a>organic</a>
							<a>salad</a>
						</div>
						<h4>Almond Cookies Breakfast</h4>
						<p class="Gia"><i class="fa fa-gbp"></i>5.00</p>
						<button class="add">Mua</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 box">
					<img src="<?php echo $url_path ?>/images/hinh2.jpg" alt="hinh1">
					<div class="content">
						<p>Home Chef</p>
						<div class="list">
							<a>bio</a>
							<a>Grouret</a>
							<a>Healthy</a>
							<a>organic</a>
							<a>salad</a>
						</div>
						<h4>Almond Cookies Breakfast</h4>
						<p class="Gia"><i class="fa fa-gbp"></i>5.00</p>
						<button class="add">Mua</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 box">
					<img src="<?php echo $url_path ?>/images/hinh2.jpg" alt="hinh1">
					<div class="content">
						<p>Home Chef</p>
						<div class="list">
							<a>bio</a>
							<a>Grouret</a>
							<a>Healthy</a>
							<a>organic</a>
							<a>salad</a>
						</div>
						<h4>Almond Cookies Breakfast</h4>
						<p class="Gia"><i class="fa fa-gbp"></i>5.00</p>
						<button class="add">Mua</button>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4 col-xs-12 box">
					<img src="<?php echo $url_path ?>/images/hinh1.jpg" alt="hinh1">
					<div class="content">
						<p>Home Chef</p>
						<div class="list">
							<a>bio</a>
							<a>Grouret</a>
							<a>Healthy</a>
							<a>organic</a>
							<a>salad</a>
						</div>
						<h4>Almond Cookies Breakfast</h4>
						<p class="Gia"><i class="fa fa-gbp"></i>5.00</p>
						<button class="add">Mua</button>
					</div>
				</div>

			</div>
			<!--================-->
			
		
				<div id="menu1" class="tab-pane">
					<div class="col-md-3 col-sm-4 col-xs-12 box">
						<img src="<?php echo $url_path ?>/images/hinh1.jpg" alt="hinh1">
						<div class="content">
							<p>Home Chef</p>
							<div class="list">
								<a>bio</a>
								<a>Grouret</a>
								<a>Healthy</a>
								<a>organic</a>
								<a>salad</a>
							</div>
							<h4>Almond Cookies Breakfast</h4>
							<p class="Gia"><i class="fa fa-gbp"></i>5.00</p>
							<button class="add">Mua</button>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 box">
						<img src="<?php echo $url_path ?>/images/hinh1.jpg" alt="hinh1">
						<div class="content">
							<p>Home Chef</p>
							<div class="list">
								<a>bio</a>
								<a>Grouret</a>
								<a>Healthy</a>
								<a>organic</a>
								<a>salad</a>
							</div>
							<h4>Almond Cookies Breakfast</h4>
							<p class="Gia"><i class="fa fa-gbp"></i>5.00</p>
							<button class="add">Mua</button>
						</div>
					</div>
				</div>
				<div id="menu2" class="tab-pane">
					<div class="col-md-3 col-sm-4 col-xs-12 box">
						<img src="<?php echo $url_path ?>/images/hinh1.jpg" alt="hinh1">
						<div class="content">
							<p>Home Chef</p>
							<div class="list">
								<a>bio</a>
								<a>Grouret</a>
								<a>Healthy</a>
								<a>organic</a>
								<a>salad</a>
							</div>
							<h4>Almond Cookies Breakfast</h4>
							<p class="Gia"><i class="fa fa-gbp"></i>5.00</p>
							<button class="add">Mua</button>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-4 col-xs-12 box">
						<img src="<?php echo $url_path ?>/images/hinh1.jpg" alt="hinh1">
						<div class="content">
							<p>Home Chef</p>
							<div class="list">
								<a>bio</a>
								<a>Grouret</a>
								<a>Healthy</a>
								<a>organic</a>
								<a>salad</a>
							</div>
							<h4>Almond Cookies Breakfast</h4>
							<p class="Gia"><i class="fa fa-gbp"></i>5.00</p>
							<button class="add">Mua</button>
						</div>
					</div>
				</div>
				<div id="menu3" class="tab-pane">
					<div class="col-md-3 col-sm-4 col-xs-12 box">
						<img src="<?php echo $url_path ?>/images/hinh1.jpg" alt="hinh1">
						<div class="content">
							<p>Home Chef</p>
							<div class="list">
								<a>bio</a>
								<a>Grouret</a>
								<a>Healthy</a>
								<a>organic</a>
								<a>salad</a>
							</div>
							<h4>Almond Cookies Breakfast</h4>
							<p class="Gia"><i class="fa fa-gbp"></i>5.00</p>
							<button class="add">Mua</button>
						</div>
					</div>
				</div>
				</div>

		</div>
	</div>
</div>
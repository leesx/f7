<?php include 'header.php'?>
     <div id="page-infinite-scroll" class="page">
	  <header class="bar bar-nav">
	    <a class="button button-link button-nav pull-left back" href="index.php">
	      <span class="icon icon-left"></span>
	      返回
	    </a>
	    <h1 class="title">无线加载</h1>
	  </header>
	  <div class="content infinite-scroll" data-distance="100">
	    <div class="list-block">
	      <ul class="list-container" id="imgsOuter">
	        
	      </ul>
	    </div>
	    <!-- 加载提示符 -->
	    <div class="infinite-scroll-preloader">
	      <div class="preloader">
	      </div>
	    </div>
	  </div>
	</div>
<?php include 'footer.php'?>
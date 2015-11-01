<?php include 'header.php'?>

    <div id="page-tab" class="page">
  <header class="bar bar-nav">
    <a class="button button-link button-nav pull-left back" href="index.php">
      <span class="icon icon-left"></span>
      返回
    </a>
    <h1 class="title">标签页</h1>
  </header>
  <div class="bar bar-standard bar-footer">
    <a class="icon icon-edit pull-left"></a>
    <a class="icon icon-settings pull-right"></a>
  </div>
  <div class="content">
    <div class="buttons-tab">
      <a href="#tab1" class="tab-link active button">全部</a>
      <a href="#tab2" class="tab-link button">待付款</a>
      <a href="#tab3" class="tab-link button">待发货</a>
    </div>

    <div class="tabs">
      <div id="tab1" class="tab active">
        <div class="content-block">
          <div class="buttons-row">
            <a href="#tab1-1" class="tab-link active button">风景</a>
            <a href="#tab1-2" class="tab-link button">宠物</a>
            <a href="#tab1-3" class="tab-link button">美女</a>
          </div>
          <div class="tabs">
            <div class='tab active' id='tab1-1'>
            	<div class="pic-box">
            		<img src="http://img0.imgtn.bdimg.com/it/u=3935619990,238297722&fm=21&gp=0.jpg">
            	</div>
            </div>
            <div class='tab' id='tab1-2'>
            	<div class="pic-box">
            		<img src="http://img3.imgtn.bdimg.com/it/u=1924893621,661118346&fm=21&gp=0.jpg">
            	</div>
            </div>
            <div class='tab' id='tab1-3'>
            	<div class="pic-box">
            		<img src="http://img0.imgtn.bdimg.com/it/u=54540221,3535980889&fm=23&gp=0.jpg">
            	</div>
            </div>
          </div>
        </div>
      </div>
      <div id="tab2" class="tab">
        <div class="content-block">
          <div class="buttons-row">
            <a href="#tab2-1" class="tab-link active button">风景</a>
            <a href="#tab2-2" class="tab-link button">宠物</a>
          </div>
          <div class="tabs">
            <div class='tab active' id='tab2-1'>
            	<div class="pic-box">
            		<img src="http://img0.imgtn.bdimg.com/it/u=3935619990,238297722&fm=21&gp=0.jpg">
            	</div>
            </div>
            <div class='tab' id='tab2-2'>
            	<div class="pic-box">
            		<img src="http://img3.imgtn.bdimg.com/it/u=1924893621,661118346&fm=21&gp=0.jpg">
            	</div>
            </div>
          </div>
        </div>
      </div>
      <div id="tab3" class="tab">
        <div class="content-block">
          <p>This is tab 3 content</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'?>
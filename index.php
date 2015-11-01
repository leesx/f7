<?php include 'header.php'?>
  <div class="page">
    <header class="bar bar-nav">
        <a class="icon icon-me pull-left open-panel"></a>
        <a class="button button-link button-nav pull-right open-popup" data-popup=".popup-about">
          关于
          <span class="icon icon-menu"></span>
        </a>
        <h1 class="title">图灵盗工作室</h1>
      </header>

    <nav class="bar bar-tab">
      <a class="tab-item active" href="#">
        <span class="icon icon-home"></span>
        <span class="tab-label">首页</span>
      </a>
      <a class="tab-item" href="#">
        <span class="icon icon-me"></span>
        <span class="tab-label">我</span>
      </a>
      <a class="tab-item" href="#">
        <span class="icon icon-star"></span>
        <span class="tab-label">收藏</span>
      </a>
      <a class="tab-item" href="#">
        <span class="icon icon-settings"></span>
        <span class="tab-label">设置</span>
      </a>
    </nav>
    <!-- 这里是页面内容区 -->
    <div class="content" id='page-index'>
    <div class="content-inner">
    <!-- 轮播图begin -->
     <div class="swiper-container index-slide" data-space-between='10' data-pagination=".swiper-pagination">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="img/pic01.jpg" alt="" style='width: 100%'></div>
        <div class="swiper-slide"><img src="img/pic02.jpg" alt="" style='width: 100%'></div>
        <div class="swiper-slide"><img src="img/pic03.jpg" alt="" style='width: 100%'></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- 轮播图end -->
    <div class="cat-items">
       <div class="inner">
          <a>
            <span class="icon icon1"></span>
            <p>天猫</p>
          </a>
          <a>
            <span class="icon icon2"></span>
            <p>聚划算</p>
          </a>
          <a>
            <span class="icon icon3"></span>
            <p>淘生活</p>
          </a>
          <a>
            <span class="icon icon4"></span>
            <p>淘点点</p>
          </a>
       </div>
      <div class="inner">
          <a>
            <span class="icon icon5"></span>
            <p>充值</p>
          </a>
          <a>
            <span class="icon icon6"></span>
            <p>阿里旅行</p>
          </a>
          <a>
            <span class="icon icon7"></span>
            <p>领金币</p>
          </a>
          <a>
            <span class="icon icon8"></span>
            <p>分类</p>
          </a>
      </div>
    </div>
      <div class="content-block-title">示例</div>
      <div class="list-block">
        <ul>
          <li>
            <a href="/demos/bar" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">标题栏和工具栏</div>
              </div>
            </a>
          </li>
          <li>
            <a href="news-list.php" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">新闻列表</div>
              </div>
            </a>
          </li>
          <li>
            <a href="form.php" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">表单</div>
              </div>
            </a>
          </li>
          <li>
            <a href="search.php" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">搜索栏</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/list" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">列表</div>
              </div>
            </a>
          </li>
          <li>
            <a href="tab.php" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">标签页</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/card" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">卡片</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/grid" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">栅格</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/modal" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">对话框</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/preloader" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">加载提示</div>
              </div>
            </a>
          </li>
          <li>
            <a href="actions.php" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">操作表</div>
              </div>
            </a>
          </li>
          <li>
            <a href="calendar.php" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">日历</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/picker" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">picker</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/datetime-picker" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">日期时间选择器</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/city-picker" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">省市区选择器</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/swiper" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">幻灯片</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/photo-browser" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">图片浏览器</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/pull-to-refresh" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">下拉刷新</div>
              </div>
            </a>
          </li>
          <li>
            <a href="infinite-scroll.php" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">无限滚动</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/router" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">路由器</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/icons" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">图标</div>
              </div>
            </a>
          </li>
          <li>
            <a href="/demos/colors" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">颜色主题</div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
  </div>
  <!-- 由下到上的弹出层 -->
  <div class="popup popup-about">
    <header class="bar bar-nav">
      <a class="button button-link button-nav pull-right close-popup">
        关闭
      </a>
      <h1 class="title">关于图灵盗</h1>
    </header>
    <div class="content">
      <div class="content-inner">
        <div class="content-block">
          <p>图灵盗命名的来源于科学家图灵的大名</p>
          <p>以及著名的那句话：优秀的设计师剽窃，大师摹意</p>
          <p>我们的目的是为传播正能量。</p>
          <p>TuringDo Studio</p>
          <p>站在人文和科技的交叉点</p>
          <p>我的QQ：1058315063</p>
          <p>或者电话：15515723453</p>
          <p></p>
          <p><a class="button close-popup">确定</a></p>
        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php'?>
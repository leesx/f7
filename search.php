<?php include 'header.php'?>
<div id="page-searchbar" class="page">
  <header class="bar bar-nav">
    <a class="button button-link button-nav pull-left back" href="index.php">
      <span class="icon icon-left"></span>
      返回
    </a>
    <h1 class="title">搜索栏</h1>
  </header>
  <div class="bar bar-header-secondary">
    <div class="searchbar row">
        <div class="search-input">
          <label class="icon icon-search" for="search"></label>
          <input type="search" id='search' placeholder='输入关键字...'/>
        </div>
      </div>
  </div>
  <div class="content" id=''>
    <div class="content-padded">
      <ul id='search-list'></ul>
    </div>
  </div>
</div>
<?php include 'footer.php'?>
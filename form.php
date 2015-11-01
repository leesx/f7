<?php include 'header.php'?>
<div id="page-label-input" class="page">
  <header class="bar bar-nav">
    <a class="button button-link button-nav pull-left back" href="index.php">
      <span class="icon icon-left"></span>
      返回
    </a>
    <h1 class="title">个人信息</h1>
  </header>
  <div class="content">
    <div class="list-block">
      <ul>
        <!-- Text inputs -->
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">姓名：</div>
              <div class="item-input">
                <input type="text" placeholder="请填写您的姓名">
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">邮箱：</div>
              <div class="item-input">
                <input type="email" placeholder="您的邮箱">
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">密码：</div>
              <div class="item-input">
                <input type="password" placeholder="密码" class="">
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">性别：</div>
              <div class="item-input">
                <select>
                  <option>男</option>
                  <option>女</option>
                </select>
              </div>
            </div>
          </div>
        </li>
        <!-- Date -->
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">生日：</div>
              <div class="item-input">
                <input type="date" placeholder="请填写您的生日" value="2014-04-30">
              </div>
            </div>
          </div>
        </li>
        <!-- Switch (Checkbox) -->
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">是否显示生日：</div>
              <div class="item-input">
                <label class="label-switch">
                  <input type="checkbox">
                  <div class="checkbox"></div>
                </label>
              </div>
            </div>
          </div>
        </li>
        <li class="align-top">
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">备注：</div>
              <div class="item-input">
                <textarea placeholder="如有其他，请填写"></textarea>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="content-block">
      <div class="row">
        <div class="col-50"><a href="#" class="button button-big button-fill button-danger">取消</a></div>
        <div class="col-50"><a href="#" class="button button-big button-fill button-success">提交</a></div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'?>
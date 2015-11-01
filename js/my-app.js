$(function () {
  'use strict';

  //下拉刷新页面
  $(document).on("pageInit", "#page-ptr", function(e, id, page) {
    var $content = $(page).find(".content").on('refresh', function(e) {
      // 模拟2s的加载过程
      setTimeout(function() {
        var cardHTML = '<div class="card">' +
          '<div class="card-header">标题</div>' +
          '<div class="card-content">' +
          '<div class="card-content-inner">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容' +
          '</div>' +
          '</div>' +
          '</div>';

        $content.find('.card-container').prepend(cardHTML);
        // 加载完毕需要重置
        $.pullToRefreshDone($content);
      }, 2000);
    });
  });

  //无线滚动
  $(document).on("pageInit", "#page-infinite-scroll", function(e, id, page) {
    
    var loading = false;
    
    var cur = 1;
    //初始化第一组图片
    loadImg(1);
    function loadImg(cur,scroll){
        var temp = '';
        $.getJSON('js/img'+cur+'.json',function(data){
        var imgs = data.imgs;
            $.each(imgs,function(item){
                temp +='<li><img src="'+this.imgUrl+'"/><div>'+this.desc+'</div></li>';
            });
            $('#imgsOuter').append(temp);
            if(scroll){
                loading = false;
                $.refreshScroller();
                if(cur==3){
                    $('.infinite-scroll-preloader').hide().after('没有了'); 
                } 
            }
        });
    }
    
    //向下加载
    $(page).on('infinite', function() {
      // 如果正在加载，则退出
      if (loading) return;
      if(cur==3){
        loading = false; 
        return;
       }
      // 设置flag
      loading = true;
      cur+=1;
      loadImg(cur,true)
    });
  });


  //图片浏览器
  $(document).on("pageInit", "#page-photo-browser", function(e, id, page) {
    var myPhotoBrowserStandalone = $.photoBrowser({
      photos : [
        '//img.alicdn.com/tps/i3/TB1kt4wHVXXXXb_XVXX0HY8HXXX-1024-1024.jpeg',
        '//img.alicdn.com/tps/i1/TB1SKhUHVXXXXb7XXXX0HY8HXXX-1024-1024.jpeg',
        '//img.alicdn.com/tps/i4/TB1AdxNHVXXXXasXpXX0HY8HXXX-1024-1024.jpeg',
      ]
    });
    //点击时打开图片浏览器
    $(page).on('click','.pb-standalone',function () {
      myPhotoBrowserStandalone.open();
    });
    /*=== Popup ===*/
    var myPhotoBrowserPopup = $.photoBrowser({
      photos : [
        '//img.alicdn.com/tps/i3/TB1kt4wHVXXXXb_XVXX0HY8HXXX-1024-1024.jpeg',
        '//img.alicdn.com/tps/i1/TB1SKhUHVXXXXb7XXXX0HY8HXXX-1024-1024.jpeg',
        '//img.alicdn.com/tps/i4/TB1AdxNHVXXXXasXpXX0HY8HXXX-1024-1024.jpeg',
      ],
      type: 'popup'
    });
    $(page).on('click','.pb-popup',function () {
      myPhotoBrowserPopup.open();
    });
    /*=== 有标题 ===*/
    var myPhotoBrowserCaptions = $.photoBrowser({
      photos : [
        {
          url: '//img.alicdn.com/tps/i3/TB1kt4wHVXXXXb_XVXX0HY8HXXX-1024-1024.jpeg',
          caption: 'Caption 1 Text'
        },
        {
          url: '//img.alicdn.com/tps/i1/TB1SKhUHVXXXXb7XXXX0HY8HXXX-1024-1024.jpeg',
          caption: 'Second Caption Text'
        },
        // 这个没有标题
        {
          url: '//img.alicdn.com/tps/i4/TB1AdxNHVXXXXasXpXX0HY8HXXX-1024-1024.jpeg',
        },
      ],
      theme: 'dark',
      type: 'standalone'
    });
    $(page).on('click','.pb-standalone-captions',function () {
      myPhotoBrowserCaptions.open();
    });
  });
  

  //对话框
  $(document).on("pageInit", "#page-modal", function(e, id, page) {
    var $content = $(page).find('.content');
    $content.on('click','.alert-text',function () {
      $.alert('这是一段提示消息');
    });

    $content.on('click','.alert-text-title', function () {
      $.alert('这是一段提示消息', '这是自定义的标题!');
    });

    $content.on('click', '.alert-text-title-callback',function () {
      $.alert('这是自定义的文案', '这是自定义的标题!', function () {
        $.alert('你点击了确定按钮!')
      });
    });
    $content.on('click','.confirm-ok', function () {
      $.confirm('你确定吗?', function () {
        $.alert('你点击了确定按钮!');
      });
    });
    $content.on('click','.prompt-ok', function () {
      $.prompt('你叫什么问题?', function (value) {
        $.alert('你输入的名字是"' + value + '"');
      });
    });
  });

  //操作表
  $(document).on("pageInit", "#page-action", function(e, id, page) {
    $(page).on('click','.create-actions', function () {
      var buttons1 = [
        {
          text: '请选择',
          label: true
        },
        {
          text: '卖出',
          bold: true,
          color: 'danger',
          onClick: function() {
            $.alert("你选择了“卖出“");
          }
        },
        {
          text: '买入',
          onClick: function() {
            $.alert("你选择了“买入“");
          }
        }
      ];
      var buttons2 = [
        {
          text: '取消',
          bg: 'danger'
        }
      ];
      var groups = [buttons1, buttons2];
      $.actions(groups);
    }); 
  });

  //加载提示符
  $(document).on("pageInit", "#page-preloader", function(e, id, page) {
    $(page).on('click','.open-preloader-title', function () {
      $.showPreloader('加载中...')
      setTimeout(function () {
        $.hidePreloader();
      }, 2000);
    });
    $(page).on('click','.open-indicator', function () {
      $.showIndicator();
      setTimeout(function () {
        $.hideIndicator();
      }, 2000);
    });
  });


  //选择颜色主题
  $(document).on("click", ".select-color", function(e) {
    var b = $(e.target);
    document.body.className = "theme-" + (b.data("color") || "");
    b.parent().find(".active").removeClass("active");
    b.addClass("active");
  });

  //picker
  $(document).on("pageInit", "#page-picker", function(e, id, page) {
    $("#picker").picker({
      toolbarTemplate: '<header class="bar bar-nav">\
        <button class="button button-link pull-left">\
      按钮\
      </button>\
      <button class="button button-link pull-right close-picker">\
      确定\
      </button>\
      <h1 class="title">标题</h1>\
      </header>',
      cols: [
        {
          textAlign: 'center',
          values: ['iPhone 4', 'iPhone 4S', 'iPhone 5', 'iPhone 5S', 'iPhone 6', 'iPhone 6 Plus', 'iPad 2', 'iPad Retina', 'iPad Air', 'iPad mini', 'iPad mini 2', 'iPad mini 3']
        }
      ]
    });
    $("#picker-name").picker({
      toolbarTemplate: '<header class="bar bar-nav">\
      <button class="button button-link pull-right close-picker">确定</button>\
      <h1 class="title">请选择称呼</h1>\
      </header>',
      cols: [
        {
          textAlign: 'center',
          values: ['赵', '钱', '孙', '李', '周', '吴', '郑', '王']
        },
        {
          textAlign: 'center',
          values: ['杰伦', '磊', '明', '小鹏', '燕姿', '菲菲', 'Baby']
        },
        {
          textAlign: 'center',
          values: ['先生', '小姐']
        }
      ]
    });
  });
  $(document).on("pageInit", "#page-datetime-picker", function(e) {
    $("#datetime-picker").datetimePicker({
      toolbarTemplate: '<header class="bar bar-nav">\
      <button class="button button-link pull-right close-picker">确定</button>\
      <h1 class="title">选择日期和时间</h1>\
      </header>'
    });
  });

  $(document).on("pageInit", "#page-city-picker", function(e) {
    $("#city-picker").cityPicker({});
  });

  //搜索框加载
  $(document).on('pageInit','#page-searchbar',function(e){
    var $search = $('#search');
    
    $search.on('input onPropertyChange',function(){
        var val = $('#search').val();
        if(!val) return;
        $.ajax({
          type: 'GET',
          url: 'http://suggestion.baidu.com/su',
          data:{wd: val},
          dataType: 'jsonp',
          jsonp:'cb',//回调函数的键的名称
          success: function(data){
            var s = data.s;
            var frg = document.createDocumentFragment();
            var $outer = document.querySelector('#search-list');
            $outer.innerHTML = '';
            for(var i=0,len=s.length;i<len;i++){
                var li = document.createElement('li');
                li.innerHTML = s[i];
                frg.appendChild(li);
            }
            $outer.appendChild(frg);
            $(document).on('click','li',function(){
                var txt = $(this).text();
                $search.val(txt);
                location.href = 'https://www.baidu.com/s?word='+txt;
            })
          },
          error: function(xhr, type){
            $.toast("操作失败");
          }
        })
    });
    

  });
  //
    $(document).on('pageInit','#page-newslist',function(e){
        $.ajax({
            type: 'GET',
            url: 'js/news.json',
            dataType: 'json',
            success: function(d){
                d = d.data;
                var temp = '';
                $.each(d.list,function(){
                    temp+='<div class="item"><img src="'+this.m_image_url+'"><h4>'+this.m_title+'</h4></div>';
                });
                $('#news-list').append(temp);
            },
            error: function(xhr, type){
                $.toast("操作失败");
            }
        })


    });

  $.init();
});

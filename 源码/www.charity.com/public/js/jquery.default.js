/// <reference path="jquery-2.1.4.min.js" />
(function () {
    $(function () {

        // 主要对安卓微信内置浏览器做兼容
        function fnFitAndroidLayout() {
            var dynamicLoading = {
                css: function (path) {
                    if (!path || path.length === 0) {
                        throw new Error('argument "path" is required !');
                    }
                    var head = document.getElementsByTagName('head')[0];
                    var link = document.createElement('link');
                    link.href = path;
                    link.rel = 'stylesheet';
                    link.type = 'text/css';
                    head.appendChild(link);
                },
                js: function (path) {
                    if (!path || path.length === 0) {
                        throw new Error('argument "path" is required !');
                    }
                    var head = document.getElementsByTagName('head')[0];
                    var script = document.createElement('script');
                    script.src = path;
                    script.type = 'text/javascript';
                    head.appendChild(script);
                }
            }

        }
        //规格切换
        $(".spec-list .type").click(function () {
            var cur = $(".spec-list .cur");
            var img = $(".spec-list .cur img");
            cur.removeClass("cur");
            img.addClass("hide");
            $(this).addClass("cur");
            $(this).children("img").removeClass("hide");
            cur = $(this);
            $(".number").val("1");
            $(".subtract").css("background-color", "#d7d7d7");


        });
    });
	
//购物车加减
  $(function(){
    $(".add").click(function(){
      var t=$(this).parent().find('input[class*=text_box]');
      t.val(parseInt(t.val())+1);
      setTotal();
    })
    $(".min").click(function(){
      var t=$(this).parent().find('input[class*=text_box]');
      t.val(parseInt(t.val())-1)
      if(parseInt(t.val())<1){
        t.val(1);
        alert("请至少选择一份");
      }
      setTotal();
    })
    function setTotal(){
      var s=0;
      $(".table_counter").each(function(){
        s+=parseInt($(this).find('input[class*=text_box]').val())
                *parseFloat($(".number_box").find('span[class*=price]').text());
      });
      $(".total").html(s.toFixed(2));
    }
    setTotal();
  })

})();
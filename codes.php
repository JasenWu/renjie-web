<?php include 'layout/header.php';?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">移动端浏览器事件封装</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <pre class="brush: js;">

 
var touchFunc = function(obj,type,func) {
    //滑动范围在5x5内则做点击处理，s是开始，e是结束
    var init = {x:5,y:5,sx:0,sy:0,ex:0,ey:0};
    var sTime = 0, eTime = 0;
    var obj =document.getElementById(obj);
    type = type.toLowerCase();

    obj.addEventListener("touchstart",function(){
        sTime = new Date().getTime();
        init.sx = event.targetTouches[0].pageX;
        init.sy = event.targetTouches[0].pageY;
        init.ex = init.sx;
        init.ey = init.sy;
        if(type.indexOf("start") != -1) func();
    }, false);

    obj.addEventListener("touchmove",function() {
        event.preventDefault();//阻止触摸时浏览器的缩放、滚动条滚动
        init.ex = event.targetTouches[0].pageX;
        init.ey = event.targetTouches[0].pageY;
        if(type.indexOf("move")!=-1) func();
    }, false);

    obj.addEventListener("touchend",function() {
        var changeX = init.sx - init.ex;
        var changeY = init.sy - init.ey;
        if(Math.abs(changeX)>Math.abs(changeY)&&Math.abs(changeY)>init.y) {
            //左右事件
            if(changeX > 0) {
                if(type.indexOf("left")!=-1) func();
            }else{
                if(type.indexOf("right")!=-1) func();
            }
        }
        else if(Math.abs(changeY)>Math.abs(changeX)&&Math.abs(changeX)>init.x){
            //上下事件
            if(changeY > 0) {
                if(type.indexOf("top")!=-1) func();
            }else{
                if(type.indexOf("down")!=-1) func();
            }
        }
        else if(Math.abs(changeX)<init.x && Math.abs(changeY)<init.y){
            eTime = new Date().getTime();
            //点击事件，此处根据时间差细分下
            if((eTime - sTime) > 300) {
                if(type.indexOf("long")!=-1) func(); //长按
            }
            else {
                if(type.indexOf("click")!=-1) func(); //当点击处理
            }
        }
        if(type.indexOf("end")!=-1) func();
    }, false);
};
function test(){ alert('test')}

//调用方法
 touchFunc('test','end',test)
       </pre>
                官方网址：http://www.jq22.com/yanshi33
                <br>
                本地下载：
                <a href='plug-folder/jquery.snippet.2.0.0.rar'>jquery.snippet.2.0.0.rar</a>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <pre class="brush: js;">
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>倒计时</title>
    <style>
    html,body,div{
        margin: 0;
        padding: 0;
    }
    #nowTime,#countDownTime{
        margin: 10px auto;
        width: 900px;
        height: 60px;
        background: #f0f000;
        font-size: 28px;
        line-height: 60px;
        text-align: center;
    }

    </style>
</head>
<body>

<div id="nowTime">现在的时间是： </div>
<div id="countDownTime">倒计时：</div>

<script>
    var countDownTime = document.getElementById('countDownTime');

    function zero(value){
        return value<10 ? "0"+value : value; 
    }
    function countDown(){
        var curTime = new Date();
        // 把时间格式的字符变成标准的时间格式，对字符串的格式有要求是中间用“-”在IE6-IE8下不兼容，需要改成“/”
        var tarTime = new Date("2015/8/3 22:00:00");//转换为标准日期格式
        var spanCurTime = curTime.getTime(); //当前时间距离格林威治时间毫秒
        var spanTarTime = tarTime.getTime(); //目标时间距离格林威治时间毫秒
        var different = spanTarTime-spanCurTime;  //计算时间差
        var hours = Math.floor(different/1000/60/60);
        var difMinute = different-hours*1000*60*60;
        var minutes = Math.floor(difMinute/1000/60);
        var difSecond = difMinute-minutes*1000*60;
        var seconds = Math.floor(difSecond/1000);
        return zero(hours)+":"+zero(minutes)+":"+zero(seconds);
    }
    countDownTime.innerHTML += countDown();

     var timer1 = window.setInterval(function(){
        //countDown();
        countDownTime.innerHTML = "倒计时：" + countDown();
    },1000);


    /*
     *下面是Date日期应用常用的函数
     */
    var nowTime = document.getElementById('nowTime');
    function foamatDate(){
        var curTime = new Date(); //Thu Jul 30 2015 10:59:47 GMT+0800 (中国标准时间)
        var year = curTime.getFullYear();
        var month = curTime.getMonth()+1; //0-11
        var day = curTime.getDate();
        var weekStr = "日一二三四五六";
        var week = weekStr.charAt(curTime.getDay());//0-6 周日-周六
        var hours = curTime.getHours();
        var minutes = curTime.getMinutes();
        var seconds = curTime.getSeconds();
        var milliSeconds = curTime.getMilliseconds();
        return year+"年"+zero(month)+"月"+zero(day)+"日 周"+week+" "+zero(hours)+"点"+zero(minutes)+"分"+zero(seconds)+"秒"+milliSeconds+"毫秒";
    }
    nowTime.innerHTML += foamatDate();
    var timer2 = window.setInterval(function(){
        nowTime.innerHTML ="现在的时间是： " + foamatDate();
    },1000);

</script>
</body>
</html>
                                   
                               </pre>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">前端工具整理</a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
            <pre class="brush: js;">
【代码的规范】 http://www.css88.com/doc/codeguide/

【Viewport Sizes尺寸查询】  http://viewportsizes.com/?filter=

【在线小工具】  http://www.xueui.cn/design/online-tools

【px,em,rem单位转换工具】  http://pxtoem.com/

【json格式化】  http://jsonlint.com/

【在线工具】 - aTool    http://www.atool.org/

【WebStorm】  http://my.oschina.net/maomi/blog/137807

【Emmet快捷方式查询】  http://emmet.evget.com/

【CSS优化】  http://www.css88.com/tool/csstidy/

【CSS 速查表】  http://code.ciaoca.com/style/css-cheat-sheet/

【jQuery 查询 】  http://oscarotero.com/jquery/

【jQuery源代码查看工具】  http://www.css88.com/tool/jQuerySourceViewer/#v=1.7.2&fn=jQuery.find

【IcoMoon App - 字体图标】  https://icomoon.io/app/#/select

【Iconfont - 阿里巴巴矢量图标库】 http://www.iconfont.cn/

【字体图标】Font Awesome Icons  http://fontawesome.io/icons/

【正则表达式】  http://www.w3cfuns.com/tools.php?mod=regex

Testing【检测css错误】  http://meyerweb.com/eric/tools/css/diagnostics/demo-not.html

【二维码生成器】  http://cli.im/

【CSS - 中文字体—> 编码表】 http://code.ciaoca.com/style/cssfont2unicode/

【PNG压缩】  http://www.atool.org/pngcompression.php

【SEO检测】  http://nibbler.silktide.com/en_US/progress/www.uiessays.com           
    </pre>
</div>
        </div>
    </div>

    <?php include 'layout/footer.php';?>
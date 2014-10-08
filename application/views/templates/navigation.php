<div class="inners" >
  <nav class="navbar" role="navigation">
    <div class="navbar-header">
      <a href = "<?php echo site_url() ?>"><img src = "<?php echo base_url("/include/images/head-logo.png") ?>" style = "float:left;width:180px;height:45px;"></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        导航<span class="sr-only">Toggle navigation</span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href = "<?php echo site_url() ?>">首页</a></li>
        <li class="dropdown">
          <a href = "<?php echo site_url("intros") ?>">班级介绍</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href = "<?php echo site_url("intros/class") ?>">班级理念</a></li>
            <li><a href = "<?php echo site_url("intros/teachers") ?>">教师名录</a></li>
            <li><a href = "<?php echo site_url("intros#students") ?>">学子风采</a></li>
            <li><a href = "<?php echo site_url("intros/honor") ?>">荣誉榜</a></li>
            <li><a href = "<?php echo site_url("intros/acmicpc") ?>">ACM-ICPC</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href = "<?php echo site_url("enroll") ?>">招生信息</a>
        </li>
        <li class="dropdown">
          <a href = "<?php echo site_url("lessons") ?>">课程中心</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href = "http://acm.sjtu.edu.cn/OnlineJudge">Online Judge系统</a></li>
            <li class="divider"></li>
            <li><a href = "<?php echo site_url("lessons/1") ?>">PPCA</a></li>
            <li><a href = "<?php echo site_url("lessons/2") ?>">数据结构</a></li>
            <li><a href = "<?php echo site_url("lessons/3") ?>">程序设计</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href = "<?php echo site_url("academics") ?>">学术中心</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href = "<?php echo site_url("academics/1") ?>">科研成果</a></li>
            <li><a href = "<?php echo site_url("academics/2") ?>">学术交流</a></li>
            <li><a href = "<?php echo site_url("academics/3") ?>">学长讲坛</a></li>
            <li><a href = "<?php echo site_url("academics/4") ?>">学术节</a></li>
            <li><a href = "<?php echo site_url("academics/5") ?>">实习版块</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href = "<?php echo site_url("activity") ?>">活动中心</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href = "#">体育节</a></li>
            <li><a href = "#">旅游</a></li>
            <li><a href = "#">夏令营</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href = "<?php echo site_url("news") ?>">新闻中心</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
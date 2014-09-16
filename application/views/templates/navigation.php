<div class="inners" >
  <nav class="navbar" role="navigation">
    <div class="navbar-header">
      <img src = "<?php echo base_url("include/images/head-logo.png") ?>" style = "float:left;width:200px;height:50px;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        导航<span class="sr-only">Toggle navigation</span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href = "<?php echo base_url("/index.php") ?>">首页</a></li>
        <li class="dropdown">
          <a href = "<?php echo base_url("/intros/intro_index.html") ?>">班级介绍</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href = "<?php echo base_url("/intros/class.html") ?>">班级理念</a></li>
            <li><a href = "<?php echo base_url("/intros/teachers.html") ?>">教师名录</a></li>
			<li><a href = "<?php echo base_url("/intros/students.html") ?>">学子风采</a></li>
            <li><a href = "<?php echo base_url("/intros/honor.html") ?>">荣誉榜</a></li>
            <li><a href = "<?php echo base_url("/intros/acmicpc.html") ?>">ACM-ICPC</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href = "<?php echo base_url("/enroll.html") ?>">招生信息</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href = "#">招生简章</a></li>
            <li><a href = "#">招生条件</a></li>
            <li><a href = "#">招生政策</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href = "<?php echo base_url("/lessons/lesson_index.html") ?>">课程中心</a>
          <ul class="dropdown-menu" role="menu">
			<li><a href = "http://acm.sjtu.edu.cn/OnlineJudge">Online Judge系统</a></li>
            <li class="divider"></li>
            <li><a href = "<?php echo base_url("/lessons/lesson_1.html") ?>">PPCA</a></li>
            <li><a href = "<?php echo base_url("/lessons/lesson_2.html") ?>">数据结构</a></li>
            <li><a href = "<?php echo base_url("/lessons/lesson_3.html") ?>">程序设计</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href = "<?php echo base_url("/academics/academic_1.html") ?>">学术中心</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href = "<?php echo base_url("/academics/academic_1.html") ?>">科研成果</a></li>
            <li><a href = "<?php echo base_url("/academics/academic_2.html") ?>">学术交流</a></li>
            <li><a href = "<?php echo base_url("/academics/academic_3.html") ?>">学长讲坛</a></li>
			<li><a href = "<?php echo base_url("/academics/academic_4.html") ?>">学术节</a></li>
            <li><a href = "<?php echo base_url("/academics/academic_5.html") ?>">实习版块</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href = "<?php echo base_url("/activity.html") ?>">活动中心</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href = "#">体育节</a></li>
            <li><a href = "#">旅游</a></li>
            <li><a href = "#">夏令营</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</div>

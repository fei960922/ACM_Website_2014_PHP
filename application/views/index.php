<!DOCTYPE html>
<html>
	<?php include 'templates/head.php';?>
	<body class = "Microsoft_YaHei">
	<div id = "headingForIndex">
	<?php include 'templates/navigation.php';?>
	</div>
  <div>
	<div class="index_1 fullh">
      <img src = "<?php echo base_url("include/images/handwriting.png") ?>" />
    </div>
    <div class="index_2">
      <h1>欢迎来到ACM班</h1>
    </div>
    <div class="index_3 container_big">
      <img src = "<?php echo base_url("include/images/ACM.png") ?>" />
      <div>
        <p>ACM班的取名源于国际科学教育计算机组织——美国计算机学会（Association of Computing Machinery），它是世界上第一个、也是最有影响的计算机组织，计算机领域最高奖——图灵奖是由该组织设立和颁发的。这寓意ACM班旨在培养计算机科学家。</p>
        <br/>
        <p>今天，计算机科学班（ACM班）的历史将翻开了新的一页。新征程、新挑战，我们共同预祝其拥有更加美好的明天！</p>
      </div> 
    </div>
    <div class="index_4">
      <h1>新闻中心</h1>
    </div>
    <div class="container_big">
    <div class="index_5 row">
      <div class="col-md-6">
        <img src = "<?php echo base_url("include/images/index_5.jpg") ?>" />
      </div>
      <div class="col-md-6">
        <h1>最新新闻</h1>
        <ul>
          <li><a href = "{{ "/news/John/" | prepend: site.baseurl }}">图灵奖得主John Hopcroft教授金婚庆祝活动</a></li>
          <li><a href = "{{ "/news/JingboShang/" | prepend: site.baseurl }}">商静波：我的ACM/ICPC奇幻漂流</a></li>
          <li><a href = "{{ "/news/ACMFinal2014/" | prepend: site.baseurl }}">ACM班学子获第38届ACM国际大学生程序设计竞赛总决赛银牌  </a></li>
          <li><a href = "{{ "/news/TopPlan/" | prepend: site.baseurl }}">教育部“拔尖计划”计算机科学方向国际化培养研讨会成功举行  </a></li>
          <li><a href = "{{ "/tgj/2014Tuangaijin/" | prepend: site.baseurl }}">2013级团改金活动  </a></li>
          <li><a href = "{{ "/travel/Xitangtravel/" | prepend: site.baseurl }}">2013级班级旅行·西塘  </a></li>
        </ul>
        <button type="button" class="btn btn_new" onclick="window.open('./news/index.html')">点击查看更多</button>
      </div>
    </div>
  </div></div>
  <?php include 'templates/footer.php';?>
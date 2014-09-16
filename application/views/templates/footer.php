	</div>
	<div class = "footer">
  		<div id = "left">Powered By <a href="http://www.bootcss.com">BootStrap</a> written by <a href="/designer/designer.html">PPCA2014</a>
		<button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal" style = "padding:0;border:0;font-size:6px;">
  			&nbsp;本页面的期望与实际问题&nbsp;
		</button>
  		</div>
  		<div id = "right">Copyright &copy; 2014 <a href="http://acm.sjtu.edu.cn">ACM Class</a>. All rights reserved.</div>
	</div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog"><div class="modal-content"><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <p><?php if (defined('$bugs')) {echo $bugs;} else {echo "None";} ?></p>
        <p><a href="/designer/index.html">项目主页</a></p>
    </div></div></div></div></div>

	</body>
	<script src="<?php echo base_url("include/js/jquery.min.js") ?>"></script>
	<script src="<?php echo base_url("include/js/jquery.md5.js") ?>"></script> 
	<script src="<?php echo base_url("include/js/bootstrap.min.js") ?>"></script>
	<script src="<?php echo base_url("include/js/main.js") ?>"></script>
</html>

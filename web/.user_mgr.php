<?php
require_once '/bjsimple/web/.main.php';
$html=new Main();
?>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
            <?php echo $title;?>
            <small></small>
          </h1>
					<ol class="breadcrumb">
						<li>
							<a href="#"><i class="fa fa-user"></i> <?php echo $first_title;?></a>
						</li>
						<li class="active"><?php echo $title;?></li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<!-- left column -->
						<div class="col-md-12">
							<!-- general form elements -->
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title"></h3>
								</div>
								<!-- /.box-header -->
								<!-- form start -->
								<!--按钮组-->
<?php
for($i=0;$i<count($toolname);$i++)
{
if($i==0){
?>
								<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal"><span><?php echo $toolname[$i];?></span></button>
<?php }else{ ?>
								<button type="button" class="btn btn-sm btn-primary" ><span><?php echo $toolname[$i];?></span></button>
<?php }} ?>
								<button type="button" class="btn btn-sm btn-primary" ng-click="load()"><i class="fa fa-refresh"></i></button>
								<div class="form-inline" style="padding-top: 10px;" role="form">
									<input type="text" ng-model="name" class="form-control" placeholder="条件一">
									<input type="text" ng-model="phone" class="form-control" placeholder="条件二">
									<button class="btn btn-sm btn-primary" ng-click='load()' type="button">搜索</button>
								</div>
								<hr>
								<div class="row">
									<div style="margin:20px">
										<table id="jqGrid"></table>
										<div id="jqGridPager"></div>
									</div>

								</div>

							</div>
							<!-- /.box -->
						</div>
					</div>
					<!-- 模态框（Modal） -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
									</button>
									<h4 class="modal-title" id="myModalLabel">
										<?php echo $model_title;?>
									</h4>
								</div>
								<div class="modal-body">
									<div class="row">
										<form name="userForm" style="height: 100%;">
<?php
for($i=0;$i<count($field);$i++)
{
    $o=$field_type[$i];
?>
										<div class="form-group">
											<label for="<?php echo $field[$i]?>" class="col-sm-4 control-label"><?php echo $field[$i]?></label>
											<div class="col-sm-8">
<?php if($o=='sel'){ ?>
													<select class="form-control">
													<option>选项一</option>
													<option>选项二</option>
													<option>选项三</option>
													</select>
<?php }else if($o=='date'){ ?>
												<input type="text" class="form-control reasonal_rest_time" value="02/09/2017" />
<?php }else{ ?>
												<input type="text" name="username" class="form-control"  />
<?php } ?>
											</div>
						                </div>
<?php } ?>
									</form>
									</div>
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" id="save_userForm" onclick="$('#myModal').modal('hide')">
										保存
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">
										关闭
									</button>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->

				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
<?php
unset($html);
?>
									<script type="text/javascript">
										$(document).ready(function() {
											$("#jqGrid").jqGrid({
												url: 'data.json',
												datatype: "json",
												styleUI: 'Bootstrap',
												colModel: [
<?php  $abc="abcdefghdabcdefghdabcdefghdabcdefghd";for($i=0;$i<count($field);$i++){ ?>
                                                    {
													label: '<?php echo $field[$i]?>',
													name: '<?php echo $abc[$i]?>',
<?php if($i==0){ ?>
													key: true,
<?php } ?>
													width: 75
												},
<?php  } ?>
                                                ],
												rowNum: 20,
												viewrecords: true,
												rowList: [20, 30, 50],
												loadonce: true, // this is just for the demo
												pager: "#jqGridPager"
											});
										});
									</script>
	</body>

</html>
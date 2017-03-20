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
					<!-- 内容主体 -->
					<div class="row">
						<!-- left column -->
						<div class="col-md-12" style="padding-bottom:10px">
							<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal"><span>新增分类</span></button>
							<button type="button" id="addTJ" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myTJModal" disabled="disabled"><span>新增同级</span></button>
							<button type="button" id="addChild" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myChildModal" disabled="disabled"><span>新增子级</span></button>
							<button type="button" id="editOrg" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editOrgModel" disabled="disabled"><span>修改</span></button>
							<button type="button" id="delOrg" class="btn btn-sm btn-primary"  disabled="disabled"><span>删除</span></button>
						</div>
						<div class="col-md-12">
							<div id="treeview-selectable" class=""></div>
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
										新增分类
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
<?php } ?>										</form>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" id="saveModal">
										保存
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">
										关闭
									</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.modal -->

					<!-- 模态框（Modal） -->
					<div class="modal fade" id="myChildModal" tabindex="-1" role="dialog" aria-labelledby="myChildModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
									</button>
									<h4 class="modal-title" id="myChildModalLabel">
										新增子级
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
<?php } ?>										</form>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" id="saveChildModal">
										保存
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">
										关闭
									</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.modal -->
					
					<!-- 模态框（Modal） -->
					<div class="modal fade" id="myTJModal" tabindex="-1" role="dialog" aria-labelledby="myTJModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
									</button>
									<h4 class="modal-title" id="myTJModalLabel">
										新增同级
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
<?php } ?>										</form>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" id="saveTJModal">
										保存
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">
										关闭
									</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.modal -->
					
					<!-- 模态框（Modal） -->
					<div class="modal fade" id="editOrgModel" tabindex="-1" role="dialog" aria-labelledby="editOrgModelLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
									</button>
									<h4 class="modal-title" id="editOrgModelLabel">
										修改
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
<?php } ?>										</form>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" id="saveEditOrgModal">
										保存
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">
										关闭
									</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.modal -->

				</section>

			</div>
			<!-- /.content-wrapper -->
<?php
unset($html);
?>
		<script>
			var optOrgid;
			var optOrgname;
			$(function() {
				var defaultData = [{
					id: '1',
					text: '一级分类1',
					href: '#一级分类1',
					tags: ['4'],
					nodes: [{
						id: '2',
						text: '二级分类1',
						href: '#二级分类1',
						tags: ['0']
					}, {
						id: '3',
						text: '二级分类2',
						href: '#二级分类2',
						tags: ['0']
					}, {
						id: '4',
						text: '二级分类3',
						href: '#二级分类3',
						tags: ['0']
					}]
				}, {
					id: '5',
					text: '一级分类2',
					href: '#一级分类2',
					tags: ['0']
				}];

				var initSelectableTree = function() {
					return $('#treeview-selectable').treeview({
						data: defaultData,
						multiSelect: $('#chk-select-multi').is(':checked'),
						onNodeSelected: function(event, node) {
							optOrgid = node.id;
							optOrgname = node.text;
							$("#addChild").attr("disabled", false);
							$("#addTJ").attr("disabled", false);
							$("#editOrg").attr("disabled", false);
							$("#delOrg").attr("disabled", false);
						},
						onNodeUnselected: function(event, node) {
							optOrgid = null;
							optOrgname = null;
							$("#addChild").attr("disabled", true);
							$("#addTJ").attr("disabled", true);
							$("#editOrg").attr("disabled", true);
							$("#delOrg").attr("disabled", true);
						}
					});
				};
				var $selectableTree = initSelectableTree();

				var findSelectableNodes = function() {
					return $selectableTree.treeview('search', [$('#input-select-node').val(), {
						ignoreCase: false,
						exactMatch: false
					}]);
				};
				var selectableNodes = findSelectableNodes();

				$('#chk-select-multi:checkbox').on('change', function() {
					console.log('multi-select change');
					$selectableTree = initSelectableTree();
					selectableNodes = findSelectableNodes();
				});

				$('#saveModal').on('click', function() {
					$('#myModal').modal('hide');
				});
				$('#saveTJModal').on('click', function() {
					$('#myTJModal').modal('hide');
				});
				$('#saveChildModal').on('click', function() {
					$('#myChildModal').modal('hide');
				});
				$('#saveEditOrgModal').on('click', function() {
					$('#editOrgModel').modal('hide');
				});

			});
		</script>
	</body>
</html>
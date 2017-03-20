			<!-- Main Footer -->
			<footer class="main-footer">
				<!-- To the right -->
				<div class="pull-right hidden-xs">

				</div>
				<!-- Default to the left -->
				<strong>Copyright &copy; 2016 .</strong> All rights reserved. 
			</footer>

		</div>
		<!-- ./wrapper -->

		<script>
			$(function() {

				//Date range picker
				$('.reasonal_rest_time').daterangepicker({singleDatePicker: true,showDropdowns: true});

				//Timepicker
				$(".timepicker").timepicker({
					showInputs: false
				});
				setTimeout(function(){$(window).trigger("resize")},0);
				$('#save_userForm').on('click', function() {
					$('#myModal').modal('hide');
			    });
				$(".treeview span").map(function(){$(this).attr('title',$(this).text().trim())});
				$(".treeview-menu li a").map(function(){$(this).attr('title',$(this).text().trim())});
				$(".col-sm-4").map(function(){$(this).attr('title',$(this).text().trim())});
			});
		</script>
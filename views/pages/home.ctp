	<?php echo $this->Html->script('app.js',array('inline'=>false));?>
	<div class="row-fluid"> 
		 <div class="action-filters"> 
		
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body">
				   <form class="form-horizontal col-md-10 col-md-offset-1">
							  <div class="form-group">
								<label for="filter_feild" class="col-sm-2 control-label">Filter</label>
								<div class="col-sm-10">
								 <input type="text" class="form-control" id="filter_feild" placeholder="Filter value">
								</div>
							  </div>
							  <div class="form-group">
								<label for="other_filter_feild" class="col-sm-2 control-label">Option Filter</label>
								<div class="col-sm-10">
								  <select name="" id="option_filter_field" class="form-control">
									<option value="1">Option 1
									</option>
									<option value="2">Option 2
									</option>
									<option value="3">Option 3
									</option>
								</select>
								</div>
							  </div>
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 text-right">
								   <button class="btn  btn-default btn-labeled">
									<span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>
									Confirm
								 </button>
								  <button class="btn  btn-default btn-labeled">
									<span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>
									Cancel
								 </button>
								</div>
							  </div>
							</form>
							
				  </div>
				</div>
			  </div>
			</div>
		 </div>
	</div>
	<div class="row-fluid">
		<div class="list-group">
		  <a href="#" class="list-group-item">
			<h4 class="list-group-item-heading">Grade 7 Compassion</h4>
			<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		  </a>
		  <a href="#" class="list-group-item">
			<h4 class="list-group-item-heading">Enrollment</h4>
			<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		  </a>
		  <a href="#" class="list-group-item">
			<h4 class="list-group-item-heading">Cash Receipt</h4>
			<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		  </a>
		</div>
	</div>
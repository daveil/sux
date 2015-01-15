<?php echo $this->Html->script(array('wizard','test'),array('inline'=>false));?>
<style type="text/css"> 
.wizard{
	background:none;
	display:inline-block;
	width: 100%;
	min-height:40px;
	overflow: scroll;
	white-space: nowrap;
	margin-top:10px;
	padding:0;
	cursor: all-scroll;
	border-radius:4px;
}
.wizard::-webkit-scrollbar{width:0;}
.wizard li {
    padding: 10px 12px 10px;
    margin-right: 5px;
    background: #efefef;
    position: relative;
    display: inline-block;
	color: #777;
}
.wizard li:before {
    width: 0;
    height: 0;
    border-top: 20px inset transparent;
    border-bottom: 20px inset transparent;
    border-left: 20px solid #fff;
    position: absolute;
    content: "";
    top: 0;
    left: 0;
}
.wizard li:after {
    width: 0;
    height: 0;
    border-top: 20px inset transparent;
    border-bottom: 20px inset transparent;
    border-left: 20px solid #efefef;
    position: absolute;
    content: "";
    top: 0;
    right: -20px;
    z-index: 2;
}
.wizard li.first-inline:before,
.wizard li:first-child:before,
.wizard li:last-child:after {
    border: none;
}
.wizard li.first-inline,
.wizard li:first-child {
    -webkit-border-radius: 4px 0 0 4px;
       -moz-border-radius: 4px 0 0 4px;
            border-radius: 4px 0 0 4px;
}
.wizard li:last-child {
    -webkit-border-radius: 0 4px 4px 0;
       -moz-border-radius: 0 4px 4px 0;
            border-radius: 0 4px 4px 0;
}
.wizard li .badge {
    margin-left: 12px;
}
.wizard .current,.wizard li.current .badge {
    background: #337ab7;
    color: #fff;
}
.wizard .current:after {
    border-left-color: #337ab7;
}
</style>
	
	
	<div class="row"> 
		<div class="col-md-6">
			<div class="list-group split-view">
				<div class="list-group-head">
				  <a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Step {{current_step_index+1}}</h4>
					<p class="list-group-item-text">
						 {{current_step.step.name}}
					</p>
				  </a>
				  </div>
				<div class="list-group-body">
				  <a href="#" class="list-group-item" ng-repeat="selection  in current_step.step.selections" ng-click="advanceStep($index)">
					<h4 class="list-group-item-heading">{{selection.title}}</h4>
					<p class="list-group-item-text">{{selection.snippet}}</p>
				  </a>
				  
				   <a href="#" class="list-group-item" ng-click="backStep()" ng-hide="current_step_index === 0" >
					<h4 class="list-group-item-heading">Previous</h4>
					<p class="list-group-item-text">Go back to Step {{previous_step_index+1}} {{previous_step.step.name}}</p>
				  </a>
				 </div>
				 <div class="list-group-footer">
					 <div class="text-center"> 
						<input type="text" placeholder="Search" class="form-control" />
					 </div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="list-group split-view">
				<div class="list-group-head">
				  <a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Assessment</h4>
					<p class="list-group-item-text">
						<div class="row">
						<div class="col-md-6">
							<div class="student-name"><span class="student-number">{{summary.student.student_number}} {{summary.student.student_name}}</span> </div>
							<div class="student-section">{{summary.section}}</div>
						</div>
						<div class="col-md-6 text-right">
							<div class="school-year">SY 2015-2016</div>
							<div class="assess-total">
								<h4 ng-show="summary.net_total">{{summary.net_total | currency: "PHP"}}</h4>
								<label class="label">{{summary.payment_scheme.title}}</label>
							</div>
						</div>
						</div>
					</p>
				  </a>
				  </div>
				  <div class="list-group-body">
				  <a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Tuition Fee</h4>
					<p class="list-group-item-text">
						<table class="table" ng-show="summary.payment_scheme.gross_amount">
							<thead>
								<tr>
									<th class="text-center">Description</th>
									<th class="text-center">Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="breakdown in  summary.payment_scheme.breakdown">
									<td>{{breakdown.name}}</td>
									<td class="text-right">{{breakdown.amount}}</td>
								</tr>
							</tbody>
							<tfoot> 
								<tr>
									<td><strong>Gross Total</strong></td>
									<td class="text-right">{{summary.payment_scheme.gross_amount | currency: "PHP"}}</td>
								</tr>
							</tfoot>
						</table>
					</p>
				  </a>
				  <a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Adjusments</h4>
					<p class="list-group-item-text">
						<table class="table" ng-show="summary.adjustments.amount">
							<thead>
								<tr>
									<th class="text-center">Description</th>
									<th class="text-center">Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Gross Total</td>
									<td class="text-right">{{summary.payment_scheme.gross_amount}}</td>
								</tr>
								<tr>
									<td>{{summary.adjustments.name}}</td>
									<td class="text-right">{{summary.adjustments.amount}}</td>
								</tr>
							</tbody>
							<tfoot> 
								<tr>
									<td><strong>Net Total</strong></td>
									<td class="text-right">{{summary.net_total | currency: "PHP"}}</td>
								</tr>
							</tfoot>
						</table>
					</p>
				  </a>
				</div>
				<div class="list-group-footer">
					 <div class="text-right"> 
						 <button class="btn  btn-success btn-labeled" ng-click="doClick()">
							<span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>
							Confirm
						 </button>
						  <button class="btn  btn-danger btn-labeled">
							<span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>
							Cancel
						 </button>
					 </div>
				</div>
			</div>
		</div>
	</div>
	
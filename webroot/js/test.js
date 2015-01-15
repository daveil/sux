var myApp = angular.module('myapp', []);
 
 
myApp.controller('PageController', ['$scope', function($scope) {
	$scope.page = test;
	$scope.current_step_index = 0;
	$scope.current_step = $scope.page.steps[$scope.current_step_index];
	$scope.summary ={};
	$scope.isCurrent =  function(step){
		return $scope.current_step_index === step;
	}
	$scope.advanceStep = function(index) {

		var field = $scope.current_step.step.field;
		var value = $scope.current_step.step.selections[index]['value'];
		$scope.summary[field]= value;
		
		$scope.current_step_index ++;
		$scope.current_step = $scope.page.steps[$scope.current_step_index];
	}
  $scope.backStep = function() {
	$scope.current_step_index --;
	$scope.current_step = $scope.page.steps[$scope.current_step_index];}
}]);
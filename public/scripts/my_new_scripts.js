$(document).ready(function() {
	
	$(".draggable-control-frame .single-control").draggable({
		connectToSortable: " .demo, .column",
		helper: "clone"});
	$(".demo, .column").sortable({
		// 允许加入该容器的元素再拖动到其他相关联的容器
		connectWith: ".demo,.column",
		opacity: .35
	});

	// 点击size按钮事件处理函数
	$("#change-size-btn").click(function(e) {
		$(".demo").css("width",$("#inputHeight").val());
		$(".demo").css("height",$("#inputWidth").val());
		$("#height-value").text($("#inputHeight").val());
		$("#width-value").text($("#inputWidth").val());
	});
});

function Car(model) {
	
	this.model = model;
	this.color = "silver";
	this.year = "2012";

	this.getInfo = function () {
		return this.model + " " + this.year;
	};
}

function user(car) {
	var myCar = new Car("ford");
	myCar.year = "2010";
	console.log(myCar.getInfo());
}
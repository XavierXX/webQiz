$(document).ready(function() {
	
	configurationElm();

	// 点击size按钮事件处理函数
	$("#change-size-btn").click(function(e) {
		$(".demo").css("width",$("#inputHeight").val());
		$(".demo").css("height",$("#inputWidth").val());
		$("#height-value").text($("#inputHeight").val());
		$("#width-value").text($("#inputWidth").val());
	});

	CONTROL.loadControls("#layout-container",1);
	CONTROL.loadControls("#controls-container",2);



});

function configurationElm(e, t) {
	$(".draggable-control-frame .single-control").draggable({
		connectToSortable: " .demo, .column",
		helper: "clone",
		stop: function(e,t){
			$(".demo, .column").sortable({
			// 允许加入该容器的元素再拖动到其他相关联的容器
			connectWith: ".demo,.column",
			opacity: .35
			});
		}
	});
	$(".demo, .column").sortable({
		// 允许加入该容器的元素再拖动到其他相关联的容器
		connectWith: ".demo,.column",
		opacity: .35
	});
	
	console.log($(".draggable-control-frame  .single-control"));
}
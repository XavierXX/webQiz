function Car(model) {
	// JavaScript中类的实现形式
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

function Control(){
	this.name = "";
	this.version = "";

}

// 声明一个Control的域
CONTROL = {"REVISION":1};

var layoutFileNames = ["my_controls/A1.html"];
var controlsFileNames = ["my_controls/B1.html"];

// 载入layout或控件到页面上
CONTROL.loadControls = function (container_div_id, type) {
	if(type == 1){
		for(var i = 0;i < layoutFileNames.length;i++){
		// 	$.ajax({

		//      type: 'POST',

		//      url: url ,

		//     data: data ,

		//     success: success ,

		//     dataType: dataType

		// });
			$.get(layoutFileNames[i],"utf-8",function(data){
				$(container_div_id).append(data);
				configurationElm();
			});
		}
	}else{
		for(var i = 0;i < controlsFileNames.length;i++){
			$.get(controlsFileNames[i],"utf-8",function(data){
				$(container_div_id).append(data);
				configurationElm();
			});
		}
	}
}

let fenLei = document.querySelector(".fenLei");
let fl= document.querySelector("#fl");
function yiru(){
	fenLei.setAttribute("style","z-index:10;");
	fl.setAttribute("style","background-color:#fff;opacity: 0.8;");
}
function yichu(){
	fenLei.setAttribute("style","display:none;");
	fl.setAttribute("style","background-color:#D2E9FF;");
}
//鼠标移到分类显示fenlei
fl.onmouseenter = function() {
		yiru();
		// console.log("进入了");
    }
//鼠标移出还原
fenLei.onmouseleave = function() {
		yichu();
        // console.log("鼠标离开了");
    }
	
// 楼层效果
let elevator = document.querySelector('.elevator');
let lunBo = document.querySelector(".lunBo");
// 给页面绑定滚动监听事件
window.onscroll = function(){
	// 获取滚动条距上面的距离
	let top = document.documentElement.scrollTop;
	// console.log(top);
	// 获取元素距上面的距离
	let top1 = lunBo.offsetHeight + 120;
	// console.log(top1);
	// 判断
	if(top >= top1){
		// 固定定位
		elevator.className = 'elevator elevator_fix';	
	}else{
		elevator.className = 'elevator';
		elevator.setAttribute("style","background-color:#ddd;")
	}
	if(top>=top1 && top <= (top1+422)){
		elevator.children[0].setAttribute("style","background-color:red;")
	}else{
		elevator.children[0].setAttribute("style","background-color:#ddd;")
	}
	if(top>=(top1 + 422) && top <= (top1+1222)){
		elevator.children[1].setAttribute("style","background-color:red;")
	}else{
		elevator.children[1].setAttribute("style","background-color:#ddd;")
	}
}
// 楼层跳转
// let oList = document.getElementsByClassName('elevator_right');
// 点击事件委托
elevator.onclick = function (e) {
    if (e.target.tagName.toLowerCase() == 'li') {
        // 取data-n值
        let n = e.target.getAttribute('data-n');
		// console.log(n);
		if(n == "rm"){
			document.documentElement.scrollTop = 420;
		}
		if(n == "xh"){
			document.documentElement.scrollTop = 843;
		}
		if(n == "db"){
			document.documentElement.scrollTop = 0;
		}
    }
}

//创建一个函数以创建一个新的对象向服务器发送请求
var request=null; //这个变量用来持有此请求对象
function createRequest(){
	try{
		request=new XMLHttpRequest();//这一行试着创建一个新的请求对象。XMLHttpRequest是请求对象的类型
	}catch(trymicrosoft){
		try{
			request=new ActiveXObject("Msxm12.XMLHTTP");//试着创建请求对象，但是以微软IE浏览器的方式
		}catch(othermicrosoft){
			try{
				request=new ActiveXObject("Microsoft.XMLHTTP");//试着创建请求对象，但是以微软IE浏览器是方式。
			}catch(failed){
				request=null;//万一真的出问题了，这里可以确保request变量会被设定为null
			}
		}
	}

	if(request==null) //检查request是否依然是null。如果真的是这样，表示程序代码出错了
		alert("Error creating request object!"); //向用户报告错误信息。
}
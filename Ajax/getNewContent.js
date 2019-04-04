function getNewContent(){
	var request=getHTTPObject(); //使XMLHttpRequest对象
	if(request){
		request.open("GET","example.txt",true);  //建立连接
		request.onreadystatechange=function(){   //处理服务器的响应
			if(request.readyState==4){
				//alert("response received");
				var para=document.createElement("p");
				var txt=document.createTextNode(request.responseText);
				para.appendChild(txt);
				document.getElementById('new').appendChild(para);
			}
		};
		request.send(null); //发送请求
	}else{
		alert('Sorry,your browser doesn\'t support XMLHttpRequest');
	}
		//alert("Function Done"); //证明脚本不会等待send的响应返回，而是会继续执行
}
addLoadEvent(getNewContent);
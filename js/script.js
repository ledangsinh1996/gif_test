function test(){
	var search = document.getElementById("search").value;
	
	var x = new XMLHttpRequest();
	x.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var html = '';
			var r = JSON.parse(this.response);
			for(x in r){
				html += '<div>'+r[x].name+'</div>';
			}
			document.getElementById("result").innerHTML = html;
		}
	}
	x.open("POST",BASEURL+"/blog/test",true);	
	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	x.send("search="+search);
}

function remove(id){
	var c = confirm("Are you remove?");
	if(c){
		var x = new XMLHttpRequest();
		x.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				document.getElementById("row_"+id).remove();
			}
		}
		x.open("POST",BASEURL+"/blog/remove",true);	
		x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		x.send("id="+id);
	}
}

function save(){
	var arr = {};
	var txt = document.getElementsByName("txt");
	for(i=0; i<txt.length; i++){
		arr[txt[i].id] = txt[i].value;
	}
	
	/*var id = document.getElementById("id").value;
	var name = document.getElementById("name").value;
	var content = document.getElementById("content").value;
	*/
	var x = new XMLHttpRequest();
		x.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				console.log(this.response);
			}
		}
		x.open("POST",BASEURL+"/blog/save",true);	
		x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		x.send("arr="+JSON.stringify(arr));
	
}
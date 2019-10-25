function loadform() {
	for(var i=1;i<=31;i++){
		document.getElementById('day').innerHTML +="<option value='"+i+"'>"+i+"</option>";
	}
	for(var i=1;i<=12;i++){
		document.getElementById('month').innerHTML +="<option value='"+i+"'>"+"Tháng "+i+"</option>";
	}
	for(var i=1900;i<=2019;i++){
		document.getElementById('year').innerHTML +="<option value='"+i+"'>"+i+"</option>";
	}		
}

function loadDay(){
	var x= document.getElementById("month"); 
	var y= document.getElementById("year").value;
	if(x.value == "1" || x.value =="3" || x.value == "5" || x.value =="7" || x.value == "8" || x.value =="10" || x.value =="12"){
		document.getElementById("day").innerHTML="";
		for (var i = 1; i <= 31; i++) {
			document.getElementById("day").innerHTML+="<option>"+i+"</option>";
		}
	}
	if(x.value == "4" || x.value =="6" || x.value == "9" || x.value =="11" ){
		document.getElementById("day").innerHTML="";
		for (var i = 1; i <= 30; i++) {
			document.getElementById("day").innerHTML+="<option>"+i+"</option>";
		}
	}
	if(x.value == "2"){
		var days;
		document.getElementById("day").innerHTML="";
		if(y%400==0 || (y%4==0 && y%100!=0))
			days=29;
		else
			days=28;
		for (var i = 1; i <= days; i++) {
			document.getElementById("day").innerHTML+="<option>"+i+"</option>";
		}
	}
}
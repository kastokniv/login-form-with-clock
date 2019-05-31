var tday=["日曜日","月曜日","火曜日","水曜日","木曜日","金曜日","土曜日"];
var tmonth=["1月","２月","３月","４月","５月","６月","７月","８月","９月","１０月","１１月","１２月"];
function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

    if(nhour==0){ap=" 午前";nhour=12;}
	else if(nhour<12){ap=" 午前";}
	else if(nhour==12){ap=" 午後";}
	else if(nhour>12){ap=" 午後";nhour-=12;}
	if(nmin<=9) nmin="0"+nmin;
	if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
	document.getElementById('clockbox').innerHTML = clocktext;
    } 
	setInterval('GetClock()',1000);
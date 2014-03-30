<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
function fightagainst(ownpower,enemypower)
{
	var win = 1;
	var result = Math.random() * (ownpower+enemypower);
	if (result<ownpower)
		win = 1;
	else
		win = 0;
	//console.log(win);
	return win;
}

//features initilization:
var power = new Array(2);//own power,enemypower,ranging from 0 - 100
var sanity = new Array(2);//own sanity,required sanity
var service = 0;
var popularity = 0;
var drinktypes = 0;
var extraincomelevel = 0;
// power[0] = 0;
// sanity[0] = 0;

//individually upgraded,1,2,3,4,5. user can upgrade this
var star_salesperson = 0;
var star_bartender = 0;
var star_cleaner = 0;
var star_liveband = 0;
var star_security = 0;
var star_servant = 0;

//causal connections,sequence as power,sanity,service,popularity,drinktypes,extraincome
var effect_salesperson = [2*star_salesperson,    0,                             2*star_salesperson,     2*star_salesperson,                0,15*star_salesperson];
var effect_bartender = [2*star_bartender,        0,            					2*star_bartender,       4*star_bartender,                  20*star_bartender,2*star_bartender];
var effect_cleaner = [1*star_cleaner,            15*star_cleaner,               2*star_cleaner,		    2*star_cleaner,
	0,0];
var effect_liveband = [1*star_liveband,			0,								2*star_liveband,		8*star_liveband,			       0,3*star_liveband];
var effect_security = [12*star_security,		0,								0,						2*star_security,		           0,0];
var effect_servant = [2*star_servant,			5*star_servant,			12*star_servant,	    2*star_servant,		               0,0];

//test
power[0] = effect_salesperson[0] + effect_bartender[0] + effect_cleaner[0] + effect_liveband[0] + effect_security[0] + effect_servant[0];
sanity[0] = effect_salesperson[1] + effect_bartender[1] + effect_cleaner[1] + effect_liveband[1] + effect_security[1] + effect_servant[1];
service = effect_salesperson[2] + effect_bartender[2] + effect_cleaner[2] + effect_liveband[2] + effect_security[2] + effect_servant[2];
populatiry = effect_salesperson[3] + effect_bartender[3] + effect_cleaner[3] + effect_liveband[3] + effect_security[3] + effect_servant[3];
drinktypes = effect_salesperson[4] + effect_bartender[4] + effect_cleaner[4] + effect_liveband[4] + effect_security[4] + effect_servant[4];
extraincomelevel = effect_salesperson[5] + effect_bartender[5] + effect_cleaner[5] + effect_liveband[5] + effect_security[5] + effect_servant[5];
//income calculations
var totalincome = 0; 
var incident = 0;
var regular_monthlyincome = (0.7*popularity+0.2*service+0.1*sanity[0]) * (drinktypes+20) +extraincomelevel*40;//20 is types of beers,max=1.6w
console.log(regular_monthlyincome);


</script>
</head>
<body>
<?php 
		echo $regular_monthlyincome;
	 ?>
</body>
</html>

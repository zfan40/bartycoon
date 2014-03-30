<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="css/barui.css">
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<!-- <link href="http://fonts.googleapis.com/css" rel="stylesheet" type="text/css"> -->


<script>


function end(type)
{
	$('#cao').fadeOut();
	if (type ==0)
	{
	if (totalincome>=5000)
	$('#cao').html("you made it! the restaurant is going pretty well, congratulations!");
	else
	$('#cao').html("you managed to survive, but the bar is not impressive.");	
	}
	else if (type ==1)
	{
	$('#cao').html("burnout, game over!");
	}
	else if (type ==2)
	{
	$('#cao').html("you are in debt, game over!");	
	}
	else if (type ==3)
	{
	$('#cao').html("it turn out to be an illegally imported treasure, it must be someone leave it there on purpose, and you are put in prison. gameover!");
	}
	
	else if (type ==4)
	{
	$('#cao').html("Mafia head hold your hand, saying, in a regretful voice: \"You let me down today and you know the rule...my friend\". Game over!");	
	}
	$('#cao').fadeIn();	
	setTimeout(function(){if(confirm("game over, restart?")){location.reload();}},3000);
}

function upgrade(category)
{
//sequence: 1.salesperson;2.bartender;3.cleaner;4.liveband;5.security;6.servant;
	if (category ==1)
	{
		if (star_salesperson<=4 && totalincome>=upgradefee_sales[star_salesperson])
		{
			totalincome -=upgradefee_sales[star_salesperson];
			star_salesperson += 1;
			upgradeallstuff();
		}
		else if (star_salesperson ==5)
		{
			alert("you cannot find better salesperson");
		}
		else
		{
			alert("you don't have enough money to hire them");
		}
	}
	else if (category ==2)
	{
		if (star_bartender<=4 && totalincome>=upgradefee_bartender[star_bartender])
		{
			totalincome -=upgradefee_bartender[star_bartender];
			star_bartender += 1;
			upgradeallstuff();
		}
		else if (star_bartender ==5)
		{
			alert("you cannot find better bartenders");
		}
		else
		{
			alert("you don't have enough money to hire them");
		}
	}
	else if (category ==3)
	{
		if (star_cleaner<=4 && totalincome>=upgradefee_sanity[star_cleaner])
		{
			totalincome -=upgradefee_sanity[star_cleaner];			
			star_cleaner += 1;
			upgradeallstuff();
		}
		else if (star_cleaner ==5)
		{
			alert("you cannot find better cleaners");
		}
		else
		{
			alert("you don't have enough money to hire them");
		}
	}
	else if (category ==4)
	{
		if (star_liveband<=4 && totalincome>=upgradefee_liveband[star_liveband])
		{
			totalincome -=upgradefee_liveband[star_liveband];			
			star_liveband += 1;
			upgradeallstuff();
		}
		else if (star_liveband ==5)
		{
			alert("you cannot find better livebands");
		}
		else
		{
			alert("you don't have enough money to hire them");
		}
	}
	else if (category ==5)
	{
		if (star_security<=4 && totalincome>=upgradefee_security[star_security])
		{
			totalincome -=upgradefee_security[star_security];			
			star_security += 1;
			upgradeallstuff();
		}
		else if (star_security ==5)
		{
			alert("you cannot find better securities");
		}
		else
		{
			alert("you don't have enough money to hire them");
		}
	}
	else if (category ==6)
	{
		if (star_servant<=4 && totalincome>=upgradefee_service[star_servant])
		{
			totalincome -=upgradefee_service[star_servant];
			star_servant += 1;
			upgradeallstuff();
		}
		else if (star_servant ==5)
		{
			alert("you cannot find better servants");
		}
		else
		{
			alert("you don't have enough money to hire them");
		}
	}
}

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


function accidents(times) //only valid when times > 0,other wise break;
{var accidentid = [1,2,3,4,5,6,7,8,9,10];
var flag = 0;
console.log("no."+times);

if (times==3)//which means enter the first event of the month!!!!just enter the month!
{
	$('#calendar').html("Month ".concat(monthid));
}
if (times == 0)
	{
		monthlyincome();
		return null;
	}


  $('#cao').fadeOut();

/*
1: nice sanitation, award 2000
2: nice service, award 1000
3: you find a wallet, a telephone number in it, cash of 500. dial it->raise popularity, keep the money, leave it there?
4: you find a wallet, a telephone number in it, cash of 10000, several diamonds. dial? keep? leave it there?give it to police? 
5: a guy eat a lot 
6: a table caught fire, save or not? save cost 500, not save, bigger fire 10000 or nothing big deal or burn out
7: bartender got kidnapped, shocked and come back. say hello? leave him? angrily ask where have you been? bartenderlevel minus one
8: protection fee, give or not? give:20% total income, not give, win, get 10% income, lose give 50% total income
9: a guest found a bug in drink? explain it's not a bug and throw it. pay for their bill. 
10:drunks conflicts. kindly interfere? interfere rudely? enjoy the show? might lead to shooting,shut down
*/
var rolldice = parseInt(Math.random()*12)+1;
console.log(rolldice);				//roledice 取range
if ( rolldice == 1 &&(sanity[0]>50))
{
	$('#cao').hide();
	$('#caoimg').html('<img src=\'image/bestsanitation.jpg\' />\
		<br><button onclick = \'accidents('.concat(times-=1).concat(')\'>OK</button>'));
	$('#description').html("1: nice sanitation, award 2000");
	console.log("1: nice sanitation, award 2000");
	extra_monthlyincome = 2000;
	 upgradeallstuff();
	 $('#cao').fadeIn();
}

else if (rolldice == 2 && service >=50)
{
	$('#cao').hide();
	$('#description').html("2: nice service, award 1000");
	console.log("2: nice service, award 1000");
	extra_monthlyincome = 1000;
	$('#caoimg').html('<img src=\'image/bestservice.jpg\' />\
		<br><button onclick = \'accidents('.concat(times-=1).concat(')\'>OK</button>'));
	 upgradeallstuff();	
	$('#cao').fadeIn();
}
else if (rolldice == 3)
{
	$('#cao').hide();
	console.log("3: you find a wallet,");
	$('#description').html("3: you find a wallet");
	$('#caoimg').html('<img src=\'image/wallet.jpg\' />\
		<br><button onclick = \'getwallet()\'>keep it yourself</button>'
	+('<button onclick = \'returnwallet()\'>try to contact that guy</button>'));
	$('#cao').fadeIn();
}
else if (rolldice == 4)
{
	$('#cao').hide();
	console.log("4:treasure");
	$('#description').html("4: you find a treasure, precious!");
	$('#caoimg').html('<img src=\'image/treasure.jpg\' />\
		<br><button onclick = \'gettreasure()\'>keep it yourself</button>'
	+('<button onclick = \'returntreasure()\'>try to give it back</button>')
	+('<button onclick = \'givetopolice()\'>give it to police</button>')
	+('<button onclick = \'leaveitthere()\'>leave it there</button>'));
	$('#cao').fadeIn();
}
else if (rolldice == 5 && star_servant>=1)
{
	$('#cao').hide();
	console.log("5: a guy eat a lot ");
	$('#description').html("5: There is a guy eating and drinking a lot at the corner.");
$('#caoimg').html('<img src=\'image/drinker.jpg\' />\
		<br><button onclick = \'stophim()\'>stop him</button>'
	+('<button onclick = \'lethimeat()\'>leave him alone</button>'));
	$('#cao').fadeIn();
}
else if (rolldice == 6 && totalincome>5000)
{
	$('#cao').hide();
	console.log("6: a table caught fire");
	$('#description').html("6: A table is on fire...");
	$('#caoimg').html('<img src=\'image/fire.jpg\' />\
		<br><button onclick = \'savefire()\'>save fire</button>'
	+('<button onclick = \'ignorefire()\'>ignore the fire</button>'));
	$('#cao').fadeIn();
}
else if (rolldice == 7 && star_bartender>=1)
{
	$('#cao').hide();
	console.log("7: bartender got kidnapped");
	$('#description').html("7: your bartender is kidnapped, since he owe much to usury.");
	$('#caoimg').html('<img src=\'image/kidnap.jpg\' />\
		<br><button onclick = \'callpolice()\'>call the police!</button>'
	+('<button onclick = \'ignorebartender()\'>ignore him</button>')
	+('<button onclick = \'securitysearch()\'>send security guys to search</button>')
	+('<button onclick = \'kidnapmoney()\'>give kidnap money</button>'));
	$('#cao').fadeIn();
}
else if (rolldice == 8 && totalincome>6000)
{
	$('#cao').hide();
	console.log("8: protection fee");
	$('#description').html("8:Mafia wants some money from you, they said: my friend, 5000 is not so much.");
	$('#caoimg').html('<img src=\'image/black.jpg\' />\
		<br><button onclick = \'givemoney()\'>give them the money</button>'
	+('<button onclick = \'fightagainst()\'>send you crews to fight agains them</button>')
	+('<button onclick = \'bribe()\'>bribe them with wine</button>'));
	$('#cao').fadeIn();
}
else if (rolldice == 9 && sanity[0]<70)
{	
	$('#cao').hide();
	console.log("9: a guest found a bug ");
	$('#description').html("9: A guest found a little insect is waiving at him.");
	$('#caoimg').html('<img src=\'image/roach.jpg\' />\
		<br><button onclick = \'sorry()\'>say sorry</button>'
	+('<button onclick = \'notabug()\'>tell them it\'s not a roach</button>')
	+('<button onclick = \'explain()\'>explain</button>'));
	$('#cao').fadeIn();
}
else if (rolldice == 10 && drinktypes>60)
{
	$('#cao').hide();
	console.log("10.drunks conflicts");
	$('#caoimg').html('<img src=\'image/drunk.jpg\' />\
		<br><button onclick = \'accidents('.concat(times-=1).concat(')\'>caoei</button>'));
	$('#cao').fadeIn();
}
else 
	{accidents(times-=1);}
}

//wallet


function getwallet()
{
	extra_monthlyincome = 50;
	$('#caoimg').html('<p>you got all the money, 50 dollars</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
	upgradeallstuff();
}

function returnwallet()
{
	extra_monthlyincome = 500;
	$('#caoimg').html("<p>He thanks you with more cash in the wallet, 500 dollars</p>"+"<button onclick=\'accidents("+ (times-=1)  +")\'>OK</button>");
	upgradeallstuff();
}

//treasure
function gettreasure()
{
	end(3);
}

function returntreasure()
{
	extra_monthlyincome = -1000;
	//it's a thief!
	$('#caoimg').html('<p>He is acturally a notorious thief, he thanked you and steal 1000 from you.</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
	upgradeallstuff();
}

function givetopolice()
{
	if (star_security!=5)
	{
		star_security+=1;
		$('#caoimg').html('<p>They turned out to be stolen antiques, you are praised in the newspaper and the police office promote your security team,for free!.</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
	}
	else
	{
		extra_monthlyincome = 1000;
		$('#caoimg').html('<p>They turned out to be stolen antiques, you are praised in the newspaper,As a result, guests number in this month increased!.</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
	}
	upgradeallstuff();
}

function leaveitthere()
{
	//nothing happened, and 
	$('#caoimg').html('<p>It was taken by someone you didn\'t notice.</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');

}
//eat a lot
function stophim()
{
	//servant stop him
	if (star_servant>=1)
		star_servant -= 1;
	upgradeallstuff();
	$('#caoimg').html('<p>the guy beat your servant very hard. he stayed at home for several days, skills downgraded.</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
}
function lethimeat()
{
	extra_monthlyincome =250;
	$('#caoimg').html('<p>He ate so much that he bruoght you extraincome $250.</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
	upgradeallstuff();
}

//caught fire
function savefire()
{
	var fate = Math.random();
	if (fate<=0.3)
	{
		extra_monthlyincome = -5000;
		$('#caoimg').html('<p>Your crew fight bravely, you gave them $5000 as bonus. Cheers! T T</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
	}
	else if (fate>0.3&&fate<=0.7)
	{
		extra_monthlyincome = -100;
		$('#caoimg').html('<p>The table was burnt out, you need to pay 100 to replace it, but all the other stuff is safe!</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');	
	}
	else
	{
		star_security = 0;
		$('#caoimg').html('<p>your security guy sacrifice themselves to save your bar. we are sorry about that.</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');	
	}
	upgradeallstuff();
}

function ignorefire()
{
	var fate = Math.random();
	if (fate<=1)
	{
		end(1);
	}
}


//kidnap
function callpolice()
{
	var fate = Math.random();
	if (fate<=0.5)
	{
		$('#caoimg').html('<p>The polica helped you find your bartender, for free</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
	}
	else
	{
		star_bartender = 0;
		$('#caoimg').html('<p>They cannot find your bartender. we wish him all well somewhere, while...not in your bar</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');	
		upgradeallstuff();
}
}

function ignorebartender()
{
	var fate = Math.random();
	if (fate<=0.5)
	{
		star_bartender = 0;
		$('#caoimg').html('<p>He went back himself, swearing he would never work for you</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
		upgradeallstuff();
	}
	else
	{
		$('#caoimg').html('<p>His family called police, and they saved him immediately</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');	
}
}
function securitysearch()
{
	var fate = Math.random();
	if (fate<=0.5)
	{
		$('#caoimg').html('<p>Congratulations, your security guys saved your bartender</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
		power[1] += 5;
	}
	else
	{
		star_bartender = 0;
		$('#caoimg').html('<p>the police showed up when your security and your bartender were both beaten, </p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');	
		upgradeallstuff();
	}

}

function kidnapmoney()
{
	extra_monthlyincome = -5000;
	upgradeallstuff();
	$('#caoimg').html('<p>You gave them 5000 dollars, as requested. The bartender </p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
}

//protection fee
function givemoney()
{
	extra_monthlyincome = -5000;
	upgradeallstuff();
	$('#caoimg').html('<p>You gave them 5000 dollars, with a big smile, saying: I will always be loyal.</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
}

function fightagainst()
{
	if (fightagainst(power[0],70))
	{
		$('#caoimg').html('<p>you sent your crew to fight against them, fiercely. And beat them down.</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
	}

	else
	{
		end(4);
	}
}

function bribe()
{
	$('#caoimg').html('<p>you asked, in a whisper:\"Life is difficult recently, can you spare us more days?\". And give each of them a glass of wine.\
		They left after enjoying the wine</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
}


//bug
function sorry()
{
	$('#caoimg').html('<p>You said we won\'t let this happen again, and the guest is OK with that.</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
}

function notabug()
{
	$('#caoimg').html('<p>You explain, this is a new pet called \'wangcai\'</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
}

function explain()
{
	$('#caoimg').html('<p>You explain, this is a new pet called \'wangcai\'</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
}

//drunks conflicts
function leavethem()
{
	$('#caoimg').html('<p>under development</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
}

function givethemdrink()
{
	$('#caoimg').html('<p>under development</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
}

function sendsecurity()
{
	$('#caoimg').html('<p>under development</p>'+'<button onclick=\'accidents('+ (times-=1)  +')\'>OK</button>');
}

function upgradeallstuff()//indicate bar and upgrade feedbacks
{
	effect_salesperson = [2*star_salesperson,    0,                             2*star_salesperson,     2*star_salesperson,                0,15*star_salesperson];
	effect_bartender = [2*star_bartender,        0,            					2*star_bartender,       4*star_bartender,                  20*star_bartender,2*star_bartender];
	effect_cleaner = [1*star_cleaner,            15*star_cleaner,               2*star_cleaner,		    2*star_cleaner,
	0,0];
	effect_liveband = [1*star_liveband,			0,								2*star_liveband,		8*star_liveband,			       0,3*star_liveband];
	effect_security = [12*star_security,		0,								0,						2*star_security,		           0,0];
	effect_servant = [2*star_servant,			5*star_servant,			12*star_servant,	    2*star_servant,		               0,0];

//test
	power[0] = effect_salesperson[0] + effect_bartender[0] + effect_cleaner[0] + effect_liveband[0] + effect_security[0] + effect_servant[0];
	sanity[0] = effect_salesperson[1] + effect_bartender[1] + effect_cleaner[1] + effect_liveband[1] + effect_security[1] + effect_servant[1];
	service = effect_salesperson[2] + effect_bartender[2] + effect_cleaner[2] + effect_liveband[2] + effect_security[2] + effect_servant[2];
	popularity = effect_salesperson[3] + effect_bartender[3] + effect_cleaner[3] + effect_liveband[3] + effect_security[3] + effect_servant[3] + bonuspopularity;
	drinktypes = effect_salesperson[4] + effect_bartender[4] + effect_cleaner[4] + effect_liveband[4] + effect_security[4] + effect_servant[4];
	extraincomelevel = effect_salesperson[5] + effect_bartender[5]+effect_cleaner[5]+effect_liveband[5] + effect_security[5] + effect_servant[5];

	bonuspopularity = 0;

	totalincome +=extra_monthlyincome;
	totalextra += extra_monthlyincome;
	extra_monthlyincome = 0;
	
//totalincome
	$('#totalincome').html("".concat(totalincome));

//progress bar!
	$('#popularity').attr("style","width: ".concat(popularity).concat("%;"));
	$('#drinktypes').attr("style","width: ".concat(drinktypes).concat("%;"));
	$('#service').attr("style","width: ".concat(service).concat("%;"));
	$('#sanitation').attr("style","width: ".concat(sanity[0]).concat("%;"));
	$('#security').attr("style","width: ".concat(power[0]).concat("%;"));
	$('#extra').attr("style","width: ".concat(extraincomelevel).concat("%;"));
//how many stars!
	$('div.sales_star p').html(''.concat(star_salesperson).concat(' star'));
	$('div.bar_star p').html(''.concat(star_bartender).concat(' star'));
	$('div.clean_star p').html(''.concat(star_cleaner).concat(' star'));
	$('div.band_star p').html(''.concat(star_liveband).concat(' star'));
	$('div.secure_star p').html(''.concat(star_security).concat(' star'));
	$('div.serve_star p').html(''.concat(star_servant).concat(' star'));
//change the avatar!
	(star_salesperson==0)?{}:$("#salesimg").attr("src","image/stuff/pr".concat(star_salesperson).concat(".png"));
	(star_bartender==0)?{}:$("#bartenderimg").attr("src","image/stuff/bartender".concat(star_bartender).concat(".png"));
	(star_cleaner==0)?{}:$("#cleanerimg").attr("src","image/stuff/clean".concat(star_cleaner).concat(".png"));
	(star_liveband==0)?{}:$("#livebandimg").attr("src","image/stuff/liveband".concat(star_liveband).concat(".png"));
	(star_security==0)?{}:$("#securityimg").attr("src","image/stuff/security".concat(star_security).concat(".png"));
	(star_servant==0)?{}:$("#servantimg").attr("src","image/stuff/servant".concat(star_servant).concat(".png"));

	(star_salesperson==0)?{}:$("#salesimg").attr("Title","Upgrade cost".concat(upgradefee_sales[star_salesperson]));
	(star_bartender==0)?{}:$("#bartenderimg").attr("Title","Upgrade cost".concat(upgradefee_bartender[star_bartender]));
	(star_cleaner==0)?{}:$("#cleanerimg").attr("Title","Upgrade cost".concat(upgradefee_sanity[star_cleaner]));
	(star_liveband==0)?{}:$("#livebandimg").attr("Title","Upgrade cost".concat(upgradefee_liveband[star_liveband]));
	(star_security==0)?{}:$("#securityimg").attr("Title","Upgrade cost".concat(upgradefee_security[star_security]));
	(star_servant==0)?{}:$("#servantimg").attr("Title","Upgrade cost".concat(upgradefee_service[star_servant]));

	// $('#env').html('<p>'.concat('danger').concat(power[1]).concat(' sanitation requirments').concat(sanity[1]).concat('</p>'));
	if (totalincome<0)
	{$('#caoimg button').attr("onclick","end(2)");}
}

function monthlyincome()//might move to accidents
{ 
	monthid+=1;
	regular_monthlyincome = (0.7*popularity+0.2*service+0.1*sanity[0]) * (drinktypes/3+10) +extraincomelevel*15;
	totalincome = Math.floor(totalincome +regular_monthlyincome);
	upgradeallstuff();
	extra_monthlyincome = 0;
	alert("***********Monthly Summary************\nRevenue:"+regular_monthlyincome+'\nExtra Income:'+totalextra);
	
	if (totalincome<0)
	{end(2);}

	if (monthid<=12)
	{
	$('#description').html('');
	$('#caoimg').html('<button onclick = accidents(3)>go on to next month</button>');
	$('#cao').fadeIn();
	times = 3;
	totalextra = 0;}
	else
		{end(0);}
}







var times = 3;//at most three stochastic accidents!
//features initilization:
var power = new Array(2);//own power,enemypower,ranging from 0 - 100
var sanity = new Array(2);//own sanity,required sanity
var service = 0;
var popularity = 0;
var drinktypes = 0;
var extraincomelevel = 0;
power[0] = 0;
sanity[0] = 0;

var monthid = 2;
var upgradefee = [200,400,800,1600,3200];

var upgradefee_security = [200,400,800,1600,5000];
var upgradefee_sanity = [200,400,800,1600,3000];
var upgradefee_service = [200,400,800,1600,3200];
var upgradefee_liveband = [400,800,1600,3200,10000];
var upgradefee_bartender = [400,800,1600,3200,10000];
var upgradefee_sales = [200,400,800,1600,5000];





//individually upgraded,0,1,2,3,4,5. user can upgrade this
var star_salesperson =0;
var star_bartender = 0;
var star_cleaner = 0;
var star_liveband = 0;
var star_security = 0;
var star_servant = 0;
var bonuspopularity = 0;
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
popularity = effect_salesperson[3] + effect_bartender[3] + effect_cleaner[3] + effect_liveband[3] + effect_security[3] + effect_servant[3];
drinktypes = effect_salesperson[4] + effect_bartender[4] + effect_cleaner[4] + effect_liveband[4] + effect_security[4] + effect_servant[4];
extraincomelevel = effect_salesperson[5] + effect_bartender[5] + effect_cleaner[5] + effect_liveband[5] + effect_security[5] + effect_servant[5];

//income calculations
var totalincome = 1000; 
var incident = 0;
var regular_monthlyincome;
var extra_monthlyincome = 0;
var totalextra = 0;

console.log("popularity"+popularity);
console.log("drinktypes"+drinktypes);
console.log("income"+regular_monthlyincome);

$('#cao').fadeOut();
$('#indicatebar').hide();
</script>
</head>
<body>


<div>
<h3>This is the mock up of my project 2, any suggestions are welcomes. My email is zfan40@gatech.edm</h3>
<a href="intro.html"><img src="image/info.jpg"></a>
</div>

<div id="upgrade">
<div>
<div><p>promotion girls</p><div class = 'sales_star'><p>0 star</p><img id="salesimg" src="image/stuff/nope.png" Title="Upgrade cost 200"></div><button  onclick = upgrade(1)>upgrade</button></div>
</div>

<div>
<div><p>bartender</p><div class = 'bar_star'><p>0 star</p><img id="bartenderimg" src="image/stuff/nope.png" Title="Upgrade cost 400"></div><button  onclick = upgrade(2)>upgrade</button></div>
</div>

<div>
<div><p>cleaner</p><div class = 'clean_star'><p>0 star</p><img id="cleanerimg" src="image/stuff/nope.png"  Title="Upgrade cost 200"></div><button  onclick = upgrade(3)>upgrade</button></div>
</div>

<div>
<div><p>liveband</p><div class = 'band_star'><p>0 star</p><img id="livebandimg" src="image/stuff/nope.png"  Title="Upgrade cost 400"></div><button  onclick = upgrade(4)>upgrade</button></div>
</div>

<div>
<div><p>security</p><div class = 'secure_star'><p>0 star</p><img id="securityimg" src="image/stuff/nope.png"  Title="Upgrade cost 200"></div><button  onclick = upgrade(5)>upgrade</button></div>
</div>

<div>
<div><p>servant</p><div class = 'serve_star'><p>0 star</p><img id="servantimg" src="image/stuff/nope.png"  Title="Upgrade cost 200"></div><button  onclick = upgrade(6)>upgrade</button></div>
</div>

</div>


<div id="indicatebar">
	<!-- <p>popularity 0 ,drinktypes 0 ,service 0 ,sanitation 0,security 0 ,serrendipity 0,totalincome 1000</p> -->
	<p><strong>total income:</strong></p>
	<div id="totalincome">1000</div>
	<br>
	<p>popularity</p>
	<div class="progress">  		
  		<div class="progress-bar" id = "popularity" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
	</div>

	<p>drinktypes</p>
	<div class="progress">  
		<div class="progress-bar" id = "drinktypes" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
	</div>
	<p>services</p>
	<div class="progress">  
		<div class="progress-bar" id = "service" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
	</div>
	<p>sanitation</p>
	<div class="progress">  
		<div class="progress-bar" id = "sanitation" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
	</div>
	<p>security</p>
	<div class="progress">  
		<div class="progress-bar" id = "security" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
	</div>
	<p>extra income ability</p>
	<div class="progress">  
		<div class="progress-bar" id = "extra" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
	</div>

</div>


<div id = "cao">
<!-- 	<button onclick = monthlyincome()>go on to next month</button> -->

<div id="description"></div>
<div id= "caoimg"><button onclick = accidents(3)>go on to next month</button></div>

</div>

<div id="calendar">Month 1</div>
<div id = "end" style="display: none;">
	
</div>
</body>
</html>

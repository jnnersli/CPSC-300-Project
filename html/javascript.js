function newQuote(){


	var randomNumber = Math.floor((Math.random()*10)+1);
	document.getElementById('quoteDisplay').innerHTML = randomNumber;
}

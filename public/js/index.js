$(document).ready(function() {
  setInterval(function(){
  	console.log('Checking coffe server for new cups...');
  	if ( Math.random() >= 0.7 ) {
  		let value = parseInt($('#coffe_cups').text().replace(',',''));
  		value++;
  		$('#coffe_cups').text(value.toLocaleString());
  		console.log(value.toLocaleString() + " coffe's cups, succesfully drinked.");
  	}
  },1000)
  
});
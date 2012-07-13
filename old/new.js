function assessForm() {
	var natureValue = undefined;
	var usageValue = undefined;
	var portionValue = undefined;
	var marketValue = undefined;
	var total = 0;
	
	for (var i = 0; i < document.new_analysis.nature.length; i++) {
		if (document.new_analysis.nature[i].checked == true) {
			natureValue = document.new_analysis.nature[i].value * 1;
		}
	}
	
	for (var i = 0; i < document.new_analysis.usage.length; i++) {
		if (document.new_analysis.usage[i].checked == true) {
			usageValue = document.new_analysis.usage[i].value * 1;
		}
	}
	
	for (var i = 0; i < document.new_analysis.portion.length; i++) {
		if (document.new_analysis.portion[i].checked == true) {
			portionValue = document.new_analysis.portion[i].value * 1;
		}
	}
	
	for (var i = 0; i < document.new_analysis.market.length; i++) {
		if (document.new_analysis.market[i].checked == true) {
			marketValue = document.new_analysis.market[i].value * 1;
		}
	}
	
	if (natureValue == undefined || usageValue == undefined || portionValue == undefined || marketValue == undefined) {
		// uhm...
		alert('has not all been selected yet');
	} else {
		total = natureValue + usageValue + portionValue + marketValue;
		//alert('total is: ' + total);
		if (total < -1) {
			document.getElementById('assessment_total').innerHTML = 'Ehhh... not good.';
		} else if (total >= -1 && total < 0) {
			document.getElementById('assessment_total').innerHTML = 'I mean, you could get away with it.';
		} else if (total == 0) {
			document.getElementById('assessment_total').innerHTML = 'Pretty neutral. Flip a coin. (Want me to flip one for you?)';
		} else if (total > 0 && total <= 1) {
			document.getElementById('assessment_total').innerHTML = 'You probably will be ok.';
		} else if (total > 1) {
			document.getElementById('assessment_total').innerHTML = 'Go for it!';
		}
		
	}
	
}


function formValidate() {
	
}
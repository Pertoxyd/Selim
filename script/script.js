// Funktion zur Prüfung von Input Eingaben
function dasher(Student, Correct) {
var studentAnswer = Student.value;
var correctAnswer = Correct;
result = ""
for (var c = 0; c< correctAnswer.length; c ++) {
	var CorrectX = correctAnswer.charAt(c);
	var StudentX = studentAnswer.charAt(c);
	if (CorrectX == StudentX) {
	result = result + CorrectX;
	}
	else {
	result = result +  "=";
	}
}
Student.value = result;
    if (studentAnswer == correctAnswer){
	    Student.value = "*" + studentAnswer + "*";
    }
}
// "Oder Eingaben"

// 
function inputTable() {
	jQuery('#alertBox').removeClass('padding bg-info bg-success bg-danger');
	var inputs = jQuery('input[type="text"]');
	var count = 0;
	inputs.removeClass('correct incorrect');
	jQuery(inputs).each(function(i,v){
		if(jQuery(v).val().toLowerCase() == jQuery(v).attr('name').toLowerCase()) {
			jQuery(v).addClass('correct');
			count++;
		}
		else {
			jQuery(v).addClass('incorrect');
		}
	})
	if(count == inputs.length) {
		jQuery('#alertBox').addClass('padding bg-success');
		jQuery('#alertBox').html('Toll, alles richtig!');
	}
	else {
		jQuery('#alertBox').addClass('padding bg-info');
		jQuery('#alertBox').html('Leider nicht ganz richtig. Du hast ' + count + '/' + inputs.length + ' richtig');
	}
}

function inputVal() {
	jQuery('#alertBox').removeClass('padding bg-info bg-success bg-danger');
	jQuery('#alertBox').html('');
	var correctAnswers = jQuery('input.correctAnswers').val().split(',');
	jQuery('body').find('input.answer.hidden').remove();
	var userAnswers = jQuery('input.answer');
	var countCorrect = 0;
	var usedAnswers = [];
	jQuery(userAnswers).removeClass('correct');
	jQuery(correctAnswers).each(function(i,v){
		userAnswers.each(function(i2,v2) {
			var cleanV2 = jQuery(v2).val().toLowerCase().trim();
			if(jQuery.inArray(cleanV2, usedAnswers) != -1) {
				//jQuery('#alertBox').html('Ein Eintrag ist mehrfach vorhanden. Versuche es doch nochmal oder frag iWi.' + '<br />');
				console.log('Ein Eintrag ist mehrfach vorhanden. Versuche es doch nochmal oder frag iWi.' + '<br />');
			}
			if(v.toLowerCase() == cleanV2 && jQuery.inArray(cleanV2, usedAnswers) == -1) {
				jQuery(v2).addClass('correct');
				countCorrect++;
				usedAnswers.push(cleanV2);
			}
		});
	});
	if(userAnswers.length == 1) {
		if(countCorrect == userAnswers.length) {
			jQuery('#alertBox').addClass('padding bg-success');
			jQuery('#alertBox').html('Stimmt!');
		}
		else {
			jQuery('#alertBox').addClass('padding bg-danger');
			jQuery('#alertBox').html('Stimmt leider nicht...');
		}
	}
	else {
		jQuery('#alertBox').append("Du hast " + countCorrect + "/" + userAnswers.length + " richtig!");
		jQuery('#alertBox').addClass('padding bg-info');
	}
}

// Reihenfolge der inputs muss festgelegt sein (Prozesse)
// oder auch zum Beispiel für die Formeln
function inputValOrder() {
	jQuery('#alertBox').removeClass('bg-danger bg-success padding');
	if( jQuery('.input1').val().toLowerCase() == jQuery('.input1').attr('name').toLowerCase() && jQuery('.input2').val().toLowerCase() == jQuery('.input2').attr('name').toLowerCase() && jQuery('.input3').val().toLowerCase() == jQuery('.input3').attr('name').toLowerCase() ){
		jQuery('#alertBox').addClass('padding bg-success');
		jQuery('#alertBox').html('Richtig!');
		}
	else 
	{
		jQuery('#alertBox').addClass('padding bg-danger');
		jQuery('#alertBox').html('Leider falsch. Versuche es doch nochmal.');
	}
}
// brauchen wir doch noch, obwohl etwas veraltet
function input_Korrektur() {
		
		// Unser Input
	  	var aw1 = a1.tf1.value;
	  	var aw2 = a1.tf2.value;
		var aw3 = a1.tf3.value;
		var aw4 = a1.tf4.value;
		
		// Correct Answers
		var ca1 = a1.ca1.value;
		var ca2 = a1.ca2.value;
		var ca3 = a1.ca3.value;
		var ca4 = a1.ca4.value;
		
		// 
		var alertBox = document.getElementById("alertBox");
	
	var richtigzaehler = 0;	
	
	if( aw1==ca1 || aw1==ca2 || aw1==ca3 || aw1==ca4){
				richtigzaehler++;
				} else aw1="";
	if( aw2==ca1 || aw2==ca2 || aw2==ca3 || aw2==ca4){
				richtigzaehler++;
				} else aw2="";
	if( aw3==ca1 || aw3==ca2 || aw3==ca3 || aw3==ca4){
				richtigzaehler++;
				} else aw3="";
	if( aw4==ca1 || aw4==ca2 || aw4==ca3 || aw4==ca4){
				richtigzaehler++;
				} else aw4="";
	
	if ( richtigzaehler==4 ) {
		if( aw1!=aw2 && aw2!=aw3 && aw3 != aw4 ){
			alertBox.className = "padding bg-success";
			alertBox.innerHTML = "Toll, alles richtig!";
			}
		else{
			alertBox.className = "padding bg-info";
			alertBox.innerHTML = "Du hast einen Eintrag doppelt. Versuch's doch nochmal oder frag iWi.";
			}
		}
	else { 
		alertBox.className = "padding bg-danger";
		alertBox.innerHTML = "Leider nicht. Versuch's nochmal, oder bitte iWi um Hilfe.";
		}		
}

// Select Validierung
function checkSelects() {
	jQuery('body').find('select.selects.hidden').remove();
	jQuery('#alertBox').removeClass('padding bg-danger bg-success');
	jQuery('.selects').removeClass('correct');
	jQuery('.selects').removeClass('wrong');
	jQuery('.selects').each(function(i,v) {
		if(jQuery(v).val() == '1') {
			jQuery(v).addClass('correct');
		} else {
			jQuery(v).addClass('wrong');
		}
	});
	if(jQuery('.selects').length == jQuery('.selects.correct').length) {
		jQuery('#alertBox').addClass('padding bg-success');
		jQuery('#alertBox').html('Stimmt!');
	}
	else {
		jQuery('#alertBox').addClass('padding bg-danger');
		jQuery('#alertBox').html('Stimmt leider nicht ganz... Du hast ' + jQuery('.selects.correct').length + ' von ' + jQuery('.selects').length + ' richtig.');
	}
}


function radioVal() {
	jQuery('input[type="radio"]').parent().removeClass('correct');
	jQuery('input.solution:checked').parent().addClass('correct');
	jQuery('#alertBox').removeClass('padding bg-success bg-danger');
	if(jQuery('input.solution:checked').parent().hasClass('correct')) {
			jQuery('#alertBox').addClass('padding bg-success');
			jQuery('#alertBox').html('Stimmt!');
	}
	else {
		jQuery('#alertBox').addClass('padding bg-danger');
		jQuery('#alertBox').html('Stimmt leider nicht...');
	}
}

function checkBoxVal() {
	jQuery('input[type="checkbox"]').parent().removeClass('correct');
	jQuery('input.solution:checked').parent().addClass('correct');
	console.log(jQuery('input.solution').length + ' sind möglich');
	jQuery('#alertBox').addClass('padding bg-info');
	jQuery('#alertBox').html('Du hast ' + jQuery('input.solution:checked').length + 'von ' + jQuery('input.solution').length + ' Möglichkeiten richtig.');
}
// Klappt einen Lösungsvorschlag aus
function toggleAnswer1() {
	if(!jQuery('#btnloesung1').hasClass('disabled')) {
		jQuery('.aufgabe1').toggle();
	}
}
function toggleAnswer2() {
	if(!jQuery('#btnloesung2').hasClass('disabled')) {
		jQuery('.aufgabe2').toggle();
	}
}
function toggleAnswer3() {
	if(!jQuery('#btnloesung3').hasClass('disabled')) {
		jQuery('.aufgabe3').toggle();
	}
}
jQuery('.toggleMoreInformation').click(function() {
    jQuery(this).parent().siblings(".ausklappen").toggleClass("hidden");
});
jQuery('#loesung1').keyup(function () {
	if(jQuery(this).val().length >= 15) {
		jQuery('#btnloesung1').removeClass('disabled');
	} else if(jQuery(this).val().length < 15) {
		jQuery('#btnloesung1').addClass('disabled');
	}
});
jQuery('#loesung2').keyup(function () {
	if(jQuery(this).val().length >= 15) {
		jQuery('#btnloesung2').removeClass('disabled');
	} else if(jQuery(this).val().length < 15) {
		jQuery('#btnloesung2').addClass('disabled');
	}
});
jQuery('#loesung3').keyup(function () {
	if(jQuery(this).val().length >= 15) {
		jQuery('#btnloesung3').removeClass('disabled');
	} else if(jQuery(this).val().length < 15) {
		jQuery('#btnloesung3').addClass('disabled');
	}
});


//Drag & Drop Tabelle
jQuery("#drag1").draggable({
	revert: "invalid",
	snap: ".droppable",
	snapMode: "inner"
});
jQuery("#drag2").draggable({
	revert: "invalid",
	snap: ".droppable",
	snapMode: "inner"
});
jQuery("#drag3").draggable({
	revert: "invalid",
	snap: ".droppable",
	snapMode: "inner"
});
jQuery("#drag4").draggable({
	revert: "invalid",
	snap: ".droppable",
	snapMode: "inner"
});
jQuery("#drag5").draggable({
	revert: "invalid",
	snap: ".droppable",
	snapMode: "inner"
});
jQuery("#drag6").draggable({
	revert: "invalid",
	snap: ".droppable",
	snapMode: "inner"
});
jQuery("#drag7").draggable({
	revert: "invalid",
	snap: ".droppable",
	snapMode: "inner"
});
jQuery("#drag8").draggable({
	revert: "invalid",
	snap: ".droppable",
	snapMode: "inner"
});

jQuery("#drop1").droppable({
	accept: "#drag7"
});
jQuery("#drop2").droppable({
	accept: "#drag6"
});
jQuery("#drop3").droppable({
	accept: "#drag8"
});
jQuery("#drop4").droppable({
	accept: "#drag2"
});
jQuery("#drop5").droppable({
	accept: "#drag1"
});
jQuery("#drop6").droppable({
	accept: "#drag3"
});
jQuery("#drop7").droppable({
	accept: "#drag4"
});
jQuery("#drop8").droppable({
	accept: "#drag5"
});

//Alles für Aufgabe 1
jQuery('#cursor-change>strong').click(function () {
	jQuery('#cursor-change>strong').removeClass('wrong');
	jQuery('#cursor-change>strong').removeClass('correct');
	if(jQuery(this).hasClass('vormerken')) {
		jQuery('strong.vormerken').toggleClass('marked');
	} else if(jQuery(this).hasClass('video')) {
		jQuery('strong.video').toggleClass('marked');
	} else if(jQuery(this).hasClass('ausleiher')) {
		jQuery('strong.ausleiher').toggleClass('marked');
	} else {
		jQuery(this).toggleClass('marked');
	}

});

function markWords() {
	if(jQuery('#bib').hasClass('marked')) {
		jQuery('#bib').removeClass('marked');
		jQuery('#bib').addClass('wrong');
	}
	if(jQuery('#is').hasClass('marked')) {
		jQuery('#is').removeClass('marked');
		jQuery('#is').addClass('wrong');
	}
	if(jQuery('#info').hasClass('marked')) {
		jQuery('#info').removeClass('marked');
		jQuery('#info').addClass('wrong');
	}
	if(jQuery('#verleihen').hasClass('marked')) {
		jQuery('#verleihen').removeClass('marked');
		jQuery('#verleihen').addClass('correct');
	}
	if(jQuery('strong.vormerken').hasClass('marked')) {
		jQuery('strong.vormerken').removeClass('marked');
		jQuery('strong.vormerken').addClass('correct');
	}
	if(jQuery('strong.video').hasClass('marked')) {
		jQuery('strong.video').removeClass('marked');
		jQuery('strong.video').addClass('correct');
	}
	if(jQuery('strong.ausleiher').hasClass('marked')) {
		jQuery('strong.ausleiher').removeClass('marked');
		jQuery('strong.ausleiher').addClass('correct');
	}
	if(jQuery('#strafen').hasClass('marked')) {
		jQuery('#strafen').removeClass('marked');
		jQuery('#strafen').addClass('correct');
	}
	if(jQuery('#rueckgaben').hasClass('marked')) {
		jQuery('#rueckgaben').removeClass('marked');
		jQuery('#rueckgaben').addClass('wrong');
	}
	if(jQuery('#zahlen').hasClass('marked')) {
		jQuery('#zahlen').removeClass('marked');
		jQuery('#zahlen').addClass('correct');
	}

	jQuery('#cursor-change>strong').removeClass('marked');
}
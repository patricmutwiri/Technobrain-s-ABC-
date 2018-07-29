	/*
		* @author/Developer: Patrick Mutwiri
		* Email: patwiri@gmail.com
		* @link/GIT: https://github.com/patricmutwiri
		* @link/Twitter: https://twitter.com/patric_mutwiri
		* Call: +254727542899
		* @link/Site: http://patric.xyz

	    --------------------------------------------------------------
	    | 		*******       **      ************ ************		 |
        | 		*******       **      ************ ************		 |
        | 		***  **     **  **         ***     ***      ***		 |
        | 		***  **     **  **         ***     ***      ***		 |
        | 		*******    ********        ***     ***      ***		 |
        | 		*******    ********        ***     ***      ***		 |
        | 		***       **      **       ***     ************		 |
        | 		***       **      **       ***     ************		 |
        --------------------------------------------------------------
	*/
	jQuery(function(){
		jQuery('button#export').on('click', function(){
			let url = jQuery('a.navbar-brand').attr('href')+'/export';
			window.location = url;
		});

		jQuery('input[type=datex]').datetimepicker();
		let homeurl = jQuery('a.navbar-brand').attr('href');
		let q = jQuery('div.question'); //Qs
		q.each(function(){
			let $thisQuery = jQuery(this), prev = $thisQuery.find('button.previous-question'), b = $thisQuery.find('button.continue'), qid = $thisQuery.attr('id'); //init
			prev.on('click', function(){ // Go to the prev question
				let $thisbutton = jQuery(this), 
					parent = $thisbutton.parent('div.question'), 
					prevQ = parent.prev('div.question.visited');
				//prev Q
				parent.toggleClass('hidden');
				prevQ.toggleClass('hidden');
				return false;
			});

			b.on('click',function(){ //click continue
				let $thisbutton = jQuery(this), 
					message = '',
					parent = $thisbutton.parent('div.question'), 
					nextQ = parent.next('div.question'), 
					checkedradio = jQuery('input[name="'+qid+'"]:checked'),
					radio = $thisQuery.children('input[type=radio]'),
					selectedchoice = '',
					inputtext = '';
					if(qid == 'q5' || qid == 'q6') {
						selectedchoice = jQuery('select[name='+qid+']').val();
					}
					if(qid == 'q0') {
						selectedchoice = jQuery('select[name=not_reachable]').val();
					}
					if(qid == 'q11') {
						inputtext = $thisQuery.children('input[type=text]');
					}
					//console.log(parent);  //Log Parent
					//console.log(nextQ);  //Log Next Question Div
				if(parent.hasClass('last')) {
					//submit at once
					let action = jQuery('form.form-control.new-call').attr('action'), thisform = jQuery('form.form-control.new-call');
					jQuery.post(action, thisform.serialize(), function(data){
						console.log(data);
						window.location = homeurl;
					});
				} else {
					parent.addClass('visited');
					if(!checkedradio.length && !selectedchoice && inputtext == '' && qid != 'thank-you') {
						message = 'Select a Value please';
					} else {
						let radioName = checkedradio.attr('name'), radioValue = checkedradio.attr('value'); //get selected name n value
						console.log('[Question: '+radioName+' | Answer '+radioValue+']');
						if (radioName == 'q0' && radioValue == 'No') {
							//despose
							jQuery('div.not-reachable-desposition').removeClass('hidden');
							if(selectedchoice) {
								nextQ = jQuery('div.last');
							} else {
								message = 'Dispose the call properly please';
							}
						} 
						if (radioName == 'q1' && radioValue == 'Yes') {
							nextQ = jQuery('div.question#q3');
						} 
						if (radioName == 'q10') {
							jQuery('input[name=q10_datetime').removeClass('hidden');
						} 
						if (qid == 'q12') {
							jQuery('input[name="q12_details"]').removeClass('hidden');
						}
						if (radioName == 'q13' && radioValue == 'Yes') {
							jQuery('div.q13_phone_email').removeClass('hidden');
							if(!jQuery('input[name=q13_mail]').val() ) {
								message = 'Email needed please';
							}
							if(!jQuery('input[name=q13_phone]').val() ) {
								message = 'Phone needed please';
							}
							if(!jQuery('input[name=q13_phone]').val() && !jQuery('input[name=q13_phone]').val()) { 
								message = 'Phone and email needed please';
							}
						}
						if (radioName == 'q2') {
							if(radioValue == 'No') {
								console.log(jQuery('input[name=q2_notclientsnumber]:checked'));
								if(!jQuery('input[name=q2_notclientsnumber]:checked').val()) {
									message = 'Select a desposition option please';
								}
							} else {
								jQuery('.q2_datetime').removeClass('hidden');
								if( !jQuery('input[name=q2_datetime]').val() ) {
									message = 'Input call back date please';
								}
							}
							nextQ = jQuery('div.last');
						}
						
						if (radioName == 'q3') {
							if(radioValue == 'No') {
								jQuery('div.q3_desposition').removeClass('hidden');
								if(!jQuery('input[name=q3_desposition]:checked').val()) {
									message = 'Select a desposition option please';
								}
								nextQ = jQuery('div.last');
							}
						}

						if(qid == 'q5') {
							if(selectedchoice == 'Bad' || selectedchoice == 'Poor') {
								if(!confirm("Shall we Continue?")) {
									if(!jQuery('select[name=reachable_desposition]').val()) {
							    		jQuery('div.reachable-desposition').removeClass('hidden');
										message = 'Dispose the call properly please';
							    		nextQ = jQuery('div.last');
							    	} else {
							    		nextQ = jQuery('div.last');
							    	}
								}
							}
						}
						if(qid == 'q11' && !jQuery('input[name="q11_email"]').val() ) { 
							message = 'Email address needed please';
						}

						if(qid == 'q12' && radioValue == 'Yes' ) {
							if(!jQuery('input[name=q12_details]').val() ) {
								message = 'Details needed please';
							}
						}

						if(message) {
							alert(message);
							return false;
						}
						//next Q
						parent.toggleClass('hidden');
						nextQ.toggleClass('hidden');
					}
					if(message) {
						if( parent.children('div.message').html() ) {
							parent.children('div.message').text(message);
						} else {
							parent.append('<div class="message alert alert-danger danger">'+message+'</div>');
						}
						return false;
					}
				}
				if(!$thisQuery.hasClass('hidden') && $thisQuery.hasClass('last')) {
					let action = jQuery('form.form-control.new-call').attr('action'), thisform = jQuery('form.form-control.new-call');
					jQuery.post(action, thisform.serialize(), function(data){
						console.log(data);
						window.location = homeurl+'/crmcalls';
					});
				}
				return false;
			});
		});
	});
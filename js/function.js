$(document).ready(function() {

	 //menu functions
  var path = window.location.pathname;
	var page = path.split("/").pop();
	
	if (page=="add-patient.php") {
		//call the function for patient number automation
		patNum();
		$("#patient").addClass('active');
	}else if (page=="all-patient.php") {
		$("#patient").addClass('active');
	}else if (page=="patient-profile.php") {
		$("#patient").addClass('active');
	}else if(page=="edit-patient.php"){
		get_patinfo();
		$("#patient").addClass('active');
	}else if(page=="add-usr.php"){
		$("#usr").addClass('active');
	}else if(page=="all-usr.php"){
		$("#usr").addClass('active');
	}else if(page=="edit-usr.php"){
		$("#usr").addClass('active');
	}else if(page=="usr-view.php"){
		$("#usr").addClass('active');
	}else if(page=="edit-esr.php"){
		$("#esr").addClass('active');
	}else if(page=="all-esr.php"){
		$("#esr").addClass('active');
	}else if(page=="add-esr.php"){
		$("#esr").addClass('active');
	}else if(page=="add-history.php"){
		$("#patient").addClass('active');
	}else if(page=="history.php"){
		$("#patient").addClass('active');
	}else if(page=="edit-history.php"){
		$("#patient").addClass('active');
	}else if(page=="assessment.php"){
		$("#patient").addClass('active');
	}else if(page=="add-assessment.php"){
		$("#patient").addClass('active');
	}else if(page=="edit-assessment.php"){
		$("#patient").addClass('active');
	}else if(page=="edit-plan.php"){
		$("#patient").addClass('active');
	}else if(page=="add-plan.php"){
		$("#patient").addClass('active');
	}else if(page=="plan.php"){
		$("#patient").addClass('active');
	}else if(page=="referral.php"){
		$("#patient").addClass('active');
	}else if(page=="edit-referral.php"){
		$("#patient").addClass('active');
	}else if(page=="referral-add.php"){
		$("#patient").addClass('active');
	}else{
		$("#dashboard").addClass('active');
	}

	$('#pat-name').select2({
      width: 'resolve',
      placeholder: "Search Patient...",
      ajax: {
            url: 'data/patient-search.php',
            dataType: 'json',
            quietMillis: 100,
            processResults: function (data) {
                return {
                    results: $.map(data, function(obj) {
                        return { id: obj.pat_num, text: obj.fullname };
                    })
                };
            }
        }
    });
	
	$('b[role="presentation"]').hide();
	$('.select2-selection__arrow').append('<i class="fa fa-search"></i>');

	$('#pat-name').on('select2:select', function (e) {
		var data = e.params.data;
		var encryptedAES = CryptoJS.AES.encrypt(data.id, "My Secret Passphrase");
	  	window.location.replace('patient-profile.php?patient='+encryptedAES);
	});
	
	
});


function count(param){
  $('.'+param).each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 4000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
  });
}


var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

// funtion to decript the url
function decrypt(e){
	var para = getUrlParameter(e);
	var plaintext;

	var decryptedBytes = CryptoJS.AES.decrypt(para, "My Secret Passphrase");
		
	plaintext = decryptedBytes.toString(CryptoJS.enc.Utf8);
	
	return plaintext;
}

function showPatientInfo(){
	var plaintext = decrypt('patient');

	$.ajax({
		type: "POST",
		url: 'data/patient-handler.php',
		data: 'info=true&patient='+plaintext,
		cache: false,
		success: function(data){
			var json = $.parseJSON(data);
			$(json).each(function(i, val){
				$(".pat-num").html(plaintext);
				$("#dd-name").html(val.fullname);
				$("#dd-nname").html(val.nname);
				$("#dd-bday").html(val.bday);
				$("#dd-age").html(val.age);
				$("#dd-email").html(val.email);
				$("#dd-occu").html(val.occu);
				$("#dd-socstat").html(val.socstat);
				$("#dd-contact").html(val.contact);
				$("#dd-addphil").html(val.addphil);
				$("#dd-addabr").html(val.addabr);
				$("#dd-wei").html(val.wei+' (kg)');
				$("#dd-hei").html(val.hei+' (cm)');
				$("#dd-bmi").html(val.bmi);
				$("#dd-bp").html(val.sys+' / '+val.dia);
				$("#dd-chicomp").html(val.chicomp);
			})
		}
	});
}

function parInfo(){
	var plaintext = decrypt('patient');
	$.ajax({
		type: "POST",
		url: 'data/patient-handler.php',
		data: 'partners=true&partner='+plaintext,
		cache: false,
		success: function(data){
			var json = $.parseJSON(data);
			$(json).each(function(i, val){
				$("#par-name").html(val.fullname);
				$("#parbday").html(val.parbday);
				$("#parwei").html(val.parwei);
				$("#parhei").html(val.parhei);
				$("#noc").html(val.noc);
				$("#paroccu").html(val.paroccu);
				$("#eversmoke").html(val.eversmoke);
				$("#cursmoke").html(val.cursmoke);
				$("#stiperday").html(val.stiperday);
				$("#agesta").html(val.agesta);
				$("#stiperdaybef").html(val.stiperdaybef);
				$("#agestop").html(val.agestop);
				$("#everdra").html(val.everdra);
				$("#curdri").html(val.curdri);
				$("#morethan").html(val.morethan);
				$("#numdrink").html(val.numdrink);
				$("#agestodri").html(val.agestodri);
				$("#drugs").html(val.drugs);
			})
		}
	});
}

function siemenInfo(){
	var plaintext = decrypt('patient');
	$.ajax({
		type: "POST",
		url: 'data/patient-handler.php',
		data: 'siemen=true&siemen_info='+plaintext,
		cache: false,
		success: function(data){
			var json = $.parseJSON(data);
			$(json).each(function(i, val){
				$("#color").html(val.color);
				$("#volume").html(val.volume);
				$("#ph").html(val.ph);
				$("#viscosity").html(val.viscosity);
				$("#liquetime").html(val.liquetime);
				$("#motility").html(val.motility);
				$("#grading").html(val.grading);
				$("#morphology").html(val.morphology);
				$("#spercnt").html(val.spercnt);
				$("#puscell").html(val.puscell);
				$("#redcell").html(val.redcell);
				$("#bacteria").html(val.bacteria);
				$("#daysabs").html(val.daysabs);
				$("#wss").html(val.wss);
			})
		}
	});
}

function loadProfile(id){
	var profile_name = $(".profile-name").empty();
   	var sidepanel = $(".circle-text-side").empty();
    var email = $(".email").empty();
    var contact = $(".contact").empty();
    var profile = $(".circle-text-profile").empty();
    var prof = $(".circle-text").empty();
    $.ajax({
      type: 'POST',
      url: 'data/profile-handler.php',
      data: "user_id="+id,
      cache: false,
      success: function(data){
        
        var json = $.parseJSON(data);
          $(json).each(function(i,val){
          		profile_name.html(val.fullname);
	            sidepanel.html(val.img);
	            email.html(val.email);
	            contact.html(val.contact);
	            profile.html(val.img);
	            prof.html(val.img);
	            $(".date-reg").html(val.date)
          });
      }
    })
  }

function loadAlluser(){
	var users = $(".products-list").empty();
	$.ajax({
	  type: 'POST',
	  url: 'data/profile-handler.php',
	  data: "user_all=user",
	  cache: false,
	  success: function(data){
	    var json = $.parseJSON(data);
	      $(json).each(function(i,val){
	          users.append('<li class="item">'+
	          	'<div class="product-img circle-text">'+val.img+'</div>'+
		        '<div class="product-info">'+
		          '<a href="javascript:void(0)" class="product-title">'+val.fullname+'</a>'+
		            '<div class="btn-group pull-right">'+
		              '<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">'+
		                '<i class="fa fa-gear" style="font-size: 16px;"></i></button>'+
		              '<ul class="dropdown-menu" role="menu">'+
		                '<li><a href="javascript:void(0);" onclick="editProfile('+val.userId+');">Edit</a></li>'+
		                '<li><a href="javascript:void(0);" onclick="resetPass('+val.userId+')">Reset Password</a></li>'+
		                '<li class="divider"></li>'+
		                '<li><a href="javascript:void(0);" onclick="delUser('+val.userId+');">Delete</a></li>'+
		              '</ul>'+
		            '</div>    '+
		          '<span class="product-description">Date Registered: <strong>'+val.date+
		              '</strong></span>'+
		        '</div>'+
		      '</li>');
	      });
	  }
	})
}

function refresh(tbl){
	$('#'+tbl).DataTable().ajax.reload(null, false );
	$('#'+tbl).on('draw.dt', function() {
	})
}

function infoboxPat(){
      
	$.ajax({
	  type: "POST",
	  url: "data/info-handler.php",
	  data: "infoboxPat=true",
	  cache: false,
	  success: function(data){
		$("#patient-info").html(data.toLocaleString());
		 count("countPat");
	  }
	})
  }
  

function countUser() {
	$.ajax({
		type: "POST",
		url: "data/info-handler.php",
		data: "infoboxUser=true",
		cache: false,
		success: function(data) {
			$("#user-info").html(data.toLocaleString());
			count("countUser");
		}
		
	})
}

function countUltrasound() {
	$.ajax({
		type: "POST",
		url: "data/info-handler.php",
		data: "infoboxUsr=true",
		cache: false,
		success: function(data) {
			$("#countUltrasound").html(data.toLocaleString());
			count("countUltrasound");
		}
		
	})
}

function countEmb() {
	$.ajax({
		type: "POST",
		url: "data/info-handler.php",
		data: "infoboxEsr=true",
		cache: false,
		success: function(data) {
			$("#countEmb").html(data.toLocaleString());
			count("countEmb");
		}
		
	})
}

function icheckboxUsr() {
	$('input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

}


function icheckboxEsr() {
	$('input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

}

function getTitle() {
	$.ajax({
		type: "POST",
		url: "data/info-handler.php",
		data: "getGraTit=true",
		cache: false,
		success: function(data) {
			$(".graTitle").html(data);
		}
	})
}

function recentPat() {
	var users = $(".products-list").empty();
	$.ajax({
	  type: 'POST',
	  url: 'data/info-handler.php',
	  data: "infoboxRec=user",
	  cache: false,
	  success: function(data){
	    var json = $.parseJSON(data);
	      $(json).each(function(i,val){
					
					var formData = val.num;
					var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
	          users.append('<li class="item">'+
	          	'<div class="product-img circle-text">'+val.img+'</div>'+
		        	'<div class="product-info">'+
		          '<a href="patient-profile.php?patient='+encryptedAES+'" class="product-title">'+val.fullname+'</a>'+
		          '<span class="product-description">Date Registered: <strong>'+val.date+
		              '</strong></span>'+
		        '</div>'+
		      '</li>');
	      });
	  }
	})
}

function recentUsr() {
	var users = $(".products-list").empty();
	$.ajax({
	  type: 'POST',
	  url: 'data/recent-handler.php',
	  data: "recusr=true",
	  cache: false,
	  success: function(data){
	    var json = $.parseJSON(data);
	      $(json).each(function(i,val){
					
					var formData = val.num;
					var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
	          users.append('<li class="item">'+
	          	'<div class="product-img circle-text">'+val.img+'</div>'+
		        	'<div class="product-info">'+
		          '<a href="usr-view.php?patient='+encryptedAES+'" class="product-title">'+val.fullname+'</a>'+
		          '<span class="product-description">Date: <strong>'+val.date+
		              '</strong></span>'+
		        '</div>'+
		      '</li>');
	      });
	  }
	})
}

function recentHis() {
	var users = $(".products-list").empty();
	$.ajax({
	  type: 'POST',
	  url: 'data/history-handler.php',
	  data: "rechis=true",
	  cache: false,
	  success: function(data){
	    var json = $.parseJSON(data);
	      $(json).each(function(i,val){
					
			var formData = val.pat_num;
			var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
	          users.append('<li class="item">'+
	          	'<div class="product-img circle-text">'+val.img+'</div>'+
		        	'<div class="product-info">'+
		          '<a href="edit-history.php?patient='+encryptedAES+'" class="product-title">'+val.fullname+'</a>'+
		          '<span class="product-description">Date: <strong>'+val.indate+
		              '</strong></span>'+
		        '</div>'+
		      '</li>');
	      });
	  }
	})
}

function recentAss() {
	var users = $(".products-list").empty();
	$.ajax({
	  type: 'POST',
	  url: 'data/ass-handler.php',
	  data: "recass=true",
	  cache: false,
	  success: function(data){
	    var json = $.parseJSON(data);
		$(json).each(function(i,val){
				
			var formData = val.pat_num;
			var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
			users.append('<li class="item">'+
			'<div class="product-img circle-text">'+val.img+'</div>'+
				'<div class="product-info">'+
				'<a href="edit-assessment.php?patient='+encryptedAES+'" class="product-title">'+val.fullname+'</a>'+
				'<span class="product-description">Date: <strong>'+val.indate+
					'</strong></span>'+
			'</div>'+
			'</li>');
		});
	  }
	})
}

function recentEsr() {
	var users = $(".products-list").empty();
	$.ajax({
	  type: 'POST',
	  url: 'data/recent-handler.php',
	  data: "recesr=true",
	  cache: false,
	  success: function(data){
	    var json = $.parseJSON(data);
	      $(json).each(function(i,val){
					
					var formData = val.num;
					var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
	          users.append('<li class="item">'+
	          	'<div class="product-img circle-text">'+val.img+'</div>'+
		        	'<div class="product-info">'+
		          '<a href="usr-view.php?patient='+encryptedAES+'" class="product-title">'+val.fullname+'</a>'+
		          '<span class="product-description">Date: <strong>'+val.date+
		              '</strong></span>'+
		        '</div>'+
		      '</li>');
	      });
	  }
	})
}

function getPatName() {

	$('#patname').select2({
		width: 'resolve',
		placeholder: "Select Patient...",
		ajax: {
			  url: 'data/patient-search.php',
			  dataType: 'json',
			  quietMillis: 100,
			  processResults: function (data) {
				  return {
					  results: $.map(data, function(obj) {
						  return { id: obj.pat_num, text: obj.fullname };
					  })
				  };

				  
			  }
		  }
	  });
}

function getHisPatName() {

	$('#patname').select2({
		width: 'resolve',
		placeholder: "Select Patient...",
		ajax: {
			  url: 'data/his-search.php',
			  dataType: 'json',
			  quietMillis: 100,
			  processResults: function (data) {
				  console.log(data)
				  return {
					  results: $.map(data, function(obj) {
						  return { id: obj.pat_num, text: obj.fullname };
					  })
				  };

				  
			  }
		  }
	  });
}

function getHisUsr(){
	var plaintext = decrypt('patient');

	var users = $("#ultra-list").empty();
	$.ajax({
	  type: 'POST',
	  url: 'data/recent-handler.php',
	  data: "hisUsr="+plaintext,
	  cache: false,
	  success: function(data){
		 
			if(data!="null"){
				var json = $.parseJSON(data);
				$(json).each(function(i,val){
					
					var formData = val.num;
					var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
						users.append('<li class="item">'+
							'<div class="product-img circle-text">'+val.img+'</div>'+
							'<div class="product-info">'+
							'<a href="usr-view.php?patient='+encryptedAES+'" class="product-title">'+val.date+'</a>'+
							'<span class="product-description">Ultrasound Report</span>'+
						'</div>'+
					'</li>');
					
				});
			}else{
				users.append('<center><li class="item"><h4>No available report</h4></li></center>');
			}
	  }
	})
}

function getHisEsr(){
	var plaintext = decrypt('patient');

	var users = $("#embro-list").empty();
	$.ajax({
	  type: 'POST',
	  url: 'data/recent-handler.php',
	  data: "hisEsr="+plaintext,
	  cache: false,
	  success: function(data){
			if(data!="null"){
				var json = $.parseJSON(data);
				$(json).each(function(i,val){
					
					var formData = val.num;
					var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
						users.append('<li class="item">'+
							'<div class="product-img circle-text">'+val.img+'</div>'+
							'<div class="product-info">'+
							'<a href="esr-view.php?patient='+encryptedAES+'" class="product-title">'+val.date+'</a>'+
							'<span class="product-description">Embryology Summary Report</span>'+
						'</div>'+
					'</li>');
					
				});
			}else{
				users.append('<center><li class="item"><h4>No available report</h4></li></center>');
			}
	  }
	})
}

function loadGraph() {
	$.ajax({
		type: "POST",
		url: "data/info-handler.php",
		data: "graph=true",
		cache: false,
		success: function(data){
			
			var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
			var salesChart = new Chart(salesChartCanvas);
			var month = [];
			var total = [];
			var json = $.parseJSON(data);

			for (var i in data) {
				
			}

		$(json).each(function(i, val){
			month.push(val.month);
			total.push(val.total);	
		})

		var salesChartData = {
			labels: month,
			datasets:[
				{
					label               : 'Digital Goods',
					fillColor           : 'rgba(145,204,213,0.9)',
					strokeColor         : 'rgba(145,204,213,0.9)',
					pointColor          : '#3b8bba',
					pointStrokeColor    : 'rgba(60,141,188,1)',
					pointHighlightFill  : 'rgba(98,163,159,0.9)',
					pointHighlightStroke: 'rgba(60,141,188,1)',
					pointBorderColor		: 'rgba(145,204,213,0.9)',
					pointBorderWidth: 10,
					data                : total
				}
			]
		}

		var salesChartOptions = {
			// Boolean - If we should show the scale at all
			showScale               : true,
			// Boolean - Whether grid lines are shown across the chart
			scaleShowGridLines      : false,
			// String - Colour of the grid lines
			scaleGridLineColor      : 'rgba(0,0,0,.05)',
			// Number - Width of the grid lines
			scaleGridLineWidth      : 1,
			// Boolean - Whether to show horizontal lines (except X axis)
			scaleShowHorizontalLines: true,
			// Boolean - Whether to show vertical lines (except Y axis)
			scaleShowVerticalLines  : true,
			// Boolean - Whether the line is curved between points
			bezierCurve             : true,
			// Number - Tension of the bezier curve between points
			bezierCurveTension      : 0.3,
			// Boolean - Whether to show a dot for each point
			pointDot                : false,
			// Number - Radius of each point dot in pixels
			pointDotRadius          : 4,
			// Number - Pixel width of point dot stroke
			pointDotStrokeWidth     : 1,
			// Number - amount extra to add to the radius to cater for hit detection outside the drawn point
			pointHitDetectionRadius : 20,
			// Boolean - Whether to show a stroke for datasets
			datasetStroke           : true,
			// Number - Pixel width of dataset stroke
			datasetStrokeWidth      : 2,
			// Boolean - Whether to fill the dataset with a color
			datasetFill             : true,
			// String - A legend template
			legendTemplate          : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<datasets.length; i++){%><li><span style=\'background-color:<%=datasets[i].lineColor%>\'></span><%=datasets[i].label%></li><%}%></ul>',
			// Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
			maintainAspectRatio     : true,
			// Boolean - whether to make the chart responsive to window resizing
			responsive              : true
		};
	
		// Create the line chart
		salesChart.Line(salesChartData, salesChartOptions);

		}
	})
}

function getPatHisInfo(){
    var plaintext = decrypt('patient');
    $.ajax({
        type: "POST",
        url: "data/history-handler.php",
        data: "get_pat_his="+plaintext,
        cache: false,
        success: function(data){

			if(data!=0){
				var json = $.parseJSON(data);
				$(json).each(function(i,val){
					$('#usrid').val(val.pat_num);
					$('#pat_fullname').val(val.fullname);
					//b
					$("#b1").val(val.b1);
					$("#b2").val(val.b2);
					$("#b3").val(val.b3);
					$("#b4").val(val.b4);
					$('input[name=b5][value='+val.b5+']').prop('checked', 'checked');
					$('input[name=b6][value='+val.b6+']').prop('checked', 'checked');
					$("#b7").val(val.b7);
					$('input[name=b8][value='+val.b8+']').prop('checked', 'checked');
					$('input[name=b9][value='+val.b9+']').prop('checked', 'checked');
					//c
					$("#c1").val(val.c1);
					$("#c2").val(val.c2);
					$("#c3").val(val.c3);
					$("#c4").val(val.c4);
					$("#c5").val(val.c5);
					$("#c6").val(val.c6);
					$('input[name=c7][value='+val.c7+']').prop('checked', 'checked');
					$("#c8").val(val.c8);
					$("#c9").val(val.c9);
					//d
					$("#d1").val(val.d1);
					//e
					$('input[name=e1][value='+val.e1+']').prop('checked', 'checked');
					$('input[name=e2][value='+val.e2+']').prop('checked', 'checked');
					$('input[name=e1-2][value='+val.e1_2+']').prop('checked', 'checked');
					//f
					if(val.f1=="on"){
						$('input[name=f1]').iCheck('check');
					}
					if(val.f2=="on"){
						$('input[name=f2]').iCheck('check');
					}
					if(val.f3=="on"){
						$('input[name=f3]').iCheck('check');
					}
					if(val.f4=="on"){
						$('input[name=f4]').iCheck('check');
					}
					if(val.f5=="on"){
						$('input[name=f5]').iCheck('check');
					}
					if(val.f6=="on"){
						$('input[name=f6]').iCheck('check');
					}
					if(val.f7=="on"){
						$('input[name=f7]').iCheck('check');
					}
					if(val.f8=="on"){
						$('input[name=f8]').iCheck('check');
					}
	
					$("#f9").val(val.f9);
					$("#f10").val(val.f10);
					$("#f11").val(val.f11);
					$("#f12").val(val.f12);
					$("#f13").val(val.f13);
					$("#f14").val(val.f14);
					$("#f15").val(val.f15);
					$("#f16").val(val.f16);
					$("#f17").val(val.f17);
					$("#f18").val(val.f18);
					$("#f19").val(val.f19);
					$("#f20").val(val.f20);
					$("#f21").val(val.f21);
					$("#f22").val(val.f22);
					$("#f23").val(val.f23);
					$("#f24").val(val.f24);
					//g
					if(val.g1=="on"){
					   $('input[name=g1]').iCheck('check');
					}
					 $("#g2").val(val.g2);
					 $("#g3").val(val.g3);
					 $("#g4").val(val.g4);
					 $("#g5").val(val.g5);
					 $("#g6").val(val.g6);
					 $("#g7").val(val.g7);
					 //h
					 $("#h1").val(val.h1);
					 $('input[name=h2][value='+val.h2+']').prop('checked', 'checked');
					 $('input[name=h3][value='+val.h3+']').prop('checked', 'checked');
					 $("#h4").val(val.h4);
					 $("#h5").val(val.h5);
					 $("#h6").val(val.h6);
					 $("#h7").val(val.h7);
					 $("#h8").val(val.h8);
					 $("#h9").val(val.h9);
					 $('input[name=h10][value='+val.h10+']').prop('checked', 'checked');
					 //i
					if(val.i1=="on"){
						$('input[name=i1]').iCheck('check');
					}
					if(val.i2=="on"){
						$('input[name=i2]').iCheck('check');
					}
					if(val.i3=="on"){
						$('input[name=i3]').iCheck('check');
					}
					if(val.i4=="on"){
						$('input[name=i4]').iCheck('check');
					}
					if(val.i5=="on"){
						$('input[name=i5]').iCheck('check');
					}
					if(val.i6=="on"){
						$('input[name=i6]').iCheck('check');
					}
					if(val.i7=="on"){
						$('input[name=i7]').iCheck('check');
					}
					if(val.i8=="on"){
						$('input[name=i8]').iCheck('check');
					}
					if(val.i9=="on"){
						$('input[name=i9]').iCheck('check');
					}
					$("#i10").val(val.i10);
					//j
					if(val.j1=="on"){
						$('input[name=j1]').iCheck('check');
					}
					if(val.j2=="on"){
						$('input[name=j2]').iCheck('check');
					}
					if(val.j3=="on"){
						$('input[name=j3]').iCheck('check');
					}
					if(val.j4=="on"){
						$('input[name=j4]').iCheck('check');
					}
					if(val.j5=="on"){
						$('input[name=j5]').iCheck('check');
					}
					if(val.j6=="on"){
						$('input[name=j6]').iCheck('check');
					}
					if(val.j7=="on"){
						$('input[name=j7]').iCheck('check');
					}
	
					//K
					$("#k1").val(val.k1);
					$("#k2").val(val.k2);
					$("#k3").val(val.k3);
					$("#k1-2").val(val.k1_2);
					$("#k2-2").val(val.k2_2);
					$("#k3-2").val(val.k3_2);
					$("#k1-3").val(val.k1_3);
					$("#k2-3").val(val.k2_3);
					$("#k3-3").val(val.k3_3);
	
					//l
					$('input[name=l1][value='+val.l1+']').prop('checked', 'checked');
					$("#l2").val(val.l2);
					$('input[name=l3][value='+val.l3+']').prop('checked', 'checked');
					$("#l4").val(val.l4);
					$("#l5").val(val.l5);
					$("#l6").val(val.l6);
					$('input[name=l7][value='+val.l7+']').prop('checked', 'checked');
					$("#l8").val(val.l8);
					$("#l9").val(val.l9);
					$("#l10").val(val.l10);
					$("#l11").val(val.l11);
	
					//m
					$('input[name=m1][value='+val.m1+']').prop('checked', 'checked');
					$("#m2").val(val.m2);
					$("#m3").val(val.m3);
					$("#m4").val(val.m4);
	
					//n
					if(val.n1=="on"){
						$('input[name=n1]').iCheck('check');
					}
					if(val.n2=="on"){
						$('input[name=n2]').iCheck('check');
					}
					if(val.n3=="on"){
						$('input[name=n3]').iCheck('check');
					}
					if(val.n4=="on"){
						$('input[name=n4]').iCheck('check');
					}
					$("#n5").val(val.n5);
					if(val.n6=="on"){
						$('input[name=n6]').iCheck('check');
					}
					   $("#n7").val(val.n7);
					   $("#n8").val(val.n8);
					   $("#n9").val(val.n9);
	
					   if(val.o1=="on"){
						$('input[name=o1]').iCheck('check');
					}
					if(val.o2=="on"){
						$('input[name=o2]').iCheck('check');
					}
					if(val.o3=="on"){
						$('input[name=o3]').iCheck('check');
					}
					if(val.o4=="on"){
						$('input[name=o4]').iCheck('check');
					}
					if(val.o5=="on"){
						$('input[name=o5]').iCheck('check');
					}
					if(val.o6=="on"){
						$('input[name=o6]').iCheck('check');
					}
					if(val.o7=="on"){
						$('input[name=o7]').iCheck('check');
					}
					if(val.o8=="on"){
						$('input[name=o8]').iCheck('check');
					}
					if(val.o9=="on"){
						$('input[name=o9]').iCheck('check');
					}
					if(val.o10=="on"){
						$('input[name=o10]').iCheck('check');
					}
					$("#o11").val(val.o11);
				})
			}else{
				$("#history-container").empty();
				$("#history-container").html("<center><h4>No available history</h4></center>")
			}
           
           
        }
    })

}

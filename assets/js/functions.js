
/* Background Images
-------------------------------------------------------------------*/
var  pageTopImage = jQuery('#page-top').data('background-image');
var  aboutImage = jQuery('#about').data('background-image');
var  subscribeImage = jQuery('#subscribe').data('background-image');
var  contactImage = jQuery('#contact').data('background-image');

if (pageTopImage) {  jQuery('#page-top').css({ 'background-image':'url(' + pageTopImage + ')' }); };
if (aboutImage) {  jQuery('#about').css({ 'background-image':'url(' + aboutImage + ')' }); };
if (subscribeImage) {  jQuery('#subscribe').css({ 'background-image':'url(' + subscribeImage + ')' }); };
if (contactImage) {  jQuery('#contact').css({ 'background-image':'url(' + contactImage + ')' }); };

/* Background Images End
-------------------------------------------------------------------*/



/* Document Ready function
-------------------------------------------------------------------*/
jQuery(document).ready(function($) {
	"use strict";


    /* Window Height Resize
    -------------------------------------------------------------------*/
    var windowheight = jQuery(window).height();
    if(windowheight > 650)
    {
         $('.pattern').removeClass('height-resize');
    }
    /* Window Height Resize End
    -------------------------------------------------------------------*/


    
	/* Main Menu   
	-------------------------------------------------------------------*/
	$('#main-menu #headernavigation').onePageNav({
		currentClass: 'active',
		changeHash: false,
		scrollSpeed: 750,
		scrollThreshold: 0.5,
		scrollOffset: 0,
		filter: '',
		easing: 'swing'
	});  

	/* Main Menu End  
	-------------------------------------------------------------------*/



	/* Next Section   
	-------------------------------------------------------------------*/
	$('.next-section .go-to-about').click(function() {
    	$('html,body').animate({scrollTop:$('#about').offset().top}, 1000);
  	});
  	$('.next-section .go-to-subscribe').click(function() {
    	$('html,body').animate({scrollTop:$('#subscribe').offset().top}, 1000);
  	});
  	$('.next-section .go-to-contact').click(function() {
    	$('html,body').animate({scrollTop:$('#contact').offset().top}, 1000);
  	});
  	$('.next-section .go-to-page-top').click(function() {
    	$('html,body').animate({scrollTop:$('#page-top').offset().top}, 1000);
  	});

  	/* Next Section End
	-------------------------------------------------------------------*/


	/* Subscribe End
	-------------------------------------------------------------------*/




	/* Contact
	-------------------------------------------------------------------*/
    // Email from Validation
  $('#contact-submit').click(function(e){ 

    //Stop form submission & check the validation
    e.preventDefault();


    $('.first-name-error, .last-name-error, .contact-email-error, .contact-subject-error, .contact-message-error').hide();

    // Variable declaration
    var error = false;
    var k_first_name = $('#first_name').val();
    var k_last_name = $('#last_name').val();
    var k_email = $('#contact_email').val(); 
    var k_subject = $('#subject').val(); 
    var k_message = $('#message').val();

    // Form field validation
    if(k_first_name.length == 0){
      var error = true; 
      $('.first-name-error').html('<i class="fa fa-exclamation"></i> First name is required.').fadeIn();
    }  

    if(k_last_name.length == 0){
      var error = true;
      $('.last-name-error').html('<i class="fa fa-exclamation"></i> Last name is required.').fadeIn();
    }  

    if(k_email.length != 0 && validateEmail(k_email)){
       
    } else {
      var error = true; 
      $('.contact-email-error').html('<i class="fa fa-exclamation"></i> Please enter a valid email address.').fadeIn();
    }

    if(k_subject.length == 0){
      var error = true;
     $('.contact-subject-error').html('<i class="fa fa-exclamation"></i> Subject is required.').fadeIn();
    } 

    if(k_message.length == 0){
      var error = true;
      $('.contact-message-error').html('<i class="fa fa-exclamation"></i> Please provide a message.').fadeIn();
    }  

    // If there is no validation error, next to process the mail function
    if(error == false){

        $('#contact-submit').hide();
        $('#contact-loading').fadeIn();
        $('.contact-error-field').fadeOut();


      // Disable submit button just after the form processed 1st time successfully.
      $('#contact-submit').attr({'disabled' : 'true', 'value' : 'Sending' });

      /* Post Ajax function of jQuery to get all the data from the submission of the form as soon as the form sends the values to email.php*/
      $.post("php/contact.php", $("#contact-form").serialize(),function(result){
        //Check the result set from email.php file.
        if(result == 'sent'){



          //If the email is sent successfully, remove the submit button
          $('#first_name').remove();
          $('#last_name').remove(); 
          $('#contact_email').remove();
          $('#subject').remove(); 
          $('#message').remove();
          $('#contact-submit').remove(); 

          $('.contact-box-hide').slideUp();
          $('.contact-message').html('<i class="fa fa-check contact-success"></i><div>Your message has been sent.</div>').fadeIn();
        } else {
          $('.btn-contact-container').hide();
          $('.contact-message').html('<i class="fa fa-exclamation contact-error"></i><div>Something went wrong, please try again later.</div>').fadeIn();
            
        }
      });
    }
  });  
 
         
  function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
      return true;
    } else {
      return false;
    }
  } 
 

  
	/* Contact End
	-------------------------------------------------------------------*/
});

/* Document Ready function End
-------------------------------------------------------------------*/


/* Preloder 
-------------------------------------------------------------------*/
$(window).load(function () {    
    "use strict";
    $("#loader").fadeOut();
    $("#preloader").delay(350).fadeOut("slow");     
    var bannerArray = [];    
    var bannerIndex = -1;

     $.ajax({
              type:'GET',
              url:'php/judul.php',                            
              success:function(res){
                bannerArray = res.banner;
                setInterval(function() {
                ++bannerIndex;
                if (bannerIndex >= bannerArray.length) {
                    bannerIndex = 0;
                }
                $('#fadeout-text').fadeOut(function(){$(this).text(bannerArray[bannerIndex]);}).fadeIn();}, 4000);
              }        
            })    
    

    function updateTime(){  
      var dt = moment().format('DD/M');
      var dayLocale = moment().locale('in').format('dddd');
      var month = moment().locale('in').format('MMMM');
      var years = moment().format('YYYY');
      var hours = moment().format('hh:mm');    
      var seconds = moment().format('ss'); 
      $('#date').text(dt);
      $('#day-locale-text').text(dayLocale);
      $('#month-locale-text').text(month);
      $('#years').text(years);
      $('#hours').text(hours);      
      $('#seconds').text(seconds);  
    }    
    setInterval(updateTime, 1000);
    
    function callJurusan(kode_jurusan){
      for (var i =0;i< kode_jurusan.length;i++) {
        $.ajax({
        type:'GET',
        url:'php/tbl_jurusan.php',
        data:{jurusan:kode_jurusan[i]}
        }).done(function(res){
        //var res = JSON.parse(result); 
                 
          if(res[0].kode_jurusan==1){
            $('#jurusan-stmik').find('h4.section-description').html(res[0].nama_jurusan);
            $('#jurusan-stmik').find('p.deskripsi').html(res[0].keterangan);
          }else {
            $('#jurusan-stie').find('h4.section-description').html(res[0].nama_jurusan);
            $('#jurusan-stie').find('p.deskripsi').html(res[0].keterangan);
          }
        })
      }    
    }

    function dataTabling(){
      for (var i = 1 ; i <= 8; i++) {
        var stmik = "php/matkul.php?jurusan=1&semester="+i;
        var stie = "php/matkul.php?jurusan=2&semester="+i;
        $('table#stmik_'+i).DataTable({
          "dom":"tr",
          "serverSide":true,
          "ajax":stmik,
          "columns":[
                      {title:'kode mata kuliah',className:'text-center',data:0},
                      {title:'nama mata kuliah',className:'text-center',data:1},
                      {title:'sks',className:'text-center',data:2}]
        })
        $('table#stie_'+i).DataTable({
          "serverSide":true,
          "dom":"tr",
          "ajax":stie,
          "columns":[
                      {title:'kode mata kuliah',className:'text-center',data:0},
                      {title:'nama mata kuliah',className:'text-center',data:1},
                      {title:'sks',className:'text-center',data:2}]
        })        
      }
    }

    callJurusan([1,2]);
    dataTabling();
});
 /* Preloder End
-------------------------------------------------------------------*/
   

function Remove(form_id,id){
    jQuery('#error_'+id).html('');
    //jQuery('#'+id).removeClass('fld-error');

    jQuery("#"+form_id+ " #error_"+id).html("");
    jQuery("#"+form_id+ " #"+id).removeClass('fld-error');

}//end Remove 

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}//end IsEmail
function IsPhone(phone) {
  var regex = /^([0-9]{10})+$/;
  return regex.test(phone);
}//endIsPhone

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31
    && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

 function sorting(field,orderBY){
  jQuery('#sorting').val(field);
  jQuery('#orderBy').val(orderBY);
  jQuery('#frmSearch').submit();
}

function setLocation(url) {   
      window.location = url;      
    }

$(document).ready(function() {
	$('.select2').select2();


         jQuery(".onlynumber").keyup(function () {
    this.value = this.value.replace(/[^0-9\.]/g, "");
  });

  jQuery(".onlytext").keyup(function () {
    this.value = this.value.replace(/[^a-zA-z \.]/g, "");
  });

  jQuery(".onlyemail").keyup(function () {
    this.value = this.value.replace(/[^0-9a-zA-z@.\.]/g, "");
  });


    jQuery('.nospecial').keyup(function() {
            this.value = this.value.replace(/[^0-9a-zA-z \-\.]/g, '');
        });
	
	$(".get_url_name").focusout(function(){ 
		
		var	slug=$(".get_url_name").val();		
		var	slug_text= slug.toString().toLowerCase()
    .replace(/\s+/g, '-')           // Replace spaces with -
    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
    .replace(/^-+/, '')             // Trim - from start of text
    .replace(/-+$/, '');            // Trim - from end of text
		//alert(slug_text);
		if($(".put_url_key").val()==''){
			$(".put_url_key").val(slug_text);	
		}
		//alert($(".get_url_name").val());
		if($("#page_title").val()==''){
			$("#page_title").val($(".get_url_name").val());	
		}
		if($("#menu_name").val()==''){
			$("#menu_name").val($(".get_url_name").val());	
		}


    });


	$(".put_url_key").change(function(){ 
			var	slug=$(".put_url_key").val();		
			var	slug_text= slug.toString().toLowerCase()
	    .replace(/\s+/g, '-')           // Replace spaces with -
	    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
	    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
	    .replace(/^-+/, '')             // Trim - from start of text
	    .replace(/-+$/, '');            // Trim - from end of text
			//alert(slug_text);
		$(".put_url_key").val(slug_text);	
	    });


    $(".put_url_key").focusout(function(){ 

    	if($(".put_url_key").val()==''){

		var	slug=$(".get_url_name").val();		
		var	slug_text= slug.toString().toLowerCase()
    .replace(/\s+/g, '-')           // Replace spaces with -
    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
    .replace(/^-+/, '')             // Trim - from start of text
    .replace(/-+$/, '');            // Trim - from end of text
		//alert(slug_text);
		
			$(".put_url_key").val(slug_text);	
		}
    });



$('#checkAll').change(function () {
 	$('tfoot tr th input[type="checkbox"]').prop('checked', $(this).prop('checked'));
    $('tbody tr td input[type="checkbox"]').prop('checked', $(this).prop('checked'));
  })

 $('#checkAllF').change(function () {
 	$('thead tr th input[type="checkbox"]').prop('checked', $(this).prop('checked'));

    $('tbody tr td input[type="checkbox"]').prop('checked', $(this).prop('checked'));
  })


 $('.checkSingle').change(function () {
 	var checkedAll =  0;
 	$('.checkSingle').each(function(){
 		var currentElement = $(this);
 		if(currentElement.is(':checked')==false)
 			checkedAll++;
	});
 	if(checkedAll==0)
 	{
	 	$('thead tr th input[type="checkbox"]').prop('checked','checked');
	    $('tfoot tr th input[type="checkbox"]').prop('checked','checked');
    }
    else
    {
	 	$('thead tr th input[type="checkbox"]').prop('checked',false);
	    $('tfoot tr th input[type="checkbox"]').prop('checked',false);

    }
  })


    


});

function actionType(val) {
    document.getElementById("submit_type").value = val;
}

function submitMassactionAction(action)
{

//alert(action);
  if(action==2)
  {
    var checkedAll =  0;
    $('.checkSingle').each(function(){
      var currentElement = $(this);
      if(currentElement.is(':checked')==true)
      	checkedAll++;
    });
   var formAction =  $('#formAction').val();
    $('#formAction2').val(formAction);
   // alert(formAction);

    jQuery('#error_common').hide();
    if(formAction=='')
    {
      jQuery('#error_common_msg').html("Please select action.");
      jQuery('#error_common').show();
      return false;
    }
    else if(checkedAll==0)
    {
    	jQuery('#error_common_msg').html("Please checked at least one checkbox.");
    	jQuery('#error_common').show();
    	return false;
    }
    else
    {	
		
    	jQuery('#massaction').submit();

    }
    return false;
  }else if(action==1)
  {
    //jQuery('#frmSearch').prop('method','get');
    //jQuery('#frmSearch').submit();
  }
}//end submitAction
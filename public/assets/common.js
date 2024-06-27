/*var $ = jQuery.noConflict();*/
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
  //var regex = /^([0-9]{10})+$/;
  var regex = /^([0-9])+$/;
  return regex.test(phone);
}//endIsPhone



function IsMobile(phone) {
  var regex = /^([0-9]{10})+$/;
  return regex.test(phone);
}//endIsPhone
function IsPincode(phone) {
 
 var regex = /^([0-9]{6})+$/;
  return regex.test(phone);
}//endIsPhone


function IsOTP(phone) {
  var regex = /^([0-9]{6})+$/;
  return regex.test(phone);
}//endIsPhone
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31
    && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

function isAlphaKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    
    
 if (charCode==32){
        return true;
    }

     if (charCode==91 || charCode==92  || charCode==93 || charCode==94 || charCode==95 || charCode==96){
        return false;
    }

    if (charCode < 65 || charCode > 122){
        return false;
    }
    return true;
}


function isAlphaNumber(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    

  
 if (charCode==32 || charCode==13){
        return true;
    }

     if (charCode>=48 && charCode<=57){
        return true;
    }



     if (charCode==91 || charCode==92  || charCode==93 || charCode==94 || charCode==95 || charCode==96){
        return false;
    }

    if (charCode < 65 || charCode > 122){
        return false;
    }
    return true;
}

 jQuery(".onlynumber").keyup(function () {
    this.value = this.value.replace(/[^0-9\.]/g, "");
  });
  jQuery(".onlytext").keyup(function () {
    this.value = this.value.replace(/[^a-zA-z \.]/g, "");
  });
  jQuery(".onlyemail").keyup(function () {
    this.value = this.value.replace(/[^0-9a-zA-z@.\.]/g, "");
  });



function checkFileUploadSize2mb(id, form_id) {
    image = document.getElementById(id).files;
    console.log(image);
    if (image[0].size > 6000000) { 

        $('#' + form_id + ' #error_' + id).html('Maximum upload Size is 5 mb only.').show();
        return false;
    } 
    return true;
}

function isAllowedFileExtensionResume(id, form_id) {
    elem = document.getElementById(id);
    var alphaExp = /.*\.(doc)|(docs)|(pdf)$/;
    if (elem.value != "") {  
        
         if (elem.value.toLowerCase().match(alphaExp)) {
            return true;
        } else {
            // alert(helperMsg);
            elem.focus();
            $('#' + form_id + ' #error_' + id).html('Please upload doc, docx or pdf files Only.').show();
            return false;
        }
    } else return true;
    return false;
}


function isAllowedFileExtensionImgPDF(id, form_id) {
    elem = document.getElementById(id);
    var alphaExp = /.*\.(jpeg)|(jpg)|(png)|(pdf)$/;
    if (elem.value != "") {  
        
         if (elem.value.toLowerCase().match(alphaExp)) {
            return true;
        } else {
            // alert(helperMsg);
            elem.focus();
            $('#' + form_id + ' #error_' + id).html('Please upload pdf, png or jpg files Only.').show();
            return false;
        }
    } else return true;
    return false;
}


function setLocation(url) {   
      window.location = url;      
    }

$(document).ready(function () {
  


 

$( ".get_base_url" ).each(function( index ) {
  
  if($( this ).attr("src")){
  var url =  $( this ).attr("src");
   $( this ).attr('src',base_url+url);
} else {
   var url =  $( this ).attr("href");
    $( this ).attr('href',base_url+url);
  } 

});


// start frmNewsletter
 $("#frmNewsletter").on("submit", function(r) {


var form_id="frmNewsletter";

jQuery(".message-box-" +form_id).hide();
jQuery("#"+form_id+" .error").html(" ");  
    

        var s = $(this);       
        r.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });
       
     // js validation 


    var   email = jQuery("#"+form_id+" #email").val(); 
   if(email==''){        
           // alert("Please enter email.");
   
            jQuery("#"+form_id+ " #error_"+"email").html("Please enter email.");
            jQuery("#"+form_id+ " #error_"+"email").show();
            jQuery("#"+form_id+"  #email").focus();
            jQuery("#"+form_id+"  #email").addClass('fld-error');         
            return false;
           
      }


    if(IsEmail(email)==false){ 

            //alert("Please enter valid email address.");
            jQuery("#"+form_id+ " #error_"+"email").html("Please enter valid email address.");
            jQuery("#"+form_id+ " #error_"+"email").show();
            jQuery("#"+form_id+" #email").focus();
            jQuery("#"+form_id+" #email").addClass('fld-error');         
            return false;
                 
            
    } 

/*
    if($('#remember').is(':checked')){ 

     } else { 
     
            jQuery("#"+form_id+ " #error_" + "remember").html("Please select i accept.");
             jQuery("#"+form_id+ " #error_"+"remember").show();
            jQuery("#"+form_id+" #remember").focus();
            jQuery("#"+form_id+" #remember").addClass('fld-error'); 
            return false;       
            
    } 
*/
             var submit_btn_text=jQuery("#submit-btn-"+form_id).val(); 

 // js validation  end 
       // ajax
             jQuery.ajax({ 
             url: $("#" + form_id).attr("action"),
             type: 'POST',
             data: $("#" + form_id).serialize(),
              dataType: "json",
             enctype: 'multipart/form-data',
             processData: false,
             beforeSend: function(){              
              jQuery("#submit-btn-"+form_id).prop("disabled", true);; 
              jQuery("#submit-btn-"+form_id).html('Please wait...'); 

            },
             success: function (response) {     
                // response = JSON.parse(response);
            
                               
                                if(response.status==1){
                                

                                  $("#" + form_id).trigger("reset");
                                 jQuery(".message-box-" + form_id).removeClass("error");
                                 jQuery(".message-box-" + form_id).addClass("success");

                                 } else{
                                jQuery(".message-box-" + form_id).removeClass("success");
                                 jQuery(".message-box-" + form_id).addClass("error");                        
                                } 
                              
                                //jQuery(".message-box-" + form_id).html(response.message);
                               jQuery(".message-box-frmNewsletter").html(response.message);
                               //alert(response.message);

                                jQuery(".message-box-" + form_id).show(); 
                               

               
             },
              error: function(e) {
              alert("Error");

                       
                    }, complete: function() {
                jQuery("#submit-btn-"+form_id).removeAttr("disabled"),jQuery("#submit-btn-"+form_id).html(submit_btn_text); 
            }
           });
            //grecaptcha.reset();
            return false;
   
    })




    $("#frmLoadMoreCommon").on("submit", function(e) {
        var a = $(this);
        if (e.preventDefault(), $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            }), !a.data("requestRunning")) {
            a.data("requestRunning", !0);
            var r = jQuery("#counter").val(),
                s = jQuery("#totalRecord").val(),
                t = jQuery("#per_page").val();
            jQuery.ajax({
                type: "POST",
                url: $("#frmLoadMoreCommon").attr("action"),
                data: $("#frmLoadMoreCommon").serialize(),
                beforeSend: function() {
                    jQuery("#btn-load-morel").attr("disabled", "disabled"), jQuery("#loader-loadMore-common").show()
                },
                success: function(e) {
                    jQuery(".common-col-loadmore:last").after(e), parseInt(s) - (parseInt(r) + parseInt(t)) <= 0 && jQuery("#btn-load-more").hide();
                    var a = parseInt(r) + parseInt(t);
                    jQuery("#counter").val(a);
                },
                error: function(e) {
                    alert("error")
                },
                complete: function() {
                    jQuery("#btn-load-more").removeAttr("disabled"), jQuery("#loader-loadMore-common").hide(), a.data("requestRunning", !1), r > s && jQuery("#btn-load-more").show()
                }
            })
        }
    })



 
 // backup code for load more

 $("#frmLoadMoreBlog").on("submit", function(e) {
        var a = $(this);
        if (e.preventDefault(), $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            }), !a.data("requestRunning")) {
            a.data("requestRunning", !0);
            var r = jQuery("#counter").val(),
                s = jQuery("#totalRecord").val(),
                t = jQuery("#per_page").val();
            jQuery.ajax({
                type: "POST",
                url: $("#frmLoadMoreBlog").attr("action"),
                data: $("#frmLoadMoreBlog").serialize(),
                beforeSend: function() {
                    jQuery("#btn-load-morel").attr("disabled", "disabled"), jQuery("#loader-loadMore-blog").show()
                },
                success: function(e) {
                    jQuery(".blog-col-loadmore:last").after(e), parseInt(s) - (parseInt(r) + parseInt(t)) <= 1 && jQuery("#btn-load-more").hide();
                    var a = parseInt(r) + parseInt(t);
                    jQuery("#counter").val(a);
                },
                error: function(e) {
                    alert("error")
                },
                complete: function() {
                    jQuery("#btn-load-more").removeAttr("disabled"), jQuery("#loader-loadMore-blog").hide(), a.data("requestRunning", !1), r > s && jQuery("#btn-load-more").hide()
                }
            })
        }
    })




    $("#centre").change(function () {
        var centre_name = $(this).val();
        if (centre_name == "SDA") {
            $("#service").html("<option value=''>--Please select --</option><option>MRI</option><option>CT</option><option>Dental Imaging (CBCT/OPG/Cephalogram)</option><option>X-Ray</option><option>Ultrasound</option><option>Cardiac Imaging (ECHO/ECG/TMT/Holter/BP Monitoring)</option><option>Pulmonary Function Test</option><option>Mammography</option><option>DEXA</option><option>Interventional Procedures</option><option>PET-CT</option><option>Gamma Camera</option><option>Routine Pathology</option><option>Genome Sequencing</option><option>Personalised Health Checks</option>");
        } else if (centre_name == "DC") {
           $("#service").html("<option value=''>--Please select --</option><option>MRI</option><option>CT</option><option>Dental Imaging (CBCT/OPG/Cephalogram)</option><option>X-Ray</option><option>Ultrasound</option><option>Cardiac Imaging (ECHO/ECG/TMT/Holter/BP Monitoring)</option><option>Pulmonary Function Test</option><option>Mammography</option><option>DEXA</option><option>Routine Pathology</option><option>Genome Sequencing</option><option>Personalised Health Checks</option>");
        } else if (centre_name == "PR") {
          $("#service").html("<option value=''>--Please select --</option><option>MRI</option><option>CT</option><option>Dental Imaging (CBCT/OPG/Cephalogram)</option><option>X-Ray</option><option>Ultrasound</option><option>Cardiac Imaging (ECHO/ECG/TMT/Holter/BP Monitoring)</option><option>Pulmonary Function Test</option><option>Mammography</option><option>DEXA</option><option>Routine Pathology</option><option>Genome Sequencing</option><option>Personalised Health Checks</option>");
          } else if (centre_name == "GTS") {
          $("#service").html("<option value=''>--Please select --</option><option>MRI</option><option>CT</option><option>Dental Imaging (CBCT/OPG/Cephalogram)</option><option>X-Ray</option><option>Ultrasound</option><option>Cardiac Imaging (ECHO/ECG/TMT/Holter/BP Monitoring)</option><option>Pulmonary Function Test</option><option>Mammography</option><option>DEXA</option><option>Routine Pathology</option><option>Genome Sequencing</option><option>Personalised Health Checks</option>");

           } else if (centre_name == "BN") {
          $("#service").html("<option value=''>--Please select --</option><option>CT</option>");


           } else if (centre_name == "SGRH") {
          $("#service").html("<option value=''>--Please select --</option><option>DEXA</option><option>CT</option><option>Gamma Camera</option>");
           } else if (centre_name == "PSRI") {
          $("#service").html("<option value=''>--Please select --</option><option>MRI</option><option>CT</option><<option>X-Ray</option><option>Ultrasound</option><option>Interventional Procedures</option>");
           } else if (centre_name == "SIC") {
          $("#service").html("<option value=''>--Please select --</option><option>MRI</option><option>CT</option><<option>X-Ray</option><option>Ultrasound</option><option>Mammography</option><option>DEXA</option>");
            } else if (centre_name == "FVK") {
         $("#service").html("<option value=''>--Please select --</option><option>MRI</option><option>CT</option><<option>X-Ray</option><option>Ultrasound</option><option>Mammography</option><option>DEXA</option><option>Interventional Procedures</option><option>Gamma Camera</option>");


           } else if (centre_name == "FJP") {
           $("#service").html("<option value=''>--Please select --</option><option>MRI</option><option>CT</option><<option>X-Ray</option><option>Ultrasound</option><option>Mammography</option><option>DEXA</option><option>Interventional Procedures</option>");
           } else if (centre_name == "KM") {
          $("#service").html("<option value=''>--Please select --</option><option>Routine Pathology</option><option>Genome Sequencing</option>");
            
           } else if (centre_name == "Home Collection") {
            $("#service").html("<option value=''>--Please select --</option><option>MRI</option><option>CT</option><option>Dental Imaging (CBCT/OPG/Cephalogram)</option><option>X-Ray</option><option>Ultrasound</option><option>Cardiac Imaging (ECHO/ECG/TMT/Holter/BP Monitoring)</option><option>Pulmonary Function Test</option><option>Mammography</option><option>DEXA</option><option>Interventional Procedures</option><option>PET-CT</option><option>Gamma Camera</option><option>Routine Pathology</option><option>Genome Sequencing</option><option>Personalised Health Checks</option>");
       

        } else {
            $("#service").html("<option value=''>--Please select--</option>");
        }
    });


    
   
   jQuery("#frmHomePopup").on("submit", function(r) {


       
        var form_id = "frmHomePopup";
        jQuery(".message-box-" + form_id).hide();
        jQuery("#" + form_id + " .error").html(" ");
        var s =jQuery(this);
        r.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN":jQuery('meta[name="csrf-token"]').attr("content")
            }
        });
    
    var validation_field='';


        var   name = jQuery("#"+form_id+" #name").val(); 
         if(name==''){        
           jQuery("#"+form_id+ " #error_" + "name").html("Please enter name.").show();
           if(validation_field==''){
                 validation_field='name';
            }    
                
        } 

      
        var mobile = jQuery("#" + form_id + " #mobile").val();
        if (mobile == '') {
            
           jQuery("#"+form_id+ " #error_" + "mobile").html("Please enter mobile no.").show();
           if(validation_field==''){
                 validation_field='mobile';
            }  
        }
        if (mobile && IsMobile(mobile) == false) {
           
           jQuery("#"+form_id+ " #error_" + "mobile").html("Please enter valid mobile no.").show();
           if(validation_field==''){
                 validation_field='mobile';
            }  
        }

          var email = jQuery("#" + form_id + " #email").val();
     /*   if (email == '') {
            
             jQuery("#"+form_id+ " #error_" + "email").html("Please enter email.").show();
           if(validation_field==''){
                 validation_field='email';
            }   
        }
*/        if (email && IsEmail(email) == false) {
           
           jQuery("#"+form_id+ " #error_" + "email").html("Please enter valid email address.").show();
           if(validation_field==''){
                 validation_field='email';
            }  
     
        }

         var   centre = jQuery("#"+form_id+" #centre").val(); 
         if(centre==''){        
           jQuery("#"+form_id+ " #error_" + "centre").html("Please select centre.").show();
           if(validation_field==''){
                 validation_field='centre';
            }    
                
        } 


         var   service = jQuery("#"+form_id+" #service").val(); 
         if(service==''){        
           jQuery("#"+form_id+ " #error_" + "service").html("Please select service.").show();
           if(validation_field==''){
                 validation_field='service';
            }    
                
        } 





        if(validation_field){
                         jQuery("#"+form_id+" #"+validation_field).focus();
                         return false;
        }
            /*
            var isChecked = $("#term").is(":checked");
            if (isChecked) {
               // alert("CheckBox checked.");
            } else {
               jQuery("#" + form_id + " #error_" + "term").html("Please check terms and conditions.");
            jQuery("#" + form_id + "  #term").focus();
              jQuery("#"+form_id+ " #error_"+"term").show();
            jQuery("#" + form_id + "  #term").addClass('fld-error');
            return false;
            }*/



          var submit_btn_text=jQuery("#submit-btn-"+form_id).val(); 
        var formData = new FormData(this);
        jQuery.ajax({
            url:jQuery("#" + form_id).attr("action"),
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                jQuery("#submit-btn-"+form_id).prop("disabled", true);; 
                jQuery("#submit-btn-"+form_id).val('Please wait...'); 
            },
            success: function(response) {
                            
                            //jsonObj = JSON.parse(response);
                                if(response.status==1){
                                  //alert("a");
                                    window.location.href=base_url+"thank-you?page=homepopup";
                                  jQuery("#" + form_id).trigger("reset");
                                 //jQuery(".message-box-" + form_id).removeClass("error");
                                 //jQuery(".message-box-" + form_id).addClass("success");

                                 } else {
                                     jQuery(".message-box-" + form_id).show(); 
                                     jQuery(".message-box-" + form_id).removeClass("success");
                                     jQuery(".message-box-" + form_id).addClass("error"); 
                                     jQuery(".message-box-frmHomePopup").html(response.message);                       
                                } 
            },
           error: function(e) {

                     alert(e.responseText);
            },
                     complete: function() {
                jQuery("#submit-btn-"+form_id).removeAttr("disabled"),jQuery("#submit-btn-"+form_id).val(submit_btn_text); 
            }
           });
            //grecaptcha.reset();
            return false;
        });

    



})

 
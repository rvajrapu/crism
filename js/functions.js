function log(val){
	console.log(val);
}



var activeurl = window.location.pathname;
$('a[href="'+activeurl+'"]').parent('li').addClass('active');


function verify_user(username){
    return $.ajax({
        url: 'verify_ajax.php',
        type: 'post',
        async: false,
        data: {myData:username},

        error: function(xhr, desc, err) {
          console.log(xhr);
          console.log("Details: " + desc + "\nError:" + err);
        }
      }); // end ajax call
  }

function checkduplicate(){
  var value =  $("[name='email']").val();
  var id = $("[name='email']").attr('id');
  var validate = verify_user(value);
  return validate.success(function(data){
            if ($.trim(data) == "notok"){
            $( '#'+id ).siblings('.form-validation').html("Email already used");
            
            return false;
          }
          else {
            $( "#form_download" ).submit();
            $('#myModal').modal('hide');
            return true;
          }
        });

  }

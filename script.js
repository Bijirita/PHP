<script type="text/javascript">
    function sendEnquiryform(){
        var name=$('#name').val();
        var email=$('#email').val();
        var message=$('#message').val();
        $.post("send_mail.php",'name='+name+'&email='+email'&message='+message,function(result,status,xhr) {
                if( status.toLowerCase()=="error".toLowerCase() )
                { alert("An Error Occurred.."); }
                else { 
                    //alert(result);
                    $('#sucessMessage').html(result);
                }
            })
            .fail(function(){ alert("something went wrong. Please try again") });
    }
</script>
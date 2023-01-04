<section>
    <div class="kool-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer-info pt-3">
                        <div class="kool-copy-right text-white pb-2">
                            Copyright <?php echo date('Y');?> © Systrail Solutions. All Rights Reserved
                        </div>
                    </div>
                </div>
                <div class='col-lg-6 col-md-6 col-sm-6'>
                    <div class='kool-footer-social-info'>
                        <ul class="socal-icon d-flex pt-3 pb-3 justify-content-lg-end">
                            <li><a href="<?php echo FACEBOOK;?>" target="_blank"class="text-white"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo TWITTER;?>" target="_blank"class="text-white"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo LINKDIN;?>" target="_blank" class="text-white"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="<?php echo INSTAGRAM;?>"  target="_blank" class="text-white"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?php echo GITHUB;?>" target="_blank" class="text-white"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/all.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

<script type="text/javascript">

    $('#contactUsForm').unbind().submit(function(e){
        e.preventDefault(); 
        let contactName = document.getElementById('contactName').value;
        let contactPhone = document.getElementById('contactPhone').value;
        let contactEmail = document.getElementById('contactEmail').value;
        let contactMessage = document.getElementById('contactMessage').value;  

        $('.errorInp').remove();

        if(contactName == '') {
           document.getElementById('contactName').classList.add("error-input"); 
           $('#contactName').parent().append(`<span class="text-danger nameInput errorInp" style="margin: 1px 1px;font-size: 13px;">The name field is required.</span>`); 
            return false;
        } else{
            $('.nameInput').remove();
            document.getElementById('contactName').classList.remove("error-input"); 
        }


        if(contactPhone == '') {
            document.getElementById('contactPhone').classList.add("error-input"); 
            $('#contactPhone').parent().append(`<span class="text-danger phoneInput errorInp" style="margin: 1px 1px;font-size: 13px;">The phone number fields is required.</span>`);
            return false;
        } else{

            if(/^\d{10}$/.test(contactPhone)){
                $('.phoneInput').remove();
                document.getElementById('contactPhone').classList.remove("error-input"); 
            } else {
                $('#contactPhone').parent().append(`<span class="text-danger phoneInput errorInp" style="margin: 1px 1px;font-size: 13px;">The enter valid 10 digit phone number.</span>`);
                return false;
            }
        }


        if(contactEmail == '') {
            document.getElementById('contactEmail').classList.add("error-input"); 
            $('#contactEmail').parent().append(`<span class="text-danger emailInput errorInp" style="margin: 1px 1px;font-size: 13px;">The email fields is required.</span>`);
            return false;
        } else{

            if(contactEmail.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                $('.emailInput').remove();
                document.getElementById('contactEmail').classList.remove("error-input"); 
            }  else {
                $('#contactEmail').parent().append(`<span class="text-danger emailInput errorInp" style="margin: 1px 1px;font-size: 13px;">The email address is not a valid.</span>`);
                return false;
            }
        }


        if(contactMessage == '') {
            document.getElementById('contactMessage').classList.add("error-input"); 
            $('#contactMessage').parent().append(`<span class="text-danger messageInput errorInp" style="margin: 1px 1px;font-size: 13px;">The message fields is required.</span>`);
            return false;
        } else{
            $('.messageInput').remove();
            document.getElementById('contactMessage').classList.remove("error-input"); 
        }

         document.getElementById('successMessage').innerHTML = "**Thank you for submitting data, we will let you know soon.**";

         document.getElementById('contactName').value = "";
         document.getElementById('contactPhone').value = "";
         document.getElementById('contactEmail').value = "";
         document.getElementById('contactMessage').value = "";  
         setTimeout( () => {
             document.getElementById('successMessage').innerHTML = "";
         },5000) 

    });
    
</script>

</body>

</html>
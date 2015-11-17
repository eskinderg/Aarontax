<?php
/*
 Template Name: Quick Send
*/
get_header();
?>
<section class="container-fluid" id="section3">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
          <?php if ( !is_active_sidebar( 'page' ) ) : ?>
		  <div class="col-sm-12">
		  <?php else : ?>
		  <div class="col-sm-8">
		  <?php endif; ?>
        <?php do_action( 'unconditional_before_page' ); ?>

                      
                <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

                <div id="securesendleftdiv"><form id="imageuploadform" action="../../process.php" enctype="multipart/form-data" method="post" name="photo"><input id="fileupload" hidden="true" multiple="multiple" name="image[]" type="file" /> <input id="txtuploadname" name="name" required="" type="text" placeholder="Your Name" /> <input id="txtuploademail" name="email" required="" type="text" placeholder="EMail" /> <button id="btnupload">Quick Send</button></form>
                <div id="result"></div>
                </div>
                <div id="securesendrightdiv"><img src="http://www.aarontax.com/wp-content/uploads/2015/02/secure_login.png" alt="" />   To Quickly send your files, use our quick and secure file delivery system that provides a secure way of delivering your files via our secure file delivery system. Once we receive your files, one of our representatives will contact you shortly.</div>

                &nbsp;

                <div id="progressFormWrapper">
                <div id="ProgressForm">
                <div id="PhotoUploadProgress">
                <div id="progress"></div>

                &nbsp;
                </div>

                &nbsp;
                </div>

                &nbsp;
                </div>

                <script>// <![CDATA[
                $(document).ready(function(){
                   $('#btnupload').click(function(e){
                      if($('#txtuploadname').val()=='')
                           alert('Please enter your name to proceed');
                      else if(!validateEmail($('#txtuploademail').val()))
                            alert('Please enter a valid Email address');
                      else
                            $("#fileupload").click();
                    e.preventDefault();
                   });
                $('#fileupload').change(function (e) {
                      $("#imageuploadform").submit();
                       e.preventDefault();
                   });
                $('#imageuploadform').submit(function(e)
                   {
                      var formData = new FormData(this);
                       $.ajax({
                            type:'POST',
                            url: '../../process.php',
                            data:formData,
                            xhr: function() {
                                    var myXhr = $.ajaxSettings.xhr();
                                    if(myXhr.upload){
                                        myXhr.upload.addEventListener('progress',progress, false);
                                    }
                                    return myXhr;
                            },
                            cache:false,
                            contentType: false,
                            processData: false,
                            success:function(data){
                                console.log(data);
                                    $('#progressFormWrapper').fadeOut();
                                    $("#progress").css('width',"0%");
                                    $('#result').html("Your file has been sent successfully.");
                                    $('#txtuploadname').val('');
                                    $('#txtuploademail').val('');
                                    //alert(data);
                                    //appendFile(data);
                            },
                                error: function(data){
                                alert('There was an error delivering your files. Please refresh the page and try again');
                                console.log(data);
                            }
                        });
                        e.preventDefault();
                   });
                function progress(e){
                        $("#progressFormWrapper").fadeIn();
                        //$('#uploadcompletedstatus').css('display','none');
                        if(e.lengthComputable){
                            //console.log(e.loaded);
                            //console.log(e.total);
                            var max = e.total;
                            var current = e.loaded;
                            var Percentage = (current * 100)/max;
                            //console.log(Percentage);
                            $("#progress").css('width',Percentage + "%");
                            if(Percentage >= 100)
                            {
                            }
                        }  
                     }
                function validateEmail(sEmail)
                {
                     var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                     if (filter.test(sEmail)) {
                        return true;
                      }
                     else {
                        return false;
                     }
                }
                });
                // ]]></script>
                      
                      
        <?php do_action( 'unconditional_after_page' ); ?>
		</div>
          <?php if ( is_active_sidebar( 'page' ) ) { ?>
		  <div class="col-sm-4">
		       <?php get_sidebar( 'page' ); ?>
		  </div>
		  <?php } ?>
        </div>
      </div>
   </div>
</section>

<?php
    get_footer(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Driver Application - Russo Brother Transport </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"  href="css/smart-forms.css">
    <link rel="stylesheet" type="text/css"  href="css/smart-addons.css">
    <link rel="stylesheet" type="text/css"  href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"  href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="css/smart-themes/red.css">

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.steps.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-custom.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>    
    <script type="text/javascript" src="js/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/smart-form.js"></script>    

        <script>
        $(document).ready(function() {
        $('#select-all').click(function(event) {
          if (this.checked) {
            $('.statescheck').each(function() {
              this.checked = true;
            });
          } else {
            $('.statescheck').each(function() {
              this.checked = false;
            });
          }
        });

      });

    </script>
    <!-- Add Function for 2. Prev Addresses -->
    <script>
        $(document).ready(function() {
            //group add limit
            var maxGroup = 10;

            //add more fields group
            $(".addMoreAddress").click(function() {
              if ($('body').find('.prevAddressGroup').length < maxGroup) {
                var fieldHTML = '<div class="form-group prevAddressGroup">' + $(".prevAddressGroupCopy").html() + '</div>';
                $('body').find('.prevAddressGroup:last').after(fieldHTML);
              } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
              }
            });

            //remove fields group
            $("body").on("click", ".remove", function() {
              $(this).parents(".prevAddressGroup").remove();
            });
          });

    </script>
    <!-- Add Function for 3. License -->
    <script>
        $(document).ready(function() {
            //group add limit
            var maxGroup = 10;

            //add more fields group
            $(".addMoreLicense").click(function() {
              if ($('body').find('.licenseGroup').length < maxGroup) {
                var fieldHTML = '<div class="form-group licenseGroup">' + $(".licenseGroupCopy").html() + '</div>';
                $('body').find('.licenseGroup:last').after(fieldHTML);
              } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
              }
            });

            //remove fields group
            $("body").on("click", ".remove", function() {
              $(this).parents(".licenseGroup").remove();
            });
            });

    </script>


    <!-- Add Function for 6. RECORD -->
    <script>
        $(document).ready(function() {
        //group add limit
        var maxGroup = 10;

        //add more fields group
        $(".addMoreRecord").click(function() {
            if ($('body').find('.recordGroup').length < maxGroup) {
                var fieldHTML = '<div class="form-group recordGroup">' + $(".recordGroupCopy").html() + '</div>';
                $('body').find('.recordGroup:last').after(fieldHTML);
            } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
            }
        });

        //remove fields group
        $("body").on("click", ".remove", function() {
            $(this).parents(".recordGroup").remove();
        });
        });
    </script>

    <!-- Add Function for 9. Previous Employers -->
    <script>
        $(document).ready(function() {
        //group add limit
        var maxGroup = 10;

        //add more fields group
        $(".addMoreEmployer").click(function() {
            if ($('body').find('.employerGroup').length < maxGroup) {
                var fieldHTML = '<div class="form-group employerGroup">' + $(".employerGroupCopy").html() + '</div>';
                $('body').find('.employerGroup:last').after(fieldHTML);
            } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
            }
        });

        //remove fields group
        $("body").on("click", ".remove", function() {
            $(this).parents(".employerGroup").remove();
        });
    });
    </script>

    <!-- Add Function for Violation -->
    <script>
        $(document).ready(function() {
            //group add limit
            var maxGroup = 10;

            //add more fields group
            $(".addMoreViolation").click(function() {
              if ($('body').find('.violationGroup').length < maxGroup) {
                var fieldHTML = '<div class="form-group violationGroup">' + $(".violationGroupCopy").html() + '</div>';
                $('body').find('.violationGroup:last').after(fieldHTML);
              } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
              }
            });

            //remove fields group
            $("body").on("click", ".remove", function() {
              $(this).parents(".violationGroup").remove();
            });
        });

    </script>


    <!-- Add Function for Auth Information -->
    <script>
        $(document).ready(function() {
    //group add limit
    var maxGroup = 10;

    //add more fields group
    $(".addMoreAuth").click(function() {
      if ($('body').find('.authGroup').length < maxGroup) {
        var fieldHTML = '<div class="form-group authGroup">' + $(".authGroupCopy").html() + '</div>';
        $('body').find('.authGroup:last').after(fieldHTML);
      } else {
        alert('Maximum ' + maxGroup + ' groups are allowed.');
      }
    });

    //remove fields group
    $("body").on("click", ".remove", function() {
      $(this).parents(".authGroup").remove();
    });
  });

  </script>

  <script>
      $(document).ready(function(){
            $('#accidentWasnt').change(function(){
                if(this.checked)
                    $('.accidentGroupAll').fadeOut('slow');
                else
                    $('.accidentGroupAll').fadeIn('slow');

            });
        });
  </script>

    <script>
      $(document).ready(function(){
            $('#violationWasnt').change(function(){
                if(this.checked)
                    $('#violationGroup').fadeOut('slow');
                else
                    $('#violationGroup').fadeIn('slow');

            });
        });
    </script>

	<script>
      $(document).ready(function(){
            $('#idRusso').change(function(){
                if(this.checked)
                    $('#idWorkedGroup').fadeIn('slow');
                else
                    $('#idWorkedGroup').fadeOut('slow');

            });
        });
    </script>


    <script>
      $(document).ready(function(){
            $('#prevSame').change(function(){
                if(this.checked)
                    $('#prevAddressGroup').fadeOut('slow');
                else
                    $('#prevAddressGroup').fadeIn('slow');

            });
        });
    </script>

    <script>
    $(document).ready(function(){
        $('input[name="drsDenied"]').change(function(){
            if($(this).val() =="Yes") {
                $("#drsDeniedDetailField").fadeIn('slow');
            }
            else {
                $("#drsDeniedDetailField").fadeOut('slow');
            } 
        }); 
    });
    </script>

    <script>
    $(document).ready(function(){
        $('input[name="drsSuspended"]').change(function(){
            if($(this).val() =="Yes") {
                $("#drsSuspendedDetailField").fadeIn('slow');
            }
            else {
                $("#drsSuspendedDetailField").fadeOut('slow');
            } 
        }); 
    });
    </script>

    <script>
    $(document).ready(function(){
        $('input[name="drsUnable"]').change(function(){
            if($(this).val() =="Yes") {
                $("#drsUnableDetailField").fadeIn('slow');
            }
            else {
                $("#drsUnableDetailField").fadeOut('slow');
            } 
        }); 
    });
    </script>

    <script>
    $(document).ready(function(){
        $('input[name="drsMedication"]').change(function(){
            if($(this).val() =="Yes") {
                $("#drsMedicationDetailField").fadeIn('slow');
            }
            else {
                $("#drsMedicationDetailField").fadeOut('slow');
            } 
        }); 
    });
    </script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('form').submit(function() {
                $(this).find('input[type=checkbox]').each(function () {
                    $(this).attr('value', $(this).is(':checked') ? '1' : '0');
                    $(this).attr('checked', true);
                });
            });
        });
    </script>



    <script>
    $(document).ready(function(){
        var accidentGroup_index=0;
        var maxGroup = 9;

        $("#addAccident").click(function(){

            if (accidentGroup_index < maxGroup) {
                accidentGroup_index++;
                $(this).parent().before($("#accidentGroup").clone().attr("id","accidentGroup" + accidentGroup_index));
                $("#accidentGroup" + accidentGroup_index).css("display","inline");
                $("#accidentGroup" + accidentGroup_index + " :input").each(function(){
                    $(this).attr("name",$(this).attr("name") + accidentGroup_index);
                    $(this).attr("id",$(this).attr("id") + accidentGroup_index);
                    });
            } else {
                alert('Maximum 10 groups are allowed.');
            }
        });
    });
    </script>



    <script>
    $(document).ready(function(){
        var employerGroup_index=0;
        var maxGroup = 9;

        $("#addEmployer").click(function(){

            if (employerGroup_index < maxGroup) {
                employerGroup_index++;
                $(this).parent().before($("#employerGroup").clone().attr("id","employerGroup" + employerGroup_index));
                $("#employerGroup" + employerGroup_index).css("display","inline");
                $("#employerGroup" + employerGroup_index + " :input").each(function(){
                    $(this).attr("name",$(this).attr("name") + employerGroup_index);
                    $(this).attr("id",$(this).attr("id") + employerGroup_index);
                    });
            } else {
                alert('Maximum 10 groups are allowed.');
            }
        });
    });
    </script>
  
</head>

<body class="custom-bg">

	<div class="smart-wrap">
    	<div class="smart-forms smart-container wrap-1">
        
            	<div class="form-body theme-red steps-theme-red">
                 <form method="post" action="php/smartprocess.php" id="smart-form" enctype="multipart/form-data">
                    <h2>Personal</h2>
                    <fieldset>
                        <div class="frm-row">
                            
                            <div class="section colm colm6">
                                <label for="idName" class="field-label">Full Name</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="idName" id="idName" class="gui-input" placeholder="Full Name" required>
                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm3">
                                <label for="idDob" class="field-label">Date of Brith</label>
                                <label class="field prepend-icon">
                                    <input type="date" id="idDob" name="idDob" class="gui-input" placeholder="Date of Birth" required>
                                    <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm3">
                                <label for="idSs" class="field-label">Social Security #</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="idSs" id="idSs" class="gui-input" placeholder="Social Security" required>
                                    <span class="field-icon"><i class="far fa-id-card"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div><!-- end .frm-row section -->
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <label for="idAddress" class="field-label">Current Address</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="idAddress" id="idAddress" class="gui-input" placeholder="Address" required>
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm2">
                                <label for="idCity" class="field-label">City</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="idCity" id="idCity" class="gui-input" placeholder="City" required>
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm2">
                                <label for="idState" class="field-label">State</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="idState" id="idState" class="gui-input" placeholder="State" required>
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm2">
                                <label for="idDob" class="field-label">ZIP Code</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="idZip" id="idZip" class="gui-input" placeholder="Zip code" required>
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <label for="idEmail" class="field-label">Email</label>
                                <label class="field prepend-icon">
                                    <input type="email" name="idEmail" id="idEmail" class="gui-input" placeholder="Email address" required>
                                    <span class="field-icon"><i class="fa fa-envelope"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="idPhone" class="field-label">Telephone Number</label>
                                <label class="field prepend-icon">
                                    <input type="tel" name="idPhone" id="idPhone" class="gui-input" placeholder="Telephone number" required>
                                    <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div><!-- end .frm-row section -->
                        <div class="frm-row">
                            <div class="section colm colm3">
                                Physical Exam Expiration Date:
                            </div>
                            <div class="section colm colm3">
                                <label class="field prepend-icon">
                                    <input type="date" id="idPhysical" name="idPhysical" class="gui-input" placeholder="MM/DD/YY" required>
                                    <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                            
                            <div class="frm-row">
	                            <div class="section colm colm6" style="margin-top: 5px;">
	                            	<label class="option">
		                                <input class="form-check-input" type="checkbox" name="idRusso" id="idRusso" value="Yes">
		                                <span class="checkbox"></span>
		                                <label class="form-check-label" for="idRusso">Have you worked for this company before?</label>
		                            </label>
	                            </div>

	                            
                       		</div>
                        </div>
                        <div class="frm-row" id="idWorkedGroup" hidden>
                        	<div class="section colm colm6">
                        		<label for="idWorkedFrom" class="field-label">Date Worked From</label>
                                <label class="field prepend-icon">
                                    <input type="date" id="idWorkedFrom" name="idWorkedFrom" class="gui-input" placeholder="Date Worked From">
                                    <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                </label>
                        	</div>
                        	<div class="section colm colm6">
                        		<label for="idWorkedTo" class="field-label">Date Worked To</label>
                                <label class="field prepend-icon">
                                    <input type="date" id="idWorkedTo" name="idWorkedTo" class="gui-input" placeholder="Date Worked To">
                                    <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                </label>
                        	</div>
                        	<div class="section colm colm12">
                        		<label for="idWorkedReason" class="field-label">Reason for leaving:</label>
                                <label class="field prepend-icon">
                                    <textarea  style="height: 100px;" name="idWorkedReason" id="idWorkedReason" class="gui-input" placeholder="Reason for leaving"></textarea>
                                    <span class="field-icon"><i class="fas fa-question"></i></span>
                                </label>
                        	</div>
                    	</div>
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <div>
                                    <label>Attach copy of your driver's license</label><br /> <input type="file"
                                        name="attachment[]" class="demoInputBox" multiple="multiple">
                                </div>
                            </div>
                            <div class="section colm colm6">
                                <div>
                                    <label>Attach copy of your medical card</label><br /> <input type="file"
                                        name="attachment2[]" class="demoInputBox" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <div>
                                    <label>Attach copy of your social security</label><br /> <input type="file"
                                        name="attachment3[]" class="demoInputBox" multiple="multiple">
                                </div>
                            </div>
                            <div class="section colm colm6">
                                <div>
                                    <label>Attach copy of DMV printout for the last 3 years</label><br /> <input type="file"
                                        name="attachment4[]" class="demoInputBox" multiple="multiple">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h2>Previous Residency</h2>
                    <fieldset>
                        <div class="frm-row">
                            <div class="section colm">
                                <p>List your addresses of residency for the past 3 years below:</p>
                            </div>
                        </div>
                        <div class="frm-row">
                            <div class="section colm">
                            	<label class="option">
                                <input class="form-check-input" type="checkbox" name="prevSame" id="prevSame">
                                <span class="checkbox"></span>
                                <label class="form-check-label" for="prevSame">Same as current address for the last 3 years</label>
                                </label>
                            </div>
                            
                        </div>
                        <div id="prevAddressGroup">
                        <div class="frm-row prevAddressGroup">
                            <div class="section colm colm4">
                                <label for="prevAddress" class="field-label">Address</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="prevAddress[]" id="prevAddress" class="gui-input" placeholder="Address">
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm3">
                                <label for="prevCity" class="field-label">City</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="prevCity[]" id="prevCity" class="gui-input" placeholder="City">
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm3">
                                <label for="prevState" class="field-label">State</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="prevState[]" id="prevState" class="gui-input" placeholder="State">
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm2">
                                <label for="prevZip" class="field-label">ZIP Code</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="prevZip[]" id="prevZip" class="gui-input" placeholder="Zip code">
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->

                        </div>
                        <div class="input-group-addon" style="margin-top:20px;margin-bottom: 20px;">
                            <a href="javascript:void(0)" class="btn btn-form-addon btn-add-more addMoreAddress"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fas fa-plus" style="margin-right: 5px;"></i>Add additional fields</a>
                        </div>
                    </div>
                    </fieldset>
                    <h2>Driver's License</h2>
                    <fieldset>
                        <div class="section colm colm12">
                            <p>List each unexpired Commercial Driver License or Commercial Learning Permit (CLP)that has been issued to you:</p>
                        </div>
                        <div class="licenseGroup">
                            <div class="frm-row">
                                <div class="section colm colm6">
                                    <label for="drCdl" class="field-label">CDL/CPL Number</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="drCdl[]" id="drCdl" class="gui-input" placeholder="CDL/CPL#">
                                        <span class="field-icon"><i class="far fa-id-card"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="drState" class="field-label">State Issued</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="drState[]" id="drState" class="gui-input" placeholder="State Issued">
                                        <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm4">
                                    <label for="drDate" class="field-label">Expiration Date</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="drDate[]" id="drDate" class="gui-input" placeholder="Expiration Date">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="drClass" class="field-label">Driver's License Class</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="drClass[]" id="drClass" class="gui-input" placeholder="Class (A,B)">
                                        <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="drEndorsement" class="field-label">Endorsements</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="drEndorsement[]" id="drEndorsement" class="gui-input" placeholder="Endorsements">
                                        <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                        </div>
                        <div class="input-group-addon" style="margin-bottom: 100px;">
                            <a href="javascript:void(0)" class="btn btn-form-addon btn-add-more addMoreLicense"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fas fa-plus" style="margin-right: 5px;"></i>Add additional fields</a>
                        </div>
                    </fieldset>
                    <h2>Driving Experience</h2>
                    <fieldset>
                            <div class="frm-row">
                                <div class="section colm colm12">
                                    <p>State your previous experience in the operation of motor vehicles</p>
                                    <center><h3>Truck</h3></center>
                                </div>
                                <div class="section colm colm4">
                                    <label for="expTruckFrom" class="field-label">Date From</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="expTruckFrom" id="expTruckFrom" class="gui-input" placeholder="Date From">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="expTruckTo" class="field-label">Date To</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="expTruckTo" id="expTruckTo" class="gui-input" placeholder="Date To">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="expTruckMiles" class="field-label">Approximate # Miles</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="expTruckMiles" id="expTruckMiles" class="gui-input" placeholder="Approximate # Miles">
                                        <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm12">
                                    <center><h3>Truck-Tractor</h3></center>
                                </div>
                                <div class="section colm colm4">
                                    <label for="expTractorFrom" class="field-label">Date From</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="expTractorFrom" id="expTractorFrom" class="gui-input" placeholder="Date From">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="expTractorTo" class="field-label">Date To</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="expTractorTo" id="expTractorTo" class="gui-input" placeholder="Date To">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="expTractorMiles" class="field-label">Approximate # Miles</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="expTractorMiles" id="expTractorMiles" class="gui-input" placeholder="Approximate # Miles">
                                        <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm12">
                                    <center><h3>Semitrailer Full Trailer</h3></center>
                                </div>
                                <div class="section colm colm4">
                                    <label for="expTrailerFrom" class="field-label">Date From</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="expTrailerFrom" id="expTrailerFrom" class="gui-input" placeholder="Date From">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="expTrailerTo" class="field-label">Date To</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="expTrailerTo" id="expTrailerTo" class="gui-input" placeholder="Date To">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="expTrailerMiles" class="field-label">Approximate # Miles</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="expTrailerMiles" id="expTrailerMiles" class="gui-input" placeholder="Approximate # Miles">
                                        <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm12">
                                    <center><h3>Others</h3></center>
                                </div>
                                <div class="section colm colm4">
                                    <label for="expOtherFrom" class="field-label">Date From</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="expOtherFrom" id="expOtherFrom" class="gui-input" placeholder="Date From">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="expOtherTo" class="field-label">Date To</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="expOtherTo" id="expOtherTo" class="gui-input" placeholder="Date To">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="expOtherMiles" class="field-label">Approximate # Miles</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="expOtherMiles" id="expOtherMiles" class="gui-input" placeholder="Approximate # Miles">
                                        <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                    </fieldset>
                    <h2>Driving Experience</h2>
                    <fieldset>
                        <div class="frm-row">
                            <div class="section colm">
                                <span>List States operated in for the last 5 years</span>
                            </div>
                        </div>

                        <div class="frm-row">
                            <div class="section colm">
                            	<label class="option">
                                <input class="form-check-input" type="checkbox" name="select-all" id="select-all">
                                <span class="checkbox"></span>
                                <label class="form-check-label" for="select-all">Select All</label>
                                </label>
                            </div>
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm4 margin0">
                                <div>
                                    <label class="option">
                                    <input class="statescheck" type="checkbox" id="alabama" name="alabama" value="Alabama">
                                    <span class="checkbox"></span>
                                    <label for="alabama">Alabama</label>
                                    </label>
                                </div>
                                <div>
                                	<label class="option">
                                    <input class="statescheck" type="checkbox" id="alaska" name="alaska" value="Alaska">
                                    <span class="checkbox"></span>
                                    <label for="alaska">Alaska</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="arizona" name="arizona" value="Arizona">
                                    <span class="checkbox"></span>
                                    <label for="arizona">Arizona</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="arkansas" name="arkansas" value="Arkansas">
                                    <span class="checkbox"></span>
                                    <label for="arkansas">Arkansas</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="california" name="california" value="California">
                                    <span class="checkbox"></span>
                                    <label for="california">California </label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="colorado" name="colorado" value="Colorado">
                                    <span class="checkbox"></span>
                                    <label for="colorado">Colorado</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="inlineCheckbox2" name="connecticut" value="Connecticut">
                                    <span class="checkbox"></span>
                                    <label for="inlineCheckbox2">Connecticut</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="delaware" name="delaware" value="Delaware">
                                    <span class="checkbox"></span>
                                    <label for="delaware">Delaware</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="florida" name="florida" value="Florida">
                                    <span class="checkbox"></span>
                                    <label for="florida">Florida</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="georgia" name="georgia" value="Georgia">
                                    <span class="checkbox"></span>
                                    <label for="georgia">Georgia</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="hawaii" name="hawaii" value="Hawaii">
                                    <span class="checkbox"></span>
                                    <label for="hawaii">Hawaii</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="illinois" name="illinois" value="Illinois">
                                    <span class="checkbox"></span>
                                    <label for="illinois">Illinois</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="idaho" name="idaho" value="Idaho">
                                    <span class="checkbox"></span>
                                    <label for="idaho">Idaho</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="indiana" name="indiana" value="Indiana">
                                    <span class="checkbox"></span>
                                    <label for="indiana">Indiana</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="iowa" name="iowa" value="Iowa">
                                    <span class="checkbox"></span>
                                    <label for="iowa">Iowa</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="kansas" name="kansas" value="Kansas">
                                    <span class="checkbox"></span>
                                    <label for="kansas">Kansas</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="kentucky" name="kentucky" value="Kentucky">
                                    <span class="checkbox"></span>
                                    <label for="kentucky">Kentucky</label>
                                    </label>
                                </div>
                            </div>
                            <div class="section colm colm4 margin0">
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="louisiana" name="louisiana" value="Louisiana">
                                    <span class="checkbox"></span>
                                    <label for="louisiana">Louisiana</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="maine" name="maine" value="Maine">
                                    <span class="checkbox"></span>
                                    <label for="maine">Maine</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="maryland" name="maryland" value="Maryland">
                                    <span class="checkbox"></span>
                                    <label for="maryland">Maryland</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="massachusetts" name="massachusetts" value="Massachusetts">
                                    <span class="checkbox"></span>
                                    <label for="massachusetts">Massachusetts</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="michigan" name="michigan" value="Michigan">
                                    <span class="checkbox"></span>
                                    <label for="michigan">Michigan</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="minnesota" name="minnesota" value="Minnesota">
                                    <span class="checkbox"></span>
                                    <label for="minnesota">Minnesota</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="mississippi" name="mississippi" value="Mississippi">
                                    <span class="checkbox"></span>
                                    <label for="mississippi">Mississippi</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="missouri" name="missouri" value="Missouri">
                                    <span class="checkbox"></span>
                                    <label for="missouri">Missouri</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="montana" name="montana" value="Montana">
                                    <span class="checkbox"></span>
                                    <label for="montana">Montana</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="nebraska" name="nebraska" value="Nebraska">
                                    <span class="checkbox"></span>
                                    <label for="nebraska">Nebraska</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="nevada" name="nevada" value="Nevada">
                                    <span class="checkbox"></span>
                                    <label for="nevada">Nevada</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="newhampshire" name="newhampshire" value="New Hampshire">
                                    <span class="checkbox"></span>
                                    <label for="newhampshire">New Hampshire</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="newjersey" name="newjersey" value="New Jersey">
                                    <span class="checkbox"></span>
                                    <label for="newjersey">New Jersey</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="newmexico" name="newmexico" value="New Mexico">
                                    <span class="checkbox"></span>
                                    <label for="newmexico">New Mexico</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="newyork" name="newyork" value="New York">
                                    <span class="checkbox"></span>
                                    <label for="newyork">New York</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="northcarolina" name="northcarolina" value="North Carolina">
                                    <span class="checkbox"></span>
                                    <label for="northcarolina">North Carolina</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="northdakota" name="northdakota" value="North Dakota">
                                    <span class="checkbox"></span>
                                    <label for="northdakota">North Dakota</label>
                                    </label>
                                </div>
                            </div>
                            <div class="section colm colm4">
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="ohio" name="ohio" value="Ohio">
                                    <span class="checkbox"></span>
                                    <label for="ohio">Ohio</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="oklahoma" name="oklahoma" value="Oklahoma">
                                    <span class="checkbox"></span>
                                    <label for="oklahoma">Oklahoma</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="oregon" name="oregon" value="Oregon">
                                    <span class="checkbox"></span>
                                    <label for="oregon">Oregon</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="pennsylvania" name="pennsylvania" value="Pennsylvania">
                                    <span class="checkbox"></span>
                                    <label for="pennsylvania">Pennsylvania</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="rhodeisland" name="rhodeisland" value="Rhode Island">
                                    <span class="checkbox"></span>
                                    <label for="rhodeisland">Rhode Island</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="southcarolina" name="southcarolina" value="South Carolina">
                                    <span class="checkbox"></span>
                                    <label for="southcarolina">South Carolina</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="southdakota" name="southdakota" value="South Dakota">
                                    <span class="checkbox"></span>
                                    <label for="southdakota">South Dakota</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="tennessee" name="tennessee" value="Tennessee">
                                    <span class="checkbox"></span>
                                    <label for="tennessee">Tennessee</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="texas" name="texas" value="Texas">
                                    <span class="checkbox"></span>
                                    <label for="texas">Texas</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="utah" name="utah" value="Utah">
                                    <span class="checkbox"></span>
                                    <label for="utah">Utah</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="vermont" name="vermont" value="Vermont">
                                    <span class="checkbox"></span>
                                    <label for="vermont">Vermont</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="virginia" name="virginia" value="Virginia">
                                    <span class="checkbox"></span>
                                    <label for="virginia">Virginia</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="washington" name="washington" value="Washington">
                                    <span class="checkbox"></span>
                                    <label for="washington">Washington</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="westvirginia" name="westvirginia" value="West Virginia">
                                    <span class="checkbox"></span>
                                    <label for="westvirginia">West Virginia</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="wisconsin" name="wisconsin" value="Wisconsin">
                                    <span class="checkbox"></span>
                                    <label for="wisconsin">Wisconsin</label>
                                    </label>
                                </div>
                                <div>
									<label class="option">
                                    <input class="statescheck" type="checkbox" id="wyoming" name="wyoming" value="Wyoming">
                                    <span class="checkbox"></span>
                                    <label for="wyoming">Wyoming</label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <label for="expDrivingCourses" class="field-label">List driving courses, if any:</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="expDrivingCourses" id="expDrivingCourses" class="gui-input" placeholder="List driving courses, if any">
                                    <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                                </label>
                                <span>PTD/DDC, Haz Mat, etc.</span>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="expSafeDriving" class="field-label">List Safe Driving awards, if any:</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="expSafeDriving" id="expSafeDriving" class="gui-input" placeholder="List Safe Driving awards, if any">
                                    <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                    </fieldset>
                    <h2>Accident Record</h2>
                    <fieldset>
                        <div class="frm-row">
                            <div class="section colm">List of all motor vehicle accidents in which you were involved during the past 3 years:</div>
                        </div>
                        <div class="frm-row">
                            <div class="section colm">
                            	<label class="option">
                                <input class="form-check-input" type="checkbox" name="accidentWasnt" id="accidentWasnt">
                                <span class="checkbox"></span>
                                <label class="form-check-label" for="accidentWasnt">Wasn't involved in an accident during the past 3 years.</label>
                                </label>
                            </div>
                        </div>


                        <div id="accidentGroupAll" class="accidentGroupAll">
                            <div class="frm-row">
                                <div class="section colm colm6">
                                    <label for="accidentNature" class="field-label">Nature of Accident</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="accidentNature[]" id="accidentNature" class="gui-input" placeholder="Nature of Accident">
                                        <span class="field-icon"><i class="fas fa-car-crash"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="accidentLocation" class="field-label">Location</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="accidentLocation[]" id="accidentLocation" class="gui-input" placeholder="Location">
                                        <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm6">
                                    <label for="accidentDate" class="field-label">Date</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="accidentDate[]" id="accidentDate" class="gui-input" placeholder="Date of Accident">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
		                        <div class="section colm colm3" style="margin-top:27px;">
			                        <label class="option">
                                        <input type="hidden" name="accidentFatalities0"  value="No">
			                            <input type="checkbox" name="accidentFatalities0"  value="Yes">
			                            <span class="checkbox"></span>
			                            Fatalities?
			                        </label>
		                        </div><!-- end section -->
		                        <div class="section colm colm3" style="margin-top:27px;">
			                        <label class="option">
                                        <input type="hidden" name="accidentInjuries0" value="No">
			                            <input type="checkbox" name="accidentInjuries0" value="Yes">
			                            <span class="checkbox"></span>
			                            Injuries?
			                        </label>
		                        </div><!-- end section -->
                            </div>
                        <div  id="accidentGroup" >
                            <div class="frm-row">
                                <div class="section colm colm6">
                                    <label for="accidentNature" class="field-label">Nature of Accident</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="accidentNature[]" id="accidentNature" class="gui-input" placeholder="Nature of Accident">
                                        <span class="field-icon"><i class="fas fa-car-crash"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="accidentLocation" class="field-label">Location</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="accidentLocation[]" id="accidentLocation" class="gui-input" placeholder="Location">
                                        <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm6">
                                    <label for="accidentDate" class="field-label">Date</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="accidentDate[]" id="accidentDate" class="gui-input" placeholder="Date of Accident">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm3" style="margin-top:27px;">
                                    <label class="option">
                                        <input type="hidden" name="accidentFatalities"  value="No">
                                        <input type="checkbox" name="accidentFatalities"  value="Yes">
                                        <span class="checkbox"></span>
                                        Fatalities?
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm3" style="margin-top:27px;">
                                    <label class="option">
                                        <input type="hidden" name="accidentInjuries" value="No">
                                        <input type="checkbox" name="accidentInjuries" value="Yes">
                                        <span class="checkbox"></span>
                                        Injuries?
                                    </label>
                                </div><!-- end section -->
                            </div>
                        </div>
                    </div>
                    <div class="input-group-addon accidentGroupAll" style="margin-top:20px;margin-bottom: 20px;">
                            
                            
                            <a href="javascript:void(0)" id="addAccident" class="btn btn-form-addon btn-add-more"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fas fa-plus" style="margin-right: 5px;"></i>Add additional fields</a>
                        </div>
                    </fieldset>
                    <h2>Record of Violations</h2>
                    <fieldset>
                        <div class="frm-row">
                            <div class="section colm">
                                <p>List all violations of motor vehicle laws (other those involving only parking) of which you were convicted or forfeited bond or collateral during the past 3 years:</p>
                            </div>
                        </div>
                        <div class="frm-row">
                            <div class="section colm">
                            	<label class="option">
                                <input class="form-check-input" type="checkbox" name="violationWasnt" id="violationWasnt">
                                <span class="checkbox"></span>
                                <label class="form-check-label" for="violationWasnt">Didn't violate during the past 3 years.</label>
                                </label>
                            </div>
                        </div>
                        <div  id="violationGroup">
                        <div class="recordGroup">
                            <div class="frm-row">
                                <div class="section colm colm6">
                                    <label for="violationOffense" class="field-label">Offense</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="violationOffense[]" id="violationOffense" class="gui-input" placeholder="Offense">
                                        <span class="field-icon"><i class="fas fa-exclamation-triangle"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="violationLocation" class="field-label">Location</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="violationLocation[]" id="violationLocation" class="gui-input" placeholder="Location">
                                        <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm4">
                                    <label for="violationDate" class="field-label">Date</label>
                                    <label class="field prepend-icon">
                                        <input type="date" name="violationDate[]" id="violationDate" class="gui-input" placeholder="Date">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="violationPenalty" class="field-label">Penalty</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="violationPenalty[]" id="violationPenalty" class="gui-input" placeholder="Penalty">
                                        <span class="field-icon"><i class="fas fa-gavel"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="violationOperated" class="field-label">Type of Vehicle Operated</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="violationOperated[]" id="violationOperated" class="gui-input" placeholder="Vehicle Operated">
                                        <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                        </div>
                        <div class="input-group-addon" style="margin-top:20px;margin-bottom: 20px;">
                            <a href="javascript:void(0)" class="btn btn-form-addon btn-add-more addMoreRecord"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fas fa-plus" style="margin-right: 5px;"></i>Add additional fields</a>
                        </div>
                    </div>
                    </fieldset>
                    <h2>Denial or Suspension</h2>
                    <fieldset>
                        <div class="section colm colm3">
                            <span>Have you ever been denied a license, permit or privilege to operate a commercial motor vehicle?</span>
                            <div class="section colm colm12">
                            <label class="option">
                                    <input type="radio" name="drsDenied"" value="No" checked>
                                    <span class="radio"></span>No
                                </label>
                                <label class="option">
                                    <input type="radio" name="drsDenied"" value="Yes">
                                    <span class="radio"></span>Yes
                                </label>
                            </div>
                        </div>
                        <div class="section colm colm6" id="drsDeniedDetailField"  style="display:none;">
                            <label for="drsDeniedDetail" class="field-label">Offense Information</label>
                            <label class="field prepend-icon">
                                <textarea style="height:100px;" name="drsDeniedDetail" id="drsDeniedDetail" class="gui-input" placeholder="Offense Information"></textarea>
                                <span class="field-icon"><i class="fas fa-question-circle"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm3">
                            <span>Have you ever had a license, permit or privilege to operate a commercial motor vehicle suspended or revoked?</span>
                             <div class="section colm colm12">
                            <label class="option">
                                    <input type="radio" name="drsSuspended" value="No" checked>
                                    <span class="radio"></span>No               
                                </label>
                                <label class="option">
                                    <input type="radio" name="drsSuspended" value="Yes">
                                    <span class="radio"></span>Yes
                                </label>
                            </div>
                        </div>
                        <div class="section colm colm6" id="drsSuspendedDetailField" style="display:none;">
                            <label for="drsSuspendedDetail" class="field-label">Suspension Information</label>
                            <label class="field prepend-icon">
                                <textarea style="height:100px;" name="drsSuspendedDetail" id="rowOffense" class="gui-input" placeholder="Suspension Information"></textarea>
                                <span class="field-icon"><i class="fas fa-question-circle"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm3">
                            <span>Is there any reason you might be unable to perform the functions of the job for which you have applied?</span>
                            <div class="section colm colm12">
                            <label class="option">
                                    <input type="radio" name="drsUnable" value="No" checked>
                                    <span class="radio"></span>No               
                                </label>
                                <label class="option">
                                    <input type="radio" name="drsUnable" value="Yes">
                                    <span class="radio"></span>Yes
                                </label>
                            </div>
                        </div>
                        <div class="section colm colm6" id="drsUnableDetailField" style="display:none;">
                            <label for="drsUnableDetail" class="field-label">More Information</label>
                            <label class="field prepend-icon">
                                <textarea style="height:100px;" name="drsUnableDetail" id="drsUnableDetail" class="gui-input" placeholder="More Information"></textarea>
                                <span class="field-icon"><i class="fas fa-question-circle"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm3">
                            <span>Are you taking any medications which will limit your ability to drive?</span>
                            <div class="section colm colm12">
                            <label class="option">
                                    <input type="radio" name="drsMedication" value="No" checked>
                                    <span class="radio"></span>No               
                                </label>
                                <label class="option">
                                    <input type="radio" name="drsMedication" value="Yes">
                                    <span class="radio"></span>Yes
                                </label>
                            </div>
                        </div>
                        <div class="section colm colm6" id="drsMedicationDetailField" style="display:none;">
                            <label for="drsMedicationDetail" class="field-label">Medication Information</label>
                            <label class="field prepend-icon">
                                <textarea style="height:100px;" name="drsMedicationDetail" id="drsMedicationDetail" class="gui-input" placeholder="Medication Information"></textarea>
                                <span class="field-icon"><i class="fas fa-question-circle"></i></span>
                            </label>
                        </div><!-- end section -->

                    </fieldset>
                    <h2>Controlled Substances</h2>
                    <fieldset>
                        <div class="section colm colm12">
                            <p>CFR Part 40.25(j) requires the employer to ask any applicant, whether he or she has tested positive, or refused to test, on any preemployment drug or alcohol test administered by an employer to which the employee applied for, but did not obtain, safety-sensitive transportation work covered by DOT agency drug and alcohol rules during the past two years. If the potential employee admits that he or she had a positive test or refusal to test, we must not use the employee to perform safety- sensitive functions, until and unless the potential employee provides documentation of successful completion of the return-to-duty process (See Section 40.25(b)(5) and (e)).  </p>
                            <p>In the past two years, have you been:</p>

                        </div>
                        <div class="section colm colm3">
                            <span>A. Obtained verified positive results for controlled substance tests required by other companies?</span>
                            <label class="switch block">
                                <label class="option">
                                    <input type="radio" name="csVerified" value="No" checked>
                                    <span class="radio"></span>No               
                                </label>
                                <label class="option">
                                    <input type="radio" name="csVerified" value="Yes">
                                    <span class="radio"></span>Yes
                                </label>
                            </label>
                        </div>
                        <div class="section colm colm3">
                            <span>B. Obtained alcohol tests results indicating 0.04 or higher alcohol concentration?</span>
                            <label class="switch block">
                            <label class="option">
                                    <input type="radio" name="csAlcohol" value="No" checked>
                                    <span class="radio"></span>No               
                                </label>
                                <label class="option">
                                    <input type="radio" name="csAlcohol" value="Yes">
                                    <span class="radio"></span>Yes
                                </label>
                            </label>
                        </div>
                        <div class="section colm colm3">
                            <span>C. Refused to undergo alcohol or controlled substance testing required by other companies?</span>
                            <label class="switch block">
                            <label class="option">
                                    <input type="radio" name="csRefused" value="No" checked>
                                    <span class="radio"></span>No               
                                </label>
                                <label class="option">
                                    <input type="radio" name="csRefused" value="Yes">
                                    <span class="radio"></span>Yes
                                </label>
                            </label>
                        </div>
                        <p>If you answered "yes" to any of the questions above, provide the following information about the Substance Abuse Professional (SAP) that you consulted:</p>
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <label for="csName" class="field-label">Name of SAP</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="csName" id="csName" class="gui-input" placeholder="Name of SAP">
                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="csAddress" class="field-label">Address</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="csAddress" id="csAddress" class="gui-input" placeholder="Address">
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <label for="csPhone" class="field-label">Phone Number</label>
                                <label class="field prepend-icon">
                                    <input type="tel" name="csPhone" id="csPhone" class="gui-input" placeholder="Phone Number">
                                    <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="csDate" class="field-label">Last Visit Date</label>
                                <label class="field prepend-icon">
                                    <input type="date" name="csDate" id="csDate" class="gui-input" placeholder="Date Visited">
                                    <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                    </fieldset>
                    <h2>Previous Employment</h2>
                    <fieldset>
                        <div class="section colm colm12">
                            <p>Give a complete record of all employment for the past three (3) years, including any unemployment or self-employment and all commercial driving experience for the past ten (10) years.</p>
                        </div>
                        <div>
                            <div class="frm-row">

                                <div class="section colm colm6">
                                    <label for="carrierName" class="field-label">Motor Carrier's Name</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="carrierName[]" id="carrierName" class="gui-input" placeholder="Motor Carrier's Name">
                                        <span class="field-icon"><i class="fas fa-building"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="carrierAddress" class="field-label">Address</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="carrierAddress[]" id="carrierAddress" class="gui-input" placeholder="Address">
                                        <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm6">
                                    <label for="carrierPhone" class="field-label">Phone Number</label>
                                    <label class="field prepend-icon">
                                        <input type="tel" name="carrierPhone[]" id="carrierPhone" class="gui-input" placeholder="Phone Number">
                                        <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="carrierFax" class="field-label">Fax Number</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="carrierFax[]" id="carrierFax" class="gui-input" placeholder="Fax Number">
                                        <span class="field-icon"><i class="fas fa-fax"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm6">
                                    <label for="carrierDateFrom" class="field-label">Date From</label>
                                    <label class="field prepend-icon">
                                        <input type="date" id="carrierDateFrom" name="carrierDateFrom[]" class="gui-input" placeholder="Date From">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="carrierDateTo" class="field-label">Date To</label>
                                    <label class="field prepend-icon">
                                        <input type="date" id="carrierDateTo" name="carrierDateTo[]" class="gui-input" placeholder="Date To">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div><!-- end .frm-row section -->
                            <div class="frm-row">
                                <div class="section colm colm12">
                                    <label for="carrierReason" class="field-label">Reason for Leaving</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="carrierReason[]" id="carrierReason" class="gui-input" placeholder="Reason for Leaving">
                                        <span class="field-icon"><i class="fas fa-door-open"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm12">
	                            	<label class="option">
                                        <input type="hidden" name="carrierSubject0" value="No">
	                                    <input type="checkbox" name="carrierSubject0" value="Yes">
	                                    <span class="checkbox"></span>
	                                    Were you subject to the FMCSRs while employed here?
	                                </label>
	                       		</div>
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm12">
                                     <label class="option">
                                        <input type="hidden" name="carrierDesignated0" value="No">
		                                <input type="checkbox" name="carrierDesignated0" value="Yes">
		                                <span class="checkbox"></span>
		                                Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?
		                            </label>
                                </div>
                            </div>
                        </div>



                        <div class="input-group-addon" style="margin-top:20px;margin-bottom: 20px;">
                            
                            <a href="javascript:void(0)" class="btn btn-form-addon btn-add-more" id="addEmployer"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fas fa-plus" style="margin-right: 5px;"></i>Add additional fields</a>
                        </div>
                    </fieldset>
                    <h2>Personal References</h2>
                    <fieldset>
                        <div class="frm-row">
                            <div class="section colm colm12" style="margin-bottom: 0px">
                                <p>List three(3) individuals for references, other than family members, who have knowledge of your safety habits.</p>
                            </div>
                            <div class="section colm colm12" style="margin-bottom: 0px">
                                <center><h3>Reference 1</h3></center>
                            </div>
                            <div class="section colm colm6" style="margin-bottom: 0px">
                                <label for="referencesName1" class="field-label">Full Name</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="referencesName1" id="referencesName1" class="gui-input" placeholder="Full Name" required>
                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="referencesPhone1" class="field-label">Phone Number</label>
                                <label class="field prepend-icon">
                                    <input type="tel" name="referencesPhone1" id="referencesPhone1" class="gui-input" placeholder="Phone Number" required>
                                    <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm12" style="margin-bottom: 0px">
                                <label for="referencesAddress1" class="field-label">Full Address</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="referencesAddress1" id="referencesAddress1" class="gui-input" placeholder=" Full Address ">
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                        <div class="section colm colm12">
                            <center><h3>Reference 2</h3></center>
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <label for="referencesName2" class="field-label">Full Name</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="referencesName2" id="referencesName2" class="gui-input" placeholder="Full Name">
                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="referencesPhone2" class="field-label">Phone Number</label>
                                <label class="field prepend-icon">
                                    <input type="tel" name="referencesPhone2" id="referencesPhone2" class="gui-input" placeholder="Phone Number">
                                    <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm12" style="margin-bottom: 0px">
                                <label for="referencesAddress2" class="field-label">Full Address</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="referencesAddress2" id="referencesAddress2" class="gui-input" placeholder=" Full Address ">
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                        <div class="section colm colm12">
                            <center><h3>Reference 3</h3></center>
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <label for="referencesName3" class="field-label">Full Name</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="referencesName3" id="referencesName3" class="gui-input" placeholder="Full Name">
                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="referencesPhone3" class="field-label">Phone Number</label>
                                <label class="field prepend-icon">
                                    <input type="tel" name="referencesPhone3" id="referencesPhone3" class="gui-input" placeholder="Phone Number">
                                    <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm12">
                                <label for="referencesAddress2" class="field-label">Full Address</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="referencesAddress3" id="referencesAddress3" class="gui-input" placeholder=" Full Address ">
                                    <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                    </fieldset>
                    <h2>Certification</h2>
                    <fieldset>
                        <p>391.23(i)(1) The prospective employer must expressly notify drivers with Department of Transportation regulated employment during the preceding three years-via the application form or other written document prior to any hiring decision-that he or she has the following rights regarding the investigative information that will be provided to the prospective employer pursuant to paragraphs (d) and (e) of this section:
                        </p>
                        <p>
                            (i)(1)(i) The right to review information provided by previous employers;
                        </p>
                        <p>
                            (i)(1)(ii) The right to have errors in the information corrected by the previous employer and for that previous employer to re-send the corrected information to the prospective employer;
                        </p>
                        <p>
                            (i)(1)(iii) The right to have a rebuttal statement attached to the alleged erroneous information, if the previous employer and the driver cannot agree on the accuracy of the information.
                        </p>
                        <p>
                            (i)(2) Drivers who have previous Department of Transportation regulated employment history in the preceding three years, and wish to review previous employer-provided investigative information must submit a written request to the prospective employer, which may be done at any time, including when applying, or as late as 30 days after being employed or being notified of denial of employment. The prospective employer must provide this information to the applicant within five (5) business days of receiving the written request. If the prospective employer has not yet received the requested information from the previous employer(s), then the five-business day’s deadline will begin when the prospective employer receives the requested safety performance history information. If the driver has not arranged to pick up or receive the requested records within thirty (30) days of the prospective employer making them available, the prospective motor carrier may consider the driver to have waived his/her request to review the records. Visit www.fmcsa.dot.gov to review the regulations.
                        </p>
                        <p>
                            This certifies that this application was completed by me, and that all entries on it and information in it are true and complete to the best of my knowledge.
                        </p>
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <label for="certificationName" class="field-label">Full Name</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="certificationName" id="certificationName" class="gui-input" placeholder="Full Name" required>
                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="certificationDate" class="field-label">Today's Date</label>
                                <label class="field prepend-icon">
                                    <input type="date" name="certificationDate" id="certificationDate" class="gui-input" placeholder="Date" required>
                                    <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                    </fieldset>
                    
                    <h2>Test Results</h2>
                    <fieldset>
                        <div class="frm-row">
                            <div class="section colm colm12">
                                <p>Pursuant to 49 CFR §40.25, I hereby authorize the companies listed below to furnish to RUSSO BROTHERS TRANSPORT INC, with address at ,8200 Berry Ave Suite 160 Sacramento, CA 95828, the following information concerning controlled substances and alcohol tests I have been involved during the last 3 years: (1) whether I had alcohol tests with a result of 0.04 or higher alcohol concentration, the dates of such test(s) and the alcohol concentration then recorded; (2) whether I had verified positive drug tests, the date of such test(s) and the controlled substance(s) involved; (3) whether I have refused to be tested (including verified adulterated or substituted drug test results) and the dates of refusal; (4) whether I committed other violations of DOT drug and alcohol testing regulations and the dates and circumstances of each violation. I further authorize the companies listed below to furnish the name and phone number of any Substance Abuse Professional who evaluated me during the past three years, all supporting documentation and follow-up tests in accordance with 49 CFR §40.25(b)(5).</p>
                            </div>
                            <div class="authGroup">
                                <div class="section colm colm6">
                                    <label for="authCompany" class="field-label">Company</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="authCompany[]" id="authCompany" class="gui-input" placeholder="Company">
                                        <span class="field-icon"><i class="fas fa-building"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="authContact" class="field-label">Contact Name</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="authContact[]" id="authContact" class="gui-input" placeholder="Contact Name">
                                        <span class="field-icon"><i class="fa fa-user"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="authPhone" class="field-label">Phone Number</label>
                                    <label class="field prepend-icon">
                                        <input type="tel" name="authPhone[]" id="authPhone" class="gui-input" placeholder="Phone Number">
                                        <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="authFax" class="field-label">Fax Number</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="authFax[]" id="authFax" class="gui-input" placeholder="Fax Number">
                                        <span class="field-icon"><i class="fas fa-fax"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm12">
                                    <label for="authAddress" class="field-label">Address</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="authAddress[]" id="authAddress" class="gui-input" placeholder="Address">
                                        <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="authCity" class="field-label">City</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="authCity[]" id="authCity" class="gui-input" placeholder="City">
                                        <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="authState" class="field-label">State</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="authState[]" id="authState" class="gui-input" placeholder="State">
                                        <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm4">
                                    <label for="authZip" class="field-label">ZIP Code</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="authZip[]" id="authZip" class="gui-input" placeholder="Zip Code">
                                        <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                        </div>
                        <div class="frm-row">
                            <div class="section colm colm12">
                                <div class="input-group-addon">
                                    <a href="javascript:void(0)" class="btn btn-form-addon btn-add-more addMoreAuth"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fas fa-plus" style="margin-right: 5px;"></i>Add additional fields</a>
                                </div>
                            </div>
                            <div class="section colm colm12">
                                <p>In signing below, I certify that I have read and fully understand this release. I further certify that all information provided in this form is true and complete. I also certify that I have listed all the companies for which I rendered services in the past three years and every company for which I took alcohol and controlled substances tests in the past three years.
                                </p>
                            </div>
                            <div class="section colm colm6">
                                <label for="authName" class="field-label">Full Name</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="authName" id="authName" class="gui-input" placeholder="Owner's Name" required>
                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="authSs" class="field-label">Social Security Number</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="authSs" id="authSs" class="gui-input" placeholder="Social Security" required>
                                    <span class="field-icon"><i class="far fa-id-card"></i></span>
                                </label>
                            </div><!-- end section -->
                              <div class="section colm colm6">
                                <label for="authDate" class="field-label">Date</label>
                                <label class="field prepend-icon">
                                    <input type="date" name="authDate" id="authDate" class="gui-input" placeholder="Date" required>
                                    <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                    </fieldset>
                    <h2>Acknowledgement</h2>
                    <fieldset>
                        <div class="frm-row">
                            <div class="section colm colm12">
                                <p>This policy statement acknowledgment is intended to comply with all applicable Drug Free Workplace regulations governing anti-drug programs in the workplace. Those programs mandate urine drug testing and breathalyzer or saliva alcohol testing and prevent performance of job duties when there is a positive test result.</p>
                                <p><b>As an independent contractor rendering services for RUSSO BROTHERS TRANSPORT INC,</b> I am prohibited from taking the following controlled substances:</p>
                                <p><u>Drugs:</u></p>
                                <p>6-Acetylmorphine, Amphetamines, Cocaine Metabolites, Marijuana Metabolites, MDA-Analogues, Opiates, Opiates (Semi-Synthetic), Oxycodone’s, Phencyclidine.</p>
                                <p><u>Alcohol:</u></p>
                                <p>This use of beverages or substances, including any medication containing alcohol such that it is present in the body at a level in excess of that stated in Department of Transportation guidelines while actually performing, ready to perform, or immediately available to perform is prohibited. "Alcohol" is defined as: the intoxicating agent in beverage alcohol, ethyl alcohol, or other low molecular-weight alcohol, including ethyl or isopropyl alcohol.</p>
                                <p><b>Under Drug Free Workplace Regulation:</b></p>
                                <p>1. I may not engage in the unlawful manufacture, distribution, dispensing, possession or use of a controlled substance or alcohol while performing my job duties.</p>
                                <p>2. I may not be impaired or under the influence of a prohibited substance, or not be fit for duty. If I fail to pass (where there is a quantifiable presence of a prohibited substance in the body above the minimum thresholds defined by Federal Guidelines) a controlled substance or alcohol test, I will remain off duty and seek treatment. I may not report for duty or remain on duty when my ability to perform job is adversely affected by alcohol or when I have a breath alcohol concentration of 0.04 or greater. I may not use alcohol within four hours of reporting for duty nor during hours that I am on call.</p>
                                <p>3. I am subject to controlled substance testing and breathe alcohol testing and may not refuse to comply with a request for testing, provide false information in connection with a test or attempt to falsify test results through tampering, contamination, adulteration, or substitution. Refusal to submit to a test can include an inability to provide a urine specimen or breathe sample without a valid medical explanation, as well as a verbal declaration, obstructive behavior or physical absence resulting in the inability to conduct the test.</p>
                                <p>4. If I test positive for controlled substances or alcohol, I must: (1) be evaluated by a Substance Abuse Professional (SAP), (2) participate in and complete the rehabilitation program required by the SAP, (3) be released to duty by the SAP, and (4) test negative on a return-to-duty controlled substances and/or alcohol test before returning to duty. In addition, I will be required to undergo unannounced follow-up controlled substance and/or alcohol breath testing following returning to duty. The duration and frequency will be determined by the SAP. However, it shall not be less than 6 tests during the first 12 months, or longer than 60 months in total, following return to duty.</p>
                                <p><b>As an independent contractor rendering services for RUSSO BROTHERS TRANSPORT INC, I may be tested under any of the following circumstances:</b></p>
                                <p><u>Pre-Enrollment Testing:</u></p>
                                <p>A operator of motor vehicles who wishes to render services for RUSSO BROTHERS TRANSPORT INC. will be required to undergo urine controlled substance testing prior to the commencement of services. Receipt of satisfactory test result is required and failure of a controlled substance test will disqualify me from performing services for Russo Brothers Transport, Inc.</p>
                                <p><u>Reasonable Suspicion Testing:</u></p>
                                <p>I will be subject to urine and/or breath testing when there is a reason to believe that controlled substances or alcohol use is adversely affecting my performance of services that I agreed to render to RUSSO BROTHERS TRANSPORT INC. A reasonable suspicion referral for testing may be made by a trained employee RUSSO BROTHERS TRANSPORT INC. on the basis of documented objective facts and circumstances which are consistent with the effects of substance abuse.</p>
                                <p>Examples of reasonable suspicion include, but are limited to, the following:</p>
                                <ul style="margin-left: 15px;">
                                    <li>1. Adequate documentation of unsatisfactory performance of contracted services or of inadequate behavior while performing services.
                                    </li>
                                    <li>2. Physical signs and symptoms consistent with prohibited substance use.
                                    </li>
                                    <li>3. Occurrence of a serious or potentially serious accident that may have been caused by human error.
                                    </li>
                                    <li>4. Fights (to mean physical contact), assaults and flagrant disregard or violations of estimated safety, security, or other operation procedures.
                                    </li>
                                </ul>
                                <p><u>Post-Accident Testing:</u></p>
                                <p>I will be required to undergo controlled substance and/or breath alcohol testing if I am involved in an accident which results in a fatality, results in injuries requiring transportation to a medical treatment facility, where there is significant property damage, or if there is an injury as defined by Worker's Compensation Guidelines.</p>
                                <p>Following an accident, I must be tested as soon as possible, but not to exceed 8 hours for alcohol and 32 hours for controlled substances. I may not leave the scene of the accident without appropriate authorization from law enforcement prior to submission to controlled substance and/or alcohol testing.</p>
                                <p><u>Random Testing:</u></p>
                                <p>I will be subjected to random, unannounced testing. The random selection will be by a scientifically valid method. I will have an equal chance of being tested each time selections are made.</p>
                                <p><u>Follow-Up Testing:</u></p>
                                <p>I understand that I will be subject to at least six unannounced follow-up alcohol and/or controlled substances testing as directed by a substance abuse professional, if company determines that I am in need of assistance in resolving problems associated with alcohol misuse and/or use of controlled substances. Title 49, Part 382.811.</p>
                                <p><u>Return-to-services Testing:</u></p>
                                <p>If tested positive for controlled substances or if my alcohol concentration is above the limits set forth by the DOT regulations, I must be assessed by a Substance Abuse Professional (SAP). An SAP is a licensed physician, psychologist, social worker, employee assistance professional or addiction counselor with knowledge of and clinical experience in the diagnosis and treatment of alcohol related disorders. The Sap will evaluate me to determine what assistance, if any, I need in resolving problems associated with abuse of controlled substances.</p>
                            </div>

                            <div class="section colm colm6">
                                <label for="ackName" class="field-label">Full Name</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="ackName" id="ackName" class="gui-input" placeholder="Owner's Name" required>
                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="ackDate" class="field-label">Date</label>
                                <label class="field prepend-icon">
                                    <input type="date" name="ackDate" id="ackDate" class="gui-input" placeholder="Date" required>
                                    <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                    </fieldset>
                    <h2>Certified Receipt</h2>
                    <fieldset>
                        <div class="frm-row">
                            <div class="section colm colm12">
                                <p>I, the applicant, hereby certify that I have received a copy of the Drug and Alcohol Policy and that I am familiar with all of the information contained within it. </p>
                            </div>
                            <div class="section colm colm6">
                                <label for="dapolicyName" class="field-label">Full Name</label>
                                <label class="field prepend-icon">
                                    <input type="text" name="dapolicyName" id="dapolicyName" class="gui-input" placeholder="Owner's Name" required>
                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                </label>
                            </div><!-- end section -->
                            <div class="section colm colm6">
                                <label for="dapolicyDate" class="field-label">Date</label>
                                <label class="field prepend-icon">
                                    <input type="date" name="dapolicyDate" id="dapolicyDate" class="gui-input" placeholder="Date" required>
                                    <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                </label>
                            </div><!-- end section -->
                        </div>
                    </fieldset>
                    <h2>Submit</h2>
                    <fieldset>
                        <div class="section">
                            <div class="notification alert-info">
                                <div class="frm-row">
                                    <div class="section colm colm6">
                                    </div>
                                </div><!-- end section -->
                                <div class="section">
                                    <div class="section">
                                        <div class="option-group field">
                                            <label class="option">
                                                <span>Plese cross check your information before submitting application</span><br>
                                                <input type="checkbox" name="generalTerms" value="General Terms" required>
                                                <span class="checkbox"></span>
                                                Please <a href="#" class="smart-link"> read and agree </a> to our the terms
                                            </label>
                                        </div>
                                    </div><!-- end section -->
                                </div><!-- end section -->
                                <div class="result"></div>

                    </fieldset>
                <div id="loading" style="display:none;" align="center"> 
                	<p>Please wait, we are processing your application.</p>
                	<img src="../../img/oval.svg" width="50" alt="">
                	<p>Do not close or refresh the window.</p>
                </div>



                <!-- copy of 2.Address input fields group -->
                <div class="form-group prevAddressGroupCopy" style="display: none;">
                    <div class="frm-row">
                        <div class="section colm colm12">
                            <hr/>
                        </div>
                        <div class="section colm colm4">
                            <label for="prevAddress" class="field-label">Full Address</label>
                            <label class="field prepend-icon">
                                <input type="text" name="prevAddress[]" id="prevAddress" class="gui-input" placeholder="Address">
                                <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm3">
                            <label for="prevCity" class="field-label">City</label>
                            <label class="field prepend-icon">
                                <input type="text" name="prevCity[]" id="prevCity" class="gui-input" placeholder="City">
                                <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm3">
                            <label for="prevState" class="field-label">State</label>
                            <label class="field prepend-icon">
                                <input type="text" name="prevState[]" id="prevState" class="gui-input" placeholder="State">
                                <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm2">
                            <label for="prevZip" class="field-label">ZIP Code</label>
                            <label class="field prepend-icon">
                                <input type="text" name="prevZip[]" id="prevZip" class="gui-input" placeholder="Zip code">
                                <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                            </label>
                        </div><!-- end section -->
                    </div>
                    <div class="input-group-addon" style="margin-top:10px;margin-bottom: 40px;">
                        <a href="javascript:void(0)" class="btn btn-form-addon btn-remove remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span><i class="fas fa-minus" style="margin-right: 5px;"></i>Remove fields</a>
                    </div>
                </div>
                <!-- copy of 3.License input fields group -->
                <div class="form-group licenseGroupCopy" style="display: none;">
                    <div class="section colm colm12">
                        <hr/>
                    </div>
                    <div class="frm-row">
                        <div class="section colm colm6">
                            <label for="drCdl" class="field-label">CDL/CPL Number</label>
                            <label class="field prepend-icon">
                                <input type="text" name="drCdl[]" id="drCdl" class="gui-input" placeholder="CDL/CPL#">
                                <span class="field-icon"><i class="far fa-id-card"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm6">
                            <label for="drState" class="field-label">State Issued</label>
                            <label class="field prepend-icon">
                                <input type="text" name="drState[]" id="drState" class="gui-input" placeholder="State Issued">
                                <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                            </label>
                        </div><!-- end section -->
                    </div>
                    <div class="frm-row">
                        <div class="section colm colm4">
                            <label for="drDate" class="field-label">Expiration Date</label>
                            <label class="field prepend-icon">
                                <input type="date" name="drDate[]" id="drDate" class="gui-input" placeholder="Expiration Date">
                                <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm4">
                            <label for="drClass" class="field-label">Driver's License Class</label>
                            <label class="field prepend-icon">
                                <input type="text" name="drClass[]" id="drClass" class="gui-input" placeholder="Class (A,B)">
                                <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm4">
                            <label for="drEndorsement" class="field-label">Endorsements</label>
                            <label class="field prepend-icon">
                                <input type="text" name="drEndorsement[]" id="drEndorsement" class="gui-input" placeholder="Endorsements">
                                <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                            </label>
                        </div><!-- end section -->
                    </div>
                    <div class="input-group-addon" style="margin-top:10px;margin-bottom: 40px;">
                        <a href="javascript:void(0)" class="btn btn-form-addon btn-remove remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span><i class="fas fa-minus" style="margin-right: 5px;"></i>Remove fields</a>
                    </div>
                </div>
               
                <!-- copy of 5.Accident input fields group -->

                

                   
                <!-- copy of 6.Record input fields group -->
                <div class="form-group recordGroupCopy" style="display: none;">
                    <div class="section colm colm12">
                        <hr/>
                    </div>
                    <div class="frm-row">
                        <div class="section colm colm6">
                            <label for="violationOffense" class="field-label">Offense</label>
                            <label class="field prepend-icon">
                                <input type="text" name="violationOffense[]" id="violationOffense" class="gui-input" placeholder="Offense">
                                <span class="field-icon"><i class="fas fa-exclamation-triangle"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm6">
                            <label for="violationLocation" class="field-label">Location</label>
                            <label class="field prepend-icon">
                                <input type="text" name="violationLocation[]" id="violationLocation" class="gui-input" placeholder="Location">
                                <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                            </label>
                        </div><!-- end section -->
                    </div>
                    <div class="frm-row">
                        <div class="section colm colm4">
                            <label for="violationDate" class="field-label">Date</label>
                            <label class="field prepend-icon">
                                <input type="date" name="violationDate[]" id="violationDate" class="gui-input" placeholder="Date">
                                <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm4">
                            <label for="violationPenalty" class="field-label">Penalty</label>
                            <label class="field prepend-icon">
                                <input type="text" name="violationPenalty[]" id="violationPenalty" class="gui-input" placeholder="Penalty">
                                <span class="field-icon"><i class="fas fa-gavel"></i></span>
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm4">
                            <label for="violationOperated" class="field-label">Type of Vehicle Operated</label>
                            <label class="field prepend-icon">
                                <input type="text" name="violationOperated[]" id="violationOperated" class="gui-input" placeholder="Vehicle Operated">
                                <span class="field-icon"><i class="fas fa-truck-moving"></i></span>
                            </label>
                        </div><!-- end section -->
                    </div>
                    <div class="input-group-addon" style="margin-top:10px;margin-bottom: 40px;">
                        <a href="javascript:void(0)" class="btn btn-form-addon btn-remove remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span><i class="fas fa-minus" style="margin-right: 5px;"></i>Remove fields</a>
                    </div>
                </div>








                <!-- copy of 9.Employer input fields group -->


                <div id="employerGroup" style="display: none;">
                            <div class="frm-row">

                                <div class="section colm colm6">
                                    <label for="carrierName" class="field-label">Motor Carrier's Name</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="carrierName[]" id="carrierName" class="gui-input" placeholder="Motor Carrier's Name">
                                        <span class="field-icon"><i class="fas fa-building"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="carrierAddress" class="field-label">Address</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="carrierAddress[]" id="carrierAddress" class="gui-input" placeholder="Address">
                                        <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm6">
                                    <label for="carrierPhone" class="field-label">Phone Number</label>
                                    <label class="field prepend-icon">
                                        <input type="tel" name="carrierPhone[]" id="carrierPhone" class="gui-input" placeholder="Phone Number">
                                        <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="carrierFax" class="field-label">Fax Number</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="carrierFax[]" id="carrierFax" class="gui-input" placeholder="Fax Number">
                                        <span class="field-icon"><i class="fas fa-fax"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm6">
                                    <label for="carrierDateFrom" class="field-label">Date From</label>
                                    <label class="field prepend-icon">
                                        <input type="date" id="carrierDateFrom" name="carrierDateFrom[]" class="gui-input" placeholder="Date From">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                                <div class="section colm colm6">
                                    <label for="carrierDateTo" class="field-label">Date To</label>
                                    <label class="field prepend-icon">
                                        <input type="date" id="carrierDateTo" name="carrierDateTo[]" class="gui-input" placeholder="Date To">
                                        <span class="field-icon"><i class="fas fa-calendar-alt"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div><!-- end .frm-row section -->
                            <div class="frm-row">
                                <div class="section colm colm12">
                                    <label for="carrierReason" class="field-label">Reason for Leaving</label>
                                    <label class="field prepend-icon">
                                        <input type="text" name="carrierReason[]" id="carrierReason" class="gui-input" placeholder="Reason for Leaving">
                                        <span class="field-icon"><i class="fas fa-door-open"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm12">
                                    <label class="option">
                                        <input type="hidden" name="carrierSubject" value="No">
                                        <input type="checkbox" name="carrierSubject" value="Yes">
                                        <span class="checkbox"></span>
                                        Were you subject to the FMCSRs while employed here?
                                    </label>
                                </div>
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm12">
                                     <label class="option">
                                        <input type="hidden" name="carrierDesignated" value="No">
                                        <input type="checkbox" name="carrierDesignated" value="Yes">
                                        <span class="checkbox"></span>
                                        Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?
                                    </label>
                                </div>
                            </div>
                        </div>




                <!-- copy of Auth input fields group -->
                <div class="form-group authGroupCopy" style="display: none;">
                    <div class="section colm colm12">
                        <hr/>
                    </div>

                    <div class="section colm colm6">
                        <label for="authCompany" class="field-label">Company</label>
                        <label class="field prepend-icon">
                            <input type="text" name="authCompany[]" id="authCompany" class="gui-input" placeholder="Company">
                            <span class="field-icon"><i class="fas fa-building"></i></span>
                        </label>
                    </div><!-- end section -->
                    <div class="section colm colm6">
                        <label for="authContact" class="field-label">Contact Name</label>
                        <label class="field prepend-icon">
                            <input type="text" name="authContact[]" id="authContact" class="gui-input" placeholder="Contact Name">
                            <span class="field-icon"><i class="fa fa-user"></i></span>
                        </label>
                    </div><!-- end section -->
                    <div class="section colm colm6">
                        <label for="authPhone" class="field-label">Phone Number</label>
                        <label class="field prepend-icon">
                            <input type="tel" name="authPhone[]" id="authPhone" class="gui-input" placeholder="Phone Number">
                            <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                        </label>
                    </div><!-- end section -->
                    <div class="section colm colm6">
                        <label for="authFax" class="field-label">Fax Number</label>
                        <label class="field prepend-icon">
                            <input type="text" name="authFax[]" id="authFax" class="gui-input" placeholder="Fax Number">
                            <span class="field-icon"><i class="fas fa-fax"></i></span>
                        </label>
                    </div><!-- end section -->
                    <div class="section colm colm12">
                        <label for="authAddress" class="field-label">Address</label>
                        <label class="field prepend-icon">
                            <input type="text" name="authAddress[]" id="authAddress" class="gui-input" placeholder="Address">
                            <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                        </label>
                    </div><!-- end section -->
                    <div class="section colm colm4">
                        <label for="authCity" class="field-label">City</label>
                        <label class="field prepend-icon">
                            <input type="text" name="authCity[]" id="authCity" class="gui-input" placeholder="City">
                            <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                        </label>
                    </div><!-- end section -->
                    <div class="section colm colm4">
                        <label for="authState" class="field-label">State</label>
                        <label class="field prepend-icon">
                            <input type="text" name="authState[]" id="authState" class="gui-input" placeholder="State">
                            <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                        </label>
                    </div><!-- end section -->
                    <div class="section colm colm4">
                        <label for="authZip" class="field-label">ZIP Code</label>
                        <label class="field prepend-icon">
                            <input type="text" name="authZip[]" id="authZip" class="gui-input" placeholder="Zip Code">
                            <span class="field-icon"><i class="fas fa-map-marker-alt"></i></span>
                        </label>
                    </div><!-- end section -->
                    <div class="section colm colm12">
                        <div class="input-group-addon" style="margin-top:10px;margin-bottom: 40px;">
                            <a href="javascript:void(0)" class="btn btn-form-addon btn-remove remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span><i class="fas fa-minus" style="margin-right: 5px;"></i>Remove fields</a>
                        </div>
                    </div>
                </div>
                </form>                                                                                                    
                </div><!-- end .form-body section -->
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->

</body>
</html>

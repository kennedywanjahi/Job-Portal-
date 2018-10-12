<?php
ob_start();
include 'header.php';
if($_SESSION['account_status'] == 0){

redirect("index.php");
}
if (isset($_GET['position'])) {
	$position = escape($_GET['position']);
}
 ?>



 <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2">
                </div><!--/span-->
                <div class="span10">
                    <div style="margin-top: 30px; margin-bottom: 21px;">
                        <button  style="float:right;" class="btn btn-success btn-mini"><a href="javascript:Clickheretoprint()"> Print</button></a>
                    </div>
                    <div class="w3-row" style="width: 50%;margin-left: 15%">
                        <div class="content" id="content">
                            <div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
                            	<h1>
                            		SHORTLIST MANIFEST: SLMF-00
                            	</h1>
                                
                            </div>
                            <div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
                                <h2>
                                	MarkSonic Systems Limited.
                                </h2>
                                <h3> Position: <?php echo $position;?></h3>
                                
                            </div>
                            <div style="font-weight:bold; text-align:left;font-size:14px;margin-bottom: 15px;">
                                Applicants Details<br><br>
                               
                            </div>
                            <table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
                                <thead>
                                    <tr>
                                        <th width="25%">Name </th>
                                        <th width="25%"> Qualifications</th>
                                        <th width="25%"> Mobile </th>
                                        <th width="25%"> Email </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                      <?php
                      employerViewJobApplicants();
                       ?>
                       </tr>
                                </tbody>
                            </table>
                            <div class="copyright">
                                <p>&copy; Marksonic Systems Limited. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php
    ?>
</body>
<script>
    function FAGga() {
        var loc = $("select[name='location']").val();
        //alert(loc);
        $("input[name='location']").val(loc);
    }
</script>
<script type="text/javascript" src="js/ourjs.js"></script>
<script type="text/javascript">
    window.onload(sTime());
</script>
<script language="javascript">
    function Clickheretoprint()
    {
        var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
        disp_setting += "scrollbars=yes,width=700, height=400, left=100, top=25";
        var content_vlue = document.getElementById("content").innerHTML;

        var docprint = window.open("", "", disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');
        docprint.document.write(content_vlue);
        docprint.document.close();
        docprint.focus();
    }
</script>
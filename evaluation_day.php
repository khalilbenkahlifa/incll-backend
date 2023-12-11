<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_avs.php'); ?>
<?php include_once('sidebar4.php'); ?>
<?php include_once('alert.php'); ?>

<style>

.msk-modal-content {
   position: absolute;
   left: 125px; 
}
.modal-dialog1 {
  width: 75%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.modal-content1 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: 16%; 
}
.modal-content2 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: 18%; 
}

.modal-content3 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: -14%; 
}
.modal-content4 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: -23%; 
}


#table_exam_mark{
	padding-left:0 !important;	
	margin-left:0 !important;	
}

.noScroll{
	overflow-y:hidden;	
}

body { 
	overflow-y:scroll;
}
.form-control-feedback {
   pointer-events: auto;
}

.msk-set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;
}
.msk-set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.5s;
    animation-name: animatetop;
    animation-duration: 0.5s

}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}


@media only screen and (max-width: 500px) {
	
	.modal-content1, .modal-content2, .modal-content3, .container, .modal-dialog1{
		
	 	width:100%;
	  	position: static;
		
		
	}
	
	#salaryDetails, #salary_details, #salary_details2{
		width:100%;
	}
	
	 #tableSdetails, #tableSdetails1, #tableSdetails2 , #tableSdetails3{
		
		width:100%;
		
	}
	
	.panel-body, .table1-responsive, .table2-responsive {
		overflow-x:auto !important; 
	}
	
	

}

@media only screen and (max-width: 768px) {
    /* For mobile téléphones: */
    [class*="col-"] {
        width: 100%;
    }
	
	.panel-body, .table1-responsive, .table2-responsive  {
		overflow-x:auto !important; 
	}
	
	
	.modal-content1, .modal-content2, .modal-content3, .container, .modal-dialog1{
		
	 	width:100%;
	  	position: static;
		
		
	}
	
	#salaryDetails, #salary_details, #salary_details2{
		width:100%;
	}
	
	 #tableSdetails, #tableSdetails1, tableSdetails2{
		
		width:100%;
		
	}
	
}

@media only screen and (max-width: 1200px) {
    /* For mobile téléphones: */
 
	
	.modal-content1, .modal-content2, .modal-content3, .container, .modal-dialog1{
		
	 	width:100%;
	  	position: static;
		
		
	}
	
	[class*="col-"] {
        width: 100%;
    }
	
	#salaryDetails, #salary_details, #salary_details2{
		width:100%;
	}
	
	 #tableSdetails, #tableSdetails1, tableSdetails2{
		
		width:100%;
		
	}
	
	.panel-body, .table1-responsive, .table2-responsive  {
		overflow-x:auto !important; 
	}
	
	
}




/* #modalINV1 css  */

@media print{

	body{
		
		visibility: hidden;
	
	}

	#modalINV1{
		
	   visibility: visible;
	
	}

	#divPhoto{
		display:none;	
	}

}

#modalINV1 .pdetail1 {
	padding:0;
	float:right;
	margin-right:60px; 
	
}

#modalINV1 .pdetail2 {
	float: right;
	
}

#modalINV1 .div-logo {
	float: left;
	height: 130px;
}

#modalINV1 .logo{
	float: left;
	width: 90px;
	height: 90px;
	margin-right: 10px;
	border-radius: 50%;
	text-align: center;
	background-color:#8860a7;
}

#modalINV1 .class-name{
	float: left;		
	margin-top:0;
	padding-top:0;			
}

#modalINV1 h1,#modalINV1 h2,#modalINV1 h3{
	margin-top:0;
	color:#8860a7;

}

#modalINV1 .class-address {
	float: left;
			
}

#modalINV1 .class-email {
	float: right;
	margin-right:30px;
	padding-right: 31px;
	color:white;
	background-color:#8860a7;
}

#modalINV1 th{			
	background-color:#8860a7;
	color:white;
}
#modalINV1 .std-name{
	color:#8860a7;
	font-size:16px;
}
#modalINV1 #h1{
display:none;	
}


@media print{

#modalINV1 .logo{
		background-color:#8860a7 !important;	
	}

#modalINV1 h1,#modalINV1 h2,#modalINV1 h3,#modalINV1 .std-name{
		color:#8860a7 !important;	
	}
	
	
#modalINV1 .table-bordered th{
			
		color:white!important;
		background-color:#8860a7 !important;		
				
	}
#modalINV1 .class-email {
		color:white!important;
		background-color:#8860a7 !important;
		
} 
	
#modalINV1 .panel{
		border:hidden!important;
}
#modalINV1 #btn1,#modalINV1 .panel-footer ,#modalINV1 .msk-heading {
		display:none;
			
}
	
#modalINV1 #h1{
		display:inline;	
}

#modalINV1 .close{
		display:none;	
}
	
@-moz-document url-prefix() {
		
	.panel{
		
		margin:0;
		padding:0;
	}
	#modalINV1{
		
		margin:0!important;
		padding:0!important;
		position:absolute;
		left:-150px;
	}
	@page{
		margin:0;
		padding:0;	
	}

}
}

/* #modalINV css  */

@media print{

	body{
		
		visibility: hidden;
	
	}

	#modalINV{
		
	   visibility: visible;
	
	}

	#divPhoto{
		display:none;	
	}

}

#modalINV .pdetail1 {
	padding:0;
	float:right;
	margin-right:7px; 
	
}

#modalINV .pdetail2 {
	float: right;
	
}


#modalINV .div-logo {
	float: left;
	height: 130px;
}

#modalINV .logo{
	float: left;
	width: 90px;
	height: 90px;
	margin-right: 10px;
	border-radius: 50%;
	text-align: center;
	background-color:#8860a7;
}

#modalINV .class-name{
	float: left;		
	margin-top:0;
	padding-top:0;			
}

#modalINV h1,#modalINV h2,#modalINV h3{
	margin-top:0;
	color:#8860a7;

}

#modalINV .class-address {
	float: left;
			
}

#modalINV .class-email {
	float: right;
	margin-right:15px;
	padding-right:0;
	color:white;
	background-color:#8860a7;
}

#modalINV th{			
	background-color:#8860a7;
	color:white;
}
#modalINV .std-name{
	color:#8860a7;
	font-size:16px;
}
#modalINV #h1{
display:none;	
}

@media print{

#modalINV .logo{
		background-color:#8860a7 !important;	
	}

#modalINV h1,#modalINV h2,#modalINV h3,#modalINV .std-name{
		color:#8860a7 !important;	
	}
	
	
#modalINV .table-bordered th{
			
		color:white!important;
		background-color:#8860a7 !important;		
				
	}
#modalINV .class-email {
		color:white!important;
		background-color:#8860a7 !important;
		
} 
	
#modalINV .panel{
		border:hidden!important;
}
#modalINV #btn1,#modalINV .panel-footer ,#modalINV .msk-heading {
		display:none;
			
}
	
#modalINV #h1{
		display:inline;	
}

#modalINV .close{
		display:none;	
}
	
@-moz-document url-prefix() {
		
	.panel{
		
		margin:0;
		padding:0;
	}
	#modalINV{
		
		margin:0!important;
		padding:0!important;
		position:absolute;
		left:-150px;
	}
	@page{
		margin:0;
		padding:0;	
	}

}
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
		Évaluation tous les jours
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Évaluation tous les jours</a></li>
        </ol>
	</section>

	<!-- Main content -->
    <section class="content">
    	<div class="row">
            <div class="col-xs-6"><!-- left column -->
              	<div class="box box-primary"><!-- general form elements -->
                	<div class="box-header with-border">
                  		<h3 class="box-title">Select Grade</h3>
                	</div><!-- /.box-header -->
                
                  	<div class="box-body" >
                  		<div class="form-group" id="divGender">
                    		<div class="col-xs-3">
                      			<label for="exampleInputPassword1">Grade</label>
                    		</div>
                    		<div class="col-xs-4" id="divGender1">
                    			<select name="grade" class="form-control" id="grade" ><!--MSK-000107-->
                    				<option>Select Grade</option>
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM grade";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
     								<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?>
					  			</select>
                     		</div>
                    	</div>
                  	</div><!-- /.box-body -->
                  	<div class="box-footer">
                    	<button type="button" class="btn btn-primary"  onClick="showStudentTable(this)">Submit</button><!--MSK-000108-->
                  	</div>
              	</div><!-- /.box -->
            </div>
		</div>
	</section>
          
	<!-- table for view all records -->
    <section class="content" > <!-- Start of table section -->
    	<div class="row" id="table1"><!--MSK-000112--> 
           
        </div>
    </section> <!-- End of table section -->
    
<script>

function showStudentTable(){
//MSK-000109	
	var grade = document.getElementById("grade").value;	
	
	var xhttp = new XMLHttpRequest();//MSK-000110-Start Ajax
  		xhttp.onreadystatechange = function() {
			
    	if (this.readyState == 4 && this.status == 200) {	
									
			document.getElementById('table1').innerHTML = this.responseText;//MSK-000111
					
			$(function () {
				$("#example1").DataTable();
			});
										
    	}
			
  	};	
    xhttp.open("GET", "student_evaluation.php?grade="+grade , true);												
  	xhttp.send();//MSK-000110-End Ajax
	
};

function CPageGrade(grade,page){
//MSK-000125
	
	var currentPage1 = (page-1)*10;
	
	var xhttp = new XMLHttpRequest();//MSK-000126-Ajax Start
  		xhttp.onreadystatechange = function() {
			
			if (this.readyState == 4 && this.status == 200) {	
										
				document.getElementById('table1').innerHTML = this.responseText;
				
				$(function () {
					$("#example1").DataTable({
						"displayStart": currentPage1, //MSK-000127   
						"bDestroy": true       
					} );
				});
						  
				window.scrollTo(0,document.body.scrollHeight);
											
			}
			
  		};
			
    	xhttp.open("GET", "student_evaluation.php?grade="+grade , true);												
  		xhttp.send();//MSK-000126-Ajax End
	
};

function CPageGrade1(grade){
//MSK-000125
	
	
	var xhttp = new XMLHttpRequest();//MSK-000126-Ajax Start
  		xhttp.onreadystatechange = function() {
			
			if (this.readyState == 4 && this.status == 200) {	
										
				document.getElementById('table1').innerHTML = this.responseText;
				//window.scrollTo(0,document.body.scrollHeight);
											
			}
			
  		};
			
    	xhttp.open("GET", "student_evaluation.php.php?grade="+grade , true);												
  		xhttp.send();//MSK-000126-Ajax End
	
};

</script>
<!--run update alert using PHP & JS/JQUERY  -->    
      
<?php
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_update")){
//MSK-000143-24-PHP-JS-UPDATE  

$msg=$_GET['msg'];
$grade=$_GET['grade'];


	if($msg==2){
		
		echo '<script>','CPageGrade1('.$grade.');','</script>';
		
		echo"
				<script>
				
				var myModal = $('#update_Success');
				myModal.modal('show');
				
				
				myModal.data('hideInterval', setTimeout(function(){
					myModal.modal('hide');
					
				}, 3000));
							
				</script>
			";	
	}
	
	if($msg==4){
		
		echo '<script>','CPageGrade1('.$grade.');','</script>';
		
		echo"
				<script>
				
				var myModal = $('#connection_Problem');
				myModal.modal('show');
				
				
				myModal.data('hideInterval', setTimeout(function(){
					myModal.modal('hide');
					
				}, 3000));
							
				</script>
			";
			
	}
	
}

if(isset($_GET["do"])&&($_GET["do"]=="showSTable")){
	$grade=$_GET['grade_id'];
	echo '<script>','CPageGrade1('.$grade.');','</script>';
}


?>
 
<!-- //MSK-000131 Modal-Delete Confirm Popup -->
	<div class="modal msk-fade " id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header bg-primary">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="frm_title">Delete</h4>
      			</div>

				<div class="modal-body bgColorWhite">
        			<strong style="color:red;">Are you sure?</strong>  Do you want to leave this Student?
        		</div>
      			<div class="modal-footer">
					<a href="#" style='margin-left:10px;' id="btnYes" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000132 -->
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>

<script>

$('body').on('click', '.confirm-delete', function (e){	
//MSK-000129
    e.preventDefault();
    var id = $(this).data('id');
	$('#modalviewform').modal('hide');
	$('#deleteConfirm').data('id1', id).modal('show');//MSK-000130
 	
});

function Delete_alert(msg){
//MSK-000139	
	if(msg==1){
		
    	var myModal = $('#leave_Success');
		myModal.modal('show');
		
		clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
			
			
    	}, 3000));
			
	}
	
	if(msg==2){
		
    	var myModal = $('#connection_Problem');
		myModal.modal('show');
		
    	clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
			
    	}, 3000));
				
	}

};

</script>

<!-- //MSK-00148 modalviewform-->
   
<div class="modal msk-fade" id="modalviewform" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog"><!--modal-dialog -->  
		<div class="container col-lg-12 "><!--modal-content --> 
      		<div class="row">
          		<div class="panel panel-info"><!--panel --> 
            		<div class="panel-heading">
                    	<button type="button"  class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
              			<h3 class="panel-title" id="hname"></h3>
            		</div>
            		<div class="panel-body"><!--panel-body -->
              			<div class="row">
                			<div class="col-md-3"> 
                				<img id="photo2" alt="User Pic" src="" class="img-circle img-responsive"> 
                			</div>
                			<div class=" col-md-9"> 
                  				<table class="table table-user-information">
                    				<tbody>
                      					<tr>
                        					<td>Full Name</td>
                        					<td id="fname2"> </td>
                      					</tr>
                      					<tr>
                        					<td>Name With Initials</td>
                        					<td id="surname2"> </td>
                      					</tr>
                             			<tr>
                        					<td>Address</td>
                        					<td id="address2"> </td>
                      					</tr>
                        				<tr>
                        					<td>Gender</td>
                        					<td id="gender2"> </td>
                      					</tr>
                      					<tr>
                        					<td>Email</td>
                        					<td id="email2"> </td>
                      					</tr>
										<tr>
                        					<td>téléphone Number</td>
                        					<td id="téléphone2"> </td>
                           
                      					</tr>
                                        <tr>
                        					<td>Guardians Name</td>
                        					<td id="g_name2"> </td>
                      					</tr>
                      					<tr>
                        					<td>Guardians téléphone</td>
                        					<td id="g_téléphone2"> </td>
                           
                      					</tr>
                     					<tr>
                        					<td>Guardians Email</td>
                        					<td id="g_email2"> </td>
                      					</tr>
                    				</tbody>
                  				</table>
                  			</div>
                   		</div>
                  	</div><!--/.panel-body -->

            	</div><!--/. panel--> 
			</div><!--/.row --> 
    	</div><!--/.modal-content -->
	</div><!--/.modal-dialog -->
</div><!--/.modal -->  

<script>

function showModal1(Viewform){	
//MSK-00147
	var Id = $(Viewform).data("id"); 
	var myArray4 = Id.split(',');
	
	var std_id=myArray4[0];
	var grade=myArray4[1];
	 
	var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {

				var myArray1 = eval( xhttp.responseText );
				
				document.getElementById("fname2").innerHTML =myArray1[1];
				document.getElementById("surname2").innerHTML =myArray1[2];
				document.getElementById("hname").innerHTML =myArray1[2];
				document.getElementById("address2").innerHTML =myArray1[4];
				document.getElementById("gender2").innerHTML =myArray1[3];
				document.getElementById("téléphone2").innerHTML =myArray1[5];
				document.getElementById("email2").innerHTML =myArray1[6];
				document.getElementById("photo2").src ="../"+myArray1[8];
				document.getElementById("g_name2").innerHTML =myArray1[9];
				document.getElementById("g_téléphone2").innerHTML =myArray1[11];
				document.getElementById("g_email2").innerHTML =myArray1[10];
			
				$('#id4').data('id',myArray1[0]+','+grade);		
					
			
			}
			
  		};	
		
    xhttp.open("GET", "../model/get_student.php?id=" + std_id  , true);												
  	xhttp.send();
	 
};
  
</script>



<div id="viewSubjectDiv">
            
</div>
    
<div id="insertSubjectDiv">
</div>

<div id="viewSubjectDiv1">
            
</div>

<div id="viewSubjectDiv2">

</div>


    
    

<script>



					



function editSubject(eSubject){
	var index = $(eSubject).data('id');
	
	var do1="edit_subject";
	
	var xhttp = new XMLHttpRequest();//MSK-00149-Start Ajax  
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
				//MSK-00150
				
				document.getElementById('viewSubjectDiv1').innerHTML=this.responseText;
				
				$("#modalEditSubject").modal('show');
				
				var xhttp1 = new XMLHttpRequest();//MSK-00149-Start Ajax  
  					xhttp1.onreadystatechange = function(){
    		
						if (this.readyState == 4 && this.status == 200) {
							
							var myArray1 = eval(xhttp1.responseText);
							
							$('#modalEditSubject').find('input[type=checkbox]').each(function () {
                    			$(this).prop("checked", ($.inArray($(this).val(), myArray1) != -1));
                			});
							 
						}
					
					};	
		
    				xhttp1.open("GET", "../model/get_student_subject.php?index=" + index, true);												
  					xhttp1.send();//MSK-00149--End Ajax
							
    		}
			
  		};	
		
    xhttp.open("GET", "show_student_evaluation.php?index=" + index + "&do="+do1  , true);												
  	xhttp.send();//MSK-00149--End Ajax
	
}


function editSubject1(){
	
	var index = $("#index1").val();
	var grade = $("#grade1").val();

    var yourArray = new Array();
     
	$("#checkbox1:checked").each(function(){
		
		yourArray.push($(this).val());
		
	});
	
	var xhttp = new XMLHttpRequest();//MSK-000132-Start Ajax 
  		xhttp.onreadystatechange = function() {
			
			if (this.readyState == 4 && this.status == 200) {
				
				$('#modalEditSubject').modal('hide');
				var myArray = eval(xhttp.responseText);
				var msg = myArray[0];
				
				if(msg==1){
					
					var myModal = $('#update_Success');
					myModal.modal('show');//MSK-000145
					
					myModal.data('hideInterval', setTimeout(function(){
    					myModal.modal('hide');
				
    				}, 3000));
					
				}
				
				if(msg==2){
					
					var myModal = $('#connection_Problem');
					myModal.modal('show');//MSK-000145
					
					myModal.data('hideInterval', setTimeout(function(){
    					myModal.modal('hide');
				
    				}, 3000));
					
				}
				
			}
			
		};
		xhttp.open("GET", "../model/add_student_evaluation.php?index=" + index + "&id="+JSON.stringify(yourArray), true);												
		xhttp.send();//MSK-000132-End Ajax

}



function showModalGrade(){
	$('#modalSelectGrade').modal('show');	
	document.getElementById("grade1").value ="Select Grade";
	
}

</script> 
	



<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));
</script>
     
</div><!-- /.content-wrapper -->  
              
<?php include_once('footer.php');?>
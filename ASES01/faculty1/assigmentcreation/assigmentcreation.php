


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>ASSIGNMENT SUBMISSION &amp; EVALUATI</title>
<link rel="stylesheet" href="../../css/home.css" />
 <link rel="stylesheet" href="../../css/allinterface.css" type="text/css" /> 
	  
	    <link rel="stylesheet"  href="../../css/tabpane.css" type="text/css" /> 
		
          
		
		<link rel="stylesheet" type="text/css" href="../../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../../css/tabs.css" />
		<link rel="stylesheet" type="text/css" href="../../css/tabstyles.css" />
			
  		<script src="../../js/modernizr.custom.js"></script>
		
		<link rel="stylesheet" href="../../css/jquery-ui.css">
<link rel="stylesheet" href="../../css/tooltip.css">
<script src="../../js/jquery.js"></script>
<script src="../../js/jquery-ui.js"></script>
<script src="../../js/tooltip.js"></script>
	<script src="script_assignmentcreation.js"></script>

<link rel="stylesheet" type="text/css" href="../../jquery.confirm/customize.css" />

        <script type="text/javascript" src="../../jquery.confirm/customizejs.js"></script>
         
<style type="text/css">
.auto-style1 {
	text-align: center;
	border: 2px solid #999999;
	border-style: ridge;
}
.imgs:hover{
cursor:pointer;
}
.imgs:active{
padding:2px 2px;
padding-top:-2px;
cursor:pointer;
background-color:#C0C0C0;

}
</style>

<script>








function partincrease()
{

 
//alert($("#question_no").val()+".1");
var temp=$("#question_no").val()+".1";
$("#question_no").val(temp);

}

function partdecrease()
{
//alert($("#question_no").val()+".1");
var temp=$("#question_no").val();
var f=temp.length;

$("#question_no").val(temp.substring(0,f-2));
}


function partprevious()
{
//alert($("#question_no").val()+".1");
var temp=$("#question_no").val();
var len=temp.length;
var arr=temp.split('.');
var last=arr[arr.length-1];
if(last>1)
{last--;}
var newno="";
for(i=0;i<arr.length-1;i++)
{
newno+=arr[i]+".";
}
newno=newno+last;
$("#question_no").val(newno);
}

function partnext()
{
//alert($("#question_no").val()+".1");
var temp=$("#question_no").val();
var len=temp.length;
var arr=temp.split('.');
var last=arr[arr.length-1];
if(last>0)
{last++;}
var newno="";
for(i=0;i<arr.length-1;i++)
{
newno+=arr[i]+".";
}
newno=newno+last;
$("#question_no").val(newno);}


function true_false(checkbox)
{
if(checkbox.checked)
{
$(tabletrue).show();
$(tablemcq).hide();
}
else{
$(tablemcq).show();
$(tabletrue).hide();
}
}

function getRadioCheckedValue(radio_name)
{


   if (radio_name.checked) {
   
   if(radio_name.value=="indi")
{  alert("indi");
$(indi).show();
$(choice).hide();
}

 if(radio_name.value=="choice")
{  alert("choice");
$(choice).show();
$(indi).hide();
}

}

  
}


function call2()
	   {	
	   true_false(document.getElementById('Checkbox1'));
	 
		}

</script>
         
</head>

<body style="background-color: #C0C0C0" onload="call2();" >

<h2 align="center" style="font-style: normal; font-stretch: semi-expanded; font-size: 36px"> <u>Assignment Creation</u> </h2>

<table  class="create" style="width:98%; margin-left:8%">
	<tr>
		
	    <td style="width: 126px;  height:45px; padding-right:5px">FACULTY</td>
		<td style="width:190px; height:45px">
		<input name="Text6" type="text" class="dis" readonly="1" value="362/2 prem villa shivlok puri kanker khera meerut cantt" onMouseOver="this.title = this.value"  style="width: 130px; padding-right:5px" class="auto-style6"/>
			</td>
		
		<td style="width: auto;  height:45px padding-right:5px">ASSIGNMENT ID </td>
	<td style=" width:auto; height:45px; margin-top:-10%">	<select name="assignment_id" style="width:130px">
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select></td>
		<td style="width: auto; padding-right:5px">SUBJECT</td>
	<td style="width:230px; height:45px">
		<span style=" width:auto; height:45px; margin-top:-10%">
	
		</span>
<input name="Text8" type="text"  class="dis" readonly="1" value="362/2 prem villa shivlok puri kanker khera meerut cantt" onMouseOver="this.title = this.value" style="width: 130px; padding-right:5px"/>
	  <span class="auto-style6">	  </span></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 126px">SUBMISSION&nbsp;DATE</td>
	<td style="width: 190px; height:45px">
		<input name="Text9" type="text"  class="dis" readonly="1"  onMouseOver="this.title = this.value"  style="width: 130px;  padding-right:5px" /></td>
		<td class="auto-style6">ISSUE DATE</td>
		<td style="width: auto; height:45px">
		<input name="Text10"  class="dis" readonly="1"  onMouseOver="this.title = this.value" type="text"  style="width: 130px" /></td>
		<td class="auto-style6">CREATION DATE</td>
		<td style="width: auto; height:45px">
		<input name="Text11"  class="dis" readonly="1"  onMouseOver="this.title = this.value"  style="width:130px; padding-right:5px" /></td>
	</tr>
	<tr>
		<td style="width:126px">ASSIGNMENT TOPIC </td>
		<td style="width:190px; height:45px">
		<input name="Text6" type="text"  class="dis" readonly="1"  onMouseOver="this.title = this.value" style="width: 130px" class="auto-style6"/><span class="auto-style6">
		</span>
		
		<td class="auto-style6">PASSING MARKS </td>
		<td style="width: 168px">
		<input name="Text14" type="text"  class="dis" readonly="1"  onMouseOver="this.title = this.value" style="width: 130px" class="auto-style6"/></td>
		<td class="auto-style6" >MAXIMUM MARKS</td>
		<td>
		<input name="Text13" type="text"  class="dis" readonly="1"  onMouseOver="this.title = this.value" style="width: 130px;  padding-right:5px" class="auto-style6"/></td>
	</tr>
</table>
<br />

<div id="box">

			<section>
				<div class="tabs tabs-style-linemove">
					<nav>
						<ul>
							<li><a href="#section-linemove-1" ><span>Descriptive</span></a></li>
							<li><a href="#section-linemove-2" ><span>M.C.Q</span></a></li>
						</ul>
					</nav>
					<div class="content-wrap">
						<section  id="section-linemove-1">
						                	  <table class="create" width="70%">
	<tr>
		<td style="width: 67px">Q. 
		<input id="question_no" name="Text1" style="width: 50px; " value="1" type="text" onMouseOver="this.title = this.value" /></td>
		<td style="width:78%; ">
		<textarea id="question_name" name="TextArea1" style="width:100%; height:120px;margin-left:-60px;"></textarea></td>
		
		<td></td>
	</tr>
	</table>
			<a class="but" href="#customize"><button class="sbutton" style=" width:82px; margin-top:-50px; position:absolute; margin-left:15%">Customize</button></a>
	<input id="faltu" type="text"/> 
	
<table  style="width:55%; height: 64px; margin-top:-155px; margin-left:45%">
	<tr>
				<td class="auto-style2" style="width: 925px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br />
&nbsp;&nbsp;&nbsp; 
				<table class="create" style="width: 45%; height: 131px;" align="right">
			<tr>
			<td class="auto-style1" style="width: 288px">&nbsp;&nbsp;&nbsp; 
			IMAGE<br />
				<input name="File1" style="width: 216px; height: 25px" type="file" class="auto-style7" />
			
			
			<ul style="font-size: 12px; text-align:left">
			<li> AcroRd32.exe  </li>
			</ul>
			<input class="sbutton"name="add_image" type="button" value="Add To Question" style="width:120px" /></td>
			</tr>
			
		</table>	
		</td>
		</tr>
		</table>
		<br />
		
		
		
	<table class="create" align="center" style="margin-top:-35px; margin-left:61%">
		<tr>
		<td style="width:100px; text-align:right; margin-top:-50px">M.M&emsp;<input id="max_marks" name="Text2" style="width:30px" type="text" value="10" /></p>
	           		</td></tr>
	  </table> 
		
		
		
		<table width="60%"  style="margin-top:-1%; margin-left:15%">
	<tr>
		<td>
		<table class="create" style="width: 100%">
	<tr>
		<td  style="width: 40px">
		<input class="sbutton"  style="width: 80px" name="Button4" type="button" value="&lt; Part " onclick="partdecrease();" /></td>
		<td  style="width: 40px">
		<input class="sbutton" id="subadd"  style="width: 80px"  type="button" value="Part &gt;" onclick="partincrease();" /></td>
		<td  style="width: 40px">
		<input class="sbutton"  style="width: 90px" name="next" type="button" value="&lt;&lt; Previous" onclick="partprevious();"  /></td>
		<td >
		<input class="sbutton" id="nextbtn"  style="width: 80px" name="next0" type="button" value="Next &gt;&gt;"   /></td>
	</tr>
	
	<tr>
	<td></td>
	<td  style="width: 40px ">
		<input class="sbutton" name="Reset1" style="width: 80px" type="reset" value="Reset" /></td>
		
		<td >
		<input class="sbutton" name="Submit1" style="width: 80px" type="submit" value="Submit" /></td>
	</tr>
</table>
		
		
		
		
			</td>
	</tr>
		</table>		



						
						
						</section>
						
						
						<!--   second secction -->
						<section id="section-linemove-2">
						<table class="create" width="80%">
	<tr>
		<td style="width: 67px">Q. 
		<input name="Text1" style="width: 50px; " type="text" /></td>
		<td style="width:78%; ">
		<textarea name="TextArea1" style="width:100%; height:120px;margin-left:-15%"></textarea></td>
		
	</tr>
	</table>
	
	
	
<table  style="width:55%; height: 64px; margin-top:-155px; margin-left:45%">
	<tr>
				<td class="auto-style2" style="width: 925px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br />
&nbsp;&nbsp;&nbsp; 
				<table class="create" style="width: 45%; height: 131px;" align="right">
			<tr>
			<td class="auto-style1" style="width: 288px">&nbsp;&nbsp;&nbsp; 
			IMAGE<br />
				<input name="File1" style="width: 216px; height: 25px" type="file" class="auto-style7" />
			
			
			<ul style="font-size: 12px; text-align:left">
			<li> AcroRd32.exe  </li>
			</ul>
			<input class="sbutton"name="add_image" type="button" value="Add To Question" style="width:120px" /></td>
			</tr>
			
		</table>	
		</td>
		</tr>
		</table>
		<br />
		
		
		
	<table class="create" align="center" style="margin-top:-35px; margin-left:61%">
		<tr>
		<td style="width:100px; text-align:right; margin-top:-50px">M.M&emsp;<input name="Text2" style="width:30px" type="text" /></p>
	           		</td></tr>
	  </table> 
		<table width="25%" style=" margin-top:-2%; padding-right:5%">
		<tr> <td style="font-size:15px">IS TRUE/FALSE..&nbsp;
	  <input id="Checkbox1" type="checkbox" onclick="true_false(this);" /></td>
	  </tr>
	  
	  </table>
	  
	  
	  
	  <br />
		<table id="tablemcq" class="auto-style1 createmcq" style="width: 70%; margin-left:17%; padding-left:5%; margin-top:-6%">
	<tr>
		<td>
		A<input name="option" type="radio" value="a"  /><input name="Text1" type="text" style="width:75%" /></td>
		<td>B<input name="option" type="radio" value="b" /><input name="Text2" type="text" style="width:75%" /></td>
	</tr>
	<tr>
		<td>
		C<input name="option" type="radio" value="c" /><input name="Text3" type="text" style="width:75%"  /></td>
		<td>D<input name="option" type="radio" value="d" checked="checked" /><input name="Text4" type="text" style="width:75%"  /></td>
	</tr>
</table>

<table id="tabletrue" class="auto-style1 createmcq" style="width: 70%; margin-left:17%; padding-left:5%;margin-top:-6%; display:none;">
	<tr>
		<td>
		<input checked="checked" name="radiobtn" type="radio" /> TRUE</td>
		<td><input name="radiobtn" type="radio" />FALSE</td>
	</tr>
</table>
		
		
	
		<table class="create" align="center" style="width: 30%">
	<tr>
	
		<td >
		<input class="sbutton"  style="width: 85px" name="next" type="button" value="&lt;&lt; Previous" /></td>
		<td >
		<input class="sbutton"  style="width: 60px" name="next0" type="button" value="Next &gt;&gt;" /></td>
         <td>
		<input class="sbutton" name="Reset1" style="width: 60px" type="reset" value="Reset" /></td>
		
		<td >
		<input class="sbutton" name="Submit1" style="width: 60px" type="submit" value="Submit" /></td>
		</tr>
</table>
		
		
		

						
						
						
						
						
						</section>
					
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
			
			<!-- Related demos -->
			
</div><!-- /container -->


<div id="customize" class="customizeBox">
<h1>Customize</h1>

<z> Marking </z><input name='customradio' checked  value="indi" id='choiceindi'  type="radio" value="1" style=" height:15px" onclick="getRadioCheckedValue(this)"  />&nbsp;Individual
<input type="radio" id='choiceradio' name='customradio'  value="choice"  value="0" style=" height:15px"onclick="getRadioCheckedValue(this)"/>&nbsp;Choice Dependent
				
<table id="indi" class="create" width="50%" style=" margin-left:25%" >

<tr>
<td>Total Marks </td><td><input  type="text" style="width:40px"/> </td>
  </tr>
  <tr>
<td>Individual Marks </td><td><input  type="text" style="width:40px"/> </td>
  </tr><tr>
<td>Subparts Marks </td><td><input  type="text" style="width:40px"/> </td>
  </tr>
  <tr>
<td>Choices  </td><td><input  type="text" style="width:40px"/> </td>
  </tr>
  <tr>
<td>Choices Marks</td><td><input  type="text" style="width:40px"/> </td>
  </tr>


</table>

<table id="choice" class="create" width="50%" style=" margin-left:25%; display:none" >
<tr>
<td>Total Marks </td><td><input  type="text" style="width:40px" value="10"/> </td>
  </tr>
  <tr>
<td>Individual Marks </td><td><input  type="text" style="width:40px"/> </td>
  </tr><tr>
<td>Subparts Marks </td><td><input  type="text" style="width:40px"/> </td>
  </tr>
  <tr>
<td>Choices  </td><td><input  type="text" style="width:40px"/> </td>
  </tr>
  <tr>
<td>Choices Marks</td><td><input  type="text" style="width:40px"/> </td>
  </tr>

</table>				
<div id="customizeButtons">
<a class="button blue" href="../../home/home.html">
Ok
<span></span></a>
<a id="no" class="button gray" href="#">
Cancel
<span></span></a>

</div></div>



		
		<script src="../../js/cbpFWTabs.js"></script>
		<script>
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
		</script>

			
			
			<br />
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /
			
		
	


</body>

</html>

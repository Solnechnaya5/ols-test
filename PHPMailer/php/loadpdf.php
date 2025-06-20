<?php
// require composer autoload
require '../../mpdf/mpdf.php';
$mpdf = new \mPDF();

$url = urldecode($_REQUEST['url']);
print_r($url);

// To prevent anyone else using your script to create their PDF files


// For $_POST i.e. forms with fields
if (count($_POST) > 0) {

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1 );

    foreach($_POST as $name => $post) {
      $formvars = array($name => $post . " \n");
    }
	
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($formvars));
    $html = curl_exec($ch);
	
    curl_close($ch);

} elseif (ini_get('allow_url_fopen')) {
   
} else {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt ( $ch , CURLOPT_RETURNTRANSFER , 1 );
    $html = curl_exec($ch);
    curl_close($ch);
}
if(!empty($_POST['unemployed'])){
	$Check='<img src="../img/check.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label  for="unemployed" class="form-label"> Check here if unemployed and explain on a separate sheet your efforts to find employment.</label><br>' ;
}else{
	$Check='<img src="../img/uncheck.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label  for="unemployed" class="form-label"> Check here if unemployed and explain on a separate sheet your efforts to find employment.</label><br>' ;
};
if($_POST['child_support']==1){
	$Check1='<img src="../img/check.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label for="child_support_1" class="form-label">A Child Support Guidelines Worksheet IS or WILL BE filed in this case. This case involves the
establishment or modification of child support.</label> <br><label for="child_support_2" class="form-label"><img src="../img/uncheck.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;">A Child Support Guidelines Worksheet IS NOT being filed in this case. The establishment or
modification of child support is not an issue in this case. </label> ' ;
}else{
	$Check1='<img src="../img/uncheck.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label for="child_support_1" class="form-label">A Child Support Guidelines Worksheet IS or WILL BE filed in this case. This case involves the
establishment or modification of child support.</label> <br><label for="child_support_2" class="form-label"><img src="../img/check.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;">A Child Support Guidelines Worksheet IS NOT being filed in this case. The establishment or
modification of child support is not an issue in this case. </label>' ;
};
if($_POST['was_prepared']=="Petitioner"){
	$Check6='<img src="../img/check.jpg" height="20px" width="28px" style="margin-right:2px;vertical-align: middle;"><label style="margin-right:10px;">Petitioner</label>   <img src="../img/uncheck.jpg" height="20px" width="28px" style="margin-right:2px;margin-left:10px;vertical-align: middle;"><label style="margin-right:10px;">Respondent</label>' ;
}else{
	$Check6='<img src="../img/uncheck.jpg" height="20px" width="28px" style="margin-right:2px;vertical-align: middle;"><label style="margin-right:10px;">Petitioner</label>   <img src="../img/check.jpg" height="20px" width="28px" style="margin-right:2px;margin-left:10px;vertical-align: middle;"><label style="margin-right:10px;">Respondent</label>' ;
};
if(!empty($_POST['e-mailed'])){
	$Check2='<img src="../img/check.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label  for="e-mailed" class="form-label">e-mailed</label>' ;
}else{
	$Check2='<img src="../img/uncheck.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label  for="e-mailed" class="form-label">e-mailed</label>' ;
};
if(!empty($_POST['mailed'])){
	$Check3='<img src="../img/check.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label  for="mailed" class="form-label">mailed</label>' ;
}else{
	$Check3='<img src="../img/uncheck.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label  for="mailed" class="form-label">mailed</label>' ;
};
if(!empty($_POST['faxed'])){
	$Check4='<img src="../img/check.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label  for="faxed" class="form-label">faxed</label><br>' ;
}else{
	$Check4='<img src="../img/uncheck.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label  for="faxed" class="form-label">faxed</label><br>' ;
};
if(!empty($_POST['hand_delivered'])){
	$Check5='<img src="../img/check.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label  for="hand_delivered" class="form-label">hand_delivered</label>' ;
}else{
	$Check5='<img src="../img/uncheck.jpg" height="20px" width="28px" style="margin-right:5px;vertical-align: middle;"><label  for="hand_delivered" class="form-label">hand_delivered</label>' ;
};
if(!empty($_POST['other_e_2'])){
	$other2=$_POST['other_e_2'];
}else{
	$other2='_________' ;
};
if(!empty($_POST['other_e_3'])){
	$other3=$_POST['other_e_3'];
}else{
	$other3='_________' ;
};
if(!empty($_POST['other_e_4'])){
	$other4=$_POST['other_e_4'];
}else{
	$other4='_________' ;
};
if(!empty($_POST['other_e_5'])){
	$other5=$_POST['other_e_5'];
}else{
	$other5='_________' ;
};
if(!empty($_POST['other_e_6'])){
	$other6=$_POST['other_e_6'];
}else{
	$other6='_________' ;
};
if(!empty($_POST['payments_1'])){
	$paynents1=$_POST['payments_1'];
}else{
	$paynents1='_________' ;
};
if(!empty($_POST['payments_2'])){
	$paynents2=$_POST['payments_2'];
}else{
	$paynents2='_________' ;
};if(!empty($_POST['payments_3'])){
	$paynents3=$_POST['payments_3'];
}else{
	$paynents3='_________' ;
};if(!empty($_POST['payments_4'])){
	$paynents4=$_POST['payments_4'];
}else{
	$paynents4='_________' ;
};if(!empty($_POST['payments_5'])){
	$paynents5=$_POST['payments_5'];
}else{
	$paynents5='_________' ;
};if(!empty($_POST['payments_6'])){
	$paynents1=$_POST['payments_6'];
}else{
	$paynents6='_________' ;
};if(!empty($_POST['payments_7'])){
	$paynents7=$_POST['payments_7'];
}else{
	$paynents7='_________' ;
};if(!empty($_POST['payments_8'])){
	$paynents8=$_POST['payments_8'];
}else{
	$paynents8='_________' ;
};if(!empty($_POST['payments_9'])){
	$paynents9=$_POST['payments_9'];
}else{
	$paynents9='_________' ;
};if(!empty($_POST['payments_10'])){
	$paynents10=$_POST['payments_10'];
}else{
	$paynents10='_________' ;
};if(!empty($_POST['payments_11'])){
	$paynents11=$_POST['payments_11'];
}else{
	$paynents11='_________' ;
};
for ($index = 0; $index < count ($_POST["Field_text"]); $index++){
	$Addfields.='<tr><td style="padding:10px">'.  $_POST["Field_text"][$index].'</td> <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.  $_POST["Field_data"][$index].'</span></td> <td>
			<table width="100%"> 
			<tr>
			<td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.  $_POST["Field_data_husband"][$index].'</td> 
            <td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.  $_POST["Field_data_wife"][$index].'</td> 	
			</tr>	
			</table>
			</td></tr>';
}for ($index = 0; $index < count ($_POST["A_Field_text"]); $index++){
	$Addfields_A.='<tr><td style="padding:10px">'.  $_POST["A_Field_text"][$index].'</td> <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.  $_POST["A_Field_data"][$index].'</span></td> <td>
			<table width="100%"> 
			<tr>
			<td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.  $_POST["A_Field_data_husband"][$index].'</td> 
            <td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.  $_POST["A_Field_data_wife"][$index].'</td> 	
			</tr>	
			</table>
			</td></tr>';
}for ($index = 0; $index < count ($_POST["B_Field_text"]); $index++){
	$Addfields_B.='<tr><td style="padding:10px">'.  $_POST["B_Field_text"][$index].'</td> <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.  $_POST["B_Field_data"][$index].'</span></td> <td>
			<table width="100%"> 
			<tr>
			<td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.  $_POST["B_Field_data_husband"][$index].'</td> 
            <td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.  $_POST["B_Field_data_wife"][$index].'</td> 	
			</tr>	
			</table>
			</td></tr>';
}for ($index = 0; $index < count ($_POST["C_Field_text"]); $index++){
	$Addfields_C.='<tr><td style="padding:10px">'.  $_POST["C_Field_text"][$index].'</td> <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.  $_POST["C_Field_data"][$index].'</span></td> <td>
			<table width="100%"> 
			<tr>
			<td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.  $_POST["C_Field_data_husband"][$index].'</td> 
            <td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.  $_POST["C_Field_data_wife"][$index].'</td> 	
			</tr>	
			</table>
			</td></tr>';
}

	$mpdf = new \mPDF();

$htmlTable='<main >
      
		      <div class="bg-white-3">
	
<section class="container">
            <div class="row">
                <div class="col-12 centered-block">
				 <img src="../img/1.jpg" height="auto" width="564px" style="vertical-align: middle;">
				 <img src="../img/2.jpg" height="auto" width="564px" style="vertical-align: middle;">
				 <img src="../img/3.jpg" height="auto" width="564px" style="vertical-align: middle;">
				 <img src="../img/4.jpg" height="auto" width="564px" style="vertical-align: middle;">
				 <div style="page-break-before:always">&nbsp;</div> 
				 <img src="../img/5.jpg" height="auto" width="564px" style="vertical-align: middle;">
<h3 class="h2--underlined h2--centered features__title">FAMILY LAW FINANCIAL AFFIDAVIT (SHORT FORM)</h3>
<h5 class="feature-item__title h2--black">(Under $50,000 Individual Gross Annual Income)</h5>
      </div>
            </div>
        </section>

  <div class="container">
          <div class="centered-block centered-block--welcome">
           
			<div class="col-12">
		
            <form class="form row contact__form forms" action="php/loadpdf.php?url="  id="load-form" method="post" novalidate="novalidate">
	
<div class="form-group col-12 person-block">



<div align=left>
<span style="font-family:"Calibri"; font-size: 12px;">I, <i>
'.$_POST['legal-name'].'
 
</i>, being sworn, certify that the following information is true:<br> <div style="height:5px"></div>
My Occupation:'.$_POST['occupation'].' Employed by: '.$_POST['employed'].'<br><div style="height:5px"></div>
Business Address:'.$_POST['address'].'<br> <div style="height:5px"></div> 
Pay rate: $ '.$_POST['pay_rate_price'].' '.$_POST['pay_rate'].'<br><div style="height:15px"></div>
 '.$Check.'
 <div style="height:20px"></div>
           
<b>SECTION I. PRESENT MONTHLY GROSS INCOME: <br>All amounts must be MONTHLY. </b>See the instructions with this form to figure out money amounts for<br>
anything that is NOT paid monthly. Attach more paper, if needed. Items included under &#8220;other&#8221; should<br>
be listed separately with separate dollar amounts.<br><div style="height:5px"></div> 
1. $ '.$_POST['gross_salary'].' Monthly gross salary or wages<br><div style="height:5px"></div> 
2. '.$_POST['bonuses'].' Monthly bonuses, commissions, allowances, overtime, tips, and similar payments<br><div style="height:5px"></div> 
3. '.$_POST['business'].' Monthly business income from sources such as self-employment, partnerships, close corporations, and/or independent contracts (gross receipts minus ordinary and necessary expenses required to produce income) (Attach sheet itemizing such income and expenses.)<br><div style="height:5px"></div> 
4. '.$_POST['benefits'].' Monthly disability benefits/SSI<br><div style="height:5px"></div> 
5. '.$_POST['workers'].' Monthly Workers&#8217; Compensation<br><div style="height:5px"></div> 
6. '.$_POST['unemployment_compensation'].' Monthly Unemployment Compensation<br><div style="height:5px"></div> 
7. '.$_POST['pension'].' Monthly pension, retirement, or annuity payments<br><div style="height:5px"></div> 
8. '.$_POST['social'].' Monthly Social Security benefits<br><div style="height:5px"></div> 
9. '.$_POST['alimony'].' Monthly alimony actually received (Add 9a and 9b) <br>
<p style="margin-left:20px;margin-top:5px;margin-bottom:5px;">9a. From this case: $ '.$_POST['case'].'<br>
9b. From other case(s): '.$_POST['cases'].' <br></p>
10. '.$_POST['interest'].' Monthly interest and dividends<br><div style="height:5px"></div> 
11. <b>'.$_POST['rental_income'].'</b> Monthly rental income (gross receipts minus ordinary and necessary expenses required to produce income) (Attach sheet itemizing such income and expense items.) <br><div style="height:5px"></div> 
12. <b>'.$_POST['income_from_royalties'].'</b>  Monthly income from royalties, trusts, or estates  <br><div style="height:5px"></div> 
13. <b>'.$_POST['reimbursed_expenses'].'</b> Monthly reimbursed expenses and in-kind payments to the extent that they reduce personal living expenses   <br><div style="height:5px"></div> 
14. <b>'.$_POST['gains_derived'].'</b>  Monthly gains derived from dealing in property (not including nonrecurring gains)    <br><div style="height:5px"></div> 
15. <b>'.$_POST['other_income'].'</b> Any other income of a recurring nature (list source):    <br><div style="height:5px"></div> 
16. <b>'.$_POST['other_income_text'].'</b>
<br>
17. $ <b>'.$_POST['total_17'].'</b>   <b>TOTAL PRESENT MONTHLY GROSS INCOME (Add lines 1–16)</b>     <br>
<div style="height:20px"></div> 
<b>PRESENT MONTHLY DEDUCTIONS: </b><br>
18. $<b>'.$_POST['federal_state'].'</b>  Monthly federal, state, and local income tax (corrected for filing status and allowable
dependents and income tax liabilities)  <br>
<p style="margin-left:20px;margin-top:5px;margin-bottom:5px;">a. Filing Status <b>'.$_POST['filing_status'].'</b> <br>
b. Number of dependents claimed <b>'.$_POST['dependents_claimed'].'</b> <br></p>
19. <b>'.$_POST['fica'].'</b>  Monthly FICA or self-employment taxes    <br><div style="height:5px"></div> 
20. <b>'.$_POST['medicare'].'</b>  Monthly Medicare payments    <br><div style="height:5px"></div> 
21. <b>'.$_POST['mandatory_union'].'</b>   Monthly mandatory union dues     <br><div style="height:5px"></div> 
22. <b>'.$_POST['mandatory_retirement'].'</b>    Monthly mandatory retirement payments     <br><div style="height:5px"></div> 
23. <b>'.$_POST['health_insurance_payments'].'</b>     Monthly health insurance payments (including dental insurance), excluding portion
paid for any minor children of this relationship      <br><div style="height:5px"></div> 
24.<b>'.$_POST['court_ordered_child'].'</b>    Monthly court-ordered child support actually paid for children from another
relationship     <br><div style="height:5px"></div> 
25. $<b>'.$_POST['court_ordered'].'</b>  Monthly court-ordered alimony actually paid (Add 25a and 25b)  <br>
<p style="margin-left:20px;margin-top:5px;margin-bottom:5px;">25a.  from this case:  $<b>'.$_POST['court_ordered_a'].'</b> <br>
25b. from other case(s): $<b>'.$_POST['court_ordered_b'].'</b>  <br></p>
26. $<b>'.$_POST['total_26'].'</b>   <b>TOTAL DEDUCTIONS ALLOWABLE UNDER SECTION 61.30, FLORIDA STATUTES </b>  (Add lines 18 through 25).<br><div style="height:5px"></div> 
27. $<b>'.$_POST['present_net'].'</b>    <b>PRESENT NET MONTHLY INCOME </b>(Subtract line 26 from line 17)     <br><div style="height:5px"></div> 


<div style="height:20px"></div> 
<div style="page-break-before:always">&nbsp;</div> 
<b>SECTION II. AVERAGE MONTHLY EXPENSES</b><br>
<b>Proposed/Estimated Expenses.</b> If this is a dissolution of marriage case and your expenses as listed
below do not reflect what you actually pay currently, you should write “estimate” next to each amount
that is estimated. <br>
<div style="height:20px"></div> 
<table>
<tr>
<td style="width:50%;" vertical-align="top">
<div class="col-lg-6 form-2">
<div class="col-12 form-2"><b>A. HOUSEHOLD:</b></div>
<table>
<tr>
<td style="width:70%;" vertical-align="top">
Mortgage or rent</td>
<td style="width:30%;"><span class="form-2">$</span><b>'.$_POST['rent'].' </b></td></tr><br> 
<tr><td style="width:70%;">Property taxes  </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['taxes'].' </b></td></tr><br> 
<tr><td style="width:70%;">Utilities  </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['utilities'].' </b></td></tr><br> 
<tr><td style="width:70%;">Telephone </td>  <td style="width:30%;"><span class="form-2">$</span><b>'.$_POST['telephone'].' </b></td></tr><br>
<tr><td style="width:70%;">Food </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['food'].' </b></td></tr><br>
<tr><td style="width:70%;">Meals outside home  </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['meals'].' </b></td></tr><br>
<tr><td style="width:70%;">Maintenance/Repairs  </td> <td style="width:30%;"><span class="form-2">$</span><b>'.$_POST['maintenance'].' </b></td></tr><br> 
<tr><td style="width:70%;">Other: <b>'.$_POST['other_a'].'</b></td><td style="width:30%;"> $<b>'.$_POST['other_a_value'].' </b></td><br>
</tr>
</table>

<div class="col-12 form-2"><b>B. AUTOMOBILE:</b></div>
<table>
<tr>
<td style="width:70%;" vertical-align="top">
Gasoline   </td><td style="width:30%;"><span class="form-2">$</span><b>'.$_POST['gasoline'].' </b></td></tr><br>
<tr><td style="width:70%;">Repairs   </td><td style="width:30%;"><span class="form-2">$</span><b>'.$_POST['repairs'].' </b></td></tr><br>
<tr><td style="width:70%;">Insurance    </td><td style="width:30%;"><span class="form-2">$</span><b>'.$_POST['insurance'].' </b></td></tr><br>
</table>
<div class="col-12 form-2"><b>C. CHILD(REN)’S EXPENSES</b></div>
<table>
<tr>
<td style="width:70%;" vertical-align="top">
Day care  </td><td style="width:30%;">  <span class="form-2">$</span><b>'.$_POST['care'].' </b></td></tr><br>
<tr><td style="width:70%;">Lunch money   </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['lunch'].'</b></td></tr> <br>
<tr><td style="width:70%;">Clothing    </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['clothing'].' </b></td></tr><br>
<tr><td style="width:70%;">Grooming </td><td style="width:30%;">   <span class="form-2">$</span><b>'.$_POST['grooming'].' </b></td></tr><br> 
<tr><td style="width:70%;">Gifts for holidays   </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['gifts'].' </b></td></tr><br>
<tr><td style="width:70%;">Medical/Dental (uninsured)  </td><td style="width:30%;">  <span class="form-2">$</span><b>'.$_POST['medical'].' </b></td></tr><br>
<tr><td style="width:70%;">Other:<b>' .$_POST['other_c'].'</b>   </td><td style="width:30%;"> $<b>'.$_POST['other_c_value'].' </b></td></tr><br> 
</table>
<div class="col-12 form-2"><b>D. INSURANCE</b></div>
<table>
<tr>
<td style="width:70%;" vertical-align="top">
Medical/Dental (if not listed on lines 23 or 45)  </td><td style="width:30%;">  <span class="form-2">$</span><b>'.$_POST['medical_dental'].' </b></td></tr><br>
<tr><td style="width:70%;">Child(ren)s medical/dental  </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['child_ned'].' </b></td></tr><br>
<tr><td style="width:70%;">Life </td><td style="width:30%;">  <span class="form-2">$</span><b>'.$_POST['life'].' </b></td></tr><br>
<tr><td style="width:70%;">Other:<b>' .$_POST['other_d'].'</b>  </td><td style="width:30%;">$<b>'.$_POST['other_d_value'].'</b></td></tr> <br> 
</table>
</div>
</td>
 <td style="width:50%;" vertical-align="top">
<div class="col-lg-6 form-2">
<div class="col-12 form-2"><b>E. OTHER EXPENSES NOT LISTED ABOVE</b></div>
<table>
<tr>
<td style="width:70%;" vertical-align="top">
Clothing   </td><td style="width:30%;"><span class="form-2">$</span><b>'.$_POST['e_clothing'].' </b></td></tr><br>
<tr><td style="width:70%;">Medical/Dental (uninsured)  </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['e_medical'].' </b></td></tr><br>
<tr><td style="width:70%;">Grooming   </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['e_grooming'].' </b></td></tr><br>
<tr><td style="width:70%;">Entertainment </td><td style="width:30%;">  <span class="form-2">$</span><b>'.$_POST['e_entertainment'].' </b></td></tr><br> 
<tr><td style="width:70%;">Gifts  </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['e_gifts'].' </b></td></tr><br> 
<tr><td style="width:70%;">Religious organizations  </td><td style="width:30%;"> <span class="form-2">$</span><b>'.$_POST['e_religious'].' </b></td></tr><br> 
<tr><td style="width:70%;">Miscellaneous</td><td style="width:30%;">   <span class="form-2">$</span><b>'.$_POST['e_miscellaneous'].' </b></td></tr><br> 
<tr><td style="width:70%;">Other:  </td><td style="width:30%;">$<b>'.$_POST['other_e_1_value'].'</b> </td></tr><br> 
<tr><td style="width:70%;"> <b>'.$other2. '</b>:  </td><td style="width:30%;"> $<b>'.$_POST['other_e_2_value'].' </b></td></tr><br> 
<tr><td style="width:70%;"> <b>'.$other3. '</b>:  </td><td style="width:30%;"> $<b>'.$_POST['other_e_3_value'].' </b></td></tr><br>
 <tr><td style="width:70%;"><b>'.$other4. '</b>:  </td><td style="width:30%;"> $<b>'.$_POST['other_e_4_value'].' </b></td></tr><br> 
<tr><td style="width:70%;"> <b>'.$other5. '</b>:  </td><td style="width:30%;"> $<b>'.$_POST['other_e_5_value'].' </b></td></tr><br> 
<tr><td style="width:70%;"> <b>'.$other6. '</b>:  </td><td style="width:30%;"> $<b>'.$_POST['other_e_6_value'].' </b></td></tr><br> 
</table>
<div class="col-12 form-2"><b>F. PAYMENTS TO CREDITORS</b></div>
<table>
<tr>
<td style="width:70%;" vertical-align="top">
CREDITOR: </td><td style="width:30%;">     MONTHLY PAYMENT<br></td></tr>
<tr><td style="width:70%;"> <b>'.$paynents1. '</b>: </td><td style="width:30%;"> $<b>'.$_POST['value_payments_1'].' </b></td></tr><br> 
<tr><td style="width:70%;"> <b>'.$paynents2. '</b>: </td><td style="width:30%;"> $<b>'.$_POST['value_payments_2'].' </b></td></tr><br>
<tr><td style="width:70%;"> <b>'.$paynents3. '</b>: </td><td style="width:30%;"> $<b>'.$_POST['value_payments_3'].' </b></td></tr><br>
<tr><td style="width:70%;"> <b>'.$paynents4. '</b>: </td><td style="width:30%;"> $<b>'.$_POST['value_payments_4'].' </b></td></tr><br>
<tr><td style="width:70%;"> <b>'.$paynents5. '</b>: </td><td style="width:30%;"> $<b>'.$_POST['value_payments_5'].' </b></td></tr><br>
<tr><td style="width:70%;"> <b>'.$paynents6. '</b>: </td><td style="width:30%;"> $<b>'.$_POST['value_payments_6'].' </b></td></tr><br>
<tr><td style="width:70%;"> <b>'.$paynents7. '</b>: </td><td style="width:30%;"> $<b>'.$_POST['value_payments_7'].' </b></td></tr><br>
<tr><td style="width:70%;"> <b>'.$paynents8. '</b>: </td><td style="width:30%;"> $<b>'.$_POST['value_payments_8'].' </b></td></tr><br>
<tr><td style="width:70%;"> <b>'.$paynents9. '</b>:</td><td style="width:30%;">  $<b>'.$_POST['value_payments_9'].' </b></td></tr><br>
<tr><td style="width:70%;"> <b>'.$paynents10. '</b>:</td><td style="width:30%;">  $<b>'.$_POST['value_payments_10'].' </b></td></tr><br>
<tr><td style="width:70%;"> <b>'.$paynents11. '</b>:</td><td style="width:30%;">  $<b>'.$_POST['value_payments_11'].' </b></td></tr><br>
</table>
</div>
</td>
</tr>
</table>
<div style="page-break-before:always">&nbsp;</div> 
28. $<b>'.$_POST['total_28'].'</b>  <b> TOTAL MONTHLY EXPENSES</b> (add <b>ALL</b> monthly amounts in A through F above) <br>
</br>
<br>
<div style="height:20px"></div> 
<b>SUMMARY</b><br>
29. $<b>'.$_POST['present_net_29'].'</b>  <b>TOTAL PRESENT MONTHLY NET INCOME</b> (from line 27 of SECTION I. INCOME) <br>
30. $<b>'.$_POST['total_30'].'</b>   <b>TOTAL MONTHLY EXPENSES </b> (from line 28 above)  <br>
31. $<b>'.$_POST['surplus'].' </b> <b>SURPLUS</b> (If line 29 is more than line 30, subtract line 30 from line 29. This is the amount
of your surplus. Enter that amount here.)  <br>
32. $<b>'.$_POST['deficit'].'</b>   <b> (DEFICIT)</b>  (If line 30 is more than line 29, subtract line 29 from line 30. This is the amount
of your deficit. Enter that amount here.) <br><br>
<div style="height:20px"></div> 
<b>SECTION III. ASSETS AND LIABILITIES</b><br>
<b>Use the nonmarital column only if this is a petition for dissolution of marriage and you believe an item
is “nonmarital,” meaning it belongs to only one of you and should not be divided.</b> You should indicate
to whom you believe the item(s) or debt belongs. (Typically, you will only use this column if
property/debt was owned/owed by one spouse before the marriage. See the <b>“General Information for
Self-Represented Litigants”</b> found at the beginning of these forms and section 61.075(1), Florida
Statutes, for definitions of “marital” and “nonmarital” assets and liabilities.)

<div style="height:20px"></div> 
<div style="height:20px"></div> 
<b>A. ASSETS: </b>
<table id="myTable1" border="1" cellpadding="0" cellspacing="0"> 
<thead>
<tr>
<td style="padding:10px">DESCRIPTION OF ITEM(S). List a description of each separate item owned by you (and/or your spouse, if this is a petition for dissolution
of marriage). LIST ONLY LAST 4 DIGITS OF ACCOUNT NUMBERS. Check
the line next to any asset(s) which you are requesting the judge
award to you. </td>
<td style="padding:10px;">Current
Fair
Market
Value </td>
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" colspan="2" style="padding: 0px;">
<div style="padding: 10px;">Nonmarital<br>
(check correct<br>
column) <br><br>
</div>
</td>
</tr>
<tr>
<td align="center" style="padding: 0px;border-right:2px solid;width: 50%;text-align: center;"><div style="padding: 10px;">husband</div></td>
<td style="padding: 0px;width: 50%;text-align: center;">wife</div></td>
</tr>
</table>
</td>
</tr>
</thead>
<tbody>
<tr style="background:#f6f6f7;">
             
            <td style="padding:10px">Cash (on hand)</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['assets_1'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_1_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_1_wife'].'</td> 			
			</tr>	
			</table>
			</td>       
	   </tr>
		<tr>
             
            <td style="padding:10px">Cash (in banks or credit unions)</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['assets_2'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_2_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_2_wife'].'</td> 	
			</tr>	
			</table>
			</td>			
        </tr>	
		<tr style="background:#f6f6f7;">
             
            <td style="padding:10px">Stocks, Bonds, Notes</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['assets_3'].'</span></td> 
			<td>
			<table width="100%">
			<tr>           
		   <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_3_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_3_wife'].'</td> 	 			
			</tr>	
			</table>
			</td>
	   </tr>
		<tr>
             
            <td style="padding:10px">(Other)</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['assets_4'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_4_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_4_wife'].'</td> 	 			
			</tr>	
			</table>
			</td>
		</tr><tr style="background:#f6f6f7;">
             
            <td style="padding:10px">Automobiles</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['assets_5'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_5_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_5_wife'].'</td> 	 			
			</tr>	
			</table>
			</td>
		</tr>
		<tr>
             
            <td style="padding:10px">Other personal property</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['assets_6'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_6_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_6_wife'].'</td> 	 			
			</tr>	
			</table>
			</td>
	   </tr>
		<tr style="background:#f6f6f7;">
             
            <td style="padding:10px">Retirement plans (Profit Sharing, Pension, IRA, 401(k)s, etc.)</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['assets_7'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_7_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_7_wife'].'</td> 	 			
			</tr>	
			</table>
			</td>
		</tr>
		<tr  >
             
            <td style="padding:10px">Other</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['assets_8'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_8_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['assets_8_wife'].'</td> 	 			
			</tr>	
			</table>
			</td>
		</tr>
		'.$Addfields_A.'
</tbody>
<tfoot>
<tr style="background:gray;">
<td style="padding:10px;">
<div style="padding:10px">
<b >Total Assets</b> (add next column) 
</div>
</td>
<td align="center">
<span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['total_assets'].' </span> 
</td>
<td >
<table width="100%">
<tr>
<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">
'.$_POST['total_assets_husband'].'
</td>
<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">
'.$_POST['total_assets_wife'].'
</td>
</tr>
</table>
</td>


</tr>
</tfoot>
</table>
<br>
<div style="page-break-before:always">&nbsp;</div> 
<b>B. LIABILITIES: </b>
<table id="myTable2" border="1" cellpadding="0" cellspacing="0"> 
<thead>
<tr>
<td style="padding:10px">DESCRIPTION OF ITEM(S). List a description of each separate debt
owed by you (and/or your spouse, if this is a petition for dissolution
of marriage). LIST ONLY LAST 4 DIGITS OF ACCOUNT NUMBERS. Check
the line next to any debt(s) for which you believe you should be
responsible.  </td>
<td style="padding:10px">Current
Amount
Owed </td>
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" colspan="2" style="padding: 0px;">
<div style="padding: 10px;">Nonmarital<br>
(check correct<br>
column) <br><br>
</div>
</td>
</tr>
<tr>
<td style="padding: 0px;border-right:2px solid;width: 50%;text-align: center;"><div style="padding: 10px;">husband</div></td>
<td style="padding: 0px;width: 50%;text-align: center;">wife</div></td>
</tr>
</table>
</td>
</tr>
</thead>
<tbody>
<tr style="background:#f6f6f7;">
             
            <td  style="padding:10px">Mortgages on real estate: First mortgage on home</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['liabilities_1'].'</span></td> 
			<td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['liabilities_1_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['liabilities_1_wife'].'</td> 			
			</tr>	
			</table>
			</td>
		</tr>
		<tr>
             
            <td  style="padding:10px">Second mortgage on home</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['liabilities_2'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['liabilities_2_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['liabilities_2_wife'].'</td> 	
			</tr>	
			</table>
				</td>	
        </tr>	
		<tr style="background:#f6f6f7;">
             
            <td  style="padding:10px">Other mortgages</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['liabilities_3'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['liabilities_3_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['liabilities_3_husband'].'</td> 	 			
        </tr>	
			</table>
			</td>
		</tr>
		<tr>
             
            <td  style="padding:10px">Auto loans</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['liabilities_4'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['liabilities_4_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['liabilities_4_wife'].'</td> 	 			
        </tr>	
			</table>
			</td>
		</tr><tr style="background:#f6f6f7;">
             
            <td  style="padding:10px">Charge/credit card accounts </td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['liabilities_5'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['liabilities_5_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['liabilities_5_wife'].'</td> 	 			
         </tr>	
			</table>
			</td>
		</tr>
		'.$Addfields_B.'
</tbody>
<tfoot>
<tr style="background:gray;">
<td style="padding:10px;">
<div style="padding:10px">
<b>Total Debts</b> (add next column) 
</div>
</td>
<td align="center">
<span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['total_depts'].' </span>  
</td>
<td >
<table width="100%">
<tr>
<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">
'.$_POST['total_depts_husband'].'
</td>
<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;" >
'.$_POST['total_depts_wife'].'
</td>
</tr>
</table>
</td>
</tr>
</tfoot>
</table>
<br>
<br>
<b>C. CONTINGENT ASSETS AND LIABILITIES: </b><br>
INSTRUCTIONS: If you have any <b>POSSIBLE assets</b> (income potential, accrued vacation or sick leave,
bonus, inheritance, etc.) or <b>POSSIBLE liabilities</b> (possible lawsuits, future unpaid taxes, contingent tax
liabilities, debts assumed by another), you must list them here. 
<br>
<table id="myTable3" border="1" cellpadding="0" cellspacing="0"> 

<tr>
<td style="padding:10px;">
<div><b style="text-align:center;">Contingent Assets</b><br>
Check the line next to any contingent asset(s) which you are requesting the
judge award to you.  </div></td>
<td style="padding:10px">Possible<br>
Value </td>
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" colspan="2" style="padding: 0px;">
<div style="padding: 10px;">Nonmarital<br>
(check correct<br>
column) <br>
</div>
</td>
</tr>
<tr>
<td style="padding: 0px;border-right:2px solid;width: 50%;text-align: center;"><div style="padding: 10px;">husband</div></td>
<td style="padding: 0px;width: 50%;text-align: center;">wife</div></td>
</tr>
</table>
</td>
</tr>


<tr style="background:#f6f6f7;">
             
            <td  style="padding:10px;">'.$_POST['contingent_assets_text_1'].'</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['contingent_assets_1'].'</span></td> 
			<td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['contingent_assets_1_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['contingent_assets_1_wife'].'</td> 			
			</tr>	
			</table>
			</td>
		</tr>
		<tr>
             
            <td  style="padding:10px;">'.$_POST['contingent_assets_text_2'].'</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['contingent_assets_2'].'</span></td> 
            <td>
			<table width="100%">
			<tr>
			<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['contingent_assets_2_husband'].'</td> 
            <td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['contingent_assets_2_wife'].'</td> 	
			</tr>	
			</table>
				</td>	
        </tr>			
		'.$Addfields_C.'
<tr style="background:gray;">
<td style="padding:10px;">
<div style="padding:10px">
<b>Total Contingent Assets</b>
</div>
</td>
<td align="center">
<span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['contingent_assets'].' </span>  
</td>
<td >
<table width="100%">
<tr>
<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">
'.$_POST['contingent_assets_husband'].'
</td>
<td align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">
'.$_POST['contingent_assets_wife'].'
</td>
</tr>
</table>
</td>
</tr>

</table>
<br>
<br>
<table id="myTable4" border="1" cellpadding="0" cellspacing="0"> 
<thead>
<tr>
<td style="padding:10px;">
<div><b style="text-align:center;">Contingent Liabilities</b><br>
Check the line next to any contingent debt(s) for which you believe you should be responsible.</div> </td>
<td style="padding:10px">Possible<br>
Amount <br>
Owed </td>
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" colspan="2" style="padding: 0px;">
<div style="padding: 10px;">Nonmarital<br>
(check correct<br>
column) <br>
</div>
</td>
</tr>
<tr>
<td style="padding: 0px;border-right:2px solid;width: 50%;text-align: center;"><div style="padding: 10px;">husband</div></td>
<td style="padding: 0px;width: 50%;text-align: center;">wife</div></td>
</tr>
</table>
</td>
</tr>
</thead>
<tbody>
<tr style="background:#f6f6f7;">
             
            <td  style="padding:10px">'.$_POST['contingent_liabilities_text_1'].'</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['contingent_liabilities_1'].'</span></td> 
			<td>
			<table width="100%">
			<tr>
			<td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['contingent_liabilities_1_husband'].'</td> 
            <td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['contingent_liabilities_1_wife'].'</td> 			
			</tr>	
			</table>
			</td>
		</tr>
		<tr>
             
            <td  style="padding:10px">'.$_POST['contingent_liabilities_text_2'].'</td> 
            <td align="center"><span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['contingent_liabilities_2'].'</span></td> 
            <td>
			<table width="100%"> 
			<tr>
			<td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['contingent_liabilities_2_husband'].'</td> 
            <td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">'.$_POST['contingent_liabilities_2_wife'].'</td> 	
			</tr>	
			</table>
				</td>	
        </tr>	
		'.$Addfields .'		
</tbody>
<tfoot>
<tr style="background:gray;">
<td style="padding:10px;">
<div style="padding:10px">
<b>Total Contingent Liabilities</b>
</div>
</td>
<td align="center">
<span style="width: auto;display: inline-flex;   padding: 5px;">$'.$_POST['contingent_liabilities'].'</span>  
</td>
<td align="center">
<table width="100%">
<tr>
<td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">
'.$_POST['contingent_liabilities_husband'].'
</td>
<td  align="center" style="display:inline-block;padding: 10px;width: 50%;text-align: center;">
'.$_POST['contingent_liabilities_wife'].'
</td>
</tr>
</table>
</td>
</tr>
</tfoot>
</table>
<br>
<br>
<div style="page-break-before:always">&nbsp;</div> 
<b>SECTION IV. CHILD SUPPORT GUIDELINES WORKSHEET </b>
(Florida Family Law Rules of Procedure Form 12.902(e), Child Support Guidelines Worksheet, MUST be
filed with the court at or prior to a hearing to establish or modify child support. This requirement cannot
be waived by the parties.) 
<br>
[Check <b>one</b> only]
<br>
'.$Check1.'
<br>
<br>
I certify that a copy of this document was [<b>check all used</b>]: '.$Check2.' '.$Check3.' '.$Check4.'
'.$Check5.'
<br>
<br>
<b>Other party or his/her attorney:</b><br>
Name: '.$_POST['name_4'].'<br>
Address: '.$_POST['address_4'].'<br>
City, State, Zip: '.$_POST['city_4'].'<br>
Fax Number: '.$_POST['fax_4'].'<br>
E-mail Address(es): '.$_POST['email_4'].'<br>
<br>
<br>
<b>I understand that I am swearing or affirming under oath to the truthfulness of the claims made in this
affidavit and that the punishment for knowingly making a false statement includes fines and/or
imprisonment. </b>
<br>
<table border="0" width="100%">
<tr>
<td style="width:50%;">

Dated: '.$_POST['dated'].'

</td>
<td style="width:50%;">

'.$_POST['signature_of_party'].'<br>
Signature of Party<br>
Printed Name: '.$_POST['printed_name'].' <br>
Address: '.$_POST['signature_address'].'<br>
City, State, Zip: '.$_POST['signature_city'].' <br>
Fax Number: '.$_POST['signature_fax'].' <br>
E-mail Address(es): '.$_POST['signature_email'].'<br>

</td>
</tr>
</table>
<br>
STATE OF FLORIDA<br>
COUNTY OF '.$_POST['county'].'
<br>
<div>Sworn to or affirmed and signed before me on _____________________ by  '.$_POST['affirmed_by'].'</div>
<br>
<br>
<table border="0">
<tr>
<td style="width:50%;">

</td>
<td style="width:50%;">

'.$_POST['notary_clerk'].'
<br>NOTARY PUBLIC or DEPUTY CLERK<br>
<br>
'.$_POST['name_of_notary'].'
<br>[Print, type, or stamp commissioned
name of notary or deputy clerk.] <br>
</td>
</tr>
</table>
<br>
'.$personally_known.'<br>
'.$produced_identification.'<br>
Type of identification produced '.$_POST['type_of_identification'].'<br>
<br>
<br>

<b>IF A NONLAWYER HELPED YOU FILL OUT THIS FORM, HE/SHE MUST FILL IN THE BLANKS BELOW:</b><br>
[fill in <b>all</b> blanks] This form was prepared for the: {choose only <b>one</b>} <br>'.$Check6.'<br>

This form was completed with the assistance of:
<i>{name of individual}</i> '.$_POST['name_of_individual'].',</br>
<i>{name of business}</i>  '.$_POST['name_of_business'].',</br>
<i>{address}</i> '.$_POST['assistance_address'].',</br>
<i>{city}</i> '.$_POST['assistance_city'].', <i>{state}</i> '.$_POST['assistance_state'].' <i>{telephone number}</i> '.$_POST['assistance_phone'].'.








</span>
</div>
</div>
</form>
</div>
</div> 
</div>
</div>
    </main>
	
		<style>
		
	.email-specific{
		width: 50%;;
		display: inline-block;
		text-align: left;
		margin-left: auto;
		margin-right: -5px;
		padding: 20px 20px;
		box-shadow: none;
		border: 1px solid #D2D2D2;
		border-radius: 5px 0px 0px 5px;
		margin-bottom: 3rem;
	}
	.form-checkbox{
		display: none;
	}
	
	.form-label{
		display:inline-block;
		padding: 10px 0;
		font-size: 16px;
		font-family: Source Sans Pro,sans-serif;
	}
	.form-checkbox +.form-label:before{
		background: #FFFFFF;
		border: 1px solid #D2D2D2;
		box-sizing: border-box;
		border-radius: 5px;
		content: "";
		display: inline-block;
		font-family: "Font Awesome 5 Free";
		margin-right: 15px;
		position: relative;
		text-align: center;
		text-indent: 0px;
		width: 20px;
		height: 20px;
		vertical-align: middle;
	}
	.form-checkbox:checked +.form-label:before{
		font-family: "Font Awesome 5 Free";
		font-weight: 700; 
		font-size: 13px;
		line-height: 20px;
		content: "\f00c";
		background:#93C704;
		color:white;
	}
	
	#project-specification .form-group>label:first-child{
		display:block;
		font-weight: bold;
		margin-bottom: 15px;
		margin-top: 15px;
	}
	
	#project-specification .form-group>label p{
	    color: #656565;
		font-size: 14px;
		line-height: 1.3;
		font-weight: normal;
	}
	#project-specification .form-group>label .b-grey{
	    color: #656565;
		font-weight:normal;
	}
	#project-specification .form-group>label .blue-mail{
	    color: #656565;
		font-weight:normal;
	}
	
	.form-image img{
		border-radius: 50%;
		width:100%;
	}
	.form-image-svg img{
		width: 166px;
		margin-left: auto;
		margin-right: auto;
		max-height: 166px;
	}
	.form-image-svg.img-svg img{
		
		max-height: 198px;
	}
	.form-image-svg.img-svg img{
		width:208px;
		margin-left: auto;
		margin-right: auto;
		height:198px;
	}
	.form-image, .form-image-svg{
		float:left;
		text-align: center;
		background: white;
		padding: 15px;
	}
	.form-image-svg{
	    padding-bottom: 6rem;
	}
	.form-image-svg.img-svg{
	    padding-bottom: 2rem;
	}
	.form-image input, .form-image-svg input{
		display:none;
	}
	.form-image input + label img{
		border:none;
		box-shadow:none;
	}
	.form-image-svg.img-svg input + label{
		border: 6px solid #E5E5E5;
		box-sizing: border-box;
		border-radius: 1000px;
		height: 210px;
		display: block;
		width: 220px;
		margin-left: auto;
		margin-right: auto;
	}
	.form-image-svg.img-svg input + label img{
		box-shadow: none;
		margin-bottom: 15px;
		padding: 2rem;
		height: 198px;
	}
	.form-image-svg input + label{
		border: 6px solid #E5E5E5;
		box-sizing: border-box;
		border-radius: 1000px;
		height: 176px;
		display: block;
		width: 176px;
		margin-left: auto;
		margin-right: auto;
		font-weight:bold;
	}
	.form-image-svg input + label img{
		box-shadow: none;
		margin-bottom: 15px;
		padding: 3rem;
		height:166px;
	}
	.form-image-svg.img-svg input + label{
		height: 210px;
		display: block;
	}
	.form-image-svg.img-svg b{
		display: block;
		margin-bottom: 15px;
	}
	.form-image input:checked + label{
		background: #A2C719;
		border: 6px solid #A2C719;
		box-sizing: border-box;
		border-radius: 1000px;
	}
	.form-image input:checked + label img{ 
		filter: brightness(0) invert(1);
	}
	.form-image-svg input:checked + label img{ 
		filter: brightness(0) invert(1);
	}
	.form-image-svg input:checked + label {
		background: #A2C719;
		border: 6px solid #A2C719;
		box-sizing: border-box;
		border-radius: 1000px;
	} 
	 
	.form-range{
		text-align:center;
		position:relative;
		background: white;
		padding: 10px 10px;
		margin-left: auto;
		margin-right: auto;
	}
	.form-range input{
		margin:0px 10px;
		width:40%;
		outline: none;
	}
	.form-range label:first-child{
		position:absolute;
		left:5%;
	}
	.form-range label:last-child{
		position:absolute;
		right:5%;
	}
	.bg-green{
	    background: white;
		color: #656565;
	}
	.h2--white{
		
		margin-bottom:1rem;
	}
	.h2--centered{
		text-align:center;
	}
	#project-specification{
		color:blue;
	}
	#project-specification .form-group{
		padding-left:0px;
	}
	#project-specification .h2--underlined:after{
		
	}
	h3.features__title{
		margin:0;
		margin-bottom:5px;
	}
	h5.feature-item__title{
		text-align:center;
		font-weight:400;
		margin:0;
		font-size:14px;
		margin-bottom:10px;
	}
	
	.input-div{
		background:white;
		display: flow-root;
		padding-top:15px;
	}
	.underlined-section{
		content: "";
		display: block;
		width: 100%;
		height: 1px;
		margin-top: 3rem;
		margin-bottom: 3rem;
		background: #d2d2d2;
	}
	.person-block .person-first{
		display:inline-block;
		padding-left:0px;
		padding-right:0px;
	}
	.person-block .person{
		display: inline-block;
		padding-left: 15px;
		padding-right: 0px;
		margin-right: -5px;
	}
	
	.person-block{
		padding-left: 0px;
		font-size:13px;
	}
	.bg-green-title{
		float: left;
		padding: 7rem 0;
	}
	.bg-green-image{
		display: inline-block;
	}
	.bg-green-image img{
		width:100%;
	}
	.red-not{
		text-decoration: underline;
		color: red;
	}
	
	.form-range input::-webkit-slider-runnable-track {height: 8px;background:  #E5E5E5;animate: 0.2s;transition:.1s;}
	.form-range input::-moz-range-track {height: 8px;background:  #E5E5E5;animate: 0.2s;transition:.1s;}
	.form-range input::-ms-track {height: 8px;
		background: #E5E5E5;
		animate: 0.2s;
		transition:.1s;
	}
	.form-range input:focus::-webkit-slider-runnable-track, .form-range input:hover::-webkit-slider-runnable-track {height: 8px;background:  #A2C719;animate: 0.2s;}
	.form-range input:focus::-moz-range-track {height: 8px;background:  #A2C719;}
	.form-range input:focus::-ms-track {height: 8px;
		background: #A2C719;
	}
	.form-range input::-webkit-slider-thumb {
		-webkit-appearance: none;
		height: 22px; 
		width: 22px;
		transition:.1s;
		border: 1px solid #FFFFFF;
		background:#A2C719;
		border-radius:18px;
		cursor:pointer;
		margin-top:-8px;
		transition:.1s;
		-webkit-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		-moz-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
	}
	.form-range input::-moz-range-thumb {
		-webkit-appearance: none;
		height: 22px; 
		width: 22px;
		border: 1px solid #FFFFFF;
		background:#A2C719;
		border-radius:18px;
		cursor:pointer;
		margin-top:-8px;
		-webkit-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		-moz-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
	}
	.form-range input::-ms-thumb {
		-webkit-appearance: none;
		height: 18px; 
		width: 18px;
		border: 1px solid #FFFFFF;
		background:#A2C719;
		border-radius:18px;
		cursor:pointer;
		margin-top:0px;
		transition:.1s;
		-webkit-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		-moz-box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
		box-shadow: 0px 0px 5px 5px rgba(162,199,25,0.5);
	}
	.form-range input {
		-webkit-appearance: none;
		border-radius: 18px;
		height:30px;
		overflow:visible;
	}   
	
	.send-label{
		text-align: center;
		font-size: 30px;
		margin-bottom: 3rem;
		display:block;
		line-height: 1.3;
	}
	.send-btn{
		display: inline-block;
		padding: 20px 5%;
		line-height: 20px;
		border-radius: 0px 5px 5px 0px;
		font-size: 16px;
		border: 1px solid #93c704;
		
	}
	.send-form{
		 text-align: center;
		margin-top: 30px;
	}
	.send-form>div{
		background: #FAFAFA;
		padding: 3rem;
	}
	.send-form .form-text{
		font-size: 16px;
		line-height: 1.3;
		align-items: center;
		text-align: center;
		color: #656565;
	}
	.bg-green-top{
		padding-top:2.5rem;
	}	
	.centered-block{
		padding-left:40px;
		padding-right:40px;
	}
	</style>
';


$mpdf->useSubstitutions = true; // optional - just as an example

$mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header  
$mpdf->setBasePath($url);
$mpdf->SetHTMLHeader('<div style="text-align: right;"></div>');
$mpdf->WriteHTML($htmlTable);
//$mpdf->Output('filename3.pdf');  
$mpdf->Output('FINANCIAL_AFFIDAVIT.pdf', 'D');
// Header content type 
 



?>
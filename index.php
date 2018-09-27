<?php
$authtoken = "*********";

/*
C - POST
R - GET
U - PUT
D - DELETE
*/

//curl_get();
function curl_get(){
	$url = "https://creator.zoho.com/api/json/nexudus/view/pull_Report/authtoken=*********&scope=creatorapi&zc_ownername=aorborctechnologies&raw=true";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	$creator_records = json_decode($response);
	echo ($creator_records->pull[0]->CoworkerInvoiceCreateFirst);
}

function curl_add(){
	//Declare the URL
	$url = "https://creator.zoho.com/api/aorborctechnologies/json/nexudus/form/all_fields/record/add";

	//Add POST parameters
	$post_fields = array();
	$post_fields['authtoken'] = "*********";
	$post_fields['scope'] = "creatorapi";
	$post_fields['Email'] = "ruben@****.com";
	$post_fields['Multi_Line'] = "Trying it out from CPT office";
	$post_fields['Name'] = "Ruben Kannan";

	$ch = curl_init($url);

	//Set CURL options
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);

	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
}
//curl_add();
function curl_edit(){
	//Declare the URL
	$url = "https://creator.zoho.com/api/aorborctechnologies/json/nexudus/form/all_fields/record/update";

	//Add POST parameters
	$post_fields = array();
	$post_fields['authtoken'] = "*********";
	$post_fields['scope'] = "creatorapi";
	$post_fields['Email'] = "jimmy@***.com";
	$post_fields['criteria'] = "(ID == 1853690000041453003)";

	$ch = curl_init($url);

	//Set CURL options
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);

	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;

}
//curl_edit();
function curl_delete(){
	//Declare the URL
	$url = "https://creator.zoho.com/api/aorborctechnologies/json/nexudus/form/all_fields/record/delete";

	//Add POST parameters
	$post_fields = array();
	$post_fields['authtoken'] = "*********";
	$post_fields['scope'] = "creatorapi";
	$post_fields['criteria'] = "(Name == Ruben)";

	$ch = curl_init($url);

	//Set CURL options
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);

	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;

}
curl_delete();
?>
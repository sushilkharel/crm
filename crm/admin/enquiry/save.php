<?php include_once("../config.php");?>
<?php include_once(ROOT_PATH ."system/models/enquiry.class.php"); ?>
<?php include_once(ROOT_PATH ."system/repository/enquiry_repository.class.php"); ?>

<?php 
	$enquiry = new Enquiry();
	$enquiry->set_company_name($_POST["company_name"]);     
	$enquiry->set_first_name($_POST["first_name"]);
	$enquiry->set_last_name($_POST["last_name"]);
        $enquiry->set_email($_POST["email"]);	
        $enquiry->set_contact_no($_POST["contact_no"]);
        $enquiry->set_subject($_POST["subject"]);
        $enquiry->set_message($_POST["message"]);
        $enquiry->set_enquiry_date($_POST["enquiry_date"]);
	
	$enquiry_repository = new EnquiryRepository();

	$enquiry_repository->insert($enquiry);
      
	if($enquiry_repository->insert($enquiry) > 0){
		header("location:index.php?success=true");
		exit();
	}
	else{
		header("location:add.php?error=true");
		} 
	exit();
        
?>

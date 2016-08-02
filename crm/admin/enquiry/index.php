<?php include_once("../config.php");?>
<?php include_once(ROOT_PATH."system/models/enquiry.class.php");?>
<?php include_once(ROOT_PATH."system/repository/enquiry_repository.class.php");?>
<?php include_once("../header.php");?>
<?php include_once("menu.php"); ?>

<div class="pull-right" >
	<a href="add.php" class="btn btn-primary">Add Enquiry </a>
</div>
<table class="table table-stripped table-hover">
<tr>
<th>Id</th>
<th>Company Name</th>
<th>Contact Person</th>
<th>Email</th>
<th>Contact No</th>
<th>Enquiry Date</th>
<th>Subject</th>
<th>Action</th>
</tr>

<?php

$enquiry_repository=new EnquiryRepository();
foreach($enquiry_repository->get_all() as $enq){
?>
<tr>
	<td><?php echo $enq->get_id()?></td>
	<td><?php echo $enq->get_company_name()?></td>
	<td><?php echo $enq->get_first_name()?> <?php echo $enq->get_last_name()?></td>
	<td><?php echo $enq->get_email()?></td>
	<td><?php echo $enq->get_contact_no()?></td>
	<td><?php echo $enq->get_enquiry_date()?></td>
	<td><?php echo $enq->get_subject()?></td>
	<td><a href="edit.php?id=<?php echo $enq->get_id()?>" class="btn btn-success">Edit</a></td>
</tr>
<?php
	}
?>
</table>

<?php include_once("../footer.php");?>


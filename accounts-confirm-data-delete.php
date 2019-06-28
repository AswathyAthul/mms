<?php 
	
	
	if (isset($_GET['accnt_ledger'])) {
		$ID = $_GET['accnt_ledger'];
		
	 
			
	// delete data from menu table
	$sql_query = "DELETE FROM tbl_accounts_ledger WHERE id = ?";
			
	$stmt = $connect->stmt_init();
	if ($stmt->prepare($sql_query)) {	
		// Bind your variables to replace the ?s
		$stmt->bind_param('s', $ID);
		// Execute query
		$stmt->execute();
		// store result 
		$delete_result = $stmt->store_result();
		$stmt->close();
	}
				
	// if delete data success back to previous page
	if($delete_result) {
		header("Location:accounts-ledger.php");
		
		exit;
	}
	}
	
		
	if (isset($_GET['accnt_subsptn'])) {
		$ID = $_GET['accnt_subsptn'];
		
	 
			
	// delete data from menu table
	$sql_query = "DELETE FROM tbl_accounts_subscription WHERE id = ?";
			
	$stmt = $connect->stmt_init();
	if ($stmt->prepare($sql_query)) {	
		// Bind your variables to replace the ?s
		$stmt->bind_param('s', $ID);
		// Execute query
		$stmt->execute();
		// store result 
		$delete_result = $stmt->store_result();
		$stmt->close();
	}
				
	// if delete data success back to previous page
	if($delete_result) {
		header("Location:accounts-subscription-plan.php");
		
		exit;
	}
	}
	
		if (isset($_GET['accnt_subsptn_plan'])) {
		$ID = $_GET['accnt_subsptn_plan'];
		
	 
			
	// delete data from menu table
	$sql_query = "DELETE FROM tbl_accounts_subscription_plan WHERE id = ?";
			
	$stmt = $connect->stmt_init();
	if ($stmt->prepare($sql_query)) {	
		// Bind your variables to replace the ?s
		$stmt->bind_param('s', $ID);
		// Execute query
		$stmt->execute();
		// store result 
		$delete_result = $stmt->store_result();
		$stmt->close();
	}
				
	// if delete data success back to previous page
	if($delete_result) {
		header("Location:accounts-subscription-plan-table.php");
		
		exit;
	}
	}
	
	
		if (isset($_GET['accnt_subsptn_assign'])) {
		$ID = $_GET['accnt_subsptn_assign'];
		
	 
			
	// delete data from menu table
	$sql_query = "DELETE FROM tbl_accounts_subscription_assign WHERE id = ?";
			
	$stmt = $connect->stmt_init();
	if ($stmt->prepare($sql_query)) {	
		// Bind your variables to replace the ?s
		$stmt->bind_param('s', $ID);
		// Execute query
		$stmt->execute();
		// store result 
		$delete_result = $stmt->store_result();
		$stmt->close();
	}
				
	// if delete data success back to previous page
	if($delete_result) {
		header("Location:accounts-subscription-assign.php");
		
		exit;
	}
	}
	
	
		if (isset($_GET['accnt_income_gen'])) {
		$ID = $_GET['accnt_income_gen'];
		
	 
			
	// delete data from menu table
	$sql_query = "DELETE FROM tbl_accounts_entries_asset WHERE id = ?";
			
	$stmt = $connect->stmt_init();
	if ($stmt->prepare($sql_query)) {	
		// Bind your variables to replace the ?s
		$stmt->bind_param('s', $ID);
		// Execute query
		$stmt->execute();
		// store result 
		$delete_result = $stmt->store_result();
		$stmt->close();
	}
				
	// if delete data success back to previous page
	if($delete_result) {
		header("Location:accounts-reports-general.php");
		
		exit;
	}
	}
	
	if (isset($_GET['accnt_expence_gen'])) {
		$ID = $_GET['accnt_expence_gen'];
		
	 
			
	// delete data from menu table
	$sql_query = "DELETE FROM tbl_accounts_entries_expense_ledger WHERE id = ?";
			
	$stmt = $connect->stmt_init();
	if ($stmt->prepare($sql_query)) {	
		// Bind your variables to replace the ?s
		$stmt->bind_param('s', $ID);
		// Execute query
		$stmt->execute();
		// store result 
		$delete_result = $stmt->store_result();
		$stmt->close();
	}
				
	// if delete data success back to previous page
	if($delete_result) {
		header("Location:accounts-reports-income-statement.php");
		
		exit;
	}
	}
	
	if (isset($_GET['accnt_bal_gen'])) {
		$ID = $_GET['accnt_bal_gen'];
		
	 
			
	// delete data from menu table
	$sql_query = "DELETE FROM tbl_entries_receipt_ledger WHERE id = ?";
			
	$stmt = $connect->stmt_init();
	if ($stmt->prepare($sql_query)) {	
		// Bind your variables to replace the ?s
		$stmt->bind_param('s', $ID);
		// Execute query
		$stmt->execute();
		// store result 
		$delete_result = $stmt->store_result();
		$stmt->close();
	}
				
	// if delete data success back to previous page
	if($delete_result) {
		header("Location:accounts-reports-balance.php");
		
		exit;
	}
	}
	
	if (isset($_GET['accnt_asset_gen'])) {
		$ID = $_GET['accnt_asset_gen'];
		
	 
			
	// delete data from menu table
	$sql_query = "DELETE FROM tbl_accounts_entries_asset WHERE id = ?";
			
	$stmt = $connect->stmt_init();
	if ($stmt->prepare($sql_query)) {	
		// Bind your variables to replace the ?s
		$stmt->bind_param('s', $ID);
		// Execute query
		$stmt->execute();
		// store result 
		$delete_result = $stmt->store_result();
		$stmt->close();
	}
				
	// if delete data success back to previous page
	if($delete_result) {
		header("Location:accounts-reports-asset.php");
		
		exit;
	}
	}
	
?>
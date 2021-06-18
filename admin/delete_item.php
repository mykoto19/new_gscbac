 					



<?php 



	require_once "../includes/initdb.php";


	function CheckQuery($query){

	    global $db;

	    	if(!$query){

	        die("QUERY FAILED". mysqli_error($db));
	    }

	}




    if(isset($_GET['delete_item'])){

       $item_id = $_GET['delete_item'];

        $query = "DELETE FROM goods_items WHERE itemID = {$item_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: goods.php?success=item deleted successfully!!");
    }




     if(isset($_GET['delete_item_ofc'])){

       $item_id = $_GET['delete_item_ofc'];

        $query = "DELETE FROM goods_items WHERE itemID = {$item_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: ofc_supplies.php?success=item deleted successfully!!");
    }



    if(isset($_GET['delete_item_med'])){

       $item_id = $_GET['delete_item_med'];

        $query = "DELETE FROM goods_items WHERE itemID = {$item_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: med_supplies.php?success=item deleted successfully!!");
    }



    if(isset($_GET['delete_item_other'])){

       $item_id = $_GET['delete_item_other'];

        $query = "DELETE FROM goods_items WHERE itemID = {$item_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: other_supplies.php?success=item deleted successfully!!");
    }




    if(isset($_GET['delete_admin'])){

       $admin_id = $_GET['delete_admin'];

        $query = "DELETE FROM admintb WHERE AdminID = {$admin_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: admin_accounts.php?success=admin deleted successfully!!");
    }




    if(isset($_GET['delete_bac_compose'])){

       $bacID = $_GET['delete_bac_compose'];

        $query = "DELETE FROM bac_compose WHERE ID = {$bacID} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: manage_bac_compose.php?success=member deleted successfully!!");
    }



    if(isset($_GET['delete_dept'])){

       $deptID = $_GET['delete_dept'];

        $query = "DELETE FROM departmenttb WHERE deptID = {$deptID} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: view_dept_accounts.php?success=department deleted successfully!!");
    }



    if(isset($_GET['delete_plan'])){

       $plan_id = $_GET['delete_plan'];

        $query = "DELETE FROM plan_infra WHERE planInfra_ID = {$plan_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: planning.php?success=item deleted successfully!!");
    }



    if(isset($_GET['delete_service'])){

       $service_id = $_GET['delete_service'];

        $query = "DELETE FROM service_offer WHERE serveOffer_ID = {$service_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: service.php?success=item deleted successfully!!");
    }



    if(isset($_GET['delete_supplier'])){

       $supplier_id = $_GET['delete_supplier'];

        $query = "DELETE FROM suppliertb WHERE supplierID = {$supplier_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: supplier_accounts.php?success=supplier deleted successfully!!");
    }


    if(isset($_GET['delete_sched'])){

       $sched_id = $_GET['delete_sched'];

        $query = "DELETE FROM schedules WHERE sched_id = {$sched_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: bac_sched.php?success=schedule deleted successfully!!");
    }



    if(isset($_GET['delete_sched'])){

       $sched_id = $_GET['delete_sched'];

        $query = "DELETE FROM proj_sched WHERE sched_id = {$sched_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: bac_sched.php?success=schedule deleted successfully!!");  
    }



     if(isset($_GET['delete_proj_sched'])){

       $proj_sched_id = $_GET['delete_proj_sched'];

        $query = "DELETE FROM proj_sched WHERE ID = {$proj_sched_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: bac_sched.php?success=schedule deleted successfully!!");  
    }


?>
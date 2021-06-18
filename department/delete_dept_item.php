<?php 



	require_once "../includes/initdb.php";


	function CheckQuery($query){

	    global $db;

	    	if(!$query){

	        die("QUERY FAILED". mysqli_error($db));
	    }

	}




    if(isset($_GET['delete_dept_item'])){

       $dept_item_id = $_GET['delete_dept_item'];

       $sql = "SELECT * FROM tbl_itemlist WHERE id = {$dept_item_id}";
       $result = mysqli_query($db,$sql);
       while($row = mysqli_fetch_assoc($result)){

       	$list_id = $row['list_id'];

        $query = "DELETE FROM tbl_itemlist WHERE id = {$dept_item_id} ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: dept_items.php?goto=$list_id");
    	}
    }



    if(isset($_GET['delete_item_list'])){

       $list_id = $_GET['delete_item_list'];

        $query = "DELETE FROM tbl_list WHERE list_id = '$list_id' ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: item_list.php?success=list deleted successfully!!");
    }


    if(isset($_GET['delete_item_list'])){

       $list_id = $_GET['delete_item_list'];

        $query = "DELETE FROM tbl_itemlist WHERE list_id = '$list_id' ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: item_list.php?success=list deleted successfully!!");
    }


    if(isset($_GET['delete_item_select'])){

       $list_db_id = $_GET['delete_item_select'];


       $sql = "SELECT * FROM tbl_itemlist WHERE id = $list_db_id";
       $result = mysqli_query($db,$sql);
       while($row = mysqli_fetch_assoc($result)){


        $list_id = $row['list_id'];

        $query = "DELETE FROM tbl_itemlist WHERE id = $list_db_id ";
        $delete_item = mysqli_query($db,$query);
        CheckQuery($delete_item);
        header("Location: item_list_selected.php?goto=$list_id");

      }
    }


?>
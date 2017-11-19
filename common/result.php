<?php
include('db.php');
if($_POST)
{
    
   // Create connection
    
    $q = mysqli_real_escape_string($conn,$_POST['search']);
//"select doc_id, doc_cat from 'doc_cat' where doc_cat like '%$q%' order by id LIMIT 10"
    $strSQL_Result = mysqli_query($conn,"SELECT doc_cat.* , doc_reg.doc_name FROM doc_cat  inner join doc_reg on doc_reg.doc_id = doc_cat.doc_id  where doc_cat like '%$q%' order by doc_id LIMIT 10");
    while($row=mysqli_fetch_array($strSQL_Result))
    {
        $doc_id   = $row['doc_id'];
        $doc_cat      = $row['doc_cat'];
        $doc_name      = $row['doc_name'];
        $doc_catid      = $row['doc_catid'];
        
        //   $b_username = '<strong>'.$q.'</strong>';
      //  $b_email    = '<strong>'.$q.'</strong>';
      //  $final_username = str_ireplace($q, $b_username, $username);
      //  $final_email = str_ireplace($q, $b_email, $email);
        ?>
            <div class="show" align="left">
                <img src="http://www.apollonion.com/assets/image/imagesplashdoc/women-img0001.png"
                 style="width:50px; height:50px; float:left; margin-right:6px;" />
                   <span class="name"><?php echo $doc_cat; ?>
                    </span>
                    <span style="display:none;"  class="catid"><?php echo $doc_catid; ?>
                    </span>
                    &nbsp;<br/>
           
<!--                  <?php echo $doc_cat; ?>
 -->             <br/>
            </div>
        <?php
    }
}
?>
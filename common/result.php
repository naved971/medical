<?php
include('db.php');
if($_POST)
{
    
   // Create connection
    
    $q = mysqli_real_escape_string($conn,$_POST['search']);
//"select doc_id, doc_cat from 'doc_cat' where doc_cat like '%$q%' order by id LIMIT 10"
    $strSQL_Result = mysqli_query($conn,"SELECT doc_cat.*  FROM doc_cat  inner join doc_reg on doc_reg.doc_id = doc_cat.doc_id  where doc_cat like '%$q%' order by doc_id LIMIT 100");
    if(mysqli_num_rows($strSQL_Result) > 0)
    {
     while($row=mysqli_fetch_array($strSQL_Result))
     {
        $doc_id   = $row['doc_id'];
        $doc_cat      = $row['doc_cat'];
        $doc_name      = $row['doc_name'];
        $doc_catid      = $row['doc_catid'];
        $doc_age   = $row['doc_age'];
        $doc_gender   = $row['doc_gender'];
        
        //   $b_username = '<strong>'.$q.'</strong>';
      //  $b_email    = '<strong>'.$q.'</strong>';
      //  $final_username = str_ireplace($q, $b_username, $username);
      //  $final_email = str_ireplace($q, $b_email, $email);
        ?>
            <div class="show" align="left">
                <img src="http://www.apollonion.com/assets/image/imagesplashdoc/women-img0001.png"
                 style="width:50px; height:50px; float:left; margin-right:6px;" />
                   <span  style="display:none;"  class="name"><?php echo $doc_name; ?> </span><br/>
                   <span  class="cat"><?php echo $doc_cat; ?> </span>
                   <span  style="display:none;" class="age"><?php echo $doc_age; ?> </span>
                   <span  style="display:none;" class="gender"><?php echo $doc_gender; ?> </span>
                   <span style="display:none;"  class="id"><?php echo $doc_id; ?> </span>
                    <span style="display:none;"  class="catid"><?php echo $doc_catid; ?> </span>
                    &nbsp;<br/>
           
<!--feadme                  <?php echo $doc_cat; ?>
 -->             <br/>
            </div>
        <?php
    }
}
}
?>
<?php
    include('db.php');
    if(isset($_GET['search_word']))
    {
        $search_word=$_GET['search_word'];
        $search_word_new=mysqli_escape_string($con,$search_word);
        $search_word_fix=str_replace(" ","%",$search_word_new);
        $sql=mysqli_query($conn,"SELECT doc_cat.* , doc_reg.doc_name FROM doc_cat  inner join doc_reg on doc_reg.doc_id = doc_cat.doc_id  where doc_cat like '%$q%' order by doc_id LIMIT 10");
        $count=mysqli_num_rows($sql);
        if($count > 0)
        {
            while($row=mysqli_fetch_array($sql))
            {
            
                $msg=$row['p_title'];
                $bold_word='<b>'.$search_word.'</b>';
                $final_msg = str_ireplace($search_word, $bold_word, $msg);
                ?>
                
                <li><?php echo $final_msg; ?></li>
            
            <?php
            }
            }
            else
            {
                echo "<li>No Results</li>";
            }
    }
?>
<?php
                      
                        if (isset($_SESSION['user_type']) && isset($_SESSION['login'])  &&  $_SESSION['login'] == "1") {  
                        echo "<span>".$_SESSION['user_id']." </span>"  ;
                    }
                        else if (  !isset($_SESSION['login']) ) 
                        {
                        echo "<span>you are not logged in</span>";
                        }
                       
                         ?>
                  
              
                      

                                 <a href="#" onclick="<?php session_destroy();?>">
                                
                                <?php 
                                
                                        if (isset($_SESSION['user_type']) && isset($_SESSION['login'])  &&  $_SESSION['login'] == "1") {  
                                        echo "Logout"  ;
                                        }
                                        else if (  !isset($_SESSION['login']) ) 
                                        {
                                            echo "Login"  ;
                                        }
                                                            
                                ?>
                                                     
                                
                                
                                </a>
                       
                        
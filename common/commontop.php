<?php
                      
                        if (isset($_SESSION['user_type']) && isset($_SESSION['login'])  &&  $_SESSION['login'] == "1" && $_SESSION['user_type'] == "p") {  
                        echo "<span>".$_SESSION['user_id']." </span>"  ;
                        }
                        else if (isset($_SESSION['user_type']) && isset($_SESSION['login'])  &&  $_SESSION['login'] == "1" && $_SESSION['user_type'] == "d"){  
                            echo "<span>".$_SESSION['doc_id']." </span>"  ;
                            }
                        else if (  !isset($_SESSION['login']) ) 
                        {
                        echo "<span>Not Logged In</span>";
                        }
                       
                         ?>
                  
              
                      

                          <!--       <a href="#" onclick=" ?php session_destroy();?>">  put back the php open sign -->
                                
                                <?php 
                                
                                        if (isset($_SESSION['user_type']) && isset($_SESSION['login'])  &&  $_SESSION['login'] == "1") {  
                                        echo ""  ;
                                        }
                                        else if (  !isset($_SESSION['login']) ) 
                                        {
                                            echo ""  ;
                                        }
                                                            
                                ?>
                                                     
                                
                                
                                </a>
                       
                        
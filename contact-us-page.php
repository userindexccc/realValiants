<?php
    include 'index-top.php';
?>
<!--- CONTACT_US PAGE ---->
    <div id="contact_us">
          <section>
            
            <div class="section-header">
              <div class="main_container">
                <h2>Contact Us</h2>
                <p>For more information about the <span style="font-style: italic;">CCC Sports Development Office</span>, you may send us a message or contact:</p>
              </div>
            </div>
            
            <div class="main_container">
              <div class="row">
                <div class="contact-info">
                  <div class="contact-info-item">
                    <div class="contact-info-icon">
                      <i class="fas fa-home"></i>
                    </div>
                    
                    <div class="contact-info-content">
                      <h4>Address</h4>
                      <p>City College of Calamba,<br/> Old Municipal Hall, Poblacion, <br/>Calamba City, Laguna</p>
                    </div>
                  </div>
                  
                  <div class="contact-info-item">
                    <div class="contact-info-icon">
                      <i class="fas fa-phone"></i>
                    </div>
                    
                    <div class="contact-info-content">
                      <h4>Phone</h4>
                      <p>(049) 559-8900 loc. 105</p>
                    </div>
                  </div>
                  
                  <div class="contact-info-item">
                    <div class="contact-info-icon">
                      <i class="fas fa-envelope"></i>
                    </div>
                    
                    <div class="contact-info-content">
                      <h4>Email</h4>
                     <p>cccsportsdevelopment@ccc.edu.ph</p>
                    </div>
                  </div>
                </div>
                
                <div class="contact-form">
                    <!-- CONTACT FORM -->
                        <form id="contact-form" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <h2>Send Message</h2>
                            <?php 
                              if (isset($_GET['error'])) {
                                echo '<div 
                                        style="background-color: rgba(255, 0, 0, 0.4); 
                                        justify-content: center; 
                                        display: flex; 
                                        align-items: center; 
                                        border: 1px dotted rgba(255, 0, 0, 1);
                                        box-shadow: 0 0 8px rgba(255, 0, 0, 0.6);
                                        padding: 10px 30px;
                                        border-radius: 5px;
                                        font-weight: 500;
                                        font-family: "Poppins", sans-serif; 
                                         ">';
                                echo "<h5 style='text-align: center; color: rgba(0, 0, 0, 0.8) '>";
                                  echo htmlspecialchars($_GET['error']);
                                echo "</h5>";
                                echo '</div>';
                              }elseif (isset($_GET['errorSuccess'])) {
                                echo '<div 
                                        style="background-color: rgba(0, 255, 0, 0.3); 
                                        justify-content: center; 
                                        display: flex; 
                                        align-items: center; 
                                        border: 1px dotted rgba(0, 255, 0, 1);
                                        box-shadow: 0 0 10px rgba(0, 255, 0, 0.6);
                                        padding: 10px 30px;
                                        border-radius: 5px;
                                        font-weight: 500;
                                        font-family: "Poppins", sans-serif; 
                                         ">';
                                echo "<h5 style='text-align: center; color: rgba(0, 0, 0, 0.8); '>";
                                  echo htmlspecialchars($_GET['errorSuccess']);
                                echo "</h5>";
                                echo '</div>';
                              }
                            ?>
                            <div class="error">
                              
                            </div>
                            <div class="input-box">
                              <label for="fullname">Name (<span>Juan M. Dela Cruz</span>)<span style="color: red; font-size: 1.4em;">*</span></label>
                              <input type="text" required="true" id="fullname" name="fullname" autocomplete="off">
                            </div>
                            
                            <div class="input-box">
                              <label for="user-email">Email (<span style="cursor: default;">example@ccc.edu.ph</span>)<span style="color: red; font-size: 1.4em;">*</span></label>
                              <input type="email" required id="user-email" name="user-email" autocomplete="off">
                            </div>
                            
                            <div class="input-box">
                              <label for="message" class="message">Message<span style="color: red; font-size: 1.4em;">*</span></label>
                              <textarea required name="user-message" id="message" placeholder="Type your Message..." autocomplete="off"></textarea>
                            </div>
                            
                            <div class="input-box">
                              <input type="submit" value="SEND" onclick="validateEmail()" name="submit" id="contact-submit">
                            </div>
                        </form>
                    <!-- END CONTACT FORM -->
                </div>
                
              </div>
            </div>
          </section>
    </div>



<?php 
    include 'index-bottom.php';
?>
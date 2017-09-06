<?php
include("./includes/db_connection.php");
include("./includes/functions.php");
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $org = $_POST['org'];
    $title = $_POST['title'];

insert_download($fname, $lname, $email, $org, $title);
}
?>
<?php
include("./includes/htmlheader.php");
include("./includes/nav.php");
?>

      <section style="background-image: url(images/bg-image-2.jpg);" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
        <div class="shell">
          <div class="page-title">
            <h2>Pricing</h2>
          </div>
        </div>
      </section>

      <section class="section-60 section-sm-90 section-lg-bottom-15 bg-whisper">
        <div class="shell">
          <div class="range">
            <div class="cell-sm-6 cell-md-9">
              <div class="range">
                <div class="cell-md-6">
                  <h3>Choose Your Plan</h3>
                </div>
                <div class="cell-md-6 offset-top-30 offset-md-top-0">
                  <p>
                    Pick the best plan that meets your needs. A free trial is available to help you with the decision-making.
                    
                  </p>
                </div>
              </div>
            </div>
            <div class="cell-sm-5 cell-md-4 cell-lg-3 offset-top-40 offset-sm-top-0"><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Download free trial</a></div>
          </div>
        </div>
      </section>

      <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
                <section>
                  <div class="shell">
                    <div class="range range-sm-center">
                      <!-- <div class="cell-sm-7 cell-md-5 cell-lg-4"> -->
                        <div class="block-shadow text-center">
                          <div class="block-inner">
                            <p class="h7">Free Trial Version</p>
                            <div class="offset-top-40 offset-sm-top-60"><span style="font-size: 48px" class="fa fa-download fa-3" aria-hidden="true"></span></div>
                          </div>
                          <form id = "form_download" class="rd-mailform form-modern form-darker offset-top-40" method="post" enctype="multipart/form-data">
                            <div class="block-inner">
                              <div class="form-group">
                                <input id="register-form-name" type="text" name="fname" data-constraints="@Required" class="form-control">
                                <label for="register-form-name" class="form-label">First Name</label>
                              </div>
                              <div class="form-group offset-top-22">
                                <input id="register-form-name" type="text" name="lname" data-constraints="@Required" class="form-control">
                                <label for="register-form-name" class="form-label">Last Name</label>
                              </div>
                              <div class="form-group offset-top-22">
                                <input id="feedback-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                                <label for="feedback-email" class="form-label">Email</label>
                                <span class="form-validation"></span>
                                <!-- <p class='help-block' style="color: Red"></p> -->
                              </div>
                              <div class="form-group offset-top-22">
                                <input id="register-form-password-confirm" type="text" name="title" class="form-control">
                                <label for="register-form-password-confirm" class="form-label">Title</label>
                              </div>

                              <div class="form-group offset-top-22">
                                <input id="register-form-password" type="text" name="org" data-constraints="@Required" class="form-control">
                                <label for="register-form-password" class="form-label">Organisation</label>
                              </div>
                              
                              <div class="offset-top-22 text-left text-secondary">
                                <label class="checkbox-inline checkbox-small">
                                  <input name="input-checkbox" value="checkbox-1" type="checkbox">I agree with the&nbsp;<a href="privacy-policy.html" class="link-primary-inline">Terms of use</a>.
                                </label>
                              </div>
                            </div>
                            <div class="offset-top-30 offset-sm-top-40">
                              <button type="button" onclick="checkduplicate()" name="getlink" class="btn btn-primary btn-round-bottom btn-block">Get Link</button>
                            </div>
                          </form>
                        </div>
                      <!-- </div> -->
                    </div>
                  </div>
                </section>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div> -->
            </div>

          </div>
        </div>

       <section class="bg-decoration-wrap bg-decoration-bottom section-bottom-60 section-lg-top-100 section-lg-bottom-100 bg-whisper">
        <div class="shell bg-decoration-content">
          <div class="range range-sm-center">
            <div class="cell-md-10 cell-lg-12">
              <div class="range range-sm-bottom">
                <div class="cell-sm-6 cell-lg-4">
                  <div class="pricing-table">
                    <div class="pricing-table-body">
                      <h5 class="pricing-table-header">Basic</h5>
                      <div class="pricing-object pricing-object-lg"><span class="small small-top">$</span><span class="price">3000</span><span class="small small-bottom">/yr</span></div>
                      <div class="divider-circle"></div>
                      <ul class="pricing-list">
                        <!-- <li><span class="text-ubold">1GB</span>Space amount</li> -->
                        <li><span class="text-ubold">128</span>Hosts</li>
                        <li><span class="text-ubold">128</span>Max concurrent users</li>
                        <!-- <li>No Support</li>
                        <li><span class="text-ubold">1</span>Databases</li> -->
                      </ul>
                    </div>
                    <div class="pricing-table-footer"><a href="register.html" class="btn btn-round-bottom btn-default btn-block">View Details</a></div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-lg-4 offset-top-40 offset-sm-top-0">
                  <div class="pricing-table">
                    <div class="pricing-table-body">
                      <h5 class="pricing-table-header">Advanced</h5>
                      <div class="pricing-object pricing-object-lg"><span class="small small-top">$</span><span class="price">4800</span><span class="small small-bottom">/yr</span></div>
                      <div class="divider-circle"></div>
                      <ul class="pricing-list">
                        <!-- <li><span class="text-ubold">5GB</span>Space amount</li> -->
                        <li><span class="text-ubold">256</span>Hosts</li>
                        <li><span class="text-ubold">128</span>Max concurrent users</li>
                        <!-- <li>No Support</li>
                        <li><span class="text-ubold">1</span>Databases</li> -->
                      </ul>
                    </div>
                    <div class="pricing-table-footer"><a href="256users.pdf" target="_blank" class="btn btn-round-bottom btn-default btn-block">View Details</a></div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-lg-4 offset-top-40 offset-lg-top-0">
                  <div class="pricing-table"> 
                     <!-- <div class="pricing-table-label pricing-table-preferred">
                      <p>Most popular</p>
                    </div> -->
                    <div class="pricing-table-body">
                      <h5 class="pricing-table-header">Premier</h5>
                      <div class="pricing-object pricing-object-md" style="font-size: 48px"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                      <div class="divider-circle"></div>
                      <ul class="pricing-list">
                        <!-- <li><span class="text-ubold">10GB</span>Space amount</li>
                        <li><span class="text-ubold">Unlimited</span>users</li>
                        <li><span class="text-ubold">30GB</span>Bandwidth</li> -->
                        <!-- <li>Free Support</li> -->
                        <li><span class="text-ubold"> >256</span>Hosts</li>
                        <li><span class="text-ubold"></span></li>
                      </ul>
                    </div>
                    <div class="pricing-table-footer"><a href="register.html" class="btn btn-round-bottom btn-default btn-block">Contact Us</a></div>
                  </div>
                </div>
<!--                 <div class="cell-sm-6 cell-lg-3 offset-top-40 offset-lg-top-0">
                  <div class="pricing-table">
                    <div class="pricing-table-body">
                      <h5 class="pricing-table-header">Ultimate</h5>
                      <div class="pricing-object pricing-object-lg"><span class="small small-top">$</span><span class="price">199</span><span class="small small-bottom">/mo</span></div>
                      <div class="divider-circle"></div>
                      <ul class="pricing-list">
                        <li><span class="text-ubold">100GB</span>Space amount</li>
                        <li><span class="text-ubold">Unlimited</span>users</li>
                        <li><span class="text-ubold">60GB</span>Bandwidth</li>
                        <li>Free Support</li>
                        <li><span class="text-ubold">Unlimited</span>Databases</li>
                      </ul>
                    </div>
                    <div class="pricing-table-footer"><a href="register.html" class="btn btn-round-bottom btn-default btn-block">Sign up</a></div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="bg-decoration-object bg-athens-gray"></div>
      </section>
    
<?php
require_once("./includes/footer.php");
?>
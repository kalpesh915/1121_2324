  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <?php 
            require_once("classes/Topbar.class.php");
        ?>
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
      </button>

     

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
          <!-- Nav Item - Alerts -->
          <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter"><?= $topbar->getNotificationCount(); ?></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                  <h6 class="dropdown-header">
                      Alerts Center
                  </h6>
                        <?php
                            $result = $topbar->loadSomeNotifications(3);

                            while($row = $result->fetch_assoc()){
                                echo "<a class='dropdown-item d-flex align-items-center'>
                                <div>
                                <div class='small text-gray-500'>$row[eventtime]</div>
                                $row[logmessage]</div></a>";
                            }
                        ?>
                  <a class="dropdown-item text-center small text-gray-500" href="allnotifications">Show All Alerts</a>
              </div>
          </li>

          <!-- Nav Item - Messages -->
          <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-envelope fa-fw"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter"><?= $topbar->getUnreadMsgCount(); ?></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                  <h6 class="dropdown-header">
                      Message Center
                  </h6>

                  <?php 
                    $messagesResult = $topbar->loadSomeMessages(3);

                    while($messageRow = $messagesResult->fetch_assoc()){
                        echo "<a class='dropdown-item d-flex align-items-center' href='readmessage?messageid=$messageRow[messageid]'>
                        <div>
                            <div><b>$messageRow[messagetime] </b><br>$messageRow[fname] $messageRow[lname]
                            </div>
                            <div class='text-dark'>Subject : $messageRow[subject]</div>
                        </div>
                    </a>";
                    }
                  ?>
                  
                  <a class="dropdown-item text-center small text-gray-500" href="allunreadmessages">Read More Messages</a>
              </div>
          </li>

          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $adminemail; ?></span>
                  <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="profile">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                  </a>
                  <a class="dropdown-item" href="password">
                      <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                      Password
                  </a>
                  <a class="dropdown-item" href="metatags">
                      <i class="fas fa-tag fa-sm fa-fw mr-2 text-gray-400"></i>
                      Meta Keywords
                  </a>
                  <a class="dropdown-item" href="backup">
                      <i class="fas fa-hdd fa-sm fa-fw mr-2 text-gray-400"></i>
                      Backup
                  </a>
                  <a class="dropdown-item" href="smtp">
                      <i class="fas fa-server fa-sm fa-fw mr-2 text-gray-400"></i>
                      SMTP
                  </a>
                  <a class="dropdown-item" href="settings">
                      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                      Settings
                  </a>
                  <a class="dropdown-item" href="activitylogs">
                      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                      Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                  </a>
              </div>
          </li>

      </ul>

  </nav>
  <!-- End of Topbar -->
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="logout.php">Logout</a>
              </div>
          </div>
      </div>
  </div>
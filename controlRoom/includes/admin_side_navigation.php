<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i> USERS <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="users.php">View all users</a>
                    </li>
                    <li>
                        <a href="users.php?source=add_user">Add Users</a>
                    </li>
                </ul>
            </li>
            <li>
               <a href="javascript:;" data-toggle="collapse" data-target="#orders_dropdown"><i class="fa fa-fw fa-file"></i> JOBS<i class="fa fa-fw fa-caret-down"></i></a>
               <ul id="orders_dropdown" class="collapse">
                   <li>
                       <a href="./jobs.php"> View All Jobs</a>
                   </li>
                   <li>
                       <a href="jobs.php?source=active_jobs">Active Job Positions</a>
                   </li>
               </ul>
             </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-list"></i> JOB APPLICATIONS<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts_dropdown" class="collapse">
                    <li>
                        <a href="products.php">View All Products</a>
                    </li>
                    <li>
                        <a href="products.php?source=add_product">Add Products</a>
                    </li>
                  </ul>
            </li>
              <li>
                  <a href="javascript:;" data-toggle="collapse" data-target="#messages_dropdown"><i class="fa fa-fw fa-envelope"></i> MESSAGES<i class="fa fa-fw fa-caret-down"></i></a>
                  <ul id="messages_dropdown" class="collapse">
                      <li>
                          <a href="./messages.php"> All Messages</a>
                      </li>
                      <li>
                          <a href="messages.php?source=new_messages">New Messages</a>
                      </li>
                  </ul>
           </li>
           <li>
               <a href="javascript:;" data-toggle="collapse" data-target="#companies_dropdown"><i class="fa fa-fw fa-envelope"></i> COMPANIES<i class="fa fa-fw fa-caret-down"></i></a>
               <ul id="companies_dropdown" class="collapse">
                   <li>
                       <a href="./messages.php"> All Messages</a>
                   </li>
                   <li>
                       <a href="messages.php?source=new_messages">New Messages</a>
                   </li>
               </ul>
        </li>
        </ul>
    </div>

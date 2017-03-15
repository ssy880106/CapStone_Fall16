<div class="container-fluid  display-table">
    <div class="row  display-table-row">
        <!--side menu-->
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell  valign-top" id="side-menu">
            <h1 class="hidden-sm hidden-xs"> 
            <?php $id = $_SESSION['admin'];
                $admin = get_img($id);
                foreach($admin as $view){ 
                    if(empty($view['img'])){?>
                        <img class='img-circle' src="img/default.png"
                         alt="default profile"/> 
                    <?php }else{?>
                        <img class='img-circle' src="img/<?php echo $view['img']; ?>"
                         alt="<?php echo $view['img']; ?>"/> 
                    <?php }}?>  
            </h1>                                          
            <ul>
                    
                <li class="link">
                    <a href="dashboard.php">
                        <i class="fa fa-user fa-fw"></i>
                        <span class="hidden-sm hidden-xs">&nbsp; Dashboard</span>
                    </a>
                </li>
                
                <li class="link">
                    <a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
                        <i class="fa fa-user fa-fw"></i>
                        <span class="hidden-sm hidden-xs">&nbsp; List</span>
                    </a>
                    <ul class="collapse collapseable" id="collapse-post">
                        <li><a href="studentList.php">Student</a></li>
                        <li><a href="adminList.php">Admin</a></li>
                    </ul>
                </li> 
                
                <li class="link">
                    <a href="adminEdit.php">
                        <i class="fa fa-cog fa-fw"></i>
                        <span class="hidden-sm hidden-xs">&nbsp; Edit</span>
                    </a>
                </li>
                      
            </ul>
        </div>
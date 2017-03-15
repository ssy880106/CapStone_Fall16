<div class="container-fluid  display-table">
    <div class="row  display-table-row">
        <!--side menu-->
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell  valign-top" id="side-menu">
            <h1 class="hidden-sm hidden-xs"> 
                <?php $id = $_SESSION['student'];
                $student = get_bio($id);
                foreach($student as $view){ 
                    if(empty($view['img'])){?>
                        <img class='img-circle' src="img/default.png"
                         alt="default profile"/> 
                    <?php }else{?>
                        <img class='img-circle' src="img/<?php echo $view['img']; ?>"
                         alt="//<?php echo $view['img']; ?>"/> 
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
                    <a href="resume_view.php">
                        <i class="fa fa-file-o"></i>
                        <span class="hidden-sm hidden-xs">&nbsp; Resume View</span>
                    </a>
                </li>
                
                <li class="link">
                    <a href="resume_edit.php">
                        <i class="fa fa-cog fa-fw"></i>
                        <span class="hidden-sm hidden-xs">&nbsp; Edit</span>
                    </a>
                </li> 
                
                <li class="link">
                    <a href="../pdf/K12toC_BusinessCards.pdf" target="_blank">
                        <i class="fa fa-address-card fa-fw"></i>
                        <span class="hidden-sm hidden-xs">&nbsp; Card</span>
                    </a>
                </li>
                
                <li class="link">
                    <a href="../pdf/K12toC_CSP_starter_kit.pdf" target="_blank">
                        <i class="fa fa-file-pdf-o fa-fw"></i>
                        <span class="hidden-sm hidden-xs">&nbsp; Kit</span>
                    </a>
                </li>
            </ul>
        </div>
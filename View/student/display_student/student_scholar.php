<?php

//retrieve student_id from the studentLogin.php
$id = $_SESSION['student'];
$resume = get_scholarship($id);

foreach ($resume as $sch){ ?>
    <table>
        <tdbody>
            <tr>
                <td><span>Academic: </span></td>
                <td><p><?php echo $sch['academic']; ?><p></td>
            </tr>
            <tr>
                <td><span>Sports: </span></td>
                <td><?php echo $sch['sports']; ?></td>
            </tr>
            <tr>
                <td><span>Art: </span></td>
                <td><?php echo $sch['art']; ?></td>
            </tr>
            <tr>
                <td><span>Others: </span></td>
                <td><?php echo $sch['others']; ?></td>
            </tr>
        </tdbody>
    </table>
<?php }



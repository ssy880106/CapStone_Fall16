<?php

//retrieve student_id from the studentLogin.php
$id = $_SESSION['student'];
$resume = get_info($id);

foreach ($resume as $info){ ?>
    <table>
        <tdbody>
            <tr>
                <td><span>ACT: </span></td>
                <td><p><?php echo $info['act_score']; ?><p></td>
            </tr>
            <tr>
                <td><span>SAT: </span></td>
                <td><?php echo $info['sat_score']; ?></td>
            </tr>
            <tr>
                <td><span>Interests: </span></td>
                <td><?php echo $info['interests']; ?></td>
            </tr>
            <tr>
                <td><span>Work History: </span></td>
                <td><?php echo $info['work_history']; ?></td>
            </tr>
            <tr>
                <td><span>Achievements: </span></td>
                <td><?php echo $info['achievements']; ?></td>
            </tr>
            <tr>
                <td><span>Colleges: </span></td>
                <td><?php echo $info['colleges']; ?></td>
            </tr>
        </tdbody>
    </table>
<?php }

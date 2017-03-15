<?php

//retrieve student_id from the studentLogin.php
$id = $_SESSION['student'];
$resume = get_bio($id);

foreach ($resume as $bio){ ?>
    <table>
        <tdbody>
            <tr>
                <td><span>Name: </span></td>
                <td><p><?php echo $bio['lastName'].', '.$bio['firstName']; ?><p></td>
            </tr>
            <tr>
                <td><span>School: </span></td>
                <td><?php echo $bio['school']; ?></td>
            </tr>
            <tr>
                <td><span>City: </span></td>
                <td><?php echo $bio['city']; ?></td>
            </tr>
            <tr>
                <td><span>State: </span></td>
                <td><?php echo $bio['state']; ?></td>
            </tr>
            <tr>
                <td><span>Graduation Year: </span></td>
                <td><?php echo $bio['year']; ?></td>
            </tr>
        </tdbody>
    </table>
<?php }

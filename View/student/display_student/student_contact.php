<?php

//retrieve student_id from the studentLogin.php
$id = $_SESSION['student'];
//retrieve from resume_function
$contact = get_contact($id);

foreach ($contact as $bio){ ?>
    <table>
        <tdbody>
            <tr>
                <td><span>Email: </span></td>
                <td><p><?php echo $bio['email']; ?><p></td>
            </tr>
            <tr>
                <td><span>Web: </span></td>
                <td><?php echo $bio['website']; ?></td>
            </tr>
            <tr>
                <td><span>Facebook: </span></td>
                <td><?php echo $bio['facebook']; ?></td>
            </tr>
            <tr>
                <td><span>Instagram: </span></td>
                <td><?php echo $bio['instagram']; ?></td>
            </tr>
            <tr>
                <td><span>Twitter: </span></td>
                <td><?php echo $bio['twitter']; ?></td>
            </tr>
            <tr>
                <td><span>Youtube: </span></td>
                <td><?php echo $bio['youtube']; ?></td>
            </tr>
        </tdbody>
    </table>
<?php }
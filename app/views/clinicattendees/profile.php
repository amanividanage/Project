





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style_clinicattendee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title><?php echo SITENAME; ?></title>
</head>

<body>
    <?php require APPROOT . '/views/inc/navbar.php' ; ?>
    <?php require APPROOT . '/views/inc/sidebar_clinicattendee.php' ; ?>
    <div class="content">

        <a href="<?php echo URLROOT; ?>/clinicattendees"><button class="back_btn">Back</button></a>
        <br> <br>
        <div>
            <div>
                <h2 class="content_h1">Clinic Attendee Profile</h2>

                <a href="<?php echo URLROOT; ?>/clinicattendees/request"><button class="req_btn"><b>Request for Re-registration for Maternity Clinics</b></button></a>
                <hr class="line">
            </div>
            <div class="pro_table">
                <table>
                    <tr>
                        <th>Personal Details - Mother
                            <hr>
                        </th>

                        <th></th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?php echo $data['profile']->mname; ?></td>
                    </tr>
                    <tr>
                        <td>NIC No</td>
                        <td><?php echo $data['profile']->nic; ?></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><?php echo $data['profile']->mage; ?></td>
                    </tr>
                    <tr>
                        <td>Gravidity</td>
                        <td><?php echo $data['profile']->gravidity; ?></td>
                    </tr>
                    <tr>
                        <td>Level of Education</td>
                        <td><?php echo $data['profile']->mlevelofeducation; ?></td>
                    </tr>
                    <tr>
                        <td>Occupation</td>
                        <td><?php echo $data['profile']->moccupation; ?></td>
                    </tr>
                    <tr>
                        <td>Contact No</td>
                        <td><?php echo $data['profile']->mcontactno; ?></td>
                        <td colspan=2><a href="<?php echo URLROOT; ?>/clinicattendees/"><button
                                    class="edit_btn"><b>Edit</b></button></a></td>


                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?php echo $data['profile']->address; ?></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><?php echo $data['profile']->memail; ?></td>
                    </tr>
                    <tr>
                        <th>Personal Details - Father
                            <hr>
                        </th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?php echo $data['profile']->hname; ?></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><?php echo $data['profile']->hage; ?></td>
                    </tr>
                    <tr>
                        <td>Level of Education</td>
                        <td><?php echo $data['profile']->hlevelofeducation; ?></td>
                    </tr>
                    <tr>
                        <td>Occupation</td>
                        <td><?php echo $data['profile']->hoccupation; ?></td>
                    </tr>
                    <tr>
                        <td>Contact No</td>
                        <td><?php echo $data['profile']->hcontactno; ?></td>
                        <td colspan=2><a href="<?php echo URLROOT; ?>/clinicattendees/"><button
                                    class="edit_btn"><b>Edit</b></button></a></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><?php echo $data['profile']->hemail; ?></td>
                    </tr>
                    <tr>
                        <th>Other Details
                            <hr>
                        </th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Grama Niladhari Division</td>
                        <td><?php echo $data['profile']->gnd; ?></td>
                    </tr>
                    
                </table>
            </div>
        </div>


        <?php require APPROOT . '/views/inc/footer.php'; ?>
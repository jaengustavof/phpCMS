

<?php

include '../includes/conexion.php';

if(isset($_POST['chgIndex'])){
   if((isset($_POST['changeIndexId'])) &&(!empty($_POST['changeIndexId'])) && (isset($_POST['changeIndexFirstText'])) &&(!empty($_POST['changeIndexFirstText'])) && (isset($_POST['changeIndexH2First'])) &&(!empty($_POST['changeIndexH2First'])) && (isset($_POST['changeIndexH2Second'])) &&(!empty($_POST['changeIndexH2Second'])) && (isset($_POST['changeIndexSectionText'])) &&(!empty($_POST['changeIndexSectionText'])) && (isset($_POST['changeIndexBg'])) &&(!empty($_POST['changeIndexBg']))){

        $id = $_POST['changeIndexId'];
        $firsttext = $_POST['changeIndexFirstText'];
        $h2first = $_POST['changeIndexH2First'];
        $h2second = $_POST['changeIndexH2Second'];
        $text = $_POST['changeIndexSectionText'];
        $bg = $_POST['changeIndexBg'];

        $sqlChgIndex = "UPDATE sectioninicio
                        SET intro_first_text = '".$firsttext."',
                        section_h2_first = '".$h2first."',
                        section_h2_second = '".$h2second."',
                        section_text_p = '".$text."',
                        bg_image = '".$bg."'
                        WHERE id LIKE '".$id."'
                        ";
        $queryChgIndex = mysqli_query($conectar, $sqlChgIndex);
   }
}

$sqlIndexEdit = "SELECT * FROM sectioninicio";
$queryIndexEdit = mysqli_query($conectar, $sqlIndexEdit);
while($rowIndexEdit = mysqli_fetch_assoc($queryIndexEdit)){


    echo '<div class="modal fade" id="modalSectionIndex'.$rowIndexEdit['id'].'" tabindex="-1" role="dialog" aria-labelledby="modalSectionIndex'.$rowIndexEdit['id'].'" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">Change User Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                    <label for="changeId">ID</label>
                    <input type="text" id="changeIndexId" class="form-control changeUser" value="'.$rowIndexEdit['id'].'"  name="changeIndexId" readonly>
                    <br>
                    <label for="changeName">First Text</label>
                    <input type="text" id="changeIndexFirstText" class="form-control changeUser" value="'.$rowIndexEdit['intro_first_text'].'"  name="changeIndexFirstText">
                    <br>
                    <label for="changeLast">H2 First</label>
                    <input type="text" id="changeIndexH2First" class="form-control changeUser" value="'.$rowIndexEdit['section_h2_first'].'" name="changeIndexH2First" require>
                    <br>
                    <label for="changeEmail">H2 Second</label>
                    <input type="text" id="changeIndexH2Second" class="form-control changeUser" value="'.$rowIndexEdit['section_h2_second'].'" name="changeIndexH2Second" require>
                    <br>
                    <label for="changeEmail">Section Text</label>
                    <textarea name="changeIndexSectionText" id="changeIndexSectionText" cols="30" rows="10" class="form-control changeUser" value="'.$rowIndexEdit['section_text_p'].'" require>'.$rowIndexEdit['section_text_p'].' </textarea>
     
                    <br>
                    <label for="changeEmail">Bg Image (CSS)</label>
                    <input type="text" id="changeIndexBg" class="form-control changeUser" value="'.$rowIndexEdit['bg_image'].'" name="changeIndexBg" require>           
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="chgIndex">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>';

    /****Modal Change Index End****/


}

        
?>



<!-- Index Content -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Index Content</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Intro Text</th>
                        <th>Header First</th>
                        <th>Header Second </th>
                        <th>Sectiom Text</th>
                        <th>Bg Image (CSS)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php
                            $sqlIndexEdit = "SELECT * FROM sectioninicio";
                            $queryIndexEdit = mysqli_query($conectar, $sqlIndexEdit);
                            while($rowIndexEdit = mysqli_fetch_assoc($queryIndexEdit)){
                                echo '
                                <tr>
                                <td>'.$rowIndexEdit['id'].'</td>
                                <td>'.$rowIndexEdit['intro_first_text'].'</td>
                                <td>'.$rowIndexEdit['section_h2_first'].'</td>
                                <td>'.$rowIndexEdit['section_h2_second'].'</td>
                                <td>'.$rowIndexEdit['section_text_p'].'</td>
                                <td>'.$rowIndexEdit['bg_image'].'</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#modalSectionIndex'.$rowIndexEdit['id'].'">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                </td>
                                </tr>
                                ';
                            }

                        ?>

                        
                    

                </tbody>
            </table>
        </div>
    </div>
</div>
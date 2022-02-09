<?php

                  
if($_POST){

    /*********************************************/
    /**************** ADD USER *******************/
    /*********************************************/
        if(isset($_POST['addUser'])){
            $nombre = $_POST['firstName'];
            $apellido = $_POST['lastName'];
            $email = $_POST['email'];
            $password = password_hash("pass1234", PASSWORD_DEFAULT);
            $role = $_POST['userRole'];
            if((isset($_POST['firstName']) && !empty($_POST['firstName'])) && (isset($_POST['lastName']) && !empty($_POST['lastName'])) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['userRole']) && !empty($_POST['userRole']))){
                echo '<div class="alert alert-success m-0" role="alert">
                User was added correctly.
                
              </div>';
    
              $sqlAddUser = "
                        INSERT INTO user
                            VALUES (null, '".$nombre."', '".$apellido."', '".$email."', '".$password."', '".$role."');
              ";
              $queryAddUser = mysqli_query($conectar, $sqlAddUser);
    
            }else {
                
                echo '<div class="alert alert-danger m-0" role="alert">
                Please complete all mandatory fields.
                
              </div>
              <script>
              document.addEventListener("DOMContentLoaded", (event) => {
                var nombre = $(".newUserName");
                var inputName = "'.$nombre.'";
                var inputLast = "'.$apellido.'";
                var inputEmail = "'.$email.'";
                var inputRole = "'.$role.'";
                if (inputName == ""){
                    $(nombre[0]).addClass("border-danger");
                }
    
                if(inputLast == ""){
                    $(nombre[1]).addClass("border-danger");
                }
    
                if(inputEmail == ""){
                    $(nombre[2]).addClass("border-danger");
                }
    
                if(inputRole == 0){
    
                    $(nombre[3]).addClass("border-danger");
                }
    
                $(".errorText").text("Please complete mandatory fields.");
              })
                
              </script>';
            }
        }
    
    /*********************************************/
    /************** ADD USER  END ****************/
    /*********************************************/
    
    /*********************************************/
    /*************** CHANGE USER *****************/
    /*********************************************/
    
        if(isset($_POST['chgUser'])){
            if((isset($_POST['changeId'])) &&(!empty($_POST['changeId'])) && (isset($_POST['changeName'])) &&(!empty($_POST['changeName'])) && (isset($_POST['changeLast'])) &&(!empty($_POST['changeLast'])) && (isset($_POST['changeEmail'])) &&(!empty($_POST['changeEmail'])) && (isset($_POST['changeRole'])) &&(!empty($_POST['changeRole'])) ){
    
                $changeId= $_POST['changeId'];
                $changeName = $_POST['changeName'];
                $changeLast = $_POST['changeLast'];
                $changeEmail = $_POST['changeEmail'];
                $changeRole = $_POST['changeRole'];
    
                $sqlChangeUser = "UPDATE user 
                                    SET user_name = '".$changeName."',
                                    user_lastname = '".$changeLast."',
                                    user_email =  '".$changeEmail."',
                                    user_role = '".$changeRole."'
                                    WHERE user_id LIKE '".$changeId."';
                ";
    
                $queryChangeUser = mysqli_query($conectar, $sqlChangeUser);
    
                echo '<div class="alert alert-success m-0" role="alert">
                User information updated.</div>';
    
            }else{
                echo '<div class="alert alert-danger m-0" role="alert">
                Please complete all mandatory fields.
                
              </div>';
            }
    
        }
    
    /*********************************************/
    /************* CHANGE USER END ***************/
    /*********************************************/
    
    /*********************************************/
    /*************** DELETE USER *****************/
    /*********************************************/
    
    if(isset($_POST['dltUser'])){

        $sqlDeleteUser = "
                    DELETE FROM user
                        WHERE user_id LIKE ".$_POST['dltId']."
                        ;";
        $queryDeleteUser = mysqli_query($conectar, $sqlDeleteUser);
    }
    
    /*********************************************/
    /************* DELETE USER END ***************/
    /*********************************************/
    }

    
/****Modal Change User ****/
$userQuery = 'SELECT * FROM user';
$queryUser = mysqli_query($conectar, $userQuery);
while ($rowUser = mysqli_fetch_assoc($queryUser)){
    if($rowUser['user_role'] == 1){
        $role = 'Admin';
    }elseif($rowUser['user_role'] == 2){
    $role = 'Editor';
}

    echo '<div class="modal fade" id="modal'.$rowUser['user_id'].'" tabindex="-1" role="dialog" aria-labelledby="modal'.$rowUser['user_id'].'" aria-hidden="true">
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
                    <input type="text" id="changeUserId" class="form-control changeUser" value="'.$rowUser['user_id'].'"  name="changeId" readonly>
                    <br>
                    <label for="changeName">Name</label>
                    <input type="text" id="changeUserName" class="form-control changeUser" value="'.$rowUser['user_name'].'"  name="changeName" require>
                    <br>
                    <label for="changeLast">Last Name</label>
                    <input type="text" id="changeUserLast" class="form-control changeUser" value="'.$rowUser['user_lastname'].'" name="changeLast" require>
                    <br>
                    <label for="changeEmail">Email</label>
                    <input type="text" id="changeUserEmail" class="form-control changeUser" value="'.$rowUser['user_email'].'" name="changeEmail" require>
                    <br>
                    <label for="userRole">Role</label>
                    <select id="changeUserRole" class="form-control changeUser" value="'.$rowUser['user_role'].'" name="changeRole" require>
                                <option selected value="'.$rowUser['user_role'].'">'.$role.'</option>
                                <option value="1">Admin</option>
                                <option value="2">Editor</option>
                            </select>
                    <br>
                    
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="chgUser">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>';

    /****Modal Change User End****/
    /****Modal Delete User ****/
    echo '<div class="modal fade" id="modalDelete'.$rowUser['user_id'].'" tabindex="-1" role="dialog" aria-labelledby="modalDelete'.$rowUser['user_id'].'" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDelete">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
            <div class="modal-body">
            <label for="changeId">ID</label>
            <input type="text" id="changeDltId" class="form-control changeUser" value="'.$rowUser['user_id'].'"  name="dltId" readonly>
            <br>
            <label for="changeName">Name</label>
            <input type="text" id="changeDltName" class="form-control changeUser" value="'.$rowUser['user_name'].'"  name="dltName" readonly>
            <br>
            <label for="changeLast">Last Name</label>
            <input type="text" id="changeDltLast" class="form-control changeUser" value="'.$rowUser['user_lastname'].'" name="dltLast" readonly>
            <br>
            <label for="changeEmail">Email</label>
            <input type="text" id="changeDltEmail" class="form-control changeUser" value="'.$rowUser['user_email'].'" name="dltEmail" readonly>
            <br>
            <label for="userRole">Role</label>
            <input type="text" id="changeDltEmail" class="form-control changeUser" value="'.$role.'" name="dltRole  " readonly>
            <br>
            
            </div>
            <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" name="dltUser">Delete User</button>
            </div>
        </form>
            </div>
        </div>
    </div>';
        /****Modal Delete User End****/
        }    
?>

<!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Users</h6>

        <a href="#collapseCardExample" class="btn btn-success btn-circle btn-sm collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="collapse" id="collapseCardExample" style="">
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col">
                        <input type="text" id="newUserName" class="form-control newUserName" placeholder="First name" name="firstName" require>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control newUserName" placeholder="Last name" name="lastName" require>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control newUserName" placeholder="Email" name="email" require>
                    </div>
                    <div class="col">
                        <select id="inputRole" class="form-control newUserName" placeholder="Role" name="userRole" require>
                            <option selected value="0">...</option>
                            <option value="1">Admin</option>
                            <option value="2">Editor</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col"><h6 class="text-danger errorText"></h6></div>
                    <div class="col d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" name="addUser">Add User</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email Adress</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    $userQuery = 'SELECT * FROM user';
                    $queryUser = mysqli_query($conectar, $userQuery);
                    while ($rowUser = mysqli_fetch_assoc($queryUser)){
                        if($rowUser['user_role'] == 1){
                            $role = 'Admin';
                        }else {
                            $role = 'Editor';
                        }
                        echo '<tr>
                        <td>'.$rowUser['user_id'].'</td>
                        <td>'.$rowUser['user_name'].'</td>
                        <td>'.$rowUser['user_lastname'].'</td>
                        <td>'.$rowUser['user_email'].'</td>
                        <td>'.$role.'</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#modal'.$rowUser['user_id'].'">
                                <i class="fas fa-pencil-alt"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#modalDelete'.$rowUser['user_id'].'">
                                <i class="fas fa-trash"></i>
                            </button>

                        </td>
                    </tr>';

            
                    }

                ?>



                    
                </tbody>
            </table>
        </div>
    </div>
</div>
                    
<?php
include './components/header.php';
$page_name = "Users | Home";
?>

<link rel="stylesheet" href="./styles/main.css">

<body>

    <div class="container py-3">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card border border-dark">
                    <div class="card-header d-flex justify-content-between align-items-center ">
                        <h1 class="display-5">Users</h1>
                        <a href="./pages/addUser.php" class="btn btn-black h-50 border border-dark">Add User</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered border-dark">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php include "./db/connection.php";
                                $SQL_select_users = "SELECT * FROM users";
                                $RESULT_select_users = mysqli_query($DBconnection, $SQL_select_users);

                                while ($row = mysqli_fetch_assoc($RESULT_select_users)) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['id'] ?></th>
                                        <td><?php echo $row['username'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['password'] ?></td>
                                        <td><?php echo $row['age'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['gender'] ?></td>
                                        <td><?php echo $row['role'] ?></td>
                                        <td>
                                            <a href="" class="btn btn-primary">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                            <a href="" class="btn btn-warning">View</a>
                                        </td>
                                    </tr>

                                <?php }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php './components/footer.php' ?>
</body>

</html>
<?php
$page_name = 'Users | Add User';
include('../components/header.php'); ?>

<link rel="stylesheet" href="../styles/main.css">
<style>
    .form-select option:hover,
    .form-select option:focus {
        background-color: #ff0000 !important;
    }
</style>

<body class="bg-dark">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card border border-dark rounded">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="display-5 ">ADD USER</h3>
                        <a href="../index.php" class="btn btn-black border border-dark">Back</a>
                    </div>
                    <div class="card-body px-5 py-3">
                        <form action="../logic/addUserLogic.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username<span>*</span></label>
                                <input type="text" class="form-control border border-dark" id="username" name="username" aria-describedby="namehelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email<span>*</span></label>
                                <input type="email" class="form-control border border-dark" id="email" name="email" aria-describedby="emailhelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password<span>*</span></label>
                                <input type="password" class="form-control border border-dark" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age<span>*</span></label>
                                <input type="number" class="form-control border border-dark" id="age" name="age" aria-describedby="agehelp" required>
                            </div>

                            <div class="mb-3">
                                <label for="tel" class="form-label">Phone<span>*</span></label>
                                <input type="tel" class="form-control border border-dark" id="tel" name="phone" required>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-4">
                                    <h5>Gender*</h5>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="male" name="gender " value="male" required>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="female" name="gender" value="female" required>
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="other" name="gender" value="other" required>
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <label for="select" class="form-label">Select*</label>
                                    <select class="form-select border border-dark" aria-label="Select" name="role" required>
                                        <option selected disabled>Select position</option>
                                        <option value="1" style="background-color: #161a1d; color: #fff;" ;>Manager</option>
                                        <option value=" 2" style="background-color: #161a1d; color: #fff;" onmouseover="this.style.backgroundColor='#161a1d';" onmouseout="this.style.backgroundColor='#f00';">Developer</option>
                                        <option value="3" style="background-color: #161a1d; color: #fff;" onmouseover="this.style.backgroundColor='#161a1d';" onmouseout="this.style.backgroundColor='#f00';">CEO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-dark">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    session_start();

    include_once "../class/User.php";

    $user = new User;
    $user_details

    $user_list = $user->getUserDetails($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- FONT AWSOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Profile</title>
</head>
<body>
    <nav class="nanbar navbar-expand-lg navbar-dark bg-dark">
        <a href="dashbord.php" class="navbar-brand ms-3">
            <h1 class="h5">The Company</h1>
        </a>

        <div class="ms-auto">
            <ul class="navbae-nav me-3">
                <li class="nav-item">
                    <a href="profile.php" class="nav-link">
                        <?= $SESSION['username'];?>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link text-danger">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container mt-5">
            <div class="card w-25 mx-auto border-8">
                <?php
                    if(empty($user_detail['photo'])){
                ?>
                        <i class="fa-solid fa-image-portratit fa-10x text-center"></i>
                        <?php
                    }else{
                ?>
                        <img src="../assets/images/<?= $user_details['photo']?>" alt="<?= $user_details['photo']?>" class="card-img-top">
                <?php
                    }
                ?>
                <div class="card-body">
                    <form action="../actions/profile-action.php" method="post" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <div class="col">
                                <label for="photo" class="form-label">Choose your Photo:</label>
                                <input type="file" name="photo" id="photo" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary w-100">Upload</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
                
                <div class="card-footer bg-dark text-white">
                    <h1 class="display-5 fw-bold"><?= $user_details['firstname'] . " " . $user_details[]?>NAME</h1>
                    <h2 class="display-5">USERNAME</h2>
                </div>



            </div>
        </div>

    </main>
    
    </body>
</html>

    
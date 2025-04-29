<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>

    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <?php include 'partials/nav.php';?>
            <!-- Header-->
            <header class="py-5 bg-light">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start ">
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">About Me</span></h1>
                                <p class="lead fw-light mb-4 ">My name is <span class="fw-bold">Yeremias Agung Aldyansa.</span></p>
                                <p class="text-muted ">I'm a undergraduate
                                    Computer Science student in Binus University. As a
                                    Computer Science student, I am deeply passionate
                                    about software development, mobile technology,
                                    and tackling complex problems with creative
                                    solutions. My academic journey has provided me
                                    with a strong foundation in programming and
                                    algorithms, as well as practical experience in
                                    developing both mobile applications and interactive
                                    solutions</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.php">Resume</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects.php">Projects</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div>
                                    <img class="profile-img" src="assets/profile.jpeg" alt="..." />
                                    <div class="dots-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
 <!--Skill Section-->
 <section id="skills" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4"><span class ="text-gradient d-inline">My Skills</span></h2>
      <div class="row" id ="skills-container">
</div>

    </div>
  </section>
        </main>
        <?php include 'partials/footer.php'; ?>
</html>

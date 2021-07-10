<!-- Start Footer -->
<footer class="container-fluid bg-dark text-center p-2">
          <small class="text-white">Copyright &copy 2021 || Designed By E-learning || <a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a></small>
          <!-- Admin Login-->
      <!-- Start Admin Login Modal -->
        <!-- Modal -->
        <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <!-- End Admin Login Form -->
                    <form id="adminLoginForm">
                        <div class="form-group">
                        <div class="form-group">
                            <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
                            <input type="email" class="form-control" name="adminLogemail" id="adminLogemail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
                            <input type="password" class="form-control" name="adminLogpass" id="adminLogpass" placeholder="Password">
                        </div>
                      </form>
                      <!-- End Admin Login Form -->
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="adminLginBtn">Login</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
                </div>
                </div>
            </div>
      <!-- End Admin Login Modal -->
      <!-- End Admin Login -->
      </footer>
      <!-- End Footer -->

      
      
      <!-- Start Student Registration Modal -->
        <!-- Modal -->
        <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <!-- End Student Registration Form -->
                    <form>
                        <div class="form-group">
                          <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
                          <input type="text" class="form-control" name="stuname" id="stuname" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-envelope"></i><label for="stumail" class="pl-2 font-weight-bold">Email</label>
                            <input type="email" class="form-control" name="stumail" id="stumail" placeholder="Email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                            <input type="password" class="form-control" name="stupass" id="stupass" placeholder="Password">
                        </div>
                      </form>
                      <!-- End Student Registration Form -->
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Sign Up</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
                </div>
            </div>
      <!-- End Student Registration Modal -->

      <!-- Login -->
      <!-- Start Student Login Modal -->
        <!-- Modal -->
        <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="stuLoginModalCenterLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <!-- End Student Login Form -->
                    <form id="stuLoginForm">
                        <div class="form-group">
                        <div class="form-group">
                            <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
                            <input type="email" class="form-control" name="stuLogemail" id="stuLogemail" placeholder="Email">
                          </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                          <input type="password" class="form-control" name="stuLogpass" id="stuLogpass" placeholder="Password">
                        </div>
                      </form>
                      <!-- End Student Login Form -->
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="stuLginBtn">Login</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
                </div>
                </div>
            </div>
      <!-- End Student Login Modal -->
      <!-- End Login -->

      

    <!-- Jquery and Bootstrap JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Font Awesome JavaScript -->
    <script src="js/all.min.js"></script>

    <!-- Student Testimonial Owl Slider JS -->
    <script type="text/javascript" src="js/owl.min.js"></script>
    <script type="text/javascript" src="js/testyslider.js"></script>
</body>

</html>
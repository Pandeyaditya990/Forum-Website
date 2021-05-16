
<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupmodalLabel">Singup to iDiscuss </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="_handlesignup.php" method="post">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
             <!-- <input type="emial" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">-->
               <input type="text" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
      
          </div>
          <div class="mb-3">
            <label for="password"  class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="mb-3">
            <label for="confirmPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
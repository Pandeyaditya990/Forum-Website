<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodalLabel">Login to iDiscuss</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/forum prog/partial/_handleLogin.php" method="post">
        <div class="modal-body">
          <div class="mb-3">
            <label for="login" class="form-label">Username</label>
            <input type="text" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="loginPassword" name="loginPassword">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
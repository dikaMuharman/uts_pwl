<div class="bg-light d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow" style="width: 25rem; border: none">
    <div class="card-body">
      <h3>Login</h3>
      <form action="controllers/memberController.php" class="d-flex flex-column" method="POST">
        <div class="form-floating mb-3">
          <input
            type="text"
            class="form-control "
            id="floatingInput"
            placeholder="username"
            name="username"
            required
          />
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
            name="password"
            required
          />
          <label for="floatingPassword">Password</label>
        </div>
        <input type="submit" value="Login" name="login" class="btn btn-primary mt-4" />
      </form>
    </div>
  </div>
</div>

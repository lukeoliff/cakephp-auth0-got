<script>
  var lock = new Auth0Lock('cBhao0PqyJYQWSRD865qSaCEUDnZqgYf', 'unicoder.auth0.com', {
    auth: {
      redirectUrl: 'http://localhost:8765/users/login',
      responseType: 'code',
      params: {
        scope: 'openid email' // Learn about scopes: https://auth0.com/docs/scopes
      }
    }
  });
</script>
<button onclick="lock.show();">Login</button>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">List of Game of Thrones Characters</div>
                  <?php if($loggedIn): ?>
                    <br />
                    <?= $this->Html->link('Logout', '/users/logout', ['class' => 'btn btn-danger']); ?>

                    <hr />

                    <table class="table">
                          <tr>
                              <th>Character</th>
                              <th>Real Name</th>
                          </tr>
                          <?php foreach($characters as $key => $value): ?>
                            <tr>
                              <td><?= $key ?></td><td><?= $value ?></td>
                            </tr>
                          <?php endforeach; ?>
                    </table>
                  <?php else: ?>
                    <br />
                    <div align="center">
                      <h5> You need to login to have access to this list <?= $this->Html->link('Login', '/users/login', ['class' => 'btn btn-info']); ?> </h5>
                    </div>
                  <?php endif; ?>
            </div>

        </div>
    </div>
</div>


<!-- Conteúdo da página -->
<div class="container">
  <h1 class="mt-2">Lista de Usuários</h1>
  <hr>

  <a href="<?= base_url() . "?c=usuario&m=add" ?>" class="btn btn-success">Inserir Usuário</a>

  <table class="table table-hover">
      <thead>
          <tr>
              <th>Login</th>
              <th>Ações</th>
          </tr>
      </thead>
      <tbody>
          <?php foreach($usuarios as $usuario):?>
          <tr>
              <td><?= $usuario['login'] ?></td>
              <td>
                  <a href=<?= base_url() . "?c=usuario&m=excluir&id=" . $usuario['idusuario']?> 

                  class="btn btn-danger" title="Excluir">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>

                  <a href=<?= base_url() . "?c=usuario&m=editar&id=" . $usuario['idusuario']?> 
                   class="btn btn-primary" title="Editar">
                      <i class="fa-solid fa-pencil"></i>
                    </a>
              </td>
          </tr>

          <?php endforeach;?>
      </tbody>
  </table>
</div>
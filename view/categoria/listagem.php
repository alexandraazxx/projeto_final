<!-- Conteúdo da página -->
<div class="container">
  <h1 class="mt-2">Lista de Categorias</h1>
  <hr>

  <table class="table table-hover">
      <thead>
          <tr>
              <th>Nome</th>
              <th>Ações</th>
          </tr>
      </thead>
      <tbody>
          <?php foreach($categorias as $categoria):?>
          <tr>
              <td><?= $categoria['nome'] ?></td>
              <td>
                  <a href=<?= $base_url . "?c=categoria&m=excluir&id=" . $categoria['id']?> 

                  class="btn btn-danger" title="Excluir">;
                      <i class="fa-solid fa-trash-can"></i>
                    </a>

                  <a href="" class="btn btn-primary" title="Editar">
                      <i class="fa-solid fa-pencil"></i>
                    </a>
              </td>
          </tr>

          <?php endforeach;?>
      </tbody>
  </table>
</div>
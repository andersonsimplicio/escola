<section class="fundotable">
          <table class="highlight centered">
            <thead >
              <tr style="background: #3D3C83">
                <th colspan=6 style="text-align:center;">Lista de Alunos para Alteração</th>
              </tr>
              <tr style="background:#833C83">
                   <th>Marcar</th>
                  <th>Nome</th>
                  <th>Cidade</th>
                  <th>Telefone</th>
                  <th>genero</th>
                  <th>email</th>
              </tr>
            </thead>
    
            <tbody>
            <?php 
                require_once('dao/AlunoDao.php');
                $alunos = new AlunoDao($_SESSION['usuario'],$_SESSION["passwd"]);
                $arr = $alunos->listarAluno();
              ?>
            <?php foreach ($arr as &$aluno): ?>
                          <tr>
                              <td>
                                <form action="index.php?link=6" method="POST">
                                  <input type="hidden" name="id_alu" value="<?php echo $aluno['id_alu'] ?>">
                                  <button class="waves-effect waves-light red lighten-2 btn" type="submit">Alterar</button>
                                </form>
                              </td>
                              <td><?php print_r($aluno['nome_alu']." ".$aluno['id_alu']);; ?> </td>
                              <td><?php print_r($aluno['cidade_alu']);; ?> </td>
                              <td><?php print_r($aluno['tel_alu']);; ?> </td>
                              <td><?php print_r($aluno['genero_al']);; ?> </td>
                              <td><?php print_r($aluno['email_alu']);; ?> </td>
                          </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

      </section>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
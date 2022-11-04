<?php 
require_once('dao/AlunoDao.php');
require_once('dao/classes/Aluno.php');

$id = $_POST['id_alu'];
$alunos = new AlunoDao($_SESSION['usuario'],$_SESSION["passwd"]);
$a;
foreach($alunos-> listarAluno() as $aluno){
  if($aluno['id_alu']==$id){
   $al = $aluno;
  }
}


?>
<h4 style="color:aliceblue;">Alterar dados Aluno</h4> 
          <section class="col s6">
            <form action="#" method="POST">                    
                <input type="text" placeholder="Nome" required name="nome" value="<?php echo $al['nome_alu'] ?>">   
                <input type="email" placeholder="Email" required name="email" value="<?php echo $al['email_alu'] ?>">
                <input type="tel" placeholder="Telefone" pattern="^(?\d{2}\d{4}[-\s]\d{4}.*?$)" required name="telefone" value="<?php echo $al['tel_alu'] ?>">               
                <h6 style="color:aliceblue;">Genero</h6>
                <label>
                  <?php 
                  if($aluno['genero_al']=='masculino' || $aluno['genero_al']=='Masculino' ){
                      echo "<input name='genero'  type='radio' checked/>";
                  }else{
                      echo "<input name='genero' type='radio' />";
                  }
                  ?>
                  <span>Masculino</span>
                </label>                
                <label>
                <?php 
                  if($aluno['genero_al']=='feminino' || $aluno['genero_al']=='Feminino'){
                      echo "<input name='genero'  type='radio' checked/>";
                  }else{
                      echo "<input name='genero' type='radio' />";
                  }
                  ?>
                  <span>Feminino</span>
                </label>
                <div class="endereco">
                    <div class="cidade">
                      <input type="text" placeholder="cidade" required name="cidade" value="<?php echo $al['cidade_alu'] ?>">
                    </div>
                </div>
                </div>
              <button class="waves-effect waves-light red lighten-2 btn" type="submit">cadastrar</button>
            </form>
          </section>
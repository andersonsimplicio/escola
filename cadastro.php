<h4 style="color:aliceblue;">Cadastro de Aluno</h4> 
          <section class="col s6">
            <form action="cadastro_aluno.php" method="POST">                    
                <input type="text" placeholder="Nome" required name="nome">   
                <input type="email" placeholder="Email" required name="email">
                <input type="tel" placeholder="(xx)xxxx-xxxx" pattern="^(?\d{2}\d{4}[-\s]\d{4}.*?$)" required name="telefone">               
                <h6 style="color:aliceblue;">Genero</h6>
                <label>
                  <input name="genero"  type="radio" checked/>
                  <span>Masculino</span>
                </label>                
                <label>
                  <input name="genero"  type="radio" />
                  <span>Feminino</span>
                </label>
                <div class="endereco">
                    <div class="cidade">
                      <input type="text" placeholder="cidade" required name="cidade">
                    </div>
                </div>
                </div>
              <button class="waves-effect waves-light red lighten-2 btn" type="submit">cadastrar</button>
            </form>
          </section>
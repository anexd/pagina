
        <section id="corpo">
            <article id="noticiaprincipal">
                <header id="cabecalho-artigo"></header>
                <hgroup>

                    <h1>Formulário de Contato</h1>
                    <h2></h2>
                    <h3 class="direita"></h3>

                </hgroup>
                </header>

                <form method="post" id="tcontato" action="mailto:contato@cursosemvideo.com" oninput="calc_total();">
                    <fieldset id="usuario">
                        <legend>Identificação do Usuário</legend>
                        <p><label for="cnome"> Nome:</label> <input type="text" name="tnome" id="cnome" size="20" maxlength="3" placeholder="Nome Completo"></p>
                        <p> Senha:<input type="password" name="tsenha" id="csenha" size="8" maxlength="8" placeholder="8 digitos"></p>
                        <p> E-mail:<input type="email" name="temail" id="cemail" size="20" maxlength="40"></p>
                        <fieldset id="sexo">
                            <legend>Sexo:</legend>
                            <input type="radio" name="tsexo" id="cmas"><label for="cmas"> Masculino</label> <br/>
                            <input type="radio" name="tsexo" id="cfemi"> <label for="cfemi"> Feminino</label><br/>
                        </fieldset>
                        <p>Data de Nascimento:<input type="date" name="tnasc" id="cnasc"></p>
                    </fieldset>
                    <fieldset id="endereco">
                        <legend>Endereço do Usuário</legend>
                        <p><label for="crua">Logradouro:</label> <input type="text" name="trua" id="crua" size="13" maxlength="80" placeholder="Rua,Av,Trav..."></p>
                        <p><label for="cnum"> Número:</label> <input type="number" name="tnum" id="cnum" min="0" max="9999"></p>

                        <p><label for="tEst" id="cEst">  Estado:</label>
                            <select name="tEst" id="cEst">
                    <OPTGROUP label="Estados">
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="SP">São paulo</option>
                        <option value="AM">Amazonas</option>
                        <option value="PA">Pará</option>
                    </OPTGROUP>
                </select>
                        </p>


                        <p><label for="ccid">  Cidade:</label>
                            <input type="text" name="tcidada" id="ccid" maxlength="40" size="20" placeholder="Sua cidade">
                        </p>
                    </fieldset>
                    <fieldset id="mensagem">
                        <legend>Mensagem do Usuário</legend>

                        <p><label for="cmensagem"> Mensagem:</label>
                            <textarea name="tmensagem" id="cmensagem" cols="35" rows="5" placeholder="Deixe sua mensagem"></textarea>
                        </p>
                    </fieldset>

                    <input type="image" name="tEnviar" src="_imagens/botao-enviar.png">








                </form>
            </article>
        </section>
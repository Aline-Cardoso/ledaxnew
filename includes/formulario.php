       <form role="form" method="post">
        <div class="row">
            <?php /*Campo Nome*/?>
            <div class="form-group col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="nome" name="nome" value="<?php echo isset($_POST['nome']) && !empty($_POST['nome']) ? $_POST['nome'] : '';?>" required />
                </div>
            </div>

            <?php /*Campos Telefone e E-mail*/?>
            <div class="form-group col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Telefone" aria-label="Telefone" aria-describedby="telefone" name="telefone" value="<?php echo isset($_POST['telefone']) && !empty($_POST['telefone']) ? $_POST['telefone'] : '';?>" required />
                </div>
            </div>
            <div class="form-group col-md-8">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="email" name="email" value="<?php echo isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '';?>" required />
                </div>
            </div>

            <?php /*Campos Cidade e Estado*/?>
            <div class="form-group col-md-9">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cidade" aria-label="Cidade" aria-describedby="cidade" name="cidade" value="<?php echo isset($_POST['cidade']) && !empty($_POST['cidade']) ? $_POST['cidade'] : '';?>" required />
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Estado" aria-label="Estado" aria-describedby="estado" name="estado" value="<?php echo isset($_POST['estado']) && !empty($_POST['estado']) ? $_POST['estado'] : '';?>" required />
                </div>
            </div>

            <?php /*Campo Mensagem*/?>
            <div class="form-group col-md-12">
                <div class="input-group">
                    <textarea class="form-control" rows="6" aria-label="Mensagem" name="mensagem" required><?php echo isset($_POST['mensagem']) && !empty($_POST['mensagem']) ? $_POST['mensagem'] : '';?></textarea>
                </div>
            </div>

            <?php /*Campos Captcha e Enviar*/?>
            <div class="form-group col-md-12" style="line-height: 78px">
                <div class="h-captcha" data-sitekey="<?=$sitekey?>"></div>
            </div>
            <div class="form-group col-md-12" style="line-height: 78px">
                <button type="submit" name="submit" value="submit" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 "><i class="fa fa-paper-plane"></i> Enviar</button>
            </div>
        </div>

        <?php if(isset($_POST['submit'])){ require_once('php/cadastro-form.php'); } ?>

    </form> 

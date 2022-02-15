<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastrar produtos</h2>

    <form method="post">

        <div class="form-group">
            <label>titulo produto</label>
            <input type="text" class="form-control" name='titulo' placeholder="Nome do produto">
        </div>
        
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name='descricao' placeholder="Descrição do produto" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked> Disponivel
                    </label>
                </div>
    
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n"> Indisponivel
                    </label>
                </div>
            </div>
        </div>
        
        <div class="form-group mt-3">
    	    <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>


</main>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<style>
    a {
        float: right;
    }
        h2 {
            text-align: center;
        }
        .card {
            float: left;
            margin: 10px;
            width: 300px;
        }

        #carrinho-principal {
            position: fixed;
            right: 10px;
            bottom: 10px;
        }

        .up,
        .down {
            cursor: pointer;
        }
    </style>
    <div class="container">
    <h2 class="text-center">Doces do SENAI</h2>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include("conectar.php");
    $sql = "select * from produto";
    $resultado = conectar($sql);
    
    $i = 0;
    while ($linha = $resultado->fetch_assoc()) {
        $nome = $linha['nome'];
        $valor = $linha['valor'];
        $imagem = $linha['imagem'];
        $id = $linha['id'];
    ?>

    <div class="card">
        <img class="card-img-top" src="<?php echo $imagem; ?>" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title"><?php echo $nome; ?></h4>
            <p class="card-text">R$<?php echo $valor; ?>
                <a href="#" class="btn btn-outline-info" onclick="addItem(<?php echo $i; ?>)">🛒</a>
            </p>
        </div>
    </div>
    <?php
        $i++;
    }
    ?>
</div>
<a href="#" id="carrinho-principal" class="btn btn-primary btn-lg"
 onclick="carrinho()" data-bs-toggle="modal" data-bs-target="#myModal">SEUS PEDIDOS ESTÃO AQUI!🛒</a>

<!-- o modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Produtos para Encomendar.</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- modal body -->
            <div class="modal-body" id="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th class="col-1">Valor</th>
                            <th class="col-1">Quantidade</th>
                        </tr>
                    </thead>
                    <tbody id="tb-corpo">
                    </tbody>
                </table>
            </div>

            <!-- modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="enviarEncomenda()">Enviar Encomenda</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<script>
        lsCarrinho = [];
        valorEncomenda = 0;
        function addItem(i) {
            if (lsCarrinho[i] != true) {
                lsCarrinho[i] = true;
                document.getElementsByClassName("btn")[i].classList.remove("btn-outline-info");
                document.getElementsByClassName("btn")[i].classList.add("btn-info");
            } else {
                lsCarrinho[i] = false;
                document.getElementsByClassName("btn")[i].classList.remove("btn-info");
                document.getElementsByClassName("btn")[i].classList.add("btn-outline-info");
            }
        }
        lsProduto = [];
        function carrinho() {
            valorEncomenda = 0;
            lsProduto = [];
            for (const i in lsCarrinho) {
                if (lsCarrinho[i]) {
                    p = {};
                    console.log(i);
                    p.id = i;
                    p.nome = document.getElementsByClassName("card-title")[i].innerHTML;
                    p.valor = document.getElementsByClassName("card-text")[i].innerHTML;
                    n = p.valor.indexOf("<");
                    p.valor = p.valor.substring(2, n);
                    p.valor = p.valor.replace(",", ".")
                    p.quantidade = 1;
                    console.log(p);
                    lsProduto.push(p);
                }
            }

            tbCorpo = "";
            for (const i in lsProduto) {
                p = lsProduto[i];
                p.valorUnitario = p.valor;
                tbCorpo += `
                <tr>
                    <td>${p.nome}</td>
                    <td class="valor">${p.valor}</td>
                    <td>
                        <span class="up" onclick="mudarQt(${i},1)">🔼</span>
                        <span class="qt">${p.quantidade}</span>
                        <span class="down" onclick="mudarQt(${i},-1)">🔽</span>
                    </td>
                </tr>
                `;
                valorEncomenda += Number(p.valor);
            }
            tbCorpo += `<tr>
                            <td>Valor da Encomenda</td>
                            <td colspan="2" id="vlEncomenda">${valorEncomenda}</td>
                        </tr>`;
            document.getElementById("tb-corpo").innerHTML = tbCorpo;
        }
        function mudarQt(i, qt) {
            console.log(i);
            console.log(qt);
            p = lsProduto[i];
            p.quantidade += qt;
            if (p.quantidade <= 0) {
                addItem(p.id);
                document.getElementsByTagName("tr")[i + 1].style.display = "none";
                p.valor = 0;
                atualizaValorEncomenda();
                return;
            }
            p.valor = p.quantidade * p.valorUnitario;
            document.getElementsByClassName("qt")[i].innerHTML = p.quantidade;
            document.getElementsByClassName("valor")[i].innerHTML = p.valor;
            atualizaValorEncomenda()
        }
        function atualizaValorEncomenda() {
            valorEncomenda = 0;
            for (p of lsProduto) {
                valorEncomenda += Number(p.valor);
            }
            document.getElementById("vlEncomenda").innerHTML = valorEncomenda;
        }

        function enviarEncomenda() {
            fone = "5561985962338";
            if(valorEncomenda <= 0){
                alert("A encomenda deve ter ao menos 1 produto.");
                return;
            }

            msg = "Gostaria de fazer a seguinte encomenda: \n";
            for (p of lsProduto) {
                if(p.quantidade > 0){
                    msg += `${p.nome} Qt. ${p.quantidade} = ${p.valor} \n`;
                }
            }
            msg += `Valor da Encomenda = ${valorEncomenda}`;
            msg = encodeURI(msg);
            url = `https://api.whatsapp.com/send?phone=${fone}&text=${msg}`;

            window.open(url,'_blank');
        }
    </script>

</body>

</html>
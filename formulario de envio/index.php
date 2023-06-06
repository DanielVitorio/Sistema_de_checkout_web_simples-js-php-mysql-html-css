<?php 


if(isset($_POST['comprar']))
{

 //print_r($_POST['nome']);
 //print_r($_POST['email']);
 //print_r($_POST['cpf']);
 //print_r($_POST['telefone']);
 //print_r($_POST['cidade']);
 //print_r($_POST['cep']);
 //print_r($_POST['estado']);
//print_r($_POST['bairro']);
 //print_r($_POST['logadouro']);
 //print_r($_POST['quantidade']);


  // Verifica se o campo 'comprar' está definido
  $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
  $cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_NUMBER_INT);
  $telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_NUMBER_INT);
  $cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_SPECIAL_CHARS);
  $cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_NUMBER_INT); 
  $estado = filter_input(INPUT_POST,'estado',FILTER_SANITIZE_SPECIAL_CHARS);
  $bairro = filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_SPECIAL_CHARS);
  $logadouro = filter_input(INPUT_POST,'logadouro',FILTER_SANITIZE_SPECIAL_CHARS);
  $complemento = filter_input(INPUT_POST,'complemento',FILTER_SANITIZE_SPECIAL_CHARS);
  $numero = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_NUMBER_INT);
  $data = date('d/m/Y');
  $hora = date('H:i');
  $quantidade = filter_input(INPUT_POST,'quantidade',FILTER_SANITIZE_NUMBER_INT);


  

if ((isset($_POST['comprar'])) && ($nome == "")) {
    echo '<style>
    #nome{
        border-color:red;
    }

    .spannome{
        display:block !important;
    }

    
    </style>';

}

elseif ((isset($_POST['comprar'])) && ($email == "")) {
    echo '<style>
    #email{
        border-color:red;
    }

    .spanemail{
        display:block !important;
    }

    
    </style>';

}

elseif ((isset($_POST['comprar'])) && ($cpf == "")) {
    echo '<style>
    #cpf{
        border-color:red;
    }

    .spancpf{
        display:block !important;
    }

    
    </style>';

}

elseif ((isset($_POST['comprar'])) && ($telefone == "")) {
    echo '<style>
    #telefone{
        border-color:red;
    }

    .spantelefone{
        display:block !important;
    }

    
    </style>';

}

elseif ((isset($_POST['comprar'])) && ($cidade == "")) {
    echo '<style>
    #cidade{
        border-color:red;
    }

    .spancidade{
        display:block !important;
    }

    
    </style>';

}

elseif ((isset($_POST['comprar'])) && ($estado == "")) {
    echo '<style>
    #estado{
        border-color:red;
    }

    .spanestado{
        display:block !important;
    }

    
    </style>';

}

elseif ((isset($_POST['comprar'])) && ($bairro == "")) {
    echo '<style>
    #bairro{
        border-color:red;
    }

    .spanbairro{
        display:block !important;
    }

    
    </style>';

    

}

elseif ((isset($_POST['comprar'])) && ($logadouro == "")) {
    echo '<style>
    #logadouro{
        border-color:red;
    }

    .spanrua{
        display:block !important;
    }

    
    </style>';

}

elseif ((isset($_POST['comprar'])) && ($numero == "")) {
    echo '<style>
    #numero{
        border-color:red;
    }

    .spannumero{
        display:block !important;
    }

    
    </style>';

}

else{

    include_once('config.php');
    $result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,cpf,telefone,cidade,cep,estado,bairro,logadouro,numero,complemento,dia,horas,quantidade) 
    VALUES('$nome','$email','$cpf','$telefone','$cidade','$cep','$estado','$bairro','$logadouro','$numero','$complemento','$data','$hora','$quantidade')");


    if ($quantidade == 1) {

        //onde esta escrito 'link' voce deve mudar para o link que deseja enviar o cliente ao cliente escolher a quantidade
    echo "<script type='text/javascript'>window.open('link', '_self');</script>";
    }

    if ($quantidade == 2) {
    echo "<script type='text/javascript'>window.open('link', '_self');</script>";
    }

    if ($quantidade == 3) {
    echo "<script type='text/javascript'>window.open('link', '_self');</script>";
    }

    if ($quantidade == 4) {
    echo "<script type='text/javascript'>window.open('link', '_self');</script>";
    }

    if ($quantidade == 5) {
    echo "<script type='text/javascript'>window.open('link', '_self');</script>";
    }

    if ($quantidade == 6) {
    echo "<script type='text/javascript'>window.open('link', '_self');</script>";
    }

    if ($quantidade == 7) {
    echo "<script type='text/javascript'>window.open('link', '_self');</script>";
    }

    if ($quantidade == 8) {
    echo "<script type='text/javascript'>window.open('link', '_self');</script>";
    }

    if ($quantidade == 9) {
    echo "<script type='text/javascript'>window.open('link', '_self');</script>";
   }

   if ($quantidade == 10) {
    echo "<script type='text/javascript'>window.open('link', '_self');</script>";
   }

}}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="favicon.ico" type="image/ico">
  <title>Stack - Envio</title>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="neon.css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" >Stack</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="https://stack.link">Voltar</a>
          </li>
        </ul>
        <!--onde esta escrito seu numero deverá ser apagado até o ponto de interrogação e colocado o seu numero com 55 e ddd-->
        <a class="btn navbar-btn mx-2 btn-primary shadowed" target="_blank" href="https://wa.me/seunumero?text=Ol%C3%A1,%20preciso%20de%20ajuda!">Fale com a gente</a>
      </div>
    </div>
  </nav>

  
  <!-- Cover -->
  <div class="section-fade-out pt-5" style="background-image: url(&quot;imagem5.jpg&quot;); background-position: bottom;">

  </div>



  <!-- Article style section -->
      <script type="text/javascript">


        function mascara(telefone){ 
            if(telefone.value.length == 0){
                telefone.value = '(' + telefone.value;
                }//quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
            if(telefone.value.length == 3){
                telefone.value = telefone.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
            }
            if(telefone.value.length == 10){
                telefone.value = telefone.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
        }}

        
             function Numcpf(input) {
            // Verifica se o CPF possui 11 dígitos
             if (input.value.length === 10) {
             // Adiciona pontuação ao CPF
              input.value = input.value.slice(0, 3) + "." + input.value.slice(3, 6) + "." + input.value.slice(6, 9) + "-" + input.value.slice(9);
  }
}
            //preenchimento cep

            function buscacep() {

                const txtcep = document.getElementById('CEP').value
                const labelcep = document.getElementById('labelcep')
                if (txtcep !== "") {
                    labelcep.style = "top:-20px ; font-size: 12px ; color:  rgb(82 255 105) ;"
                }else{
                    labelcep.style ="position: absolute; top:0px; left:0px; pointer-events: none; transition: .2s;"
                }
                
                let cep = document.getElementById('CEP').value;
                if (cep !== "") {
                    let url = "https://brasilapi.com.br/api/cep/v1/" + cep;
                    let req = new XMLHttpRequest();
                    req.open("GET", url);
                    req.send();

                    //tratar a resposta da requisição
                    req.onload = function(){
                        if (req.status === 200) {
                            let endereco = JSON.parse(req.response);
                            
                            
                            document.getElementById("cidade").value = endereco.city
                            document.getElementById("estado").value = endereco.state

                            document.getElementById('CEP').style = "border-color:white !important;"
                            document.getElementById('cepspan').style = "display: none;"

                            var rua = document.getElementById("logadouro").value
                        
                        if (typeof endereco.street == "undefined"){
                            document.getElementById("logadouro").value = ""
                            }else{
                                document.getElementById("logadouro").value = endereco.street
                            }


                        if (typeof endereco.neighborhood == "undefined"){
                            document.getElementById("bairro").value = ""
                            }else{
                                document.getElementById("bairro").value = endereco.neighborhood
                            }


                        }else{
                            document.getElementById('CEP').style = "border-color:red !important;"
                            document.getElementById('cepspan').style = "display: block;"
                            cepspan = document.getElementById('cepspan')
                        } 
 

                    }
                }
            }
            window.onload = function() {
                let txtcep = document.getElementById('CEP');
                txtcep.addEventListener("blur", buscacep)
            }
            
            //obrigatoriedade inputs
            function styleSpanNome(){
               const txtnome = document.getElementById('nome').value
               const labelnome = document.getElementById('labelnome')
                if (txtnome !== "") {
                    labelnome.style = "top:-20px ; font-size: 12px ; color:  rgb(82 255 105) ;"
                }else{
                    labelnome.style ="position: absolute; top:0px; left:0px; pointer-events: none; transition: .2s;"
                }
            }//nome

            function styleSpanEmail(){
               const txtnome = document.getElementById('email').value
               const labelnome = document.getElementById('labelemail')
                if (txtnome !== "") {
                    labelnome.style = "top:-20px ; font-size: 12px ; color:  rgb(82 255 105) ;"
                }else{
                    labelnome.style ="position: absolute; top:0px; left:0px; pointer-events: none; transition: .2s;"
                }
            }//email

            function styleSpanCPf(){
               const txtcpf = document.getElementById('cpf').value
               const labelcpf = document.getElementById('labelcpf')
                if (txtcpf !== "") {
                    labelcpf.style = "top:-20px ; font-size: 12px ; color:  rgb(82 255 105) ;"
                }else{
                    labelcpf.style ="position: absolute; top:0px; left:0px; pointer-events: none; transition: .2s;"
                }
            }//cpf



    </script>
    

    <div class="box">
        <form action="index.php" method="POST"> 
            <fieldset>
                <legend><b>Endereço de Envio</b>
                <br>
                <span><select name="quantidade" id="quant_produto">
                    <option value="1">1 unidade</option>
                    <option value="2">2 unidades</option>  
                    <option value="3">3 unidades</option>  
                    <option value="4">4 unidades</option>  
                    <option value="5">5 unidades</option>  
                    <option value="6">6 unidades</option>  
                    <option value="7">7 unidades</option>  
                    <option value="8">8 unidades</option>  
                    <option value="9">9 unidades</option>  
                    <option value="10">10 unidades</option>     
                </select></span>
                <br>
                <span style="font-size:50%; text-align:right;" >Segurança certificada</span>
                <svg class="icon-shield-bpp" width="13" height="14" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.640015 3.0649C0.640015 6.71094 1.94452 9.03851 4.54271 9.96529L4.64001 10L4.73732 9.96529C7.33551 9.03851 8.64001 6.71094 8.64001 3.0649V2.73563H8.33232C7.17893 2.73563 6.01526 2.21963 4.83635 1.17412L4.64001 1L4.44368 1.17412C3.26477 2.21963 2.1011 2.73563 0.947707 2.73563H0.640015V3.0649Z" stroke="#00A650"></path><path d="M3.118 5.2201L2.64001 5.6522L4.14767 7L6.64001 4.39759L6.12631 4L4.10919 6.1062L3.118 5.2201Z" fill="#00A650"></path></svg>
                </legend>
            
                <br>
                <div class="inputbox">
                     <input required class="inputclass" type="text" onblur="styleSpanNome()" name="nome" id="nome" pattern="[A-Za-zÀ-Úà-ú\s]+" title="𝐃𝐢𝐠𝐢𝐭𝐞 𝐬𝐞𝐮 𝐧𝐨𝐦𝐞 𝐜𝐨𝐦𝐩𝐥𝐞𝐭𝐨.⚠️">
                     <label id="labelnome" class="labelinput" for="nome">Nome completo<b style="opacity: .5; color:red;">*</b></label>
                     <span class="spannome">Digite seu nome e sobrenome</span>
                </div>

                <br>
                <div class="inputbox">
                    <input required class="inputclass" onblur="styleSpanEmail()" type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="𝙋𝙧𝙚𝙚𝙣𝙘𝙝𝙖 𝙘𝙤𝙢 𝙪𝙢 𝙚-𝙢𝙖𝙞𝙡 𝙫𝙖𝙡𝙞𝙙𝙤.⚠️">
                    <label id="labelemail" class="labelinput" for="email">E-mail<b style="opacity: .5; color:red;">*</b></label>
                    <span class="spanemail">Digite um email válido</span>
                </div>
                <br>
                <div class="inputbox">
                    <input required class="inputclass" onblur="styleSpanCpf()" type="text" name="cpf" onkeypress="Numcpf(this)"  maxlength="14" id="cpf" pattern=".{11,}" title="𝙋𝙤𝙧 𝙛𝙖𝙫𝙤𝙧, 𝙙𝙞𝙜𝙞𝙩𝙚 𝙪𝙢 𝘾𝙋𝙁 𝙫𝙖𝙡𝙞𝙙𝙤.⚠️">
                    <label id="labelcpf" class="labelinput"  for="cpf">Número de CPF<b style="opacity: .5; color:red;">*</b></label>
                    <span class="spancpf">digite um cpf válido</span>
                </div>
                <br>
                <div class="inputbox">
                    <input required class="inputclass" type="text" maxlength="15" onkeypress="mascara(this)" name="telefone" id="telefone">
                    <label class="labelinput" for="telefone" >DDD e Telefone<b style="opacity: .5; color:red;">*</b></label>
                    <span class="spantelefone">Digite deu numero com o ddd</span>
                </div>
                <br>
                <div class="inputbox">
                    <input required class="inputclass" type="text" maxlength="8" name="cep" id="CEP" pattern="[0-9]{8,}" title="𝘿𝙞𝙜𝙞𝙩𝙚 𝙪𝙢 𝘾𝙀𝙋 𝙫𝙖𝙡𝙞𝙙𝙤⚠️">
                    <label id="labelcep" class="labelinput" for="CEP">CEP<b style="opacity: .5; color:red;">* </b><span style="opacity: .5;"><b>Sem traços e pontos</b></span></label>
                    <span id="cepspan">CEP inválido</span>
                </div>
                <br>
                <div class="inputbox">
                    <input required class="inputclass" title="Digite sua cidade" type="text" name="cidade" id="cidade">
                    <label class="labelinput" for="cidade">Cidade<b style="opacity: .5; color:red;">*</b></label>
                    <span class="spancidade">Digite sua cidade</span>
                </div>
                <br>
                <div class="inputbox">
                <input required class="inputclass" title="Digite seu estado" type="text" name="estado" id="estado">
                <label class="labelinput" for="estado">Estado<b style="opacity: .5; color:red;">*</b></label>
                <span class="spanestado">Digite seu estado</span>
                </div>

                    <br>
                    <div class="inputbox">
                        <input required title="Digite seu bairro" class="inputclass" type="text" name="bairro" id="bairro">
                        <label class="labelinput" for="bairro">Bairro<b style="opacity: .5; color:red;">*</b></label>
                        <span class="spanbairro">Digite seu bairro</span>
                    </div>
                    <br>
                    <div class="inputbox">
                        <input required class="inputclass" title="Digite sua rua/avenida" type="text" name="logadouro" id="logadouro">
                        <label class="labelinput" for="logadouro">Logadouro<b style="opacity: .5; color:red;">*</b> <span style="opacity: .5;">Rua/avenida</span></label>
                        <span class="spanrua">Digite sua rua/avenida</span>
                    </div>
                    <br>
                    <div class="inputbox">
                        <input required class="inputclass" title="Digite seu número" type="text" name="numero" id="numero">
                        <label class="labelinput" for="numero">Número<b style="opacity: .5; color:red;">*</b></label>
                        <span class="spannumero">digite seu numero</span>
                    </div>
                    <br>
                    <div class="inputbox">
                        <input class="inputclass" title="O complemento é opcional" type="text" name="complemento" id="complemento">
                        <label class="labelinput" for="complemento">Complemento <span style="opacity: .5;">/ opcional</span></label>
                    </div>
                    <span title='Ao clicar em "Próximo" você será redirecionado para a plataforma de pagamento (Mercado Pago)' id="aviso">Não coloque dados de cartão nesse formulário⚠️</span>
                    <br>
                    <br>
                    <input  type="submit"  name="comprar" title="Ao clicar você será redirecionado para o Mercado Pago" id="submit" value="Próximo" >
            </fieldset>
        </form>
        <div class="Copyright">
        <span>©Copyright 2022 - Todos os direitos reservados</span>
        <br>
        <span>Email - seu@email.com</span>
        <br>
        <span>CNPJ - 00000000000000/00000</span>
    </div>
    </div>


    <style>

        .box{
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            position: absolute;
            background-color: #303030;
            padding: 15px !important;
            box-shadow: 0 0 10px rgb(82 255 105);
            color: white !important;
        }

        fieldset{
            border: none;
        }
        
        legend{
            font-size: 21pt;
            padding: 10px;
            border-bottom: 2px white;
            text-align: left;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #quant_produto{
         font-size:15px;
         outline:none;
         color:#37a73b;
         background-color: #303030;
        }

        .inputbox{
            position: relative;
            margin-left: 2%;
        }

        input:-webkit-autofill {
            -webkit-box-shadow:0 0 0 50px #303030 inset; /* aqui muda sua cor do fundo */
            -webkit-text-fill-color: white; /* Cor do texto */
}

        input[type="text"],input[type="tel"]{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size:20px;
            width: 98%;
            letter-spacing: 2px;
        }

        #cepspan{
            color:red;
            display:none;
        }

        .labelinput{
            position: absolute;
            top:0px;
            left:0px;
            pointer-events: none;
            transition: .2s;
        }

        input[type="text"]:focus ~ .labelinput{
            top:-20px ;
            font-size: 12px ;
            color:  rgb(82 255 105) ;
        }

        input[type="text"]:valid ~ .labelinput{
            top:-20px ;
            font-size: 12px ;
            color:  rgb(82 255 105) ;
        }
        #submit{
            background-color: #f1cd31;
            width: 20% ;
            padding: 10px ;
            font-size: 11pt ;
            cursor: pointer ;
            border-radius: 10px ;
            border: none ;
            margin-left: 75%;
            margin-bottom: 10px;

        }

        #submit:hover{
         background-color:  #caad2a;
        }

        .spannome{
            color:red;
            display:none;
        }

        
        .spanemail{
            color:red;
            display:none;
        }

        
        .spancpf{
            color:red;
            display:none;
        }

        
        .spantelefone{
            color:red;
            display:none;
        }

        
        .spancidade{
            color:red;
            display:none;
        }

        
        .spanestado{
            color:red;
            display:none;
        }

        
        .spanbairro{
            color:red;
            display:none;
        }

        
        .spanrua{
            color:red;
            display:none;
        }

        .spannumero{
            color:red;
            display:none;
        }

        .Copyright{
            font-size: 12px;
            text-align:center;
            width:100%;
            height:15vh;
            position: absolute;
            bottom:-20vh;
            background-color: #3030;
        }

        #aviso{
            color:rgb(255,255,255, 0.6);
            font-size:12px;
            margin-left: 2%;
        }


        @media screen and (max-width: 600px ) {
            #submit{
                width:100% ;
                margin-left: 0;
            }

        #aviso{
            text-align:left;
            color:rgb(255,255,255, 0.6);
            font-size:12px;

        }

        .box{
            width: 85%;
            margin-left: 7.5%;
        }
    }
    </style>



  
  
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
</body>

</html>
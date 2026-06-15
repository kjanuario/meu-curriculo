<?php
$nome = "Kaio Duarte Januário";
$numero = "+55 (27) 9 9244-8718";
$profissao = "Desenvolvedor Web";
$email = "kaioduarte1528@gmail.com";
$linkedin = "linkedin.com/in/kaio-duarte";
$git = "github.com/kjanuario";
$local = "Espirito Santo, Brasil";
$liguagens = [
    "HTML5",
    "CSS3",
    "JavaSript",
    "PHP",
    "Java",
    "SQL/PL-SQL",
    "Terminal",
];
$ferramentas = [
    "VSCode",
    "Oracle SQL Developer",
    "JasperSoft",
    "iReport",
    "Sankhya",
];
$idiomas = [
    "Português (Brasil)",
    "Inglês",
    "Espanhol",
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Currículo online - Kaio Duarte Januário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        a{
            color: inherit;
            text-decoration: none;
        }
        ul{
            list-style: none;
        }
    </style>
</head>
    <body>

        <div class="container">
            <header class="topo">
                <!-- Informações pessoais -->
                <div class="info_pessoais">
                    <div class="sobre_mim">
                        <span>
                            <p>Busco uma experiência profissinal na área de TI. Sou um desenvolvedor full stack e sempre estou disposto a aprender uma nova linguagem de programação!</p>
                        </span>
                    </div>
                    <div class="info_imagem">
                        <h1><?= $nome ?></h1>
                        <h2><?= $profissao ?></h2>
                        <img src="imagens/foto.jpg" alt="Foto de Perfil" class="foto-perfil">
                    </div>
                    <div class="info_contatos">
                        <ul> 
                            <li>
                                <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <span class="contatos"><?= $numero ?></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                <span class="contatos"><?= $email ?></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
                                <a href="https://www.linkedin.com/in/kaio-duarte" target="_blank"><span class="contatos"><?= $linkedin ?></span></a>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-github" aria-hidden="true"></i></span>
                                <a href="https://github.com/kjanuario" target="_blank"><span class="contatos"><?= $git ?></span></a>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <span class="contatos"><?= $local ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>

            <aside class="esquerda">
                <!-- Tecnologias e habilidades -->
                 <div class="info_habilidades">
                    <div class="info_linguagens">
                        <h3>Linguagens</h3>
                        <ul>
                            <li>
                                <span class="linguagens"><?= $liguagens[0] ?></span>
                                <span class="percent">
                                    <div style="width: 40%;"></div>
                                </span>
                            </li>
                            <li>
                                <span class="linguagens"><?= $liguagens[1] ?></span>
                                <span class="percent">
                                    <div style="width: 20%;"></div>
                                </span>
                            </li>
                            <li>
                                <span class="linguagens"><?= $liguagens[2] ?></span>
                                <span class="percent">
                                    <div style="width: 30%;"></div>
                                </span>
                            </li>
                            <li>
                                <span class="linguagens"><?= $liguagens[3] ?></span>
                                <span class="percent">
                                    <div style="width: 10%;"></div>
                                </span>
                            </li>
                            <li>
                                <span class="linguagens"><?= $liguagens[4] ?></span>
                                <span class="percent">
                                    <div style="width: 10%;"></div>
                                </span>
                            </li>
                            <li>
                                <span class="linguagens"><?= $liguagens[5] ?></span>
                                <span class="percent">
                                    <div style="width: 60%;"></div>
                                </span>
                            </li>
                            <li>
                                <span class="linguagens"><?= $liguagens[6] ?></span>
                                <span class="percent">
                                    <div style="width: 30%;"></div>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="info_ferramentas">
                        <h3>Ferramentas</h3>
                        <ul>
                            <li>
                                <span class="ferramentas"><?= $ferramentas[0] ?></span>
                            </li>
                            <li>
                                <span class="ferramentas"><?= $ferramentas[1] ?></span>
                            </li>
                            <li>
                                <span class="ferramentas"><?= $ferramentas[2] ?></span>
                            </li>
                            <li>
                                <span class="ferramentas"><?= $ferramentas[3] ?></span>
                            </li>
                            <li>
                                <span class="ferramentas"><?= $ferramentas[4] ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="info_idiomas">
                        <h3>Idiomas</h3>
                        <ul>
                            <li>
                                <span class="idiomas"><?= $idiomas[0] ?></span>
                                <span class="percent">
                                    <div style="width: 100%;"></div>
                                </span>
                            </li>
                            <li>
                                <span class="idiomas"><?= $idiomas[1] ?></span>
                                <span class="percent">
                                    <div style="width: 40%;"></div>
                                </span>
                            </li>
                            <li>
                                <span class="idiomas"><?= $idiomas[2] ?></span>
                                <span class="percent">
                                    <div style="width: 20%;"></div>
                                </span>
                            </li>
                        </ul>
                    </div>
                 </div>
            </aside>

            <main class="direita">
                <!-- Experiências e Projetos / Formação Acadêmica -->
                <div class="info_sobre">
                    <div class="info_formacao">
                        <h3 class="titulo">Formações e cursos</h3>
                        <ul>
                            <li>
                                <h5>2026 - 2028</h5>
                                <h4>Análise e Desenvolvimento de Sistemas</h4>
                                <h4>Faculdade Estácio</h4>
                            </li>
                            <li>
                                <h5>2026</h5>
                                <h4>Curso de SQL</h4>
                                <h4>Alura</h4>
                            </li>
                            <li>
                                <h5>2026</h5>
                                <h4>Curso de HTML5, CSS3 e JavaScript</h4>
                                <h4>Alura</h4>
                            </li>
                            <li>
                                <h5>2026</h5>
                                <h4>Curso de Java</h4>
                                <h4>Alura</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="info_experiencias">
                        <h2 class="titulo">Experiência</h2>
                        <div class="box">
                            <div class="empresa">
                                <h5>2025 - Atual</h5>
                                <h5>Eurotextil</h5>
                            </div>
                            <div class="cargo">
                                <h4>Auxiliar de Desenvolvimento de Sistemas</h4>
                                <p>
                                    Minha principal função é realizar a triagem das requisições feitas sobre suporte, dúvidas, personalizações e permissionamento.
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="empresa">
                                <h5>2022 - 2025</h5>
                                <h5>Eurotextil</h5>
                            </div>
                            <div class="cargo">
                                <h4>Auxiliar de Operações</h4>
                                <p>
                                    Minha principal função era não deixar com que o fluxo de separação de pedidos parassem, auxiliando os separadores com as informações contidas no sistema.   
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="empresa">
                                <h5>2020 - 2021</h5>
                                <h5>Padaria Alice</h5>
                            </div>
                            <div class="cargo">
                                <h4>Ajudante de Padeiro</h4>
                                <p>
                                    Minha função girava em torno de ajudar a preparar os pães, controlar a temperatura do forno e limpar os equipamentos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script src="script.js"></script>
    </body>
</html>
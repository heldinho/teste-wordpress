<?php get_header(); ?>

<div class="container">
  <h2>Clickable Dropdown</h2>
  <p>Click on the button to open the dropdown menu.</p>
  <div class="dropdown2">
    <button onclick="myFunction2()" class="dropbtn2">Menu Teste</button>
    <div id="myDropdown2" class="dropdown2-content">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </div>
  </div>
</div>

<div id="introducao" class="container">
  <h2>Introdução</h2>
  <div class="col-6">
    <h3>O que é PHP?</h3>
    <p>PHP significa: Hypertext Preprocessor. Realmente, o produto foi originalmente
    chamado de “Personal Home Page Tools”; mas como se expandiu em escopo, um nome
    novo e mais apropriado foi escolhido por votação da comunidade. Você pode utilizar
    qualquer extensão que desejar para designar um arquivo PHP, mas os recomendados foram
    .php ,  .phtml. O PHP está atualmente na versão 4, chamado de PHP4 ou, simplesmente de 
    PHP. 
    PHP é uma linguagem de criação de scripts embutida em HTML no servidor. Os
    produtos patenteados nesse nicho do mercado são as Active Server Pages da Microsoft, o
    Coldfusion da Allaire e as Java Server Pages da Sun. PHP é às vezes chamado de “o ASP
    de código-fonte aberto” porque sua funcionabilidade é tão semelhante ao produto/conceito,
    ou o que quer que seja, da Microsoft.
     Exploraremos a criação de script no servidor, mais profundamente, nos próximos
    capítulos, mas, no momento, você pode pensar no PHP como uma coleção de supertags de
    HTML que permitem adicionar funções do servidor às suas páginas da Web. Por exemplo,
    você pode utilizar PHP para montar instantaneamente uma complexa página da Web ou
    desencadear um programa que automaticamente execute o débito no cartão de crédito
    quando um cliente realizar uma compra.</p>
  </div>
  <div class="col-6">
    <h3>O que é PHP?</h3>
    <p>PHP significa: Hypertext Preprocessor. Realmente, o produto foi originalmente
    chamado de “Personal Home Page Tools”; mas como se expandiu em escopo, um nome
    novo e mais apropriado foi escolhido por votação da comunidade. Você pode utilizar
    qualquer extensão que desejar para designar um arquivo PHP, mas os recomendados foram
    .php ,  .phtml. O PHP está atualmente na versão 4, chamado de PHP4 ou, simplesmente de 
    PHP. 
    PHP é uma linguagem de criação de scripts embutida em HTML no servidor. Os
    produtos patenteados nesse nicho do mercado são as Active Server Pages da Microsoft, o
    Coldfusion da Allaire e as Java Server Pages da Sun. PHP é às vezes chamado de “o ASP
    de código-fonte aberto” porque sua funcionabilidade é tão semelhante ao produto/conceito,
    ou o que quer que seja, da Microsoft.
     Exploraremos a criação de script no servidor, mais profundamente, nos próximos
    capítulos, mas, no momento, você pode pensar no PHP como uma coleção de supertags de
    HTML que permitem adicionar funções do servidor às suas páginas da Web. Por exemplo,
    você pode utilizar PHP para montar instantaneamente uma complexa página da Web ou
    desencadear um programa que automaticamente execute o débito no cartão de crédito
    quando um cliente realizar uma compra.</p>
  </div>
</div>

<div id="historia" class="container">
  <div class="col-12">
    <h2>História do PHP</h2>
    <p>Rasmus Lerdorf – engenheiro de software, membro da equipe Apache e o homem
    misterioso do ano – é o criador e a força motriz original por trás do PHP. A primeira parte
    do PHP foi desenvolvida para utilização pessoal no final de 1994. Tratava-se de um
    wrapper de PerlCGI que o auxiliava a monitorar as pessoas que acessavam o seu site
    pessoal. No ano seguinte, ele montou um pacote chamado de Personal Home Page Tools
    (também conhecido como PHP Construction Kit) em resposta à demanda de usuários que
    por acaso ou por relatos falados depararam-se com o seu trabalho. A versão 2 foi logo
    lançada sob o título de PHP/FI e incluía o Form Interpreter, uma ferramenta para analisar
    sintaticamente consultas de SQL.
     Em meados de 1997, o PHP estava sendo utilizado mundialmente em
    aproximadamente 50.000 sites. Obviamente estava se tornando muito grande para uma
    única pessoa administrar, mesmo para alguém concentrado e cheio de energia como
    Rasmus. Agora uma pequena equipe central de desenvolvimento mantinha o projeto sobre
    o modelo de “junta benevolente” do código-fonte aberto, com contribuições de
    desenvolvedores e usuários em todo o mundo. Zeev Suraski e Andi Gutmans, dois
    programadores israelenses que desenvolveram os analisadores de sintaxe PHP3 e PHP4,
    também generalizaram e estenderam seus trabalhos sob a rubrica de Zend.com (Zeev, Andi,
    Zend, entendeu?).
     O quarto trimestre de 1998 iniciou um período de crescimento explosivo para o
    PHP, quando todas as tecnologias de código-fonte aberto ganharam uma publicidade
    intensa. Em outubro de 1998, de acordo com a melhor suposição, mais de 100.000
    domínios únicos utilizavam PHP de alguma maneira. Um ano depois, o PHP quebrou a
    marca de um milhão de domínios. Enquanto escrevo esta apostila, o número explodiu para
    cerca de dois milhões de domínios.</p>
  </div>
</div>

<div id="sobre" class="container">
  <h2>Sobre</h2>
  <div class="col-4">
    <h3>Serialize</h3>
    <p>Gera uma apresentação armazenável de um valor
    String serialize(mixed valor);</p>
  </div>
  <div class="col-4">
    <h3>Sleep</h3>
    <p>Atrasa a execução por um tempo determinado (em segundos)
    Void sleep(int num_segundos)</p>
  </div>
  <div class="col-4">
    <h3>Unpack</h3>
    <p>Descompacta dados numa string binária 
    Array unpack(string formato, string data);</p>
  </div>
</div>

<div id="contato" class="container">
  <h2>Contato</h2>
  <div class="col-6">
    <div class="container">
      <input type="text" name="nome" class="form-group form-control input-sm" placeholder="Nome">
      <input type="text" name="telefone" class="form-group form-control input-sm" placeholder="Telefone">
      <textarea class="form-group form-control input-sm" placeholder="Mensagem"></textarea>
      <button class="btn btn-primary btn-sm form-group">Enviar</button>
    </div>
  </div>
  <div class="col-6">
    <div class="container">
        <p><h3>Telefone:</h3> 11 7070-7070</p>
        <p><h3>Endereço:</h3> Rua Teste de contato</p>
        <p><h3>E-mail:</h3> contato@site.com</p>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo home_url(); ?>/wp-content/themes/teste-psd/js/script.js"></script>

</body>
</html>
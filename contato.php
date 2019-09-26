<!-- Requisitando Cabeçalho da Pagina -->
<?php require_once 'Template/Header.php'; ?>
<!-- Section Min-Header -->
<section class="min-hader">
    <div class="min-banner"></div>
    <div class="min-nav-bar">
        <div class="container">
            <p>Contatos</p>
            <nav>
                <li><a href="index.php">Home</a></li> > 
                <li>Contatos</li>
            </nav>
        </div>
    </div>
</section>
<!-- Área Contato -->
<section class="description-contact">
    <div class="conatainer">
       <article>
           <p>
                Orçamentos, Projetos e Instalações em Vidro e Alumínio
           </p>
           <p>
                 Fale Conosco (00) 0000-0000 / (00) 0000-0000
           </p>
       </article>
    </div>
</section>
<!-- Section Area Form Contato -->
<section class="form-contact">
    <div class="container">
        <section class="form">
            <p>Envie-nos sua solicitação, teremos grande prazer em atendê-lo.</p>
            <form action="" method="post">
               <input type="text" name="" id="" class="name" placeholder="Name">
               <input type="email" name="" id="" class="email" placeholder="E-mail">
               <input type="tel" name="" id="" class="tel" placeholder="DDD + Telefone">
               <input type="text" name="" id="" class="assunto" placeholder="Assunto">
               <textarea name="" id="" cols="30" rows="10" placeholder="Menssagem"></textarea>
               <input type="submit" value="Enviar Menssagem">
           </form>
        </section>
        <section class="location-map">
           <p>Localização</p>
          
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15483.983626954529!2d-39.439997082329704!3d-14.018256874048987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x73f2ee4691bd5cb%3A0xfd96c064df10229d!2sItamaraty%2C%20Ibirapitanga%20-%20BA%2C%2045500-971!5e0!3m2!1spt-BR!2sbr!4v1567501594474!5m2!1spt-BR!2sbr" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </section>
    </div>
</section>
<!-- Requisitando Roda-pé da Pagina -->
<?php require_once 'Template/Footer.php'; ?>
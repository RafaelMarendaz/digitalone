<html>
<head>
    <meta charset="utf-8">
    <title>Rafael A. Marendaz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <img src="img/foto.jpeg" alt="Foto pessoal" width="10%" class="foto">
    <h1 id="title">Rafael A. Marendaz</h1>
</header>
    <section>
        <header>
            <h2 class="subtitle">Posts</h2>
        </header>
        <article class="post">
            <header>
                <h3 class="posttype">Post #1</h3>
                <img src="img/htmlcode.jpeg" width="275" height="183" class="postimage">
            </header>
            <p class="postcontent">
                Lorem ipsum dolor sit amet, <a href="https://www.lipsum.com" target="_blank">consectetur adipiscing elit.</a> Cras sed fermentum nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris sit amet justo consectetur, dictum justo sit amet, gravida lectus. Nullam laoreet, nunc a porta pellentesque, ante ante iaculis ipsum, vitae vestibulum nisi dolor vitae leo. Etiam mollis volutpat ex, nec fringilla elit aliquet nec. Aliquam quis risus in lacus aliquam aliquam. Aliquam lobortis condimentum metus. Ut condimentum lacinia blandit. Sed eget condimentum lorem. Nam ac consectetur urna. Nunc scelerisque urna eu dolor dignissim, ac sollicitudin ligula accumsan. Integer lobortis et ipsum nec faucibus. Pellentesque ullamcorper aliquet ipsum vitae congue.
            </p>
        </article>
    </section>
<?php
//for ( $i = 0 ; $i < 11 ; $i++) {
//    print ("Linha número " . $i*9 . "<br />");
//}
$categorias = [];
$categorias[] = 'infantl';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
print_r($categorias);

$nome = 'Eduardo';
$idade = 17;
//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome. " compete na categoria infantil";
    }
}
else if ($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome. " compete na categoria adolescente";
    }
}
else if ($idade >= 19 && $idade <= 64){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome. " compete na categoria adulto";
    }
}
else {
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'idoso')
            echo "O nadador ".$nome. " compete na categoria idoso";
    }
}
?>
teste


<footer>
    <ul class="contactlist">
        <li>
            <h2>Contato</h2> </br>
        </li>
        <li>
            <a href="mailto:rafael.marendaz@gmail.com" target="_blank">Clique e me envie um email</a> <br>
        </li>
        <li>
            <a href="https://www.linkedin.com/in/rafael-andrade-037773189/" target="_blank">Linkedin</a>
        </li>
        </li>
    </ul>
</footer>
</body>
</html>
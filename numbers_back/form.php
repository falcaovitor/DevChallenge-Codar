<html>
    <title>Enviando</title>
<body>
    <?php
        $servidor="localhost";
        $usuario= "root";
        $senha= "";
        $banco="numbers";
        $conexao=mysqli_connect($servidor, $usuario, $senha, $banco) or die("banco de dados não encontrado");
    ?>
    <?php
        $telephone=$_POST['telephone'];
        $inserir=mysqli_query($conexao, "INSERT INTO usuario(telephone) values('$telephone')");
        echo "<script>alert('Enviando com sucesso')</script>";
        echo "<script>location.href='../index.html'</script>";
    ?>
</body>
</html>
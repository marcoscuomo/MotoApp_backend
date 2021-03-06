/* ini_set('display_errors', 1); */

include '../apl/AplMoto.php';
include '../domain/Moto.php';


$dados = isset($_POST['metodo']) ? $_POST : $_GET;

if( strcasecmp( $dados['metodo'], 'get-motos' ) == 0 ){
    sleep(2);
    $motosJson = AplMoto::getMotosComoJson();
    echo $motosJson;
}

else if( strcasecmp( $dados['metodo'], 'update-favorito-moto' ) == 0 ){
    $moto = new Moto();
    $moto->setId( $dados['id'] );
    $moto->setEhFavorito( $dados['eh-favorito'] );

    $motoJson = AplMoto::updateFavoritoMoto( $moto );
    echo $motoJson;
}
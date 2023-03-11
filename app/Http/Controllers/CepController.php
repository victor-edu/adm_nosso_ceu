    <?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class CepController extends Controller
    {
        public function buscar($cep){
            $url = "https://viacep.com.br/ws/{$cep}/json/unicode/";
            dd($url);
            $json = file_get_contents($url);
            return response()->json(json_decode($json));
        }
    }

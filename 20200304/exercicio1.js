function confere(nome, email, sexo, data){
    $i=0;
    if(nome == ''){
        $alert[$i]="nome";
        $i++;

    }
    if(email == ''){
        $alert[$i]="email";
        $i++;
    }
    if(sexo == ''){
        $alert[$i]="sexo";
        $i++;
    }
    if(data == ''){
        $alert[$i]="data";
        $i++;
    }
    if($i<4){
        vazio();
    }else{
        cheio();
    }
}
function vazio(){
    mensagem = "Informe os valores: '"+valor+"' \n";
    for($j=0;$j<4;$j++){
        valor[$j] = $alert[$j];
    }
    alert(mensagem);
}


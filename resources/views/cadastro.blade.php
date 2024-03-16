<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
.divPrincipal{
        background-color: #DAF7FF;
        width: 600px;
        height: 400px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: start;
    }

    .img_logo{
        width: 100px;
        height: 100px;
    }
    h4{
        font-size: 16px;
        font-family: 'Times New Roman', Times, serif;
        color: #432075;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 60px;
    }
    form{
        text-align: left;
        position: absolute;
        top: 100px;
  
  
    }
    form span {
        display: block; 
        margin-bottom: 10px;
    }
    
    form input {
        width: 100%; 
        margin-bottom: 10px;
    }


    </style>

</head>
<body>
    <div class="divPrincipal">
        <img src="{{asset('logo2.png')}}" alt="logo" class="img_logo">
        <h4>Cadastro</h4>
        <form action="">
            <span>Nome completo:</span>
            <input type="text" name="name" id="name">
            <span>CPF:</span>
            <input type="text" name="name" id="name">
            <span>Email:</span>
            <input type="text" name="name" id="name">
        </form>
    </div>
</body>
</html>

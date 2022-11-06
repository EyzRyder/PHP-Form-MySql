<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/user.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style type="text/css">
        #survey-form fieldset:not(:first-of-type) {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">Formulário</h1>
            <p id="description" class="description text-center">
                Um Formulário simples
            </p>
        </header>
        <form id="survey-form" novalidate action="action.php" method="POST">
            <fieldset>
                <div class="form-group">
                    <label id="name-label" for="name">Nome</label>
                    <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Digite seu nome" required />
                </div>
                <div class="form-group">
                    <label id="lastName-label" for="lastName">Sobrenome</label>
                    <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Digite seu Sobrenome" required />
                </div>
                <div class="form-group">
                    <label id="email-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu Email" required />
                </div>
                <div class="form-group">
                    <p>Gênero</p>
                    <label>
                        <input name="gender" value="m" type="radio" class="input-radio" checked />Masculino</label>
                    <label>
                        <input name="gender" value="f" type="radio" class="input-radio" />Feminino</label>

                    <label><input name="gender" value="o" type="radio" class="input-radio" />Outro</label>
                </div>


                    <button type="button" id="next" name="next" class="next submit-button" value="Next">
                        Proximo
                    </button>
                
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <p>Qual opção melhor descreve sua função atual?</p>
                    <select id="dropdown" name="role" class="form-control" required>
                        <option disabled selected="selected" value=" ">Selecione a função atual</option>
                        <option value="Estudante">Estudante</option>
                        <option value="Trabalho em tempo integral">Trabalho em tempo integral</option>
                        <option value="Aprendiz em tempo integral">Aprendiz em tempo integral</option>
                        <option value="Prefiro não dizer">Prefiro não dizer</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>

                <div class="form-group">
                    <p>
                        O que você mais gosta de programar?
                    </p>
                    <select id="most-like" name="mostLike" class="form-control" required>
                        <option disabled selected value>Selecione uma opção</option>
                        <option value="frontEnd">Front-end</option>
                        <option value="backend">Back-end</option>
                        <option value="fullstack">Fullstack</option>
                    </select>
                </div>

                <div class="form-group">
                    <p>
                        Quais linguagem de programação sabe?
                        <span class="clue">(Check all that apply)</span>
                    </p>

                    <label><input name="prefer" value="HTML" type="checkbox" class="input-checkbox" />HTML</label>
                    <label><input name="prefer" value="css" type="checkbox" class="input-checkbox" />CSS</label>
                    <label><input name="prefer" value="Java Script" type="checkbox" class="input-checkbox" />Java
                        Script</label>
                    <label><input name="prefer" value="Java" type="checkbox" class="input-checkbox" />Java</label>
                    <label><input name="prefer" value="csharp" type="checkbox" class="input-checkbox" />C#</label>
                    <label><input name="prefer" value="python" type="checkbox" class="input-checkbox" />Python</label>
                    <label><input name="prefer" value="go" type="checkbox" class="input-checkbox" />Go</label>
                    <label><input name="prefer" value="ruby" type="checkbox" class="input-checkbox" />Ruby</label>
                    <label><input name="prefer" value="cplus" type="checkbox" class="input-checkbox" />C++</label>
                    <label><input name="prefer" value="swift" type="checkbox" class="input-checkbox" />Swift</label>
                    <label><input name="prefer" value="c" type="checkbox" class="input-checkbox" />C</label>
                </div>


                    <button type="button" id="prev" name="prev" class="prev submit-button" value="Prev">
                        Voltar
                    </button>
                    <br />
                    <button type="button" id="next" name="next" class="next submit-button" value="Next">
                        Proximo
                    </button>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <p>Está gostando do formulário?</p>
                    <label>
                        <input name="user-recommend" value="Gostei" type="radio" class="input-radio" checked />Sim</label>
                    <label>
                        <input name="user-recommend" value="MaisOuMenos" type="radio" class="input-radio" />Mais ou menos</label>

                    <label><input name="user-recommend" value="NumGostei" type="radio" class="input-radio" />Não
                        muito</label>
                </div>

                <div class="form-group">
                    <p>Tem algum comentário?</p>
                    <textarea id="comments" class="input-textarea" name="comment" placeholder="Digite aqui seu comentário..."></textarea>
                </div>


                    <button type="button" name="prev" id="prev" class="prev submit-button" value="Prev">
                        Voltar
                    </button>

                    <br />
                    <button type="submit" name="submit" id="submit" class="submit-button" value="Submit">
                        Submit
                    </button>
            </fieldset>
        </form>
    </div>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        var current = 1,
            current_step, next_step, steps;
        steps = $("fieldset").length;
        $(".next").click(function() {
            current_step = $(this).parent();
            next_step = $(this).parent().next();
            next_step.show();
            current_step.hide();;
        });
        $(".prev").click(function() {
            current_step = $(this).parent();
            next_step = $(this).parent().prev();
            next_step.show();
            current_step.hide();
        });
    });
</script>
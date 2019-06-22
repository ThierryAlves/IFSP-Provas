$(document).ready(function() {
    var questoes = $(".questoes");
    var add = $(".add_questoes");

    $(add).click(function(e) {
        e.preventDefault();
        var length = questoes.find("input:text").length;

        $(questoes).append(
            '<div><input type="text" placeholder="questao" name="questoes[' + (length+1) + ']" /><button class="btn btn-danger btn-sm remover_questao">Remover</button></div>'
        );

    });

    $(questoes).on("click", ".remover_questao", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
    })

});

$(document).ready(function() {
    var alternativas = $(".alternativas");
    var add = $(".add_alternativas");

    var x = 0;
    $(add).click(function(e) {
        e.preventDefault();
        var length = alternativas.find("input:text").length;

        if (x < 5) {
            x++;
            $(alternativas).append(
                '<label class="btn btn-secondary active">\n' +
                '    <input type="radio" name="alternativaCorreta" value="' + (length+1) + '"> Active\n' +
                '  </label><div><input type="text" placeholder="alternativa" name="alternativas[' + (length+1) + ']" /><button class="btn btn-danger btn-sm remover_questao">Remover</button></div>'
            );
        }

    });

    $(alternativas).on("click", ".remover_questao", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
    })

});

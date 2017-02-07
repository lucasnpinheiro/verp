cake.produtos = {};

cake.produtos.calcularPorcentagemVarejo = function () {
    $('#varejo-valor-venda, #varejo-valor-compra').change(function () {
        $('#varejo-valor-lucro').val(cake.util.calculaLucro($('#varejo-valor-venda').val(), $('#varejo-valor-compra').val()));
    });
}
cake.produtos.calcularPorcentagemAtacado = function () {
    $('#atacado-valor-venda, #varejo-valor-compra').change(function () {
        $('#atacado-valor-lucro').val(cake.util.calculaLucro($('#atacado-valor-venda').val(), $('#varejo-valor-compra').val()));
    });
}

$(document).ready(function () {
    cake.produtos.calcularPorcentagemVarejo();
    cake.produtos.calcularPorcentagemAtacado();
});
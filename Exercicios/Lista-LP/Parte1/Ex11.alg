Algoritmo "Semnome"


Var
NumCarrosVendidos, SalarioFixo, ValorPorCarro, ValorTotalVendas, SalarioFinal: Real

Inicio

Escreva("Digite o número de carros vendidos: ")
Leia(NumCarrosVendidos)
Escreva("Digite o valor total das vendas: ")
Leia(ValorTotalVendas)
Escreva("Digite o salário fixo: ")
Leia(SalarioFixo)
Escreva("Digite o valor que ele recebe por carro vendido: ")
Leia(ValorPorCarro)


SalarioFinal <- SalarioFixo + (ValorPorCarro * NumCarrosVendidos) + (0.05 * ValorTotalVendas)


Escreva("O salário final do vendedor é R$ ",SalarioFinal)
FimAlgoritmo


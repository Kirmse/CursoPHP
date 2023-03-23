algoritmo "semnome"

Var
Q: vetor[1..20] de inteiro
maiorValor, posMaiorValor: inteiro
i: inteiro

Inicio
Para i de 1 ate 20 faca
   Escreva("Digite um número positivo para a posição ", i, ": ")
   Leia(Q[i])
   Enquanto Q[i] < 0 faca
      Escreva("Digite um número positivo para a posição ", i, ": ")
      Leia(Q[i])
   FimEnquanto
FimPara

maiorValor := Q[1]
posMaiorValor := 1
Para i de 2 ate 20 faca
   Se Q[i] > maiorValor entao
      maiorValor := Q[i]
      posMaiorValor := i
   FimSe
FimPara

Escreval("O maior valor de Q é: ", maiorValor)
Escreva("Ele ocorre na posição: ", posMaiorValor)

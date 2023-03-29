algoritmo "semnome"

var
A: vetor[1..10] de inteiro
X: inteiro
M: vetor[1..10] de inteiro
i: inteiro

inicio
para i de 1 ate 10 faca
   escreva("Digite um numero para a posicao ", i, ": ")
   leia(A[i])
fimpara

escreva("Digite um numero para multiplicar o vetor A: ")
leia(X)

para i de 1 ate 10 faca
   M[i] := A[i] * X
fimpara

escreval("Vetor M:")
para i de 1 ate 10 faca
   escreva(M[i], " ")
fimpara
fimalgoritmo
